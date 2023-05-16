<?php
namespace App\Controller\Admin;


/**
 * DescricaoVideos Controller
 *
 * @property \App\Model\Table\DescricaoVideosTable $DescricaoVideos
 *
 * @method \App\Model\Entity\DescricaoVideo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DescricaoVideosController extends AdminController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $descricaoVideos = $this->paginate($this->DescricaoVideos);

        $this->set(compact('descricaoVideos'));
    }

    /**
     * View method
     *
     * @param string|null $id Descricao Video id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $descricaoVideo = $this->DescricaoVideos->get($id, [
            'contain' => []
        ]);

        $this->set('descricaoVideo', $descricaoVideo);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $descricaoVideo = $this->DescricaoVideos->newEntity();
        if ($this->request->is('post')) {
            $descricaoVideo = $this->DescricaoVideos->patchEntity($descricaoVideo, $this->request->getData());
            if ($this->DescricaoVideos->save($descricaoVideo)) {
                $this->Flash->success(__('The {0} has been saved.', 'Descricao Video'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Descricao Video'));
        }
        $this->set(compact('descricaoVideo'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Descricao Video id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $descricaoVideo = $this->DescricaoVideos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $descricaoVideo = $this->DescricaoVideos->patchEntity($descricaoVideo, $this->request->getData());
            if ($this->DescricaoVideos->save($descricaoVideo)) {
                $this->Flash->success(__('The {0} has been saved.', 'Descricao Video'));

                return $this->redirect('/admin/descricao-videos/edit/1');
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Descricao Video'));
        }
        $this->set(compact('descricaoVideo'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Descricao Video id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $descricaoVideo = $this->DescricaoVideos->get($id);
        if ($this->DescricaoVideos->delete($descricaoVideo)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Descricao Video'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Descricao Video'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
