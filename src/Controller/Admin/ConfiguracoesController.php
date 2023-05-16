<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Configuracoes Controller
 *
 * @property \App\Model\Table\ConfiguracoesTable $Configuracoes
 *
 * @method \App\Model\Entity\Configuraco[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConfiguracoesController extends AdminController
{

    public function edit($id = null)
    {
        $configuraco = $this->Configuracoes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $configuraco = $this->Configuracoes->patchEntity($configuraco, $this->request->getData());
            if ($this->Configuracoes->save($configuraco)) {
                $this->Flash->success('Registro salvo com sucesso!');

                return $this->redirect('/admin/configuracoes/edit/1');
            }
            $this->Flash->error(__('Erro ao gravar regsitro, por favor tente novamente'));
        }
        $this->set(compact('configuraco'));
    }

}
