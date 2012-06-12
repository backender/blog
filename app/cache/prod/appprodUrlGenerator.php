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
        return array(array (  0 => 'slug',  1 => 'origin',), array (  '_controller' => 'Webdev\\BlogBundle\\Controller\\CommentController::newAnswerAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'origin',  ),  2 =>   array (    0 => 'text',    1 => '/comment',  ),  3 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'slug',  ),  4 =>   array (    0 => 'text',    1 => '/post',  ),));
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
}
