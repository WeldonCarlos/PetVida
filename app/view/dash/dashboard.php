<?php

session_start();
if (empty($_SESSION)) {
  print "<script> location.href='index.php'</script>";
}


?>

<link rel="stylesheet" href="../../../public/src/css/geral.css">

  <section style="display:flex; flex-direction:row; ">
    <?php
    include ("../../../public/src/components/compDash/barraLateral/menuLateral.php");


    ?>

    <section style="display:flex; flex-direction:column; width: 100%; ">

      <?php
      include ("../../../public/src/components/compDash/barraTopo/barraTopo.php");
      include ("../../../public/src/components/compDash/mainDash/mainDash.php");

      ?>
    </section>

  </section>



