<?php
namespace App\Controller\Admin;

/**
 * Privacidades Controller
 *
 * @property \App\Model\Table\PrivacidadesTable $Privacidades
 *
 * @method \App\Model\Entity\Privacidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PrivacidadesController extends AdminController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $privacidades = $this->paginate($this->Privacidades);

        $this->set(compact('privacidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Privacidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $privacidade = $this->Privacidades->get($id, [
            'contain' => []
        ]);

        $this->set('privacidade', $privacidade);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $privacidade = $this->Privacidades->newEntity();
        if ($this->request->is('post')) {
            $privacidade = $this->Privacidades->patchEntity($privacidade, $this->request->getData());
            if ($this->Privacidades->save($privacidade)) {
                $this->Flash->success(__('The {0} has been saved.', 'Privacidade'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Privacidade'));
        }
        $this->set(compact('privacidade'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Privacidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $privacidade = $this->Privacidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $privacidade = $this->Privacidades->patchEntity($privacidade, $this->request->getData());
            if ($this->Privacidades->save($privacidade)) {
                $this->Flash->success(__('The {0} has been saved.', 'Privacidade'));

                return $this->redirect('/admin/privacidades/edit/1');
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Privacidade'));
        }
        $this->set(compact('privacidade'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Privacidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $privacidade = $this->Privacidades->get($id);
        if ($this->Privacidades->delete($privacidade)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Privacidade'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Privacidade'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
