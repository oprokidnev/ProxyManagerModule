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
class LazyLoadingGhostFactory implements \Zend\ServiceManager\FactoryInterface
{

    /**
     * 
     * @param \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
        $sl = $serviceLocator;

        $proxyManagerConfig = $serviceLocator->get('ProxyManagerConfig');
        return new \ProxyManager\Factory\LazyLoadingGhostFactory($proxyManagerConfig);
    }

}
