<?php
namespace App\Controller\Admin;

use Cake\View\Helper\UrlHelper;
use Cake\Filesystem\File;

use Ramsey\Uuid\Uuid;
use Cake\Datasource\ConnectionManager;


/**
 * Noticias Controller
 *
 * @property \App\Model\Table\NoticiasTable $Noticias
 *
 * @method \App\Model\Entity\Noticia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NoticiasController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $this->paginate = [
            'contain' => ['Categorias'],
            'limit' => 10,
            'order' => [
                'id' => 'Desc'
            ]
        ];


        $categorias = $this->Noticias->Categorias->find();

        // Obtém o ID da categoria passado no parâmetro "categoria" na URL
        $categoriaId = $this->request->getQuery('categoria');

        $where = [];

        if (isset($_GET['pesquisa']) && !empty($_GET['pesquisa']) ) {
            $searchTerm = $_GET['pesquisa'];
            $query = "'%" . $searchTerm . "%'";
            $where[] = "(Noticias.titulo LIKE " . $query . "OR Noticias.titulo_resumo LIKE" . $query . ')';
        }


        // Verifica se foi enviada uma data inicial
        if (!empty($_GET['data-inicial'])) {
            $dataInicial = $this->request->getQuery('data-inicial');
            $where[] = (['Noticias.data >= ' => $dataInicial]);
        }

        // Verifica se foi enviada uma data final
        if (!empty($_GET['data-final'])) {
            $dataFinal = $this->request->getQuery('data-final');
            $where[] = (['Noticias.data <= ' => $dataFinal]);
        }

        if (isset($_GET['categoria']) && !empty($_GET['categoria'])) {
            $where['Noticias.categoria_id'] = $_GET['categoria'];
        }


        $noticias = $this->paginate($this->Noticias->find()->where($where));

        $this->set(compact('noticias', 'categorias','categoriaId'));
    }

    /**
     * View method
     *
     * @param string|null $id Noticia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $noticia = $this->Noticias->get($id, [
            'contain' => ['Categorias']
        ]);

        $this->set('noticia', $noticia);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $noticia = $this->Noticias->newEntity();
        if ($this->request->is('post')) {
            $noticia = $this->Noticias->patchEntity($noticia, $this->request->getData());
            if ($this->Noticias->save($noticia)) {

                $noticia = $this->renameFileUuid($noticia, 'imagem');
                $noticia = $this->renameFileUuid($noticia, 'banner_imagem');
                $noticia = $this->renameFileUuid($noticia, 'imagem_visualizacao');


                $this->Flash->success('Salvo com sucesso');

                return $this->redirect("/admin/noticias/edit/$noticia->id");
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Noticia'));
        }

        $categorias = $this->Noticias->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('noticia', 'categorias'));

    }


    /**
     * Edit method
     *
     * @param string|null $id Noticia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $noticias = $this->Noticias->find('all', ['limit' => 200]);


        $noticia = $this->Noticias->get($id, [
            'contain' => []
        ]);
//        $imagePath = 'files/Noticias/banner_imagem/' . $noticia->banner_imagem;
//        debug($imagePath); exit();
        $this->loadModel('NoticiaRelacionadas');
        $noticiaRelacionda = $this->NoticiaRelacionadas->find()->where(['noticia_id' => $noticia->id]);

        $noticiaEstaRelacionada = function ($noticia, $noticiaRelacionadaId) {
            return $this->NoticiaRelacionadas->exists(['noticia_id' => $noticia->id, 'noticia_relacionada_id' => $noticiaRelacionadaId]);
        };

        if ($this->request->is(['patch', 'post', 'put'])) {
            $noticia = $this->Noticias->patchEntity($noticia, $this->request->getData());
            if ($this->Noticias->save($noticia)) {

                $noticia = $this->renameFileUuid($noticia, 'imagem');
                $noticia = $this->renameFileUuid($noticia, 'banner_imagem');
                $noticia = $this->renameFileUuid($noticia, 'imagem_visualizacao');

                foreach ($noticiaRelacionda as $relacionada)
                    $this->NoticiaRelacionadas->delete($relacionada);

                foreach ($this->request->getData('noticias_relacionadas_ids') as $relacionadaId){
                    $relacionada = $this->NoticiaRelacionadas->newEntity();
                    $relacionada = $this->NoticiaRelacionadas->patchEntity($relacionada, ['noticia_id' => $noticia->id, 'noticia_relacionada_id' => $relacionadaId]);
                    $this->NoticiaRelacionadas->save($relacionada);
                }

                $this->Flash->success('Salvo com sucesso');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Noticia'));
        }
        $url = 'http://' . $_SERVER['SERVER_NAME'] . "$noticia->banner_imagem";
        $categorias = $this->Noticias->Categorias->find('list', ['limit' => 200]);
        $this->set(compact('noticia', 'categorias','noticiaRelacionda','url', 'noticias', 'noticiaEstaRelacionada'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Noticia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $noticia = $this->Noticias->get($id);
        if ($this->Noticias->delete($noticia)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Noticia'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Noticia'));
        }

        return $this->redirect(['action' => 'index']);
    }

    private  function renameFileUuid($noticia, $coluna) {
        if(!empty($this->request->getData()[$coluna]) && !empty($this->request->getData()[$coluna]['name'])) {
            $targetFullPath = $this->getImageFullPath($noticia[$coluna], $coluna);
            $targetParts = pathinfo($targetFullPath);
            $targetName = Uuid::uuid4() . '.' . $targetParts['extension'];
            $fullPath = $targetParts['dirname'] . '/'. $targetName;
            rename($targetFullPath,   $fullPath);

            $noticia[$coluna] = $targetName;
            $this->Noticias->updateAll([$coluna => $targetName], ['id' => $noticia->id]);
        }
        return $noticia;
    }

    private function getImageFullPath($target, $coluna) {
        $currentDir = getcwd();
        return "$currentDir/files/Noticias/{$coluna}/$target";

    }

    public function deleteImage()
    {
        $id = $this->request->getQuery('id');
        $coluna = $this->request->getQuery('coluna');

        // Verifica se o ID é válido (você pode adicionar lógica adicional aqui, se necessário)
        if (!$this->Noticias->exists(['id' => $id])) {
            $this->Flash->error('ID inválido.');
            return $this->redirect($this->referer());
        }

        // Obtém a notícia pelo ID
        $noticia = $this->Noticias->get($id);

        // Verifica se a imagem existe
        if (!empty($noticia[$coluna])) {

            // Remove a imagem do diretório
            $imagePath = WWW_ROOT . "files/Noticias/{$coluna}/" . $noticia[$coluna];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $conn = ConnectionManager::get('default');
            $conn->execute("UPDATE noticias SET {$coluna} = NULL WHERE id = {$id}");

            $this->Flash->success('Imagem excluída com sucesso.');
        } else {
            $this->Flash->error('A imagem não existe.');
        }

        return $this->redirect($this->referer());
    }



//    public function deleteImage($id)
//    {
//        $this->loadModel('Noticias');
//        // Verifica se o ID é válido (você pode adicionar lógica adicional aqui, se necessário)
//        if (!$this->Noticias->exists(['id' => $id])) {
//            $this->Flash->error('ID inválido.');
//            return $this->redirect($this->referer());
//        }
//
//        // Obtém a notícia pelo ID
//        $noticia = $this->Noticias->get($id);
//
//
//        // Verifica se a imagem existe
//        if (!empty($noticia->banner_imagem)) {
//            // Remove a imagem do diretório
//            $imagePath = WWW_ROOT . 'files/Noticias/banner_imagem/' . $noticia->banner_imagem;
//            if (file_exists($imagePath)) {
//                unlink($imagePath);
//            }
//
//            // Remove a referência à imagem no registro do banco de dados
//            $noticia->unsetProperty('banner_imagem');
//            if ($this->Noticias->save($noticia)) {
//                $this->Flash->success('Imagem excluída com sucesso.');
//            } else {
//                $this->Flash->error('Erro ao excluir a imagem.');
//            }
//        } else {
//            $this->Flash->error('A imagem não existe.');
//        }
//
//        return $this->redirect($this->referer());
//    }

}
