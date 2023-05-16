<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Sobre Controller
 *
 * @property \App\Model\Table\SobreTable $Sobre
 *
 * @method \App\Model\Entity\Sobre[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SobreController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function sobre($id = null)
    {
        $this->viewBuilder()->setLayout('site');

        $sobre = $this->Sobre->get($id);

        $title = 'Sobre nós';

        $this->set(compact('sobre','title'));
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('sobre');
    }
}
