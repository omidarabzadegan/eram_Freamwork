<?php
//create base path for autoload


define('BASEPATH', __DIR__ . "/../");

//include autoload
include BASEPATH . "/vendor/autoload.php";

//run dot env
$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();

//global request
$request =  new App\core\Requests;

//include helper
include BASEPATH . "/helpers/helper.php";

//inclued router
include BASEPATH . "/routes/web.php";




