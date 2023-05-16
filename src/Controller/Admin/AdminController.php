<?php

namespace App\Controller\Admin;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;



class AdminController extends Controller
{

    public function initialize()
    {
        parent::initialize();

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

    }

    public  function loadPublicDependencies(){


    }
}
