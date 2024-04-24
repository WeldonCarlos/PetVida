<?php

session_start();
if (empty($_SESSION)) {
    print "<script> location.href='index.php'</script>";
}
?>
<nav class="navbar navbar-ligth bg-ligth">
    <div class="container-fluid">
        <a class="navbar-brand"> * Area do Cliente *  </a>  <br>

        <?php 
        
        print "Olá, "  . $_SESSION["nome"]; 
        print "<a href='../../../logout.php'> Sair </a>";
        ?>
    </div>
</nav>

