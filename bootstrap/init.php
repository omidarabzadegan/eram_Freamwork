<?php
//create base path for autoload
define('BASEPATH',__DIR__ . "/../");
//include autoload
include BASEPATH . "/vendor/autoload.php";
//run dot env
$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();
//include base helpers
include BASEPATH . "/helpers/helper.php";