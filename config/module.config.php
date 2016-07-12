<?php
return array(
    'proxy_manager_module' => array(
        'configuration' => array(
        //settet in underscore => value
        //'proxies_target_dir' => './data/ProxyManager',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'ProxyManagerModule\Factory\Config' => 'ProxyManagerModule\Factory\Config',
            'ProxyManagerModule\Factory\LazyLoadingGhostFactory' => 'ProxyManagerModule\Factory\LazyLoadingGhostFactory',
            'ProxyManagerModule\Factory\LazyLoadingValueHolderFactory' => 'ProxyManagerModule\Factory\LazyLoadingValueHolderFactory',
            'ProxyManagerModule\Factory\NullObjectFactory' => 'ProxyManagerModule\Factory\NullObjectFactory',
            'ProxyManagerModule\Factory\AccessInterceptorValueHolderFactory' => 'ProxyManagerModule\Factory\AccessInterceptorValueHolderFactory',
        ),
        'aliases' => array(
            'LazyLoadingGhostFactory' => 'ProxyManagerModule\Factory\LazyLoadingGhostFactory',
            'LazyLoadingValueHolderFactory' => 'ProxyManagerModule\Factory\LazyLoadingValueHolderFactory',
            'NullObjectFactory' => 'ProxyManagerModule\Factory\NullObjectFactory',
            'AccessInterceptorValueHolderFactory' => 'ProxyManagerModule\Factory\AccessInterceptorValueHolderFactory',
            'ProxyManagerConfig' => 'ProxyManagerModule\Factory\Config',
        ),
    ),
);
