

<div id="login-container">
    <h1>Login</h1>
    <form action="login.php" method="POST">
        <label for="email">Usuário</label>
        <input type="text" name="usuario" id="email" placeholder="Digite seu e-mail" autocomplete="on" required>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="password" placeholder="Digite a sua senha" required>
        <input type="submit" value="Login">
    </form>

    <div id="register-container">
        <p>Ainda não tem uma conta?</p>
        <a href="index.php?page=cadastro">Registrar</a>
    </div>
</div>






<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Helvetica;
        color: #323232;
        border: none;
    }

    body {
        background-color: #fffff;
        background-size: cover;
        background-position-y: -70px;
    }

    h1 {
        font-weight: bold;
        font-family: Ubuntu, sans-serif;
        font-weight: 500;
        font-style: normal;
        font-size: 20px;
        color: #764ea0;
    }
   ::placeholder{
    color: #764ea0;
   }
    textarea:focus,
    input:focus {
        outline: none;
    }

    a,
    label {
        font-size: .8rem;
        /* Não fica fixo, ajusta a fonte ao dispositivo */
    }

    a:hover {
        color: #08558B;
    }

    /* container-login */
    #login-container {
        background-color: #f7f7f7;
        width: 400px;
        margin-left: auto;
        margin-right: auto;
        padding: 20px 30px;
        margin-top: 4vh;
        border-radius: 10px;
        text-align: center;
        border: 1px solid #764ea0;
    }

    /* formulario */
    form {
        margin-top: 30px;
        margin-bottom: 40px;
    }

    label,
    input {
        display: block;
        width: 100%;
        text-align: left;
    }

    label {
        font-weight: bold;
        font-family: Ubuntu, sans-serif;
        font-weight: 500;
        font-style: normal;
        font-size: 16px;
        color: #764ea0;
        margin-bottom: 5px;
    }

    input {
        border-bottom: 2px solid #764ea0;
        padding: 10px;
        font-size: 1rem;
        margin-bottom: 20px;
    }

    input:focus {
        border-bottom: 2px solid #94cf1c;
    }

    #forgot-pass {
        text-align: right;
        display: block;
    }

    input[type="submit"] {
        text-align: center;
        text-transform: uppercase;
        font-weight: bold;
        border: none;
        height: 40px;
        border-radius: 20px;
        margin-top: 30px;
        color: #FFFF;
        background-color: #764ea0;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #7831c4;
        transition: .5s;
    }

    /* redes sociais */
    #social-container,
    #social-container p {
        margin-bottom: 20px;
    }

    #social-container i {
        height: 40px;
        width: 40px;
        border-radius: 50%;
        line-height: 40px;
        color: #FFFF;
        margin: 0 5px;
        cursor: pointer;
    }

    /* registrar */
    #register-container p {
        margin-bottom: 10px;
        color: #764ea0;
    }
</style>