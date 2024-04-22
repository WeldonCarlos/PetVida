<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white "  style=" height: 30px; align-items: center; margin-top:40px; " >
        <div class="container-fluid" style=" margin: 0 10px 0 10px ">
            <a class="navbar-brand" href="index.php?page=home"><img src="./public/src/img/logo_petVida.png" alt="logo marca da pet vida uma patinha cor verde e o nome"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=login">Login</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    
</header>

<?php
include("./public/src/components/navCateg/navCateg.php");

?>