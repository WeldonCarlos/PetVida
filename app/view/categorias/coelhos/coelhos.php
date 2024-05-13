<style>
    .titulos-produto-dog {
        font-family: "Ubuntu", sans-serif;
        font-weight: 600;
        font-size: 25px;
        margin: 25px 0 10px 34px;
        color: #854bc4;
    }

    .div-super {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;

    }

    .card {

        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        align-items: center;
        width: 200px;
        height: 280px;
        background-color: white;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        gap: 10px;
        margin: 0 12px 12px 0;

    }

    .card img {
        max-width: 130px;
        height: 130px;
        border-radius: 8px;
    }

    .card h2 {
        font-family: font-family: "Ubuntu", sans-serif;
        font-weight: 600;
        margin-bottom: -3px;
    }

    .card p {
        font-family: font-family: "Ubuntu", sans-serif;
        font-weight: 400;
        color: #4f4e4e;
        margin-bottom: 2px;
    }

    .card button {
        background-color: #854bc4;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 3px 8px 3px 8px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-family: font-family: "Ubuntu", sans-serif;
        font-weight: 400;

    }

    .card button:hover {
        background-color: #94cf1c;
        color: white;
    }
</style>



<h1 class="titulos-produto-dog">Para Coelhos e Roedores</h1>
<div class="div-super">

    <?php
    include ("./produtos/produtosCoelhos.php");

    foreach ($produtosCoelhos['coelhos'] as $produto) {

        echo "<div class='card'>";
        echo "<img src='" . $produto['imagem'] . "' alt='" . $produto['produto'] . "'>";
        echo "<h2>" . $produto['produto'] . "</h2>";
        echo "<p>Preço: R$ " . $produto['preco'] . "</p>";
        echo "<button onclick='location.href=\"carrinho.php\"'>Adicionar ao Carrinho</button>";
        echo "</div>";



    }
    ?>

</div>