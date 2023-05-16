<?php
namespace App\Controller;


use Cake\Event\Event;

/**
 * Albuns Controller
 *
 * @property \App\Model\Table\AlbunsTable $Albuns
 *
 * @method \App\Model\Entity\Albun[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlbunsController extends AppController
{
    public function albuns(){
        $this->viewBuilder()->setLayout('site');

        $this->paginate = [
          'limit' => 6,
            'order' => ['id' => 'Desc']
        ];

        $albuns =  $this->paginate($this->Albuns->find());

        $title = 'Galeria';

        $this->set(compact('albuns','title'));
    }


    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('albuns');
    }

}
