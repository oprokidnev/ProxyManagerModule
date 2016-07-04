<?php

namespace ProxyManagerModule\Factory;

/**
 * Initialize configuration for ProxyManager factories
 *
 * @author oprokidnev
 */
class Config implements \Zend\ServiceManager\FactoryInterface
{

    protected $defaultConfig = array();

    /**
     *
     * @param \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $underscoreToCamelCaseFilter = new \Zend\Filter\Word\UnderscoreToCamelCase();
        $proxyManagerConfig          = new \ProxyManager\Configuration();

        $config = $serviceLocator->get('Config');
        if (isset($config['proxy_manager_module']['configuration'])) {
            $proxyManagerModuleConfig = $config['proxy_manager_module']['configuration'];
            foreach ($proxyManagerModuleConfig as $key => $value) {
                $setter = 'set' . ucfirst($underscoreToCamelCaseFilter->filter($key));
                if (method_exists($proxyManagerConfig, $setter) && $value !== null) {
                    $proxyManagerConfig->$setter($value);
                }
                if($setter == 'setProxiesTargetDir'){
                    spl_autoload_register($proxyManagerConfig->getProxyAutoloader());
                }
            }
        }

        return $proxyManagerConfig;
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
