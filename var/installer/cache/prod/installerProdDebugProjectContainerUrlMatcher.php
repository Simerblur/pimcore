<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class installerProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/install')) {
            // GET_install_
            if ('/install' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'Pimcore\\Bundle\\InstallBundle\\Controller\\InstallController:indexAction',  '_route' => 'GET_install_',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_GET_install_;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'GET_install_'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_GET_install_;
                }

                return $ret;
            }
            not_GET_install_:

            // POST_install_
            if ('/install/' === $pathinfo) {
                $ret = array (  '_controller' => 'Pimcore\\Bundle\\InstallBundle\\Controller\\InstallController:installAction',  '_route' => 'POST_install_',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_POST_install_;
                }

                return $ret;
            }
            not_POST_install_:

            // POST_install_check
            if ('/install/check' === $pathinfo) {
                $ret = array (  '_controller' => 'Pimcore\\Bundle\\InstallBundle\\Controller\\InstallController:checkAction',  '_route' => 'POST_install_check',);
                if (!in_array($requestMethod, array('POST'))) {
                    $allow = array_merge($allow, array('POST'));
                    goto not_POST_install_check;
                }

                return $ret;
            }
            not_POST_install_check:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
