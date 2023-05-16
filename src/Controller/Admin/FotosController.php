<?php
namespace App\Controller\Admin;


use Ramsey\Uuid\Uuid;

/**
 * Fotos Controller
 *
 * @property \App\Model\Table\FotosTable $Fotos
 *
 * @method \App\Model\Entity\Foto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FotosController extends AdminController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Albuns'],
            'limit' => 10,
            'order' => [
                'id' => 'Desc'
            ]
        ];
        $fotos = $this->paginate($this->Fotos);

        $this->set(compact('fotos'));
    }

    /**
     * View method
     *
     * @param string|null $id Foto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $foto = $this->Fotos->get($id, [
            'contain' => ['Albuns']
        ]);

        $this->set('foto', $foto);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $foto = $this->Fotos->newEntity();
        if ($this->request->is('post')) {
            $foto = $this->Fotos->patchEntity($foto, $this->request->getData());
            if ($this->Fotos->save($foto)) {

                $foto = $this->renameFileUuid($foto, 'imagem');


                $this->Flash->success('Salvo com sucesso');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Foto'));
        }
        $albuns = $this->Fotos->Albuns->find('list', ['limit' => 200]);
        $this->set(compact('foto', 'albuns'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Foto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $foto = $this->Fotos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $foto = $this->Fotos->patchEntity($foto, $this->request->getData());
            if ($this->Fotos->save($foto)) {

                $foto = $this->renameFileUuid($foto, 'imagem');


                $this->Flash->success('Salvo com sucesso');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Foto'));
        }
        $albuns = $this->Fotos->Albuns->find('list', ['limit' => 200]);
        $this->set(compact('foto', 'albuns'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Foto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $foto = $this->Fotos->get($id);
        if ($this->Fotos->delete($foto)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Foto'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Foto'));
        }

        return $this->redirect(['action' => 'index']);
    }

    private  function renameFileUuid($foto, $coluna) {
        if(!empty($this->request->getData()[$coluna]) && !empty($this->request->getData()[$coluna]['name'])) {
            $targetFullPath = $this->getImageFullPath($foto[$coluna], $coluna);
            $targetParts = pathinfo($targetFullPath);
            $targetName = Uuid::uuid4() . '.' . $targetParts['extension'];
            $fullPath = $targetParts['dirname'] . '/'. $targetName;
            rename($targetFullPath,   $fullPath);

            $album[$coluna] = $targetName;
            $this->Fotos->updateAll([$coluna => $targetName], ['id' => $foto->id]);
        }
        return $album;
    }

    private function getImageFullPath($target, $coluna) {
        $currentDir = getcwd();
        return "$currentDir/files/Fotos/{$coluna}/$target";

    }
}
