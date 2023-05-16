<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoriaProdutos Controller
 *
 * @property \App\Model\Table\CategoriaProdutosTable $CategoriaProdutos
 *
 * @method \App\Model\Entity\CategoriaProduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriaProdutosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $categoriaProdutos = $this->paginate($this->CategoriaProdutos);

        $this->set(compact('categoriaProdutos'));
    }

    /**
     * View method
     *
     * @param string|null $id Categoria Produto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriaProduto = $this->CategoriaProdutos->get($id, [
            'contain' => []
        ]);

        $this->set('categoriaProduto', $categoriaProduto);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriaProduto = $this->CategoriaProdutos->newEntity();
        if ($this->request->is('post')) {
            $categoriaProduto = $this->CategoriaProdutos->patchEntity($categoriaProduto, $this->request->getData());
            if ($this->CategoriaProdutos->save($categoriaProduto)) {
                $this->Flash->success(__('The {0} has been saved.', 'Categoria Produto'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Categoria Produto'));
        }
        $this->set(compact('categoriaProduto'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Categoria Produto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriaProduto = $this->CategoriaProdutos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriaProduto = $this->CategoriaProdutos->patchEntity($categoriaProduto, $this->request->getData());
            if ($this->CategoriaProdutos->save($categoriaProduto)) {
                $this->Flash->success(__('The {0} has been saved.', 'Categoria Produto'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Categoria Produto'));
        }
        $this->set(compact('categoriaProduto'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Categoria Produto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriaProduto = $this->CategoriaProdutos->get($id);
        if ($this->CategoriaProdutos->delete($categoriaProduto)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Categoria Produto'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Categoria Produto'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
