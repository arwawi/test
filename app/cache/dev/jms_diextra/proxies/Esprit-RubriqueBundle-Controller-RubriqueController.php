<?php

namespace EnhancedProxy_7aef44e27d75605356c274aa383c118367741e03\__CG__\Esprit\RubriqueBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class RubriqueController extends \Esprit\RubriqueBundle\Controller\RubriqueController
{
    private $__CGInterception__loader;

    public function indexAction()
    {
        $ref = new \ReflectionMethod('Esprit\\RubriqueBundle\\Controller\\RubriqueController', 'indexAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}