<?php
namespace App\Controller\Admin;


/**
 * Sobre Controller
 *
 * @property \App\Model\Table\SobreTable $Sobre
 *
 * @method \App\Model\Entity\Sobre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SobreController extends AdminController
{
    public function edit($id = null)
    {
        $sobre = $this->Sobre->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sobre = $this->Sobre->patchEntity($sobre, $this->request->getData());
            if ($this->Sobre->save($sobre)) {
                $this->Flash->success('Salvo com sucesso');

                return $this->redirect('/admin/sobre/edit/1');
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Sobre'));
        }
        $this->set(compact('sobre'));
    }

}
