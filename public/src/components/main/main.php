
<main>

<?php

include("./config/dbConfig.php");

switch(@$_REQUEST['page']){
  case "novo":
    include("./view/home/home.php");
    break;  

  default:
    include("./app/view/home/home.php");
    
};

?>
</main>