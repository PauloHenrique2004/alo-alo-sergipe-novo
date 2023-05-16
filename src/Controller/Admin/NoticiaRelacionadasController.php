<?php
namespace App\Controller\Admin;


/**
 * NoticiaRelacionadas Controller
 *
 * @property \App\Model\Table\NoticiaRelacionadasTable $NoticiaRelacionadas
 *
 * @method \App\Model\Entity\NoticiaRelacionada[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NoticiaRelacionadasController extends AdminController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Noticias']
        ];
        $noticiaRelacionadas = $this->paginate($this->NoticiaRelacionadas);

        $this->set(compact('noticiaRelacionadas'));
    }

    /**
     * View method
     *
     * @param string|null $id Noticia Relacionada id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $noticiaRelacionada = $this->NoticiaRelacionadas->get($id, [
            'contain' => ['Noticias', 'NoticiaRelacionadas']
        ]);

        $this->set('noticiaRelacionada', $noticiaRelacionada);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $noticiaRelacionada = $this->NoticiaRelacionadas->newEntity();
        if ($this->request->is('post')) {
            $noticiaRelacionada = $this->NoticiaRelacionadas->patchEntity($noticiaRelacionada, $this->request->getData());
            if ($this->NoticiaRelacionadas->save($noticiaRelacionada)) {
                $this->Flash->success(__('The {0} has been saved.', 'Noticia Relacionada'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Noticia Relacionada'));
        }
        $noticias = $this->NoticiaRelacionadas->Noticias->find('list', ['limit' => 200]);
        $this->set(compact('noticiaRelacionada', 'noticias'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Noticia Relacionada id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $noticiaRelacionada = $this->NoticiaRelacionadas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $noticiaRelacionada = $this->NoticiaRelacionadas->patchEntity($noticiaRelacionada, $this->request->getData());
            if ($this->NoticiaRelacionadas->save($noticiaRelacionada)) {
                $this->Flash->success(__('The {0} has been saved.', 'Noticia Relacionada'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Noticia Relacionada'));
        }
        $noticias = $this->NoticiaRelacionadas->Noticias->find('list', ['limit' => 200]);
        $this->set(compact('noticiaRelacionada', 'noticias'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Noticia Relacionada id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $noticiaRelacionada = $this->NoticiaRelacionadas->get($id);
        if ($this->NoticiaRelacionadas->delete($noticiaRelacionada)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Noticia Relacionada'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Noticia Relacionada'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
