<?php

define('__ROOT__', dirname(dirname(dirname(__FILE__))));

require_once(__DIR__ . '/../REST.php');

$resource = __ROOT__ . '/data/users.json';
$REST = new REST($resource);

//get
if ($REST->getMethod() == 'GET')
{
    var_dump($REST->getUsers());
}