<?php
namespace App\Controller\Admin;

/**
 * TipoPlanos Controller
 *
 * @property \App\Model\Table\TipoPlanosTable $TipoPlanos
 *
 * @method \App\Model\Entity\TipoPlano[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoPlanosController extends AdminController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 2,
            'order' => [
                'id' => 'Desc'
            ]
        ];

        $tipoPlanos = $this->paginate($this->TipoPlanos);

        $this->set(compact('tipoPlanos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Plano id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoPlano = $this->TipoPlanos->get($id, [
            'contain' => []
        ]);

        $this->set('tipoPlano', $tipoPlano);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoPlano = $this->TipoPlanos->newEntity();
        if ($this->request->is('post')) {
            $tipoPlano = $this->TipoPlanos->patchEntity($tipoPlano, $this->request->getData());
            if ($this->TipoPlanos->save($tipoPlano)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tipo Plano'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tipo Plano'));
        }
        $this->set(compact('tipoPlano'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Tipo Plano id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoPlano = $this->TipoPlanos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoPlano = $this->TipoPlanos->patchEntity($tipoPlano, $this->request->getData());
            if ($this->TipoPlanos->save($tipoPlano)) {
                $this->Flash->success(__('The {0} has been saved.', 'Tipo Plano'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Tipo Plano'));
        }
        $this->set(compact('tipoPlano'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Tipo Plano id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoPlano = $this->TipoPlanos->get($id);
        if ($this->TipoPlanos->delete($tipoPlano)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Tipo Plano'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Tipo Plano'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
