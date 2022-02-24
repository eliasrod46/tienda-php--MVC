<?php
session_start();
//Cargo autoload y bbdd
require_once 'autoload.php';
require_once 'config/db.php';
//cargo parametros globales
require_once 'helpers/utils.php';
require_once 'config/parameters.php';
//incluyo las partes de la maquetacion
require_once 'views/layouts/header.php';
require_once 'views/layouts/sidebar.php';




function show_error(){
    $error = new errorController();
    $error->index();
}



//Valido si llega parametro controller por la url
if(isset($_GET['controller'])){
  //concateno con el string controller
  $nombre_controlador = $_GET['controller'].'Controller';

}elseif((!isset($_GET['controller'])) && (!isset($_GET['action']))){
  //si no vienen los paramentros por url pasa al controlador por defecto
  $nombre_controlador = controller_default;

}else{
  // echo 'La pagina que buscas no existe (err. param. controller)';
  show_error();
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
  }elseif((!isset($_GET['controller'])) && (!isset($_GET['action']))){
  //si no vienen los paramentros por url pasa a la accion por defecto

    $default = action_default;
    $controlador->$default();

  
  }else{
    // echo 'La pagina que buscas no existe (err. param. action ó no existe el action)';
    show_error();
  }
}else{
  // echo 'La pagina que buscas no existe (No existe el controlador)';
  show_error();
}


//incluyo las partes de la maquetacion
require_once 'views/layouts/footer.php';


?>