<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // jorge_gespagos_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jorge_gespagos_homepage')), array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/pagos')) {
            // pagos
            if (rtrim($pathinfo, '/') === '/pagos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pagos');
                }

                return array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\PagosController::indexAction',  '_route' => 'pagos',);
            }

            // pagos_show
            if (preg_match('#^/pagos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagos_show')), array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\PagosController::showAction',));
            }

            // pagos_new
            if ($pathinfo === '/pagos/new') {
                return array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\PagosController::newAction',  '_route' => 'pagos_new',);
            }

            // pagos_create
            if ($pathinfo === '/pagos/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pagos_create;
                }

                return array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\PagosController::createAction',  '_route' => 'pagos_create',);
            }
            not_pagos_create:

            // pagos_edit
            if (preg_match('#^/pagos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagos_edit')), array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\PagosController::editAction',));
            }

            // pagos_update
            if (preg_match('#^/pagos/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_pagos_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagos_update')), array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\PagosController::updateAction',));
            }
            not_pagos_update:

            // pagos_delete
            if (preg_match('#^/pagos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_pagos_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagos_delete')), array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\PagosController::deleteAction',));
            }
            not_pagos_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
