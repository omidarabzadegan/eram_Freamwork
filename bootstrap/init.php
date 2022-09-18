<?php
//create base path for autoload
define('BASEPATH', __DIR__ . "/../");
//include autoload
include BASEPATH . "/vendor/autoload.php";
//include helper
include BASEPATH . "/helpers/helper.php";
//run dot env
$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();