<?php

return array(
    'modules' => array(
        'AssetManager',
        'Application',
        'Admin', // <-- Agregamos esta línea
        'Page',
        'Noticias',
    ),
    'module_listener_options' => array(
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
