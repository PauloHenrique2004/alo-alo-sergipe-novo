<?php
namespace App\Controller\Admin;


/**
 * Videos Controller
 *
 * @property \App\Model\Table\VideosTable $Videos
 *
 * @method \App\Model\Entity\Video[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VideosController extends AdminController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 10,
            'order' => [
                'id' => 'Desc'
            ]
        ];

        $videos = $this->paginate($this->Videos);

        $this->set(compact('videos'));
    }

    /**
     * View method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $video = $this->Videos->get($id, [
            'contain' => []
        ]);

        $this->set('video', $video);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $video = $this->Videos->newEntity();
        if ($this->request->is('post')) {

            $url = $this->request->getData(['link']);
            $pattern = '/^https?:\/\/(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([\w-]{11})/';
            preg_match($pattern, $url, $matches);
            $video_id = $matches[1];

            $video = $this->Videos->patchEntity($video, $this->request->getData());
            $video->link = $video_id;

            if ($this->Videos->save($video)) {
                $this->Flash->success(__('The {0} has been saved.', 'Video'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Video'));
        }
        $this->set(compact('video'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $video = $this->Videos->get($id, [
            'contain' => []
        ]);


        if ($this->request->is(['patch', 'post', 'put'])) {

            $url = $this->request->getData(['link']);

            $pattern = '/^https?:\/\/(?:www\.)?(?:youtube\.com\/watch\?v=|youtu\.be\/)([\w-]{11})/';

            preg_match($pattern, $url, $matches);

            if( preg_match($pattern, $url, $matches) == 0){
                $video_id = $url;
            }else{
                $video_id = $matches[1];
            }

            $video = $this->Videos->patchEntity($video, $this->request->getData());

            $video->link = $video_id;

//            var_dump($video->link); exit();


            if ($this->Videos->save($video)) {

                $this->Flash->success(__('The {0} has been saved.', 'Video'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Video'));
        }
        $this->set(compact('video'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Video id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $video = $this->Videos->get($id);
        if ($this->Videos->delete($video)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Video'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Video'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
