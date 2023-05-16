<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Parceiros Controller
 *
 * @property \App\Model\Table\ParceirosTable $Parceiros
 *
 * @method \App\Model\Entity\Parceiro[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ParceirosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $parceiros = $this->paginate($this->Parceiros);

        $this->set(compact('parceiros'));
    }

    /**
     * View method
     *
     * @param string|null $id Parceiro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $parceiro = $this->Parceiros->get($id, [
            'contain' => []
        ]);

        $this->set('parceiro', $parceiro);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $parceiro = $this->Parceiros->newEntity();
        if ($this->request->is('post')) {
            $parceiro = $this->Parceiros->patchEntity($parceiro, $this->request->getData());
            if ($this->Parceiros->save($parceiro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Parceiro'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Parceiro'));
        }
        $this->set(compact('parceiro'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Parceiro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $parceiro = $this->Parceiros->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $parceiro = $this->Parceiros->patchEntity($parceiro, $this->request->getData());
            if ($this->Parceiros->save($parceiro)) {
                $this->Flash->success(__('The {0} has been saved.', 'Parceiro'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Parceiro'));
        }
        $this->set(compact('parceiro'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Parceiro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $parceiro = $this->Parceiros->get($id);
        if ($this->Parceiros->delete($parceiro)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Parceiro'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Parceiro'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
