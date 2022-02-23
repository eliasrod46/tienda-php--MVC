<?php

//funcion que tiene el include generico
function controller_autoload($classname){
  include 'controllers/'. $classname .'.php';
}

//funcion que itera entre todos los controladores
spl_autoload_register('controller_autoload');

?>