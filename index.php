<?php

use App\core\Requests;

include "bootstrap/init.php";

$request =  new Requests();
dd($request->input('name'));

