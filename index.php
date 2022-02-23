<?php
//Cargo autoload
require_once 'autoload.php';

//incluyo las partes de la maquetacion
require_once 'views/layouts/header.php';
require_once 'views/layouts/sidebar.php';



//Valido si llega parametro controller por la url
if(isset($_GET['controller'])){
  //concateno con el string controller
  $nombre_controlador = $_GET['controller'].'Controller';
}else{
  echo 'La pagina que buscas no existe (err. param. controller)';
  exit();
}

//Valido que exista el controlador
if(class_exists($nombre_controlador)){
  //Instancio el controlador
  $controlador = new $nombre_controlador();

  //Verificamos que exista el parametro action por la url
  //Y verifcamos que exista como metodo dentro del controller
  if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
    //guardo el nombre del metodo en una variable
    $action = $_GET['action'];

    //llamamos al metodo(action) del objeto creado(controller)
    $controlador->$action();
  }else{
    echo 'La pagina que buscas no existe (err. param. action ó no existe el action)';
  }
}else{
  echo 'La pagina que buscas no existe (No existe el controlador)';
}


require_once 'views/layouts/footer.php';


?>