<link rel="stylesheet" href="./app/view/categorias/css/categorias.css">


<h1 class="titulos-produto-dog">Para Cachorros</h1>
<div class="div-super">

    <?php
    include ("./produtos/produtosDog.php");

    foreach ($produtos['cachorro'] as $produto) {

        echo "<div class='card'>";
        echo "<img src='" . $produto['imagem'] . "' alt='" . $produto['produto'] . "'>";
        echo "<h2>" . $produto['produto'] . "</h2>";
        echo "<p>Preço: R$ " . $produto['preco'] . "</p>";
        echo "<button onclick='location.href=\"carrinho.php\"'>Adicionar ao Carrinho</button>";
        echo "</div>";



    }
    ?>

</div>