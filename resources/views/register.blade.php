@include('include.header')


<div class="container mt-5">
    <h1 class="mt-4">Boas-vindas!</h1>
    <a href="/">Login</a>

    <p>Entre utilizando uma das opções abaixo</p>

    <div class="alert alert-success" role="alert" style="display: none;">
        Usuário criado com sucesso!
    </div>

    <div class="alert alert-danger" role="alert" style="display: none;">
        Ocorreu um erro ao criar um usuário!
    </div>

    <div class="alert alert-warning" role="alert" style="display: none;">
        Por favor, complete o reCaptcha.
    </div>

    <form id="register-form">
        <div class="form-group mt-4">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="nome" required>
        </div>
        <div class="form-group mt-4">
            <label for="username">Usuário</label>
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required>
        </div>
        <div class="form-group mt-4">
            <label for="password">Senha</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>
        </div>
        <div class="form-group mt-4">
            <div class="g-recaptcha" data-sitekey="6LeA0PIpAAAAAFYvjjwvDPRdUZqCXobYraHTPcZS"></div>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Entrar</button>
    </form>
</div>
@include('include.footer')