<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendrier' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\CalendrierController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/calendrier/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendrier_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\CalendrierController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/calendrier/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendrier_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\CalendrierController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/calendrier/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendrier_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\CalendrierController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/calendrier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendrier_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\CalendrierController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/calendrier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendrier_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\CalendrierController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/calendrier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'calendrier_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\CalendrierController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/calendrier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'competition' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\CompetitionController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/competition/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'competition_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\CompetitionController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/competition/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'competition_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\CompetitionController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/competition/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'competition_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\CompetitionController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/competition',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'competition_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\CompetitionController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/competition',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'competition_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\CompetitionController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/competition',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'competition_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\CompetitionController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/competition',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'date' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\DateController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/date/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'date_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\DateController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/date/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'date_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\DateController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/date/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'date_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\DateController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/date',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'date_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\DateController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/date',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'date_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\DateController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/date',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'date_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\DateController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/date',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'iit_ihm_default_index' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipe' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\EquipeController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipe/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipe_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\EquipeController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipe/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipe_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\EquipeController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/equipe/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipe_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\EquipeController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/equipe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipe_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\EquipeController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/equipe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipe_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\EquipeController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/equipe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'equipe_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\EquipeController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/equipe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'heure' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\HeureController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/heure/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'heure_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\HeureController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/heure/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'heure_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\HeureController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/heure/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'heure_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\HeureController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/heure',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'heure_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\HeureController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/heure',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'heure_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\HeureController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/heure',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'heure_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\HeureController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/heure',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'joueur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/joueur/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'joueur_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/joueur/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'joueur_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/joueur/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'joueur_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/joueur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'joueur_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/joueur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'joueur_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/joueur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'joueur_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/joueur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\PartieController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/partie/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partie_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\PartieController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/partie/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partie_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\PartieController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/partie/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partie_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\PartieController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/partie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partie_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\PartieController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/partie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partie_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\PartieController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/partie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'partie_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\PartieController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/partie',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'resultat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\ResultatController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resultat/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'resultat_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\ResultatController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resultat/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'resultat_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\ResultatController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resultat/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'resultat_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\ResultatController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/resultat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'resultat_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\ResultatController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/resultat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'resultat_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\ResultatController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/resultat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'resultat_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\ResultatController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/resultat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stade' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\StadeController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stade/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stade_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\StadeController::createAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stade/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stade_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\StadeController::newAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stade/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stade_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\StadeController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/stade',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stade_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\StadeController::editAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/stade',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stade_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\StadeController::updateAction',  ),  2 =>   array (    '_method' => 'PUT',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/stade',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'stade_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\StadeController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/stade',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'home_root' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'players_team' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::getPlayerByTeamAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
