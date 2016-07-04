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

    /**
     * SMv3 factory
     * @param \Interop\Container\ContainerInterface $container
     * @param mixed $requestedName
     * @param mixed $options
     * @return \ProxyManager\Factory\LazyLoadingValueHolderFactory Description
     */
    public function __invoke(\Interop\Container\ContainerInterface $container,
                             $requestedName, array $options = null)
    {
        return $this->createService($container);
    }

}
