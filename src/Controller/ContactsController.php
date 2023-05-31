<?php
namespace App\Controller;

use Cake\Event\Event;
use Cake\Mailer\Email;


class ContactsController extends AppController
{

    public function initialize() {
        parent::initialize();
            $this->loadComponent('Recaptcha.Recaptcha');
    }


    public function anuncieConosoco(){

            if ($this->request->is('post')) {
                if ($this->Recaptcha->verify()) {
                    $formData = $this->request->getData();
                        $email = new Email('default');
                        $email->setFrom(['naoresponda@site.alo-alo-sergipe.com.br' => 'Anuncie conosco'])
                            ->setTo('teste@hotmail.com')
                            ->setSubject('Alo Alo Sergipe - anuncie conosco')
                            ->send('Nome: ' . $formData['nome']
                                . "\n" . ' Email:' . $formData['email']
                                . "\n" . ' Telefone: ' . $formData['tel']
                                . "\n" . ' Mensagem: ' . $formData['mensagem']);

                        $this->redirect('/');
                        $this->Flash->success('Mensagem enviada com sucesso, em breve entraremos em contato com você.');
                    }elseif (!$this->Recaptcha->verify()){
                    $this->redirect('/#anuncie');
                    $this->Flash->error('Por favor preencha o reCAPTCHA.', ['key' => 'anuncie']);
                }
                } else {
                    $this->redirect('/');
                    $this->Flash->error('Erro ao enviar, por favor tente novamente');
                }



    }


    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('anuncieConosoco');
    }

}
