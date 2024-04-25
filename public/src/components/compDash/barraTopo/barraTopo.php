<link rel="stylesheet" href="../../../public/src/components/compDash/barraTopo/barraTopo.css">

<header class="navTopo">
    <nav class="nav">

        <div class="nav-content">
            <?php
           
            if (isset($_SESSION["nome"])) {
                echo '<span class="bem-Vindo">Seja bem vindo, ' . $_SESSION["nome"] . '</span>';
                echo '<a id="ancoraSair" href="../../../logout.php">Sair</a>';
            } else {
                echo '<span class="bem-Vindo">Bem vindo!</span>';
            }
            ?>
        </div>

    </nav>
</header>