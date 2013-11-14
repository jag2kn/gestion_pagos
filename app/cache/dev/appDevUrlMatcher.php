<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            if (0 === strpos($pathinfo, '/logout')) {
                // logout
                if ($pathinfo === '/logout') {
                    return array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
                }

                // logout_check
                if ($pathinfo === '/logout_check') {
                    return array('_route' => 'logout_check');
                }

            }

        }

        // registro
        if ($pathinfo === '/registro') {
            return array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\DefaultController::registroAction',  '_route' => 'registro',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
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

            // pagos_do
            if (preg_match('#^/pagos/(?P<id>[^/]++)/do$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagos_do')), array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\PagosController::doAction',));
            }

            // pagos_doit
            if (preg_match('#^/pagos/(?P<id>[^/]++)/doit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_pagos_doit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagos_doit')), array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\PagosController::doitAction',));
            }
            not_pagos_doit:

        }

        if (0 === strpos($pathinfo, '/admin/usuario')) {
            // admin_usuario
            if (rtrim($pathinfo, '/') === '/admin/usuario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_usuario');
                }

                return array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\UsuarioController::indexAction',  '_route' => 'admin_usuario',);
            }

            // admin_usuario_show
            if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_show')), array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\UsuarioController::showAction',));
            }

            // admin_usuario_new
            if ($pathinfo === '/admin/usuario/new') {
                return array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\UsuarioController::newAction',  '_route' => 'admin_usuario_new',);
            }

            // admin_usuario_create
            if ($pathinfo === '/admin/usuario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_usuario_create;
                }

                return array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\UsuarioController::createAction',  '_route' => 'admin_usuario_create',);
            }
            not_admin_usuario_create:

            // admin_usuario_edit
            if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_edit')), array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\UsuarioController::editAction',));
            }

            // admin_usuario_update
            if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_usuario_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_update')), array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\UsuarioController::updateAction',));
            }
            not_admin_usuario_update:

            // admin_usuario_delete
            if (preg_match('#^/admin/usuario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_usuario_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_usuario_delete')), array (  '_controller' => 'Jorge\\GespagosBundle\\Controller\\UsuarioController::deleteAction',));
            }
            not_admin_usuario_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
