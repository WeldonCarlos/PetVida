<?php

include ("../../../dbConfig.php");


switch (@$_REQUEST['dashpage']) {

    case "consulta":
        include ("../../../app/view/dash/pageDash/consultaPet/consultaPet.php");
        break;

    case "tosa":
        include ("../../../app/view/dash/pageDash/banhoETosa/banhoTosa.php");
        break;

    case "hotelzinho":
        include ("../../../app/view/dash/pageDash/hotelzinho/hotelzinho.php");
        break;



    default:
        include ("../../../app/view/dash/pageDash/consultaPet/consultaPet.php");





}
;
?>