<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\MailerAwareTrait;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    use MailerAwareTrait;
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'order' => ['id' => 'desc']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));

        $title = "usuários";
        $this->set(compact('title'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success('Salvo com sucesso');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Erro ao salvar, por favor tente novamente');
        }
        $this->set(compact('user'));

    }




    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success('Salvo com sucesso');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Erro ao salvar, por favor tente novamente');
        }
        $this->set(compact('user'));
    }


    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success('Deletado com sucesso');
        } else {
            $this->Flash->error('Erro ao delelar, por favor tente novamente');
        }

        return $this->redirect(['action' => 'index']);
    }

    public function rememberPassword()
    {
        error_reporting(E_ERROR | E_PARSE);
        $this->viewBuilder()->setLayout('site');
        $user = $this->Users->newEntity();

        if (!empty($this->request->getData())) {
            if ($this->request->is('post')) {
                $user = $this->Users->find()->where(['email' => $this->request->getData('email')])->toArray();

                if ($user) {
                    $this->getMailer('User')->send('recovery', [$user]);
                    $msg = 'Email enviado para sua caixa postal';
                    $this->Flash->success($msg);
                    return $this->redirect(['action' => 'rememberPassword']);
                } else {
                    $msg = 'Email não encontrado';
                    $this->Flash->error($msg);
                    return $this->redirect(['action' => 'rememberPassword']);
                }
            }
        }
        $title = 'Recuperar senha';
        $this->set(compact('user', 'title'));
    }



    public function changePassword()
    {
        $this->viewBuilder()->setLayout('site');
        $q_hash = $this->request->getQuery('h');
        $q_email = $this->request->getQuery('email');

        $user = $this->Users->newEntity();

        if ($this->request->is(['post', 'put'])) {
            $user = $this->Users->get($this->request->getData('id'));
            $user = $this->Users->patchEntity($user, $this->request->getData());

            if ($this->Users->save($user)) {
                $this->Auth->setUser($user);
                $this->Flash->success('Senha alterada com sucesso.');
                $this->redirect('/admin');
            } else {
                $this->Flash->error('Senha não pode ser salva por favor tente mais tarde');
            }
        } else {
            if ($user = $this->Users->findByEmail($q_email)->toArray()) {
                $hash = substr($user[0]['password'], 0, 25);
                if ($hash == $q_hash) {
                    $msg = 'Alterar senha do email: ' . $q_email;
                    $this->Flash->success($msg);
                } else {
                    $msg = 'Você não tem permissão para alterar essa senha!';
                    $this->Flash->error($msg);
                    $this->redirect(array('action' => 'rememberPassword'));
                }
            }
        }
        $this->set('id', $user[0]['id']);
        $this->set(compact(['user']));
    }





    public function login(){

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());

            }else
                $this->Flash->error(__('Usuário ou senha inválidos, tente novamente'));
        }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['rememberPassword', 'changePassword']);
    }


}
