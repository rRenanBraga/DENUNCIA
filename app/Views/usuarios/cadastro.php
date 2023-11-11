<div class="container-md">
    <div class="card">

    <link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/formulario.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

        <div class="card-body">

        <body>
    <div class="container">
        <div class="form-container">
            <form id="loginForm" class="form">
                <h2>Login</h2>
                <label for="loginUsername">Usuário:</label>
                <input type="text" id="loginUsername" name="loginUsername" required>
                <label for="loginPassword">Senha:</label>
                <input type="password" id="loginPassword" name="loginPassword" required>
                <button type="submit">Entrar</button>
            </form>
        </div>

        <div class="form-container">
            <form id="signupForm" class="form">
                <h2>Cadastro</h2>
                <label for="signupUsername">Usuário:</label>
                <input type="text" id="signupUsername" name="signupUsername" required>
                <label for="signupEmail">Email:</label>
                <input type="email" id="signupEmail" name="signupEmail" required>
                <label for="signupPassword">Senha:</label>
                <input type="password" id="signupPassword" name="signupPassword" required>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
        </div>
    </div>
</div>

