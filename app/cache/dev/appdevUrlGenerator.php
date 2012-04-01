<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_assetic_80bf1c2' => true,
       '_assetic_80bf1c2_0' => true,
       '_assetic_ab1207e' => true,
       '_assetic_ab1207e_0' => true,
       '_assetic_3bdee21' => true,
       '_assetic_3bdee21_0' => true,
       '_assetic_b24dae1' => true,
       '_assetic_b24dae1_0' => true,
       '_assetic_b24dae1_1' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_info' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_profiler_redirect' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'blog_post_view' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_assetic_80bf1c2RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '80bf1c2',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/resources/compiled/layout.css',  ),));
    }

    private function get_assetic_80bf1c2_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '80bf1c2',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/resources/compiled/layout_layout_1.css',  ),));
    }

    private function get_assetic_ab1207eRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'ab1207e',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/resources/compiled/view.css',  ),));
    }

    private function get_assetic_ab1207e_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'ab1207e',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/resources/compiled/view_view_1.css',  ),));
    }

    private function get_assetic_3bdee21RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3bdee21',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/resources/compiled/base.css',  ),));
    }

    private function get_assetic_3bdee21_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '3bdee21',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/resources/compiled/base_base_1.css',  ),));
    }

    private function get_assetic_b24dae1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'b24dae1',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/resources/compiled/base.js',  ),));
    }

    private function get_assetic_b24dae1_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'b24dae1',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/resources/compiled/base_jquery-1.7_1.js',  ),));
    }

    private function get_assetic_b24dae1_1RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'b24dae1',  'pos' => 1,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/resources/compiled/base_base_2.js',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_infoRouteInfo()
    {
        return array(array (  0 => 'about',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'about',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler/info',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profiler_redirectRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getblog_post_viewRouteInfo()
    {
        return array(array (  0 => 'slug',), array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\PostController::viewAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'slug',  ),  1 =>   array (    0 => 'text',    1 => '/post',  ),));
    }
}
