<?php

function conectarse()
{
   @session_start();
   echo $_SESSION['h2o'].$_SESSION['mgoc'];
   if (!($link=mysql_connect("localhost",$_SESSION['h2o'],$_SESSION['mgoc'])))
   {
      echo "Error conectando a la base de datos .";
      exit();
   }
  
   if (!mysql_select_db($_SESSION['lioc'],$link))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
}

?>