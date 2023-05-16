<?php
namespace App\Controller;


use Cake\Event\Event;

class CampanhasController extends AppController
{
    public function campanhas($id = null){
        $this->viewBuilder()->setLayout('site');
        $camp = $this->Campanhas->get($id);
        $title = 'Campanhas';
        $this->set(compact('camp','title'));
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('campanhas');
    }
}
