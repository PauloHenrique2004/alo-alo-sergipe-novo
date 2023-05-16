<?php
namespace App\Controller\Admin;


use Ramsey\Uuid\Uuid;

/**
 * Albuns Controller
 *
 * @property \App\Model\Table\AlbunsTable $Albuns
 *
 * @method \App\Model\Entity\Albun[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlbunsController extends AdminController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
                'limit' => 20,
                'order' => [
                    'id' => 'Desc'
                ]
        ];

        $albuns = $this->paginate($this->Albuns);

        $this->set(compact('albuns'));
    }

    /**
     * View method
     *
     * @param string|null $id Albun id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $albun = $this->Albuns->get($id, [
            'contain' => ['Fotos']
        ]);

        $this->set('albun', $albun);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $albun = $this->Albuns->newEntity();
        if ($this->request->is('post')) {
            $albun = $this->Albuns->patchEntity($albun, $this->request->getData());
            if ($this->Albuns->save($albun)) {

                $albun = $this->renameFileUuid($albun, 'imagem');

                $this->Flash->success('Salvo com sucesso');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Albun'));
        }
        $this->set(compact('albun'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Albun id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $albun = $this->Albuns->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $albun = $this->Albuns->patchEntity($albun, $this->request->getData());
            if ($this->Albuns->save($albun)) {

                $albun = $this->renameFileUuid($albun, 'imagem');

                $this->Flash->success('Salvo com sucesso');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Albun'));
        }
        $this->set(compact('albun'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Albun id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $albun = $this->Albuns->get($id);
        if ($this->Albuns->delete($albun)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Albun'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Albun'));
        }

        return $this->redirect(['action' => 'index']);
    }


    private  function renameFileUuid($album, $coluna) {
        if(!empty($this->request->getData()[$coluna]) && !empty($this->request->getData()[$coluna]['name'])) {
            $targetFullPath = $this->getImageFullPath($album[$coluna], $coluna);
            $targetParts = pathinfo($targetFullPath);
            $targetName = Uuid::uuid4() . '.' . $targetParts['extension'];
            $fullPath = $targetParts['dirname'] . '/'. $targetName;
            rename($targetFullPath,   $fullPath);

            $album[$coluna] = $targetName;
            $this->Albuns->updateAll([$coluna => $targetName], ['id' => $album->id]);
        }
        return $album;
    }

    private function getImageFullPath($target, $coluna) {
        $currentDir = getcwd();
        return "$currentDir/files/Albuns/{$coluna}/$target";

    }
}
