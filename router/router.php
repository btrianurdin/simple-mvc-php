<?php

/**
 * for more, see bramus router documentation: https://github.com/bramus/router#routing-shorthands
 */

$router->get('/', '\App\HomeApp@index');
$router->get('/add', '\App\HomeApp@add');
$router->get('/login', '\App\LoginApp@index');