<?php
namespace App\Controller\Admin;


use Ramsey\Uuid\Uuid;

/**
 * Publicidades Controller
 *
 * @property \App\Model\Table\PublicidadesTable $Publicidades
 *
 * @method \App\Model\Entity\Publicidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PublicidadesController extends AdminController
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
            'order' => ['id' => 'Desc']
        ];

        $publicidades = $this->paginate($this->Publicidades);

        $this->set(compact('publicidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Publicidade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $publicidade = $this->Publicidades->get($id, [
            'contain' => []
        ]);

        $this->set('publicidade', $publicidade);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $publicidade = $this->Publicidades->newEntity();
        if ($this->request->is('post')) {
            $publicidade = $this->Publicidades->patchEntity($publicidade, $this->request->getData());
            if ($this->Publicidades->save($publicidade)) {

                $publicidade = $this->renameFileUuid($publicidade, 'imagem');

                $this->Flash->success('Salvo com sucesso');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Erro ao salvar, por favor tente novamente');
        }
        $this->set(compact('publicidade'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Publicidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $publicidade = $this->Publicidades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publicidade = $this->Publicidades->patchEntity($publicidade, $this->request->getData());
            if ($this->Publicidades->save($publicidade)) {

                $publicidade = $this->renameFileUuid($publicidade, 'imagem');


                $this->Flash->success('Salvo com sucesso');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Erro ao salvar, por favor tente novamente');
        }
        $this->set(compact('publicidade'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Publicidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $publicidade = $this->Publicidades->get($id);
        if ($this->Publicidades->delete($publicidade)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Publicidade'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Publicidade'));
        }

        return $this->redirect(['action' => 'index']);
    }


    private  function renameFileUuid($publicidade, $coluna) {
        if(!empty($this->request->getData()[$coluna]) && !empty($this->request->getData()[$coluna]['name'])) {
            $targetFullPath = $this->getImageFullPath($publicidade[$coluna], $coluna);
            $targetParts = pathinfo($targetFullPath);
            $targetName = Uuid::uuid4() . '.' . $targetParts['extension'];
            $fullPath = $targetParts['dirname'] . '/'. $targetName;
            rename($targetFullPath,   $fullPath);

            $publicidade[$coluna] = $targetName;
            $this->Publicidades->updateAll([$coluna => $targetName], ['id' => $publicidade->id]);
        }
        return $publicidade;
    }

    private function getImageFullPath($target, $coluna) {
        $currentDir = getcwd();
        return "$currentDir/files/Publicidades/{$coluna}/$target";

    }
}
