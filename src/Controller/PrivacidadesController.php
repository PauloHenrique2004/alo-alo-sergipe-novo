<?php
namespace App\Controller;


use Cake\Event\Event;

/**
 * Privacidades Controller
 *
 * @property \App\Model\Table\PrivacidadesTable $Privacidades
 *
 * @method \App\Model\Entity\Privacidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PrivacidadesController extends AppController
{
    public function privacidade($id = null){
        $this->viewBuilder()->setLayout('site');
        $title = "Política de Privacidade";
        $privacidade = $this->Privacidades->get($id);
        $this->set(compact('privacidade', 'title'));
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['privacidade']);
    }

}
