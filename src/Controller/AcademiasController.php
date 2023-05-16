<?php
namespace App\Controller;

use Cake\Event\Event;

class AcademiasController extends AppController
{
    public function academias(){
        $this->paginate = ['limit' => 12, 'order' => ['id' => 'DESC']];
        $this->viewBuilder()->setLayout('site');
        $academias = $this->paginate($this->Academias->find());
        $title = 'Academias';
        $this->set(compact('academias','title'));

    }

    public function academia($id = null){

        $this->viewBuilder()->setLayout('site');

        $academia = $this->Academias->get($id);


        $recentes = $this->Academias->find('all', ['limit' => 3])->order(['id' => 'DESC'])->limit(3);

        $title = 'Academias - '.$academia->titulo ;

        $this->set(compact('academia','recentes','title'));

    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['academias', 'academia']);
    }

}
