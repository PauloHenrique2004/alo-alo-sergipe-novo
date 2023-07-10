<?php
namespace App\Controller\Admin;


use Cake\Mailer\Email;

/**
 * Newsletters Controller
 *
 * @property \App\Model\Table\NewslettersTable $Newsletters
 *
 * @method \App\Model\Entity\Newsletter[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NewslettersController extends AdminController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 20,
            'order' => [
                'id' => 'Desc'
            ]
        ];

        $newsletters = $this->paginate($this->Newsletters);

        $this->set(compact('newsletters'));
    }

    /**
     * View method
     *
     * @param string|null $id Newsletter id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $newsletter = $this->Newsletters->get($id, [
            'contain' => []
        ]);

        $this->set('newsletter', $newsletter);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $newsletter = $this->Newsletters->newEntity();
        if ($this->request->is('post')) {
            $newsletter = $this->Newsletters->patchEntity($newsletter, $this->request->getData());
            if ($this->Newsletters->save($newsletter)) {
                $this->Flash->success(__('The {0} has been saved.', 'Newsletter'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Newsletter'));
        }
        $this->set(compact('newsletter'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Newsletter id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $newsletter = $this->Newsletters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $newsletter = $this->Newsletters->patchEntity($newsletter, $this->request->getData());
            if ($this->Newsletters->save($newsletter)) {
                $this->Flash->success(__('The {0} has been saved.', 'Newsletter'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Newsletter'));
        }
        $this->set(compact('newsletter'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Newsletter id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $newsletter = $this->Newsletters->get($id);
        if ($this->Newsletters->delete($newsletter)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Newsletter'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Newsletter'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function formNewsletter(){
        $email = $this->Newsletters->find();

        foreach ($email as $value){
            $enviarPara[] = $value->email;
        }

        if ($this->request->is('post')){

            $formData = $this->request->getData();

            $email = new Email('newsletter');
            $email->setFrom(['naoresponda@aloalosergipe.com.br' => 'Anuncie conosco'])
                ->setTo($enviarPara)
                ->setEmailFormat('html')
                ->setSubject($formData['assunto'])
                ->send( $formData['mensagem']);
            $this->Flash->success('Mensagem enviada com sucesso');
            $this->redirect('/admin/newsletters');
        }

        $this->set(compact('enviarPara'));

    }
}
