<?php


$routers->get('task-list', 'TodoController@index');
$routers->post('task/add', 'TodoController@add');
$routers->post('task/update', 'TodoController@update');
$routers->get('table', 'PageController@table');
$routers->get('', 'PageController@index');
$routers->get('about', 'PageController@about');