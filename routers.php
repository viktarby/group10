<?php


$routers->get('task-list', 'TodoController@index');
$routers->post('task/add', 'TodoController@add');
$routers->post('task/update', 'TodoController@update');