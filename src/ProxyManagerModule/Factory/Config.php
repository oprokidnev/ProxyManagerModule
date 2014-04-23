<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ProxyManagerModule\Factory;

/**
 * Description of LazyLoadingGhostFactory
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

        $config = $sl->get('Config');
        if (isset($config['proxy_manager_module']['configuration'])) {
            $proxyManagerModuleConfig = $config['proxy_manager_module']['configuration'];
            foreach ($proxyManagerModuleConfig as $key => $value) {
                $setter = 'set' . ucfirst($underscoreToCamelCaseFilter->filter($key));
                if (method_exists($proxyManagerConfig, $setter)) {
                    $proxyManagerConfig->$setter($value);
                }
            }
        }

        return $proxyManagerConfig;
    }

}
