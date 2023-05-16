<?php
namespace App\Controller;

use Cake\Event\Event;



class BlogsController extends AppController
{

    public function noticias(){
        $this->paginate = [
            'limit' => 6,
            'order' => [
                'id' => 'DESC'
            ]
        ];

        $where = [];

        if (isset($_GET['pesquisa'])) {
            $query = '"%' . $_GET['pesquisa'] . '%"';
            $where[] = 'Blogs.titulo LIKE' . $query . ' OR Blogs.resumo LIKE' . $query;
        }
        if(isset($_GET['categoria_id'])) {
            $id_categoria = $_GET['categoria_id'];
            $where['categoria_id'] = $id_categoria;
        }

        $posts = $this->paginate($this->Blogs->find()->where($where));

        $recentes = $this->Blogs->find()->limit(4)->order(['id' => 'DESC']);
        $this->viewBuilder()->setLayout('site');
        $title = 'Blog';
        $this->set(compact('posts','title', 'recentes'));
    }


    public function detalhes($id = null){
        $this->viewBuilder()->setLayout('site');
        $detalhes = $this->Blogs->get($id);
        $recentes = $this->Blogs->find()->limit(4)->order(['id' => 'DESC']);
        $title = $detalhes->titulo;
        $this->set(compact('detalhes','recentes','title'));
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['noticias','detalhes']);
    }
}
