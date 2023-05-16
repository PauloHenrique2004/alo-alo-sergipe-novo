<?php
namespace App\Controller\Admin;


/**
 * Academias Controller
 *
 * @property \App\Model\Table\AcademiasTable $Academias
 *
 * @method \App\Model\Entity\Academia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AcademiasController extends AdminController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $this->paginate = [
            'limit' => 10,
            'order' => [
                'id' => 'Desc'
            ]
        ];
        $academias = $this->paginate($this->Academias);

        $this->set(compact('academias'));
    }

    /**
     * View method
     *
     * @param string|null $id Academia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $academia = $this->Academias->get($id, [
            'contain' => []
        ]);

        $this->set('academia', $academia);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $academia = $this->Academias->newEntity();
        if ($this->request->is('post')) {
            $academia = $this->Academias->patchEntity($academia, $this->request->getData());
            if ($this->Academias->save($academia)) {
                $this->Flash->success(__('The {0} has been saved.', 'Academia'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Academia'));
        }
        $this->set(compact('academia'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Academia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $academia = $this->Academias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $academia = $this->Academias->patchEntity($academia, $this->request->getData());
            if ($this->Academias->save($academia)) {
                $this->Flash->success(__('The {0} has been saved.', 'Academia'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Academia'));
        }
        $this->set(compact('academia'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Academia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $academia = $this->Academias->get($id);
        if ($this->Academias->delete($academia)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Academia'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Academia'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
