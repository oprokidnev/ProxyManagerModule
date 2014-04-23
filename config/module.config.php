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
            'ProxyManagerModule\Factory\Config'                  => 'ProxyManagerModule\Factory\Config',
            'ProxyManagerModule\Factory\LazyLoadingGhostFactory' => 'ProxyManagerModule\Factory\LazyLoadingGhostFactory',
        ),
        'aliases'   => array(
            'ProxyManagerModule\Factory\LazyLoadingGhostFactory' => 'LazyLoadingGhostFactory',
            'ProxyManagerModule\Factory\Config'                  => 'ProxyManagerConfig',
        ),
    ),
);
