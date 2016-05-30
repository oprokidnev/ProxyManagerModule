<?php

return array(
    'proxy_manager_module' => array(
        'configuration' => array(
        //settet in underscore => value
        //'proxies_target_dir' => './data/ProxyManager',
        ),
    ),
    'service_manager'      => array(
        'factories' => array(
            'ProxyManagerModule\Factory\Config'                        => 'ProxyManagerModule\Factory\Config',
            'ProxyManagerModule\Factory\LazyLoadingGhostFactory'       => 'ProxyManagerModule\Factory\LazyLoadingGhostFactory',
            'ProxyManagerModule\Factory\LazyLoadingValueHolderFactory' => 'ProxyManagerModule\Factory\LazyLoadingValueHolderFactory',
        ),
        'aliases'   => array(
            'LazyLoadingGhostFactory'       => 'ProxyManagerModule\Factory\LazyLoadingGhostFactory',
            'LazyLoadingValueHolderFactory' => 'ProxyManagerModule\Factory\LazyLoadingValueHolderFactory',
            'ProxyManagerConfig'            => 'ProxyManagerModule\Factory\Config',
        ),
    ),
);
