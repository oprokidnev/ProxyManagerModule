<?php

namespace ProxyManagerModule\Factory;

/**
 * Creates \ProxyManager\Factory\LazyLoadingValueHolderFactory with given configuration
 *
 * @author oprokidnev <aa@oprokidnev.ru>
 */
class LazyLoadingValueHolderFactory implements \Zend\ServiceManager\FactoryInterface
{

    /**
     *
     * @param  \Zend\ServiceManager\ServiceLocatorInterface        $serviceLocator
     * @return \ProxyManager\Factory\LazyLoadingValueHolderFactory Description
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $sl = $serviceLocator;

        $proxyManagerConfig = $serviceLocator->get('ProxyManagerConfig');

        return new \ProxyManager\Factory\LazyLoadingValueHolderFactory($proxyManagerConfig);
    }

}
