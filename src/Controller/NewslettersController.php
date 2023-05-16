<?php
namespace App\Controller;


use Cake\Event\Event;
use Cake\Mailer\Email;

/**
 * Newsletters Controller
 *
 * @property \App\Model\Table\NewslettersTable $Newsletters
 *
 * @method \App\Model\Entity\Newsletter[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewslettersController extends AppController
{
    public function newsLetter()
    {
        $newsletter = $this->Newsletters->newEntity();
        if ($this->request->is('post')) {
            $newsletter = $this->Newsletters->patchEntity($newsletter, $this->request->getData());
            if ($this->Recaptcha->verify()) {
                if ($this->Newsletters->save($newsletter)) {
                    $this->Flash->success('Seu e-mail foi cadastrado com sucesso!',[
                        'key' => 'newsletter']);

                    return $this->redirect('/#newsletter');
                }
            }
            $this->Flash->error('Não foi possível cadastrar, por favor tente novamente',['key' => 'newsletter']);

            $this->redirect('/#newsletter');
        }
        $this->set(compact('newsletter'));
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('newsLetter');
    }
}
