<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_assetic_80bf1c2' => true,
       '_assetic_80bf1c2_0' => true,
       '_assetic_ab1207e' => true,
       '_assetic_ab1207e_0' => true,
       '_assetic_fc66e6e' => true,
       '_assetic_fc66e6e_0' => true,
       '_assetic_ffef2d3' => true,
       '_assetic_ffef2d3_0' => true,
       '_assetic_3bdee21' => true,
       '_assetic_3bdee21_0' => true,
       '_assetic_b24dae1' => true,
       '_assetic_b24dae1_0' => true,
       '_assetic_b24dae1_1' => true,
       'admin_dashboard' => true,
       'admin_blogroll' => true,
       'admin_blogroll_show' => true,
       'admin_blogroll_new' => true,
       'admin_blogroll_create' => true,
       'admin_blogroll_edit' => true,
       'admin_blogroll_update' => true,
       'admin_blogroll_delete' => true,
       'admin_comment' => true,
       'admin_comment_show' => true,
       'admin_comment_new' => true,
       'admin_comment_create' => true,
       'admin_comment_edit' => true,
       'admin_comment_update' => true,
       'admin_comment_delete' => true,
       'admin_post' => true,
       'admin_post_show' => true,
       'admin_post_new' => true,
       'admin_post_create' => true,
       'admin_post_edit' => true,
       'admin_post_update' => true,
       'admin_post_delete' => true,
       'admin_project' => true,
       'admin_project_show' => true,
       'admin_project_new' => true,
       'admin_project_create' => true,
       'admin_project_edit' => true,
       'admin_project_update' => true,
       'admin_project_delete' => true,
       'login_old' => true,
       'login_check' => true,
       'logout' => true,
       'admin_tag' => true,
       'admin_tag_show' => true,
       'admin_tag_new' => true,
       'admin_tag_create' => true,
       'admin_tag_edit' => true,
       'admin_tag_update' => true,
       'admin_tag_delete' => true,
       'post_newComment' => true,
       'post_newAnswer' => true,
       'blog_post_index' => true,
       'blog_post_view' => true,
       'blog_search_tag' => true,
       'blog_search_project' => true,
       'blog_search_archive' => true,
       'fos_user_security_login' => true,
       'fos_user_security_check' => true,
       'fos_user_security_logout' => true,
       'fos_user_profile_show' => true,
       'fos_user_profile_edit' => true,
       'fos_user_registration_register' => true,
       'fos_user_registration_check_email' => true,
       'fos_user_registration_confirm' => true,
       'fos_user_registration_confirmed' => true,
       'fos_user_resetting_request' => true,
       'fos_user_resetting_send_email' => true,
       'fos_user_resetting_check_email' => true,
       'fos_user_resetting_reset' => true,
       'fos_user_change_password' => true,
       'sonata_admin_dashboard' => true,
       'sonata_admin_retrieve_form_element' => true,
       'sonata_admin_append_form_element' => true,
       'sonata_admin_short_object_information' => true,
       'sonata_admin_set_object_field_value' => true,
       'admin_webdev_blog_post_list' => true,
       'admin_webdev_blog_post_create' => true,
       'admin_webdev_blog_post_batch' => true,
       'admin_webdev_blog_post_edit' => true,
       'admin_webdev_blog_post_delete' => true,
       'admin_webdev_blog_post_show' => true,
       'admin_webdev_blog_post_export' => true,
       'sonata_cache_esi' => true,
       'sonata_cache_js_async' => true,
       'sonata_cache_js_sync' => true,
       'sonata_cache_apc' => true,
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

    private function get_assetic_fc66e6eRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'fc66e6e',  'pos' => NULL,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/resources/compiled/view.js',  ),));
    }

    private function get_assetic_fc66e6e_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'fc66e6e',  'pos' => 0,  '_format' => 'js',), array (), array (  0 =>   array (    0 => 'text',    1 => '/resources/compiled/view_comment_1.js',  ),));
    }

    private function get_assetic_ffef2d3RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'ffef2d3',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/resources/compiled/view.css',  ),));
    }

    private function get_assetic_ffef2d3_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => 'ffef2d3',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/resources/compiled/view_tagcloud_1.css',  ),));
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

    private function getadmin_dashboardRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\AdminController::dashboardAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/',  ),));
    }

    private function getadmin_blogrollRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\BlogrollController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/blogroll/',  ),));
    }

    private function getadmin_blogroll_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\BlogrollController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/blogroll',  ),));
    }

    private function getadmin_blogroll_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\BlogrollController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/blogroll/new',  ),));
    }

    private function getadmin_blogroll_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\BlogrollController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/admin/blogroll/create',  ),));
    }

    private function getadmin_blogroll_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\BlogrollController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/blogroll',  ),));
    }

    private function getadmin_blogroll_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\BlogrollController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/blogroll',  ),));
    }

    private function getadmin_blogroll_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\BlogrollController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/blogroll',  ),));
    }

    private function getadmin_commentRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\CommentController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/comment/',  ),));
    }

    private function getadmin_comment_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\CommentController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/comment',  ),));
    }

    private function getadmin_comment_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\CommentController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/comment/new',  ),));
    }

    private function getadmin_comment_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\CommentController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/admin/comment/create',  ),));
    }

    private function getadmin_comment_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\CommentController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/comment',  ),));
    }

    private function getadmin_comment_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\CommentController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/comment',  ),));
    }

    private function getadmin_comment_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\CommentController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/comment',  ),));
    }

    private function getadmin_postRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\PostController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/post/',  ),));
    }

    private function getadmin_post_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\PostController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/post',  ),));
    }

    private function getadmin_post_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\PostController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/post/new',  ),));
    }

    private function getadmin_post_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\PostController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/admin/post/create',  ),));
    }

    private function getadmin_post_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\PostController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/post',  ),));
    }

    private function getadmin_post_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\PostController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/post',  ),));
    }

    private function getadmin_post_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\PostController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/post',  ),));
    }

    private function getadmin_projectRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\ProjectController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/project/',  ),));
    }

    private function getadmin_project_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\ProjectController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/project',  ),));
    }

    private function getadmin_project_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\ProjectController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/project/new',  ),));
    }

    private function getadmin_project_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\ProjectController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/admin/project/create',  ),));
    }

    private function getadmin_project_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\ProjectController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/project',  ),));
    }

    private function getadmin_project_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\ProjectController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/project',  ),));
    }

    private function getadmin_project_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\ProjectController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/project',  ),));
    }

    private function getlogin_oldRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_old',  ),));
    }

    private function getlogin_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\SecurityController::loginCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getlogoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getadmin_tagRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\TagController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/tag/',  ),));
    }

    private function getadmin_tag_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\TagController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/tag',  ),));
    }

    private function getadmin_tag_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\TagController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/tag/new',  ),));
    }

    private function getadmin_tag_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\TagController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/admin/tag/create',  ),));
    }

    private function getadmin_tag_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\TagController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/tag',  ),));
    }

    private function getadmin_tag_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\TagController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/tag',  ),));
    }

    private function getadmin_tag_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Webdev\\AppBundle\\Controller\\TagController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/tag',  ),));
    }

    private function getpost_newCommentRouteInfo()
    {
        return array(array (  0 => 'slug',), array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\CommentController::newCommentAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/comment',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'slug',  ),  2 =>   array (    0 => 'text',    1 => '/post',  ),));
    }

    private function getpost_newAnswerRouteInfo()
    {
        return array(array (  0 => 'slug',  1 => 'origin',), array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\CommentController::newAnswerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'origin',  ),  2 =>   array (    0 => 'text',    1 => '/answer',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'slug',  ),  4 =>   array (    0 => 'text',    1 => '/post',  ),));
    }

    private function getblog_post_indexRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\PostController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getblog_post_viewRouteInfo()
    {
        return array(array (  0 => 'slug',), array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\PostController::viewAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'slug',  ),  2 =>   array (    0 => 'text',    1 => '/post',  ),));
    }

    private function getblog_search_tagRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\SearchController::tagAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/tag',  ),));
    }

    private function getblog_search_projectRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\SearchController::projectAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getblog_search_archiveRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\SearchController::archiveAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/archive',  ),));
    }

    private function getfos_user_security_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getfos_user_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getfos_user_security_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getfos_user_profile_showRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/profile/',  ),));
    }

    private function getfos_user_profile_editRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/profile/edit',  ),));
    }

    private function getfos_user_registration_registerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/register/',  ),));
    }

    private function getfos_user_registration_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/check-email',  ),));
    }

    private function getfos_user_registration_confirmRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/register/confirm',  ),));
    }

    private function getfos_user_registration_confirmedRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/register/confirmed',  ),));
    }

    private function getfos_user_resetting_requestRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/request',  ),));
    }

    private function getfos_user_resetting_send_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/send-email',  ),));
    }

    private function getfos_user_resetting_check_emailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',), array (  '_method' => 'GET',), array (  0 =>   array (    0 => 'text',    1 => '/resetting/check-email',  ),));
    }

    private function getfos_user_resetting_resetRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/resetting/reset',  ),));
    }

    private function getfos_user_change_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',), array (  '_method' => 'GET|POST',), array (  0 =>   array (    0 => 'text',    1 => '/profile/change-password',  ),));
    }

    private function getsonata_admin_dashboardRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sadmin/dashboard',  ),));
    }

    private function getsonata_admin_retrieve_form_elementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sadmin/core/get-form-field-element',  ),));
    }

    private function getsonata_admin_append_form_elementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sadmin/core/append-form-field-element',  ),));
    }

    private function getsonata_admin_short_object_informationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sadmin/core/get-short-object-description',  ),));
    }

    private function getsonata_admin_set_object_field_valueRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sadmin/core/set-object-field-value',  ),));
    }

    private function getadmin_webdev_blog_post_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'webdev.blog.admin.post',  '_sonata_name' => 'admin_webdev_blog_post_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sadmin/webdev/blog/post/list',  ),));
    }

    private function getadmin_webdev_blog_post_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'webdev.blog.admin.post',  '_sonata_name' => 'admin_webdev_blog_post_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sadmin/webdev/blog/post/create',  ),));
    }

    private function getadmin_webdev_blog_post_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'webdev.blog.admin.post',  '_sonata_name' => 'admin_webdev_blog_post_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sadmin/webdev/blog/post/batch',  ),));
    }

    private function getadmin_webdev_blog_post_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'webdev.blog.admin.post',  '_sonata_name' => 'admin_webdev_blog_post_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/sadmin/webdev/blog/post',  ),));
    }

    private function getadmin_webdev_blog_post_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'webdev.blog.admin.post',  '_sonata_name' => 'admin_webdev_blog_post_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/sadmin/webdev/blog/post',  ),));
    }

    private function getadmin_webdev_blog_post_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'webdev.blog.admin.post',  '_sonata_name' => 'admin_webdev_blog_post_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/sadmin/webdev/blog/post',  ),));
    }

    private function getadmin_webdev_blog_post_exportRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'webdev.blog.admin.post',  '_sonata_name' => 'admin_webdev_blog_post_export',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sadmin/webdev/blog/post/export',  ),));
    }

    private function getsonata_cache_esiRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'sonata.cache.esi:cacheAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/sonata/cache/esi',  ),));
    }

    private function getsonata_cache_js_asyncRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.cache.js_async:cacheAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sonata/cache/js-async',  ),));
    }

    private function getsonata_cache_js_syncRouteInfo()
    {
        return array(array (), array (  '_controller' => 'sonata.cache.js_sync:cacheAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/sonata/cache/js-sync',  ),));
    }

    private function getsonata_cache_apcRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'sonata.cache.apc:cacheAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/sonata/cache/apc',  ),));
    }
}
