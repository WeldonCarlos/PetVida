<link rel="stylesheet" href="./public/src/components/grid-Home/grid-Home.css">

<div class="div-super">

    <?php
    include ("./produtos/produtosHome.php");

    foreach ($produtosHome['varios'] as $produto) {

        echo "<div class='card'>";
        echo "<img src='" . $produto['imagem'] . "' alt='" . $produto['produto'] . "'>";
        echo "<h2>" . $produto['produto'] . "</h2>";
        echo "<p>Preço: R$ " . $produto['preco'] . "</p>";
        echo "<button onclick='location.href=\"carrinho.php\"'>Adicionar ao Carrinho</button>";
        echo "</div>";



    }
    ?>

</div>