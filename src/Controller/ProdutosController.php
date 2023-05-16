<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Produtos Controller
 *
 * @property \App\Model\Table\ProdutosTable $Produtos
 *
 * @method \App\Model\Entity\Produto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProdutosController extends AppController
{

    public function produtos(){
        $this->viewBuilder()->setLayout('site');
        $produtos = $this->Produtos->find();
        $title = 'Produtos';
        $this->set(compact('produtos','title'));
    }

    public function produto($id = null){
        $this->viewBuilder()->setLayout('site');
        $produto = $this->Produtos->get($id);
//        var_dump($produto); exit();
        $title = $produto->nome;
        $this->set(compact('produto','title'));
    }

    public function beforeFilter(Event $event){
        $this->Auth->allow(['produtos', 'produto']);
    }

}

