<?php
namespace App\Controller;

use Cake\Event\Event;

class VideosController extends AppController
{

    public function videos(){
        $this->paginate = [
            'limit' => 9
        ];
        $this->viewBuilder()->setLayout('site');
        $videos = $this->paginate($this->Videos->find()->order(['id' => 'Desc']));
        $title = 'alÔ alÔ TV';
        $this->set(compact('videos','title'));

    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('videos');
    }

}
