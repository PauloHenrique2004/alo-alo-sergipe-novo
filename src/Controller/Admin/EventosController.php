<?php
namespace App\Controller\Admin;


use Ramsey\Uuid\Uuid;

/**
 * Eventos Controller
 *
 * @property \App\Model\Table\EventosTable $Eventos
 *
 * @method \App\Model\Entity\Evento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventosController extends AdminController
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
                'order' => ['id' => 'Desc']
        ];

        $eventos = $this->paginate($this->Eventos);

        $this->set(compact('eventos'));
    }

    /**
     * View method
     *
     * @param string|null $id Evento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evento = $this->Eventos->get($id, [
            'contain' => []
        ]);

        $this->set('evento', $evento);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $evento = $this->Eventos->newEntity();
        if ($this->request->is('post')) {
            $evento = $this->Eventos->patchEntity($evento, $this->request->getData());
            if ($this->Eventos->save($evento)) {

                $evento = $this->renameFileUuid($evento, 'imagem');
                $evento = $this->renameFileUuid($evento, 'capa');

                $this->Flash->success('Salvo com sucesso');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Evento'));
        }
        $this->set(compact('evento'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Evento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evento = $this->Eventos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evento = $this->Eventos->patchEntity($evento, $this->request->getData());
            if ($this->Eventos->save($evento)) {

                $evento = $this->renameFileUuid($evento, 'imagem');
                $evento = $this->renameFileUuid($evento, 'capa');


                $this->Flash->success('Salvo com sucesso');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Evento'));
        }
        $this->set(compact('evento'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Evento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evento = $this->Eventos->get($id);
        if ($this->Eventos->delete($evento)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Evento'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Evento'));
        }

        return $this->redirect(['action' => 'index']);
    }


    private  function renameFileUuid($evento, $coluna) {
        if(!empty($this->request->getData()[$coluna]) && !empty($this->request->getData()[$coluna]['name'])) {
            $targetFullPath = $this->getImageFullPath($evento[$coluna], $coluna);
            $targetParts = pathinfo($targetFullPath);
            $targetName = Uuid::uuid4() . '.' . $targetParts['extension'];
            $fullPath = $targetParts['dirname'] . '/'. $targetName;
            rename($targetFullPath,   $fullPath);

            $evento[$coluna] = $targetName;
            $this->Eventos->updateAll([$coluna => $targetName], ['id' => $evento->id]);
        }
        return $evento;
    }

    private function getImageFullPath($target, $coluna) {
        $currentDir = getcwd();
        return "$currentDir/files/Eventos/{$coluna}/$target";

    }
}
