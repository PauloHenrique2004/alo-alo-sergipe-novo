<?php
namespace App\Controller\Admin;

use Cake\Controller\Component\SessionComponent;

/**
 * Blogs Controller
 *
 * @property \App\Model\Table\BlogsTable $Blogs
 *
 * @method \App\Model\Entity\Blog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BlogsController extends AdminController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = ['limit' => 10, 'order' => ['id' => 'Desc']];

        $blogs = $this->paginate($this->Blogs);

        $this->set(compact('blogs'));
    }

    /**
     * View method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $blog = $this->Blogs->get($id, [
            'contain' => []
        ]);

        $this->set('blog', $blog);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $blog = $this->Blogs->newEntity();
        if ($this->request->is('post')) {

            $blog = $this->Blogs->patchEntity($blog, $this->request->getData());
            if ($this->Blogs->save($blog)) {
                $this->Flash->success(__('The {0} has been saved.', 'Blog'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Blog'));
        }
        $this->set(compact('blog'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $blog = $this->Blogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {



            $blog = $this->Blogs->patchEntity($blog, $this->request->getData());

            if ($this->Blogs->save($blog)) {

                $this->Flash->success(__('The {0} has been saved.', 'Blog'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Blog'));
        }
        $this->set(compact('blog'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Blog id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $blog = $this->Blogs->get($id);
        if ($this->Blogs->delete($blog)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Blog'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Blog'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
