<?php

// Creación del namespace (Directorio de la clase)
namespace APP\Http;

// Creación de clase Request
class Request{
  
  protected $segments = [];
  protected $controller;
  protected $method;

  public function __construct(){
    // Ejemplo de la URI de una página
    // $_SERVER['REQUEST_URI'] = string(25) "/public/controller/method"

    // Se convierte a un array la URI de la página
    $this->segments = explode('/', $_SERVER['REQUEST_URI']);

    $this->setController();
    $this->setMethod();
  }

  // Setear el controlador y el método (página)

  public function setController(){
    // Se valida si en la posición 1 donde va el controlador dentro de la URI esta vacia, lo manda a home
    $this->controller = empty($this->segments[1]) ? "home" : $this->segments[1];
  }

  public function setMethod(){
    // Se valida si en la posición 2 donde va el método dentro de la URI esta vacia, lo manda a index
    $this->method = empty($this->segments[2]) ? "index" : $this->segments[2];
  }

  // Obtener al controlador y al método
  public function getController(){
    // Se convierte la primera letra del controlador a mayuscula
    $controller = ucfirst($this->controller);

    // Retornamos el controlador
    // Quedando algo como: \home = \HomeController
    return "App\Http\Controllers\\{$controller}Controller";
  }

  public function getMethod(){
    return $this->method;
  }

  public function send(){
    $controller = $this->getController();
    $method = $this->getMethod();

    $response = call_user_func([
      new $controller,
      $method
    ]);

    $response->send();
  }

}

?>