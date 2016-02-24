<?php

namespace ProxyManagerModule;

class Module implements \Zend\ModuleManager\Feature\AutoloaderProviderInterface,
    \Zend\ModuleManager\Feature\ConfigProviderInterface
{

    public function init(\Zend\ModuleManager\ModuleManager $mm)
    {
        $mm->getEventManager()->attach(\Zend\ModuleManager\ModuleEvent::EVENT_MERGE_CONFIG, [$this, 'onMergeConfig']);
    }

    public function onMergeConfig(\Zend\ModuleManager\ModuleEvent $event)
    {
        $config = $event->getConfigListener()->getMergedConfig();
        if (isset($config['proxy_manager_module']['configuration']['proxies_target_dir']) &&
            $config['proxy_manager_module']['configuration']['proxies_target_dir'] !== null &&
            !is_dir($config['proxy_manager_module']['configuration']['proxies_target_dir'])
        ) {
            $proxyTargetDirectory = $config['proxy_manager_module']['configuration']['proxies_target_dir'];
            mkdir($proxyTargetDirectory, 0777, true);
        }
    }

    public function onBootstrapPre(\Zend\Mvc\MvcEvent $event)
    {
        
    }

    /**
     *
     * @return array
     */
    public function getConfig()
    {
        return include dirname(dirname(__DIR__)) . '/config/module.config.php';
    }

    /**
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__,
                ),
            ),
        );
    }

}
