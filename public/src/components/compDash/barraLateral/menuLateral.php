
<style>
    
.containerGeral{
    display:flex; 
    width: 22%;
    height: 100vh;
    background-color: #854bc4;
    flex-direction: column;
    gap: 40px;
}

.navegacaoLateral{
    display: flex;
    padding-left: 12px;
   

}


.container-Img-Logo{
    margin: 8px 0 0 17px;
}

.navegacaoLateral li{
   
 list-style-type: none;
     
}




.navegacaoLateral a{
    text-decoration: none;
    color: white;
    width: 100%;
    flex-wrap: nowrap;
    font-size: 14px;
    font-family: "Ubuntu", sans-serif;
    font-weight: 600;
    margin-top:12px;
    transition: color 0.3s ease;

     
   
}

.navegacaoLateral a:hover{
   
    color: #73d000;
     
   
}


.lista-nav{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    gap: 20px;
   
}

.opcoes-nav{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: row;
    width: 100%;
    gap: 13px;
}

.opcoes-nav img{
    width: 35px;
   
   
}

</style>




<section class="containerGeral">
    <div class="container-Img-Logo">
        <img src="../../../public/src/img/dash_painel_lateral/logoDash.png" alt=" logo da petVida">
    </div>
    <nav class="navegacaoLateral">


        <ul class="lista-nav" >
            
    
            <li class="opcoes-nav">
                <img src="../../../public/src/img/dash_painel_lateral/tosa-de-animais.png" alt=" logo da petVida">
                <a href="dashboard.php?dashpage=tosa">Agendar banho e tosa</a>
            </li>
            <li class="opcoes-nav">
                <img src="../../../public/src/img/dash_painel_lateral/doctor-dog.png" alt=" logo da petVida">
                <a href="dashboard.php?dashpage=consulta">Agendar consulta</a>
            </li>

            <li class="opcoes-nav">

                <img src="../../../public/src/img/dash_painel_lateral/hotel-de-animais.png" alt=" logo da petVida">
                <a href="dashboard.php?dashpage=hotelzinho">Agendar hotelzinho</a>
                
            </li>
        </ul>
    </nav>
</section>