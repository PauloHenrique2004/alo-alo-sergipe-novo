<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Fotos Controller
 *
 * @property \App\Model\Table\FotosTable $Fotos
 *
 * @method \App\Model\Entity\Foto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FotosController extends AppController
{



    public function fotos($titulo, $albun_id = null){

        $this->loadModel('Albuns');
        $album =  $this->Albuns->get($albun_id);

        $this->paginate = [
            'limit'=> 4,
        ];

        $this->viewBuilder()->setLayout('site');
        $fotos =  $this->paginate($this->Fotos->find()->where(['albun_id' => $albun_id]));
        $title = $album->titulo;
        $this->set(compact('fotos','album', 'title'));
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['fotos','album']);
    }
}
