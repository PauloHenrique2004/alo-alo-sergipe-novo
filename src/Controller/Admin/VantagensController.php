<?php
namespace App\Controller\Admin;


/**
 * Vantagens Controller
 *
 * @property \App\Model\Table\VantagensTable $Vantagens
 *
 * @method \App\Model\Entity\Vantagen[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VantagensController extends AdminController
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
            'order'=> ['id' => 'Desc']
        ];

        $vantagens = $this->paginate($this->Vantagens);

        $this->set(compact('vantagens'));
    }

    /**
     * View method
     *
     * @param string|null $id Vantagen id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vantagen = $this->Vantagens->get($id, [
            'contain' => []
        ]);

        $this->set('vantagen', $vantagen);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vantagen = $this->Vantagens->newEntity();
        if ($this->request->is('post')) {
            $vantagen = $this->Vantagens->patchEntity($vantagen, $this->request->getData());
            if ($this->Vantagens->save($vantagen)) {
                $this->Flash->success(__('The {0} has been saved.', 'Vantagen'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Vantagen'));
        }
        $this->set(compact('vantagen'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Vantagen id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vantagen = $this->Vantagens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vantagen = $this->Vantagens->patchEntity($vantagen, $this->request->getData());
            if ($this->Vantagens->save($vantagen)) {
                $this->Flash->success(__('The {0} has been saved.', 'Vantagen'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Vantagen'));
        }
        $this->set(compact('vantagen'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Vantagen id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vantagen = $this->Vantagens->get($id);
        if ($this->Vantagens->delete($vantagen)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Vantagen'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Vantagen'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
