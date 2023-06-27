<?php
namespace App\Controller\Admin;

use Cake\View\Helper\UrlHelper;

use Ramsey\Uuid\Uuid;

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

//        if (isset($_GET['pesquisa'])) {
//            $query = '"%' . $_GET['pesquisa'] . '%"';
//            $where[] = 'Noticias.titulo LIKE' . $query ;
//        }

        if (isset($_GET['pesquisa']) && !empty($_GET['pesquisa']) ) {
            $searchTerm = $_GET['pesquisa'];
            $query = "'%" . $searchTerm . "%'";
            $where[] = "(Noticias.titulo LIKE " . $query . "OR Noticias.titulo_resumo LIKE" . $query . ')';
        }

        if (isset($_GET['categoria']) && !empty($_GET['categoria'])) {
            $where['Noticias.categoria_id'] = $_GET['categoria'];
        }

//        var_dump($where); exit();

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

        $this->loadModel('NoticiaRelacionadas');
        $noticiaRelacionda = $this->NoticiaRelacionadas->find()->where(['noticia_id' => $noticia->id]);


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
        $this->set(compact('noticia', 'categorias','noticiaRelacionda','url', 'noticias'));
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

}
