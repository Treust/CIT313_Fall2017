<?php

function myLoad($class)
{
    include_once('controllers/controller.class.php');
    include_once('models/model.class.php');
    include_once('models/user.class.php');
    include_once('load.class.php');
}

spl_autoload_register('myLoad');

  new Controller();

  
 ?>

