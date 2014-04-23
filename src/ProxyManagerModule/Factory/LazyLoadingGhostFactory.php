<?php

namespace ProxyManagerModule\Factory;

/**
 * Creates \ProxyManager\Factory\LazyLoadingGhostFactory with given configuration
 *
 * @author oprokidnev <aa@oprokidnev.ru>
 */
class LazyLoadingGhostFactory implements \Zend\ServiceManager\FactoryInterface
{

    /**
     *
     * @param  \Zend\ServiceManager\ServiceLocatorInterface  $serviceLocator
     * @return \ProxyManager\Factory\LazyLoadingGhostFactory Description
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $sl = $serviceLocator;

        $proxyManagerConfig = $serviceLocator->get('ProxyManagerConfig');

        return new \ProxyManager\Factory\LazyLoadingGhostFactory($proxyManagerConfig);
    }

}
