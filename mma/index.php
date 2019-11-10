<?php

  $modulo = "index";

  if ( isset($_GET["m"]) )
  {
    switch( $_GET["m"] ){
      
      case "home":
        $modulo = "index";
        break;

      case "eventos":
        $modulo = "eventos";
        break;

      case "peleadores":
        $modulo = "peleadores";
        break;

      case "noti":
        $modulo = "noticias";
        break;

    }
  }

  include "vistas/" . $modulo . "/index.php";


?>