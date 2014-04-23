<?php

namespace ProxyManagerModule\Factory;

/**
 * Creates \ProxyManager\Factory\AccessInterceptorValueHolderFactory with given configuration
 *
 * @author oprokidnev <aa@oprokidnev.ru>
 */
class AccessInterceptorValueHolderFactory implements \Zend\ServiceManager\FactoryInterface
{

    /**
     *
     * @param  \Zend\ServiceManager\ServiceLocatorInterface              $serviceLocator
     * @return \ProxyManager\Factory\AccessInterceptorValueHolderFactory Description
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $sl = $serviceLocator;

        $proxyManagerConfig = $serviceLocator->get('ProxyManagerConfig');

        return new \ProxyManager\Factory\AccessInterceptorValueHolderFactory($proxyManagerConfig);
    }

}
