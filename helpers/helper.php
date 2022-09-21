<?php

function site_url($route){
    return $_ENV['Host'].$route;
}

function dd($result){ 
    if (!isset($result)) {
        die();
    }
    $dump = is_array($result) ? $result : [$result];
    $pretty = function($v='',$c="&nbsp;&nbsp;&nbsp;&nbsp;",$in=-1,$k=null)use(&$pretty){$r='';if(in_array(gettype($v),array('object','array'))){$r.=($in!=-1?str_repeat($c,$in):'').(is_null($k)?'':"$k: ").'<br>';foreach($v as $sk=>$vl){$r.=$pretty($vl,$c,$in+1,$sk).'<br>';}}else{$r.=($in!=-1?str_repeat($c,$in):'').(is_null($k)?'':"$k: ").(is_null($v)?'&lt;NULL&gt;':"<strong>$v</strong>");}return$r;};
    echo '<h3 style = text-align:center;> Die And Dump Eram framework </h3>'.'<hr>'."<div style='background:black; color:orange; '>".$pretty($dump) . "<div>";
    die();
}

function assets_url($route){
    return site_url('assets/').$route;
}
