<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/calendrier')) {
                // calendrier
                if (rtrim($pathinfo, '/') === '/calendrier') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_calendrier;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'calendrier');
                    }

                    return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\CalendrierController::indexAction',  '_route' => 'calendrier',);
                }
                not_calendrier:

                // calendrier_create
                if ($pathinfo === '/calendrier/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_calendrier_create;
                    }

                    return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\CalendrierController::createAction',  '_route' => 'calendrier_create',);
                }
                not_calendrier_create:

                // calendrier_new
                if ($pathinfo === '/calendrier/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_calendrier_new;
                    }

                    return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\CalendrierController::newAction',  '_route' => 'calendrier_new',);
                }
                not_calendrier_new:

                // calendrier_show
                if (preg_match('#^/calendrier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_calendrier_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendrier_show')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\CalendrierController::showAction',));
                }
                not_calendrier_show:

                // calendrier_edit
                if (preg_match('#^/calendrier/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_calendrier_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendrier_edit')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\CalendrierController::editAction',));
                }
                not_calendrier_edit:

                // calendrier_update
                if (preg_match('#^/calendrier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_calendrier_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendrier_update')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\CalendrierController::updateAction',));
                }
                not_calendrier_update:

                // calendrier_delete
                if (preg_match('#^/calendrier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_calendrier_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendrier_delete')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\CalendrierController::deleteAction',));
                }
                not_calendrier_delete:

            }

            if (0 === strpos($pathinfo, '/competition')) {
                // competition
                if (rtrim($pathinfo, '/') === '/competition') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_competition;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'competition');
                    }

                    return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\CompetitionController::indexAction',  '_route' => 'competition',);
                }
                not_competition:

                // competition_create
                if ($pathinfo === '/competition/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_competition_create;
                    }

                    return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\CompetitionController::createAction',  '_route' => 'competition_create',);
                }
                not_competition_create:

                // competition_new
                if ($pathinfo === '/competition/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_competition_new;
                    }

                    return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\CompetitionController::newAction',  '_route' => 'competition_new',);
                }
                not_competition_new:

                // competition_show
                if (preg_match('#^/competition/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_competition_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'competition_show')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\CompetitionController::showAction',));
                }
                not_competition_show:

                // competition_edit
                if (preg_match('#^/competition/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_competition_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'competition_edit')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\CompetitionController::editAction',));
                }
                not_competition_edit:

                // competition_update
                if (preg_match('#^/competition/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_competition_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'competition_update')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\CompetitionController::updateAction',));
                }
                not_competition_update:

                // competition_delete
                if (preg_match('#^/competition/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_competition_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'competition_delete')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\CompetitionController::deleteAction',));
                }
                not_competition_delete:

            }

        }

        if (0 === strpos($pathinfo, '/date')) {
            // date
            if (rtrim($pathinfo, '/') === '/date') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_date;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'date');
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\DateController::indexAction',  '_route' => 'date',);
            }
            not_date:

            // date_create
            if ($pathinfo === '/date/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_date_create;
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\DateController::createAction',  '_route' => 'date_create',);
            }
            not_date_create:

            // date_new
            if ($pathinfo === '/date/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_date_new;
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\DateController::newAction',  '_route' => 'date_new',);
            }
            not_date_new:

            // date_show
            if (preg_match('#^/date/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_date_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'date_show')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\DateController::showAction',));
            }
            not_date_show:

            // date_edit
            if (preg_match('#^/date/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_date_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'date_edit')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\DateController::editAction',));
            }
            not_date_edit:

            // date_update
            if (preg_match('#^/date/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_date_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'date_update')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\DateController::updateAction',));
            }
            not_date_update:

            // date_delete
            if (preg_match('#^/date/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_date_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'date_delete')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\DateController::deleteAction',));
            }
            not_date_delete:

        }

        // iit_ihm_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'iit_ihm_default_index')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/equipe')) {
            // equipe
            if (rtrim($pathinfo, '/') === '/equipe') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_equipe;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'equipe');
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\EquipeController::indexAction',  '_route' => 'equipe',);
            }
            not_equipe:

            // equipe_create
            if ($pathinfo === '/equipe/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_equipe_create;
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\EquipeController::createAction',  '_route' => 'equipe_create',);
            }
            not_equipe_create:

            // equipe_new
            if ($pathinfo === '/equipe/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_equipe_new;
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\EquipeController::newAction',  '_route' => 'equipe_new',);
            }
            not_equipe_new:

            // equipe_show
            if (preg_match('#^/equipe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_equipe_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipe_show')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\EquipeController::showAction',));
            }
            not_equipe_show:

            // equipe_edit
            if (preg_match('#^/equipe/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_equipe_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipe_edit')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\EquipeController::editAction',));
            }
            not_equipe_edit:

            // equipe_update
            if (preg_match('#^/equipe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_equipe_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipe_update')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\EquipeController::updateAction',));
            }
            not_equipe_update:

            // equipe_delete
            if (preg_match('#^/equipe/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_equipe_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'equipe_delete')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\EquipeController::deleteAction',));
            }
            not_equipe_delete:

        }

        if (0 === strpos($pathinfo, '/heure')) {
            // heure
            if (rtrim($pathinfo, '/') === '/heure') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_heure;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'heure');
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\HeureController::indexAction',  '_route' => 'heure',);
            }
            not_heure:

            // heure_create
            if ($pathinfo === '/heure/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_heure_create;
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\HeureController::createAction',  '_route' => 'heure_create',);
            }
            not_heure_create:

            // heure_new
            if ($pathinfo === '/heure/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_heure_new;
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\HeureController::newAction',  '_route' => 'heure_new',);
            }
            not_heure_new:

            // heure_show
            if (preg_match('#^/heure/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_heure_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'heure_show')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\HeureController::showAction',));
            }
            not_heure_show:

            // heure_edit
            if (preg_match('#^/heure/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_heure_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'heure_edit')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\HeureController::editAction',));
            }
            not_heure_edit:

            // heure_update
            if (preg_match('#^/heure/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_heure_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'heure_update')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\HeureController::updateAction',));
            }
            not_heure_update:

            // heure_delete
            if (preg_match('#^/heure/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_heure_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'heure_delete')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\HeureController::deleteAction',));
            }
            not_heure_delete:

        }

        if (0 === strpos($pathinfo, '/joueur')) {
            // joueur
            if (rtrim($pathinfo, '/') === '/joueur') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_joueur;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'joueur');
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::indexAction',  '_route' => 'joueur',);
            }
            not_joueur:

            // joueur_create
            if ($pathinfo === '/joueur/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_joueur_create;
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::createAction',  '_route' => 'joueur_create',);
            }
            not_joueur_create:

            // joueur_new
            if ($pathinfo === '/joueur/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_joueur_new;
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::newAction',  '_route' => 'joueur_new',);
            }
            not_joueur_new:

            // joueur_show
            if (preg_match('#^/joueur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_joueur_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'joueur_show')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::showAction',));
            }
            not_joueur_show:

            // joueur_edit
            if (preg_match('#^/joueur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_joueur_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'joueur_edit')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::editAction',));
            }
            not_joueur_edit:

            // joueur_update
            if (preg_match('#^/joueur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_joueur_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'joueur_update')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::updateAction',));
            }
            not_joueur_update:

            // joueur_delete
            if (preg_match('#^/joueur/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_joueur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'joueur_delete')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::deleteAction',));
            }
            not_joueur_delete:

        }

        if (0 === strpos($pathinfo, '/partie')) {
            // partie
            if (rtrim($pathinfo, '/') === '/partie') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_partie;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'partie');
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\PartieController::indexAction',  '_route' => 'partie',);
            }
            not_partie:

            // partie_create
            if ($pathinfo === '/partie/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_partie_create;
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\PartieController::createAction',  '_route' => 'partie_create',);
            }
            not_partie_create:

            // partie_new
            if ($pathinfo === '/partie/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_partie_new;
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\PartieController::newAction',  '_route' => 'partie_new',);
            }
            not_partie_new:

            // partie_show
            if (preg_match('#^/partie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_partie_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'partie_show')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\PartieController::showAction',));
            }
            not_partie_show:

            // partie_edit
            if (preg_match('#^/partie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_partie_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'partie_edit')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\PartieController::editAction',));
            }
            not_partie_edit:

            // partie_update
            if (preg_match('#^/partie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_partie_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'partie_update')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\PartieController::updateAction',));
            }
            not_partie_update:

            // partie_delete
            if (preg_match('#^/partie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_partie_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'partie_delete')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\PartieController::deleteAction',));
            }
            not_partie_delete:

        }

        if (0 === strpos($pathinfo, '/resultat')) {
            // resultat
            if (rtrim($pathinfo, '/') === '/resultat') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_resultat;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'resultat');
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\ResultatController::indexAction',  '_route' => 'resultat',);
            }
            not_resultat:

            // resultat_create
            if ($pathinfo === '/resultat/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_resultat_create;
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\ResultatController::createAction',  '_route' => 'resultat_create',);
            }
            not_resultat_create:

            // resultat_new
            if ($pathinfo === '/resultat/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_resultat_new;
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\ResultatController::newAction',  '_route' => 'resultat_new',);
            }
            not_resultat_new:

            // resultat_show
            if (preg_match('#^/resultat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_resultat_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultat_show')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\ResultatController::showAction',));
            }
            not_resultat_show:

            // resultat_edit
            if (preg_match('#^/resultat/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_resultat_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultat_edit')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\ResultatController::editAction',));
            }
            not_resultat_edit:

            // resultat_update
            if (preg_match('#^/resultat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_resultat_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultat_update')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\ResultatController::updateAction',));
            }
            not_resultat_update:

            // resultat_delete
            if (preg_match('#^/resultat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_resultat_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resultat_delete')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\ResultatController::deleteAction',));
            }
            not_resultat_delete:

        }

        if (0 === strpos($pathinfo, '/stade')) {
            // stade
            if (rtrim($pathinfo, '/') === '/stade') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stade;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'stade');
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\StadeController::indexAction',  '_route' => 'stade',);
            }
            not_stade:

            // stade_create
            if ($pathinfo === '/stade/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_stade_create;
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\StadeController::createAction',  '_route' => 'stade_create',);
            }
            not_stade_create:

            // stade_new
            if ($pathinfo === '/stade/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stade_new;
                }

                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\StadeController::newAction',  '_route' => 'stade_new',);
            }
            not_stade_new:

            // stade_show
            if (preg_match('#^/stade/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stade_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stade_show')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\StadeController::showAction',));
            }
            not_stade_show:

            // stade_edit
            if (preg_match('#^/stade/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_stade_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stade_edit')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\StadeController::editAction',));
            }
            not_stade_edit:

            // stade_update
            if (preg_match('#^/stade/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_stade_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stade_update')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\StadeController::updateAction',));
            }
            not_stade_update:

            // stade_delete
            if (preg_match('#^/stade/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_stade_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'stade_delete')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\StadeController::deleteAction',));
            }
            not_stade_delete:

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/index')) {
            // home_root
            if ($pathinfo === '/index') {
                return array (  '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::homeAction',  '_route' => 'home_root',);
            }

            // players_team
            if (preg_match('#^/index/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'players_team')), array (  '_controller' => 'IIT\\IhmBundle\\Controller\\JoueurController::getPlayerByTeamAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
