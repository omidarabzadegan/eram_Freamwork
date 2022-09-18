<?php

use App\core\routing\Route;

Route::add(['get'] , '/null');

Route::add(['get'] , '/' , function(){
    echo 'welcome';
});

Route::post( '/saveForm' , function(){
    echo "save Ok";
});

Route::put( '/puturi' ,['controller' , 'method']);

Route::get('/' , 'controller@method');

dd(Route::routes());