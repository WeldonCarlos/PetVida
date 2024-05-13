<?php

include ("./dbConfig.php");


switch (@$_REQUEST['page']) {

  case "home":
    include ("./app/view/home/home.php");
    break;

  case "login":
    include ("./app/view/login/login.php");
    break;

  case "cadastro":
    include ("./app/view/cadastro/cadastro.php");
    break;

  case "salvar":
    include ("./salvar-usuario.php");
    break;

  case "dog":
    include ("./app/view/categorias/cachorros/cachorros.php");
    break;

  case "cat":
    include ("./app/view/categorias/gatos/gatos.php");
    break;

  case "aves":
    include ("./app/view/categorias/avesPassaros/aves.php");
    break;

  case "coelhos":
    include ("./app/view/categorias/coelhos/coelhos.php");
    break;

  case "peixes":
    include ("./app/view/categorias/peixes/peixes.php");
    break;

  case "repteis":
    include ("./app/view/categorias/repteis/repteis.php");
    break;



  default:
    include ("./app/view/home/home.php");

}
;

