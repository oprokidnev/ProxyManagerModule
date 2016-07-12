<?php

namespace ProxyManagerModule\Factory;

/**
 * Creates \ProxyManager\Factory\AccessInterceptorScopeLocalizerFactory with given configuration
 *
 * @author oprokidnev <aa@oprokidnev.ru>
 */
class AccessInterceptorScopeLocalizerFactory implements \Zend\ServiceManager\FactoryInterface
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

        return new \ProxyManager\Factory\AccessInterceptorScopeLocalizerFactory($proxyManagerConfig);
    }



    /**
     * SMv3 factory
     * @param \Interop\Container\ContainerInterface $container
     * @param mixed $requestedName
     * @param mixed $options
     * @return \ProxyManager\Factory\AccessInterceptorScopeLocalizerFactory Description
     */
    public function __invoke(\Interop\Container\ContainerInterface $container,
                             $requestedName, array $options = null)
    {
        return $this->createService($container);
    }


}
