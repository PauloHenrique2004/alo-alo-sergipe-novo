<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Mailer\Email;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

include 'ContactsController.php';


/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public function site()
    {
        $this->viewBuilder()->setLayout('site');

        $this->loadModel('Noticias');

        $this->loadModel('Categorias');

        $this->loadModel('Videos');

        $this->loadModel('DescricaoVideos');

        $categoriasExibidas = [];

        $obterCategoriasExibidas = function () use (&$categoriasExibidas) {
            return $categoriasExibidas;
        };

        $proximaCategoriaIrma = function ($layout, $categoriaId) use (&$categoriasExibidas) {
            $categoriasExibidas[] = $categoriaId;
            $idsNotIn = join(', ', $categoriasExibidas);

            $categoria = $this->Categorias->find('all')
                ->order(['menu_ordem' => 'ASC'])
                ->limit(1)
                ->where(['layout' => $layout, "id NOT IN ({$idsNotIn})"])
                ->toArray();

            if(sizeof($categoria) == 1) {
                $categoria = $categoria[0];
                $categoriasExibidas[] = $categoria->id;
            }
            else {
                $categoria = null;
            }

            return $categoria;
        };

        $ultimasNoticias = $this->Noticias->find()->where(['Categorias.exibir_ultimas_noticias' => 1])->order(['Noticias.id' => 'DESC'])->limit(4)->contain(['Categorias']);

        $categoriasLayout = $this->Categorias->find()->where(['Categorias.layout IS NOT NULL']);

//        dd($categoriasLayout); exit();

        $videos = $this->Videos->find()->order(['Videos.id' =>'Desc'])->limit(5);

        $descricaoVideos = $this->DescricaoVideos->find();

        $title = 'Início';

        $this->set('ultimasNoticias', $ultimasNoticias);

        $this->set('categoriasLayout', $categoriasLayout);

        $this->set('videos', $videos);

        $this->set('descricaoVideos', $descricaoVideos);

        $this->set('title', $title);

        $this->set('obterCategoriasExibidas', $obterCategoriasExibidas);

        $this->set('proximaCategoriaIrma', $proximaCategoriaIrma);


        $this->loadPublicDependencies();


    }

    public function pesquisa(){
        $this->loadModel('Noticias');
        $this->loadModel('Eventos');

        $this->paginate = [
            'limit' => 3,
            'order' => [
                'id' => 'DESC'
            ]
        ];

        $whereNoticias = [];
        $whereAgenda = [];

        if (isset($_GET['pesquisa'])) {
            $query = '"%' . $_GET['pesquisa'] . '%"';

            $whereNoticias[] = 'Noticias.titulo LIKE' . $query . 'OR Noticias.descricao LIKE' . $query;
            $whereAgenda[] = 'Eventos.titulo LIKE' . $query;
        }

        $pesquisaNoticia = $this->paginate($this->Noticias->find()->where($whereNoticias));
        $pesquisaAgenda = $this->paginate($this->Eventos->find()->where($whereAgenda));


        $this->viewBuilder()->setLayout('site');
        $title = 'Pesquisa';
        $this->set(compact('pesquisaAgenda', 'pesquisaNoticia','title'));


    }


    public function beforeFilter(Event $event)
    {
        $this->Auth->allow();
    }


}
