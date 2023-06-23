<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);


Router::prefix('admin', function($routes){
    $routes->fallbacks(DashedRoute::class);
});


Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));

    $routes->applyMiddleware('csrf');

    $routes->connect('/', ['controller' => 'Pages', 'action' => 'site']);
    $routes->connect('/admin', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/anuncie-conosco', ['controller' => 'Contacts', 'action' => 'anuncieConosoco']);
    $routes->connect('/sobre/:id', ['controller' => 'Sobre', 'action' => 'sobre'])->setPass(['id']);
    $routes->connect('/produtos', ['controller' => 'Produtos', 'action' => 'produtos']);
    $routes->connect('/produto/:id', ['controller' => 'Produtos', 'action' => 'produto'])->setPass(['id']);
    $routes->connect('/campanhas/:id', ['controller' => 'Campanhas', 'action' => 'campanhas'])->setPass(['id']);
    $routes->connect('/academias', ['controller' => 'Academias', 'action' => 'academias']);
    $routes->connect('/academia/:id', ['controller' => 'Academias', 'action' => 'academia'])->setPass(['id']);
    $routes->connect('/vantagens', ['controller' => 'Vantagens', 'action' => 'vantagens']);
//    $routes->connect('/blog', ['controller' => 'Blogs', 'action' => 'noticias']);
    $routes->connect('/alo-alo-tv', ['controller' => 'Videos', 'action' => 'videos']);
//    $routes->connect('/post/:id', ['controller' => 'Blogs', 'action' => 'detalhes'])->setPass(['id']);
    $routes->connect('/albuns', ['controller' => 'Albuns', 'action' => 'albuns']);
    $routes->connect('/fotos/:albun_id', ['controller' => 'Fotos', 'action' => 'fotos'])->setPass(['albun_id']);
    $routes->connect('/agenda', ['controller' => 'Eventos', 'action' => 'agenda']);
    $routes->connect('/evento/:titulo/:id', ['controller' => 'Eventos', 'action' => 'evento'])->setPass(['titulo','id']);
    $routes->connect('/politica-de-privacidade/:id', ['controller' => 'Privacidades', 'action' => 'privacidade'])->setPass(['id']);
    $routes->connect('/redefinir-senha', ['controller' => 'Users', 'action' => 'rememberPassword']);
    $routes->connect('/change-password', ['controller' => 'Users', 'action' => 'changePassword']);
    $routes->connect('/noticia/:categoria/:titulo_resumo/:id', ['controller' => 'Noticias', 'action' => 'noticia'])->setPass(['categoria','titulo_resumo','id']);
    $routes->connect('/noticias/:categoria/:categoria_id', ['controller' => 'Noticias', 'action' => 'noticias'])->setPass(['categoria','categoria_id']);
    $routes->connect('/newsletter', ['controller' => 'Newsletters', 'action' => 'index', 'newsletter']);
    $routes->connect('/pesquisa', ['controller' => 'Pages', 'action' => 'pesquisa']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    $routes->fallbacks(DashedRoute::class);

});

