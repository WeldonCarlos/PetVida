<style>
    .navTopo{
    display: flex;
    justify-content: flex-end;
    height: 55px;
    width: 100%;
    background-color: white;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); /* Sombra */
    align-items: center;
   
    
}

.nav-content{
    display: flex;
    padding-right: 20px;
    gap: 20px;
    align-items: center;
}

#ancoraSair{
    text-decoration: none;
    background-color: #854bc4;
    color: white;
    padding: 6px 18px;
    border-radius: 6px;
   
    transition: background-color 0.3s ease;
    font-family: "Ubuntu", sans-serif;
    font-weight: 600;
}

.bem-Vindo{
    font-size: 18px;
    font-family: "Ubuntu", sans-serif;
    color: #854bc4;
    font-weight: 500;
}

#ancoraSair:hover {
    
    background-color: #61368f;
     
}
</style>


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