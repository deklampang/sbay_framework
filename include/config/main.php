<?php
 
return array(
    
    'version'       => '1.1',
    'name'          => 'Sbay PHP Framework',
    'description'   => 'PHP Framework by DriveSoftCenter.Net',
    'author'        => 'Eakkabin Jaikeawma',
    'icon'          => 'stylesheet/img/devil-icon.png',    
    
    'baseUrl'       => 'http://localhost/sbay_framework',    
    
    'database' => array(
        'type'      => 'mysql',
        'server'    => 'localhost',
        'username'  => 'root',
        'password'  => '',
        'dbname'    => 'db_health',
        'port'      => 3306,
        'charset'   => 'utf8',
    ),
    
    // path
    'cssDir'        => 'public/css',
    'jsDir'         => 'public/js',
    'imageDir'      => 'public/images',
    
    // import file
    'cssFiles'      => array(
        'style.css',
        'bootstrap.min.css',
        'jquery-ui-1.10.0.custom.css'
    ),
    'jsFiles'      => array(
        'script.js'
    ),
    
    
);

