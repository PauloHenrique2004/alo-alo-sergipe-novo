<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;


class CotacaoController extends AppController
{

    public function cotacao()
    {
        if ($this->request->is('post')) {
            if ($this->Recaptcha->verify()) {
                $formData = $this->request->getData();

                $email = new Email('default');

                $email->setFrom(['naoresponda@site.dose.com.br' => 'Contato cliente'])
                    ->setTo('info@dosea.com.br')
                    ->setSubject('Desejo fazer uma cotação')
                    ->send('Nome: ' . $formData['nome']
                        . "\n" . ' Email:' . $formData['email']
                        . "\n" . ' Telefone: ' . $formData['tel']
                        . "\n" . ' Melhor horário para contato: ' . $formData['horario']
                        . "\n" . ' Duvida: ' . $formData['texto']
                        . "\n" . ' Tipo de pessoa: ' . $formData['tipo']
                        . "\n" . ' Produto: ' . $formData['produto']
                    );

                $this->Flash->success('Mensagem enviada com sucesso, em breve entraremos em contato com você.');
            }

            $this->redirect('/');
        }
    }


    public function beforeFilter(Event $event)
    {
        $this->Auth->allow('cotacao');
    }

}
