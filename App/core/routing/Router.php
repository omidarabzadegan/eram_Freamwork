<?php
namespace App\core\routing;

use App\core\Requests;

class Router
{
   private $request;
   private $routes;
   private $current_route;

   public function __construct()
   {
    $this->request = new Requests;
    $this->routes = Route::routes();
    $this->current_route = $this->findRoute($this->request) ?? null ;
    var_dump($this->current_route);
   }

   public function findRoute(Requests $request)
   {
        foreach ($this->routes as $route) {
            if(in_array($request->method() , $route['method']) && $request->uri() == $route['uri']){
             return $route;
            }
        }
        return null;
    }
}
