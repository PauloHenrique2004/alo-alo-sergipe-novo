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

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{


    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Recaptcha.Recaptcha');

        I18n::setLocale('pt_BR');


        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        $this->loadComponent('Auth', [

            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'username',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'index'
            ],

            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login'
            ]
        ]);



        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }


    public function beforeRender(Event $event)
    {
        $this->viewBuilder()->setTheme('AdminLTE');
        $this->viewBuilder()->setClassName('AdminLTE.AdminLTE');

        $this->categorias();

        $this->ultimasNoticiasTopo();

        $this->footerSite();

        $this->configuracoes();

        $this->publicidade();

        $this->noticiaBanner();

        $this->ultimasNoticias();

    }


    public function categorias(){
        $this->loadModel('Categorias');

        $categoriaOutros = $this->Categorias->find('all')->order(['menu_ordem' => 'ASC'])->where(['ocultar' => 0, 'menu_outros' => 1]);

        $exibirMenumais = $this->Categorias->find()->where(['menu_outros' => 1])->first();

        $categorias = $this->Categorias->find('all')->order(['menu_ordem' => 'ASC'])->where(['ocultar' => 0, 'menu_outros' => 0])->toArray();

        $categoriaNoticiasLayout1 = function ($categoriaId, $qtd = 5) {
            return $this->Noticias->find()->where(['categoria_id' => $categoriaId])->order(['id' => 'DESC'])->limit($qtd)->toArray();
        };

        $categoriaNoticiasLayout2 = function ($categoriaId, $qtd = 5) {
            return $this->Noticias->find()->where(['categoria_id' => $categoriaId])->order(['id' => 'DESC'])->limit($qtd)->toArray();
        };

        $categoriaNoticiasLayout3 = function ($categoriaId, $qtd = 3) {
            return $this->Noticias->find()->where(['categoria_id' => $categoriaId])->order(['id' => 'DESC'])->limit($qtd)->toArray();
        };


        $categoriaNoticiasLayout4 = function ($categoriaId, $qtd = 5) {
            return $this->Noticias->find()->where(['categoria_id' => $categoriaId])->order(['id' => 'DESC'])->limit($qtd)->toArray();
        };

        $categoriaNoticiasLayout5 = function ($categoria){
            return $this->Noticias->find()->where(['categoria_id' => $categoria->id])->order(['id' => 'DESC'])->limit(15);
        };

        $this->set(compact('categorias','categoriaNoticiasLayout1', 'categoriaOutros','exibirMenumais','categoriaNoticiasLayout4',
            'categoriaNoticiasLayout2','categoriaNoticiasLayout5', 'categoriaNoticiasLayout3'));
    }

    public function ultimasNoticiasTopo(){
        $this->loadModel('Noticias');
        $ultimasNoticiasTopo = $this->Noticias->find()->order(['id' => 'DESC'])->limit(5);
        $this->set('ultimasNoticiasTopo', $ultimasNoticiasTopo);
    }

    public function footerSite(){
        $this->loadModel('Sobre');
        $sobreFooter = $this->Sobre->find();

        $this->loadModel('Noticias');
        $ultimasNoticiasFooter = $this->Noticias->find()->order(['id' => 'DESC'])->limit(6);


        $this->set(compact('sobreFooter','ultimasNoticiasFooter'));
    }

    public function configuracoes(){
        $this->loadModel('Configuracoes');
        $configuracoes = $this->Configuracoes->find();
        $this->set(compact('configuracoes'));
    }


    public function publicidade(){
        $this->loadModel('Publicidades');
        $publicidadeTopo = $this->Publicidades->find()->where(['local' => 1])->order('rand()')->limit(1);
        $publicidadeLateral = $this->Publicidades->find()->where(['local' => 2])->order('rand()')->limit(1);
        $publicidadeAbaixoBannerPrincipal = $this->Publicidades->find()->where(['local' => 3])->limit(1);
        $this->set(compact('publicidadeTopo', 'publicidadeLateral','publicidadeAbaixoBannerPrincipal'));
    }

    public function noticiaBanner(){
        $this->loadModel('Noticias');
        $noticiaBanner = $this->Noticias->find()->where(['banner_imagem IS NOT NULL','sub_banner' => 0])->limit(1)->order(['Noticias.id' => 'DESC'])->contain(['Categorias'])->first();
        $this->set('noticiaBanner', $noticiaBanner);
    }

    public function ultimasNoticias(){
        $this->loadModel('Noticias');
        $this->loadModel('Categorias');
        $ultimasNoticias = $this->Noticias->find()->where(['Categorias.exibir_ultimas_noticias' => 1])->order(['Noticias.id' => 'DESC'])->limit(4)->contain(['Categorias']);
        $this->set('ultimasNoticias', $ultimasNoticias);




    }


    public  function loadPublicDependencies(){

    }
}
