<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class VantagensController extends AppController
{

    public function vantagens(){
        $this->viewBuilder()->setLayout('site');
        $vantagens =  $this->Vantagens->find()->order(['id' => 'Desc']);
        $title = 'Vantagens';
        $this->set(compact('vantagens','title'));
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('vantagens');
    }

}
