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

        // _assetic_fc66e6e
        if ($pathinfo === '/resources/compiled/view.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fc66e6e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_fc66e6e',);
        }

        // _assetic_fc66e6e_0
        if ($pathinfo === '/resources/compiled/view_comment_1.js') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fc66e6e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_fc66e6e_0',);
        }

        // _assetic_ffef2d3
        if ($pathinfo === '/resources/compiled/view.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ffef2d3',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ffef2d3',);
        }

        // _assetic_ffef2d3_0
        if ($pathinfo === '/resources/compiled/view_tagcloud_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ffef2d3',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ffef2d3_0',);
        }

        // _assetic_a44dc0a
        if ($pathinfo === '/css/a44dc0a.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a44dc0a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_a44dc0a',);
        }

        // _assetic_a44dc0a_0
        if ($pathinfo === '/css/a44dc0a_base_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'a44dc0a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_a44dc0a_0',);
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

        // admin_dashboard
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_dashboard');
            }
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\AdminController::dashboardAction',  '_route' => 'admin_dashboard',);
        }

        // admin_comment
        if (rtrim($pathinfo, '/') === '/admin/comment') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_comment');
            }
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\CommentController::indexAction',  '_route' => 'admin_comment',);
        }

        // admin_comment_show
        if (0 === strpos($pathinfo, '/admin/comment') && preg_match('#^/admin/comment/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\CommentController::showAction',)), array('_route' => 'admin_comment_show'));
        }

        // admin_comment_new
        if ($pathinfo === '/admin/comment/new') {
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\CommentController::newAction',  '_route' => 'admin_comment_new',);
        }

        // admin_comment_create
        if ($pathinfo === '/admin/comment/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_comment_create;
            }
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\CommentController::createAction',  '_route' => 'admin_comment_create',);
        }
        not_admin_comment_create:

        // admin_comment_edit
        if (0 === strpos($pathinfo, '/admin/comment') && preg_match('#^/admin/comment/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\CommentController::editAction',)), array('_route' => 'admin_comment_edit'));
        }

        // admin_comment_update
        if (0 === strpos($pathinfo, '/admin/comment') && preg_match('#^/admin/comment/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_comment_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\CommentController::updateAction',)), array('_route' => 'admin_comment_update'));
        }
        not_admin_comment_update:

        // admin_comment_delete
        if (0 === strpos($pathinfo, '/admin/comment') && preg_match('#^/admin/comment/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_comment_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\CommentController::deleteAction',)), array('_route' => 'admin_comment_delete'));
        }
        not_admin_comment_delete:

        // admin_post
        if (rtrim($pathinfo, '/') === '/admin/post') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_post');
            }
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\PostController::indexAction',  '_route' => 'admin_post',);
        }

        // admin_post_show
        if (0 === strpos($pathinfo, '/admin/post') && preg_match('#^/admin/post/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\PostController::showAction',)), array('_route' => 'admin_post_show'));
        }

        // admin_post_new
        if ($pathinfo === '/admin/post/new') {
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\PostController::newAction',  '_route' => 'admin_post_new',);
        }

        // admin_post_create
        if ($pathinfo === '/admin/post/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_post_create;
            }
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\PostController::createAction',  '_route' => 'admin_post_create',);
        }
        not_admin_post_create:

        // admin_post_edit
        if (0 === strpos($pathinfo, '/admin/post') && preg_match('#^/admin/post/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\PostController::editAction',)), array('_route' => 'admin_post_edit'));
        }

        // admin_post_update
        if (0 === strpos($pathinfo, '/admin/post') && preg_match('#^/admin/post/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_post_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\PostController::updateAction',)), array('_route' => 'admin_post_update'));
        }
        not_admin_post_update:

        // admin_post_delete
        if (0 === strpos($pathinfo, '/admin/post') && preg_match('#^/admin/post/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_post_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\PostController::deleteAction',)), array('_route' => 'admin_post_delete'));
        }
        not_admin_post_delete:

        // admin_project
        if (rtrim($pathinfo, '/') === '/admin/project') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_project');
            }
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\ProjectController::indexAction',  '_route' => 'admin_project',);
        }

        // admin_project_show
        if (0 === strpos($pathinfo, '/admin/project') && preg_match('#^/admin/project/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\ProjectController::showAction',)), array('_route' => 'admin_project_show'));
        }

        // admin_project_new
        if ($pathinfo === '/admin/project/new') {
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\ProjectController::newAction',  '_route' => 'admin_project_new',);
        }

        // admin_project_create
        if ($pathinfo === '/admin/project/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_project_create;
            }
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\ProjectController::createAction',  '_route' => 'admin_project_create',);
        }
        not_admin_project_create:

        // admin_project_edit
        if (0 === strpos($pathinfo, '/admin/project') && preg_match('#^/admin/project/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\ProjectController::editAction',)), array('_route' => 'admin_project_edit'));
        }

        // admin_project_update
        if (0 === strpos($pathinfo, '/admin/project') && preg_match('#^/admin/project/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_project_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\ProjectController::updateAction',)), array('_route' => 'admin_project_update'));
        }
        not_admin_project_update:

        // admin_project_delete
        if (0 === strpos($pathinfo, '/admin/project') && preg_match('#^/admin/project/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_project_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\ProjectController::deleteAction',)), array('_route' => 'admin_project_delete'));
        }
        not_admin_project_delete:

        // login_old
        if ($pathinfo === '/login_old') {
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_old',);
        }

        // login_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
        }

        // admin_tag
        if (rtrim($pathinfo, '/') === '/admin/tag') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_tag');
            }
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\TagController::indexAction',  '_route' => 'admin_tag',);
        }

        // admin_tag_show
        if (0 === strpos($pathinfo, '/admin/tag') && preg_match('#^/admin/tag/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\TagController::showAction',)), array('_route' => 'admin_tag_show'));
        }

        // admin_tag_new
        if ($pathinfo === '/admin/tag/new') {
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\TagController::newAction',  '_route' => 'admin_tag_new',);
        }

        // admin_tag_create
        if ($pathinfo === '/admin/tag/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_tag_create;
            }
            return array (  '_controller' => 'Webdev\\AppBundle\\Controller\\TagController::createAction',  '_route' => 'admin_tag_create',);
        }
        not_admin_tag_create:

        // admin_tag_edit
        if (0 === strpos($pathinfo, '/admin/tag') && preg_match('#^/admin/tag/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\TagController::editAction',)), array('_route' => 'admin_tag_edit'));
        }

        // admin_tag_update
        if (0 === strpos($pathinfo, '/admin/tag') && preg_match('#^/admin/tag/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_tag_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\TagController::updateAction',)), array('_route' => 'admin_tag_update'));
        }
        not_admin_tag_update:

        // admin_tag_delete
        if (0 === strpos($pathinfo, '/admin/tag') && preg_match('#^/admin/tag/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_tag_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\AppBundle\\Controller\\TagController::deleteAction',)), array('_route' => 'admin_tag_delete'));
        }
        not_admin_tag_delete:

        // post_newComment
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<slug>[^/]+?)/comment$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\CommentController::newCommentAction',)), array('_route' => 'post_newComment'));
        }

        // post_newAnswer
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<slug>[^/]+?)/comment/(?P<origin>[^/]+?)/?$#xs', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'post_newAnswer');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\CommentController::newAnswerAction',)), array('_route' => 'post_newAnswer'));
        }

        // blog_post_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_post_index');
            }
            return array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\PostController::indexAction',  '_route' => 'blog_post_index',);
        }

        // blog_post_view
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<slug>[^/]+?)/?$#xs', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'blog_post_view');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\PostController::viewAction',)), array('_route' => 'blog_post_view'));
        }

        // blog_search_tag
        if (0 === strpos($pathinfo, '/tag') && preg_match('#^/tag/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\SearchController::tagAction',)), array('_route' => 'blog_search_tag'));
        }

        // blog_search_project
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\SearchController::projectAction',)), array('_route' => 'blog_search_project'));
        }

        // fos_user_security_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
        }

        // fos_user_security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
        }

        // fos_user_security_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
