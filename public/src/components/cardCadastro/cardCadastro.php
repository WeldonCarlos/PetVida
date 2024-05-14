
<link rel="stylesheet" href="./public/src/components/cardCadastro/cardCadastro.css">



<div class="container">
    <form action="?page=salvar" method="POST" class="form-post  ">

        <input type="hidden" name="acao" value="cadastrar">

        <div class="titulo"> <h1>Novo Usuário </h1></div>

         <div class="mb-3">
            <label for="inputNome">Nome</label>
            <div class="col-sm-12">
                <input type="text" name="nome" class="form-control" id="inputNome">
            </div>
        </div>
        <div class="mb-3">
            <label for="inputEmail">Email</label>
            <div class="col-sm-12">
                <input type="email" name="email" class="form-control" id="inputEmail">
            </div>
        </div>

        <div class="mb-3">
            <label for="inputUsuario">Usuario</label>
            <div class="col-sm-12">
                <input type="text" name="usuario" class="form-control" id="inputUsuario">
            </div>
        </div>

        <div class="mb-3">
            <label for="inputPassword" >Senha</label>
            <div class=" col-sm-12">
                <input type="password" name="senha" class="form-control" id="inputPassword ">
        </div>
</div>


<div class="d-grid gap-3 col-sm-12  ">
    <button class="btn btn-primary" type="submit">Enviar</button>
</div>


</form>

</div>