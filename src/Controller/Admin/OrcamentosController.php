<?php
namespace App\Controller\Admin;



/**
 * Orcamentos Controller
 *
 * @property \App\Model\Table\OrcamentosTable $Orcamentos
 *
 * @method \App\Model\Entity\Orcamento[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrcamentosController extends AdminController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = ['limit' => 20, 'order' => ['id' => 'Desc']];

        $orcamentos = $this->paginate($this->Orcamentos);

        $this->set(compact('orcamentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Orcamento id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orcamento = $this->Orcamentos->get($id, [
            'contain' => []
        ]);

        $this->set('orcamento', $orcamento);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orcamento = $this->Orcamentos->newEntity();
        if ($this->request->is('post')) {
            $orcamento = $this->Orcamentos->patchEntity($orcamento, $this->request->getData());
            if ($this->Orcamentos->save($orcamento)) {
                $this->Flash->success(__('The {0} has been saved.', 'Orcamento'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Orcamento'));
        }
        $this->set(compact('orcamento'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Orcamento id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orcamento = $this->Orcamentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orcamento = $this->Orcamentos->patchEntity($orcamento, $this->request->getData());
            if ($this->Orcamentos->save($orcamento)) {
                $this->Flash->success(__('The {0} has been saved.', 'Orcamento'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Orcamento'));
        }
        $this->set(compact('orcamento'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Orcamento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orcamento = $this->Orcamentos->get($id);
        if ($this->Orcamentos->delete($orcamento)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Orcamento'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Orcamento'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
