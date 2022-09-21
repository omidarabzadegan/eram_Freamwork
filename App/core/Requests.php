<?php
namespace App\core;
class Requests
{
    private $params;
    private $method;
    private $agent;
    private $ip;
    private $uri;
    public function __construct()
    {
        $this->params = $_REQUEST;
        $this->method = strtolower( $_SERVER['REQUEST_METHOD']);
        $this->agent = $_SERVER['HTTP_USER_AGENT'];
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->uri = strtok($_SERVER['REQUEST_URI'],'?');
    }

    public function params()
    {
        return $this->params;
    }

    public function method()
    {
        return $this->method;
    }

    public function agent()
    {
        return $this->agent;
    }

    public function ip()
    {
        return $this->ip;
    }
    public function __get($param)
    {
        return $this->params[$param] ?? null;
    }   

    public function uri()
    {
        return $this->uri;
    }

    public function redirect($route)
    {
        header("Location: " . site_url($route));
        die();
    }
}