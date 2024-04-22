
<?php

include("./config/dbConfig.php");


switch(@$_REQUEST['page']){

  case "home":
    include("./app/view/home/home.php");
    break; 
    
  case "login":
    include("./app/view/login/login.php");
    break;  

  default:
    include("./app/view/home/home.php");
    
};




?>