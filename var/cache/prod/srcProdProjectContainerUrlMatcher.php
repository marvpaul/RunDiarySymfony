<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // app_default_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\DefaultController::index',  '_route' => 'app_default_index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'app_default_index'));
            }

            return $ret;
        }

        // app_delete_delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<entryid>[^/]++)/(?P<userid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_delete_delete')), array (  '_controller' => 'App\\Controller\\Delete::delete',));
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\Login::login',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        // after_login
        if ('/after_login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\Login::after_login',  '_route' => 'after_login',);
        }

        // app_profile_profile
        if (0 === strpos($pathinfo, '/profile') && preg_match('#^/profile/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_profile_profile')), array (  '_controller' => 'App\\Controller\\Profile::profile',));
        }

        // index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\DefaultController::index',  '_route' => 'index',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'index'));
            }

            return $ret;
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
