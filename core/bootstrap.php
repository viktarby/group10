<?php
session_start();

require "core/autoload.php";

App::set('config', require "config.php");
App::set('query', new QueryBuilder( Connector::getConnection(App::get('config')['database']) ));

$title = 'Мой Сайт';
$pageTitle = "Мой Сайт";

$routers = new Router();