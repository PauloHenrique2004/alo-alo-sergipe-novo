<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class EventosController extends AppController
{

    public function agenda(){

        $this->paginate = [
            'limit' => 9,
            'order' => [
                'id' => 'Desc'
            ]
        ];

        $this->viewBuilder()->setLayout('site');
        $agenda = $this->paginate($this->Eventos->find());

        $title = 'Agenda';

        $this->set(compact('agenda','title'));
    }

    public function evento($titulo, $id = null){
        $this->viewBuilder()->setLayout('site');
        $evento = $this->Eventos->get($id);

        $maisEventos = $this->Eventos->find()->order('rand()')->limit(3);

        $title = $evento->titulo;

        $this->set(compact('evento','maisEventos','title'));
    }


    public function beforeFilter(Event $event)
    {
         $this->Auth->allow(['agenda','evento']);
    }

}
