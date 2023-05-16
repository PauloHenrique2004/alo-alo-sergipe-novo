<?php
namespace App\Controller\Admin;

/**
 * ProdutoTopos Controller
 *
 * @property \App\Model\Table\ProdutoToposTable $ProdutoTopos
 *
 * @method \App\Model\Entity\ProdutoTopo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProdutoToposController extends AdminController
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
            'order' => ['id' => 'DESC']
        ];

        $produtoTopos = $this->paginate($this->ProdutoTopos);

        $this->set(compact('produtoTopos'));
    }

    /**
     * View method
     *
     * @param string|null $id Produto Topo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $produtoTopo = $this->ProdutoTopos->get($id, [
            'contain' => []
        ]);

        $this->set('produtoTopo', $produtoTopo);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $produtoTopo = $this->ProdutoTopos->newEntity();
        if ($this->request->is('post')) {
            $produtoTopo = $this->ProdutoTopos->patchEntity($produtoTopo, $this->request->getData());
            if ($this->ProdutoTopos->save($produtoTopo)) {
                $this->Flash->success(__('The {0} has been saved.', 'Produto Topo'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Produto Topo'));
        }
        $this->set(compact('produtoTopo'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Produto Topo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $produtoTopo = $this->ProdutoTopos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produtoTopo = $this->ProdutoTopos->patchEntity($produtoTopo, $this->request->getData());
            if ($this->ProdutoTopos->save($produtoTopo)) {
                $this->Flash->success(__('The {0} has been saved.', 'Produto Topo'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Produto Topo'));
        }
        $this->set(compact('produtoTopo'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Produto Topo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produtoTopo = $this->ProdutoTopos->get($id);
        if ($this->ProdutoTopos->delete($produtoTopo)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Produto Topo'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Produto Topo'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
