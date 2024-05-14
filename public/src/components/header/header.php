<link rel="stylesheet" href="./public/src/components/header/header.css">

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white  "
        style=" height: 30px; align-items: center; margin-top:40px; ">
        <div class="container-fluid" style=" margin: 0 10px 0 10px ">
            <a class="navbar-brand" href="index.php?page=home"><img id="imagem_Logo"
                    src="./public/src/img/logo_petVida.png"
                    alt="logo marca da pet vida uma patinha cor verde e o nome"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  justify-content-end " id="navbarSupportedContent">

                <ul class="navbar-nav  mb-2 mb-lg-0 "
                    style=" color:#f2f2f2; font-family: Ubuntu, sans-serif; font-weight: 500; font-style: normal; font-size: 20px; ">
                    <li class="nav-item">
                        <a class="nav-link active" style="color:#94cf1c;" aria-current="page"
                            href="index.php?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #94cf1c;" href="index.php?page=login">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</header>

<?php
include ("./public/src/components/navCateg/navCateg.php");

?>