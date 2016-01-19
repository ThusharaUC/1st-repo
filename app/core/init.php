<?php

/*Configurations used throughout the system*/

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'sc_db'
    ),
    'session' => array(
        'session_name' => 'user'
    )
);

spl_autoload_register(function ($class){
    require_once (__DIR__ . '/../models/classes/' . $class . '.php');
});

