<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _assetic_80bf1c2
        if ($pathinfo === '/resources/compiled/layout.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '80bf1c2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_80bf1c2',);
        }

        // _assetic_80bf1c2_0
        if ($pathinfo === '/resources/compiled/layout_layout_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '80bf1c2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_80bf1c2_0',);
        }

        // _assetic_ab1207e
        if ($pathinfo === '/resources/compiled/view.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ab1207e',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ab1207e',);
        }

        // _assetic_ab1207e_0
        if ($pathinfo === '/resources/compiled/view_view_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ab1207e',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ab1207e_0',);
        }

        // _assetic_3bdee21
        if ($pathinfo === '/resources/compiled/base.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3bdee21',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_3bdee21',);
        }

        // _assetic_3bdee21_0
        if ($pathinfo === '/resources/compiled/base_base_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '3bdee21',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_3bdee21_0',);
        }

        // _assetic_b24dae1
        if ($pathinfo === '/resources/compiled/base.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b24dae1',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b24dae1',);
        }

        // _assetic_b24dae1_0
        if ($pathinfo === '/resources/compiled/base_jquery-1.7_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b24dae1',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_b24dae1_0',);
        }

        // _assetic_b24dae1_1
        if ($pathinfo === '/resources/compiled/base_base_2.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b24dae1',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_b24dae1_1',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // blog_post_view
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<slug>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\PostController::viewAction',)), array('_route' => 'blog_post_view'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
