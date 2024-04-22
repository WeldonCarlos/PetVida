
<link rel="stylesheet" href=" ./public/src/components/cardLogin/login.css">

<div id="login-container">
   
<h1>Login</h1>
    <form action="login.php" method="POST">
        <label for="email">Usuário</label>
        <input type="text" name="usuario" id="email" placeholder="Digite seu e-mail" autocomplete="on" required>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="password" placeholder="Digite a sua senha" required>
        <a href="#" id="forgot-pass">Esqueceu a senha?</a>
        <input type="submit" value="Login">
    </form>

    <div id="register-container">
        <p>Ainda não tem uma conta?</p>
        <a href="cadastro.php">Registrar</a>
    </div>

</div>