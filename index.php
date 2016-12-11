<?php
require_once "core/bootstrap.php";

Router::load('routers')
    ->run();