<?php

use App\core\routing\Route;

Route::get("/eram_framework/null");

Route::add(['get','post'] , '/eram_framework/a' , function(){
    echo 'welcome';
});

Route::post( '/eram_framework/b' , function(){
    echo "save Ok";
});

Route::put( '/eram_framework/c' ,['controller' , 'method']);

Route::get('/eram_framework/d' , 'controller@method');

