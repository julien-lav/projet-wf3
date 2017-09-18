<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig', array());
})
->bind('homepage')
;
/* FRONT */



/* ADMIN */

// crée un groupe de routes
$admin = $app['controllers_factory'];

// toutes les url des routes créées par $admin sont préfixées par /admin
$app->mount('/admin', $admin);

// Category

$admin
    ->get('/category', 'admin.category.controller:listAction')
    ->bind('admin_categories')
;

$admin
        ->get('/category/{type}', 'admin.category.controller:listByType')
        ->assert('type','[annonce]|[chronique]')
        ->bind('admin_categories_by_type')
;

$admin
        ->match('/category/edition/{id}', 'admin.category.controller:editAction')
        ->value('id', null)
        ->bind('admin_categories_edit')
;

$admin
    ->get('/category/suppression/{id}', 'admin.category.controller:deleteAction')
    ->assert('id', '\d+') // force id a être un nombre
    ->bind('admin_category_delete')
;

// Chhronique

$admin
        ->get("/chroniques", "admin.chronique.controller:listAction")
        ->bind("admin_chroniques")
;

$admin
        ->match('/chronique/edition/{id}', 'admin.chronique.controller:editAction')
        ->value('id', null)
        ->bind('admin_chronique_edit')
;

$admin
    ->get('/chronique/suppression/{id}', 'admin.chronique.controller:deleteAction')
    ->assert('id', '\d+') // force id a être un nombre
    ->bind('admin_chronique_delete')
;

/*
$admin
    ->get('/posts/{type}', 'admin.category.controller:listAction')
    ->value('type','chronique')
    ->bind('admin_chroniques')
;
*/

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});



//*******FRONT handicap***************

$bind = $app->get('/handicap/{id}', 'handicap.controller:handicapAction')
        ->bind('handicap');


// crée un groupe de route
$admin = $app['controllers_factory'];





$app->mount('/admin', $admin);

//******************ROUTE POUR ADMIN HANDICAP*******************

// localhost/projet-wf3/web/index_dev.php/admin/handicap
$admin->get('/handicap', 'admin.handicap.controller:listAction')
            ->bind('admin_handicap');

$admin->match('/handicap/edition/{id}', 'admin.handicap.controller:editAction')
            ->value('id', null) // id est optionnel est vaut null par défaut
            ->bind('admin_handicap_edit');
//
$admin->get('/handicap/supression/{id}', 'admin.handicap.controller:deleteAction')
            ->assert('id', '\d+')
            ->bind('admin_handicap_delete');

//******************ROUTE POUR ADMIN Tag*******************

// localhost/projet-wf3/web/index_dev.php/admin/tag
$admin->get('/tag', 'admin.tag.controller:listAction')
            ->bind('admin_tag');

$admin->match('/tag/edition/{idtag}', 'admin.tag.controller:editAction')
            ->value('idtag', null) // id est optionnel est vaut null par défaut
            ->bind('admin_tag_edit');
//
$admin->get('/tag/supression/{idtag}', 'admin.tag.controller:deleteAction')
            ->assert('idtag', '\d+')
            ->bind('admin_tag_delete');
