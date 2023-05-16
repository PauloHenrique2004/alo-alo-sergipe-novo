<?php
namespace App\Controller\Admin;


/**
 * Sliders Controller
 *
 * @property \App\Model\Table\SlidersTable $Sliders
 *
 * @method \App\Model\Entity\Slider[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SlidersController extends AdminController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
          'limit' => 20
        ];

        $sliders = $this->paginate($this->Sliders->find()->order(['id' => 'desc']));
        $this->set(compact('sliders'));
    }

    /**
     * View method
     *
     * @param string|null $id Slider id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $slider = $this->Sliders->get($id, [
            'contain' => []
        ]);

        $this->set('slider', $slider);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $slider = $this->Sliders->newEntity();
        if ($this->request->is('post')) {
            $slider = $this->Sliders->patchEntity($slider, $this->request->getData());
            if ($this->Sliders->save($slider)) {
                $this->Flash->success(__('The {0} has been saved.', 'Slider'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Slider'));
        }
        $this->set(compact('slider'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Slider id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $slider = $this->Sliders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $slider = $this->Sliders->patchEntity($slider, $this->request->getData());
            if ($this->Sliders->save($slider)) {
                $this->Flash->success(__('The {0} has been saved.', 'Slider'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Slider'));
        }
        $this->set(compact('slider'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Slider id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $slider = $this->Sliders->get($id);
        if ($this->Sliders->delete($slider)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Slider'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Slider'));
        }

        return $this->redirect(['action' => 'index']);
    }

//    public function beforeFilter(Event $event) {
//        if (in_array($this->request->action, ['ajaxEdit'])) {
//            $this->eventManager()->off($this->Csrf);
//        }
//    }


}
