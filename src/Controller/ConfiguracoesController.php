<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Configuracoes Controller
 *
 * @property \App\Model\Table\ConfiguracoesTable $Configuracoes
 *
 * @method \App\Model\Entity\Configuraco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConfiguracoesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $configuracoes = $this->paginate($this->Configuracoes);

        $this->set(compact('configuracoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Configuraco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $configuraco = $this->Configuracoes->get($id, [
            'contain' => []
        ]);

        $this->set('configuraco', $configuraco);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $configuraco = $this->Configuracoes->newEntity();
        if ($this->request->is('post')) {
            $configuraco = $this->Configuracoes->patchEntity($configuraco, $this->request->getData());
            if ($this->Configuracoes->save($configuraco)) {
                $this->Flash->success(__('The {0} has been saved.', 'Configuraco'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Configuraco'));
        }
        $this->set(compact('configuraco'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Configuraco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $configuraco = $this->Configuracoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $configuraco = $this->Configuracoes->patchEntity($configuraco, $this->request->getData());
            if ($this->Configuracoes->save($configuraco)) {
                $this->Flash->success('Registro salvo com sucesso!');

                return $this->redirect('/configuracoes/edit/1');
            }
            $this->Flash->error(__('Erro ao gravar regsitro, por favor tente novamente'));
        }
        $this->set(compact('configuraco'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Configuraco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $configuraco = $this->Configuracoes->get($id);
        if ($this->Configuracoes->delete($configuraco)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Configuraco'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Configuraco'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
