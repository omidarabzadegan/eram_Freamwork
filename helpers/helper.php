<?php

function site_url($route){
    return $_ENV['Host'].$route;
}

function dd($array){
    return(var_dump($array));
}

function assets_url($route){
    return site_url('assets/').$route;
}
