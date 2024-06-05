<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toolzz Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            background: #f7f8fa;
        }

        .dark-mode body {
            background: #121212;
        }

        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
        }

        .login-card {
            display: flex;
            width: 900px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .dark-mode .login-card {
            background: #1e1e1e;
            color: white;
        }
        .dark-mode .login-form .form-control:hover {
           border-color: #00acee;
         

        }
        .login-form .form-control:hover {
           border-color: #00acee;
          
        }
        .dark-mode .login-form .form-control {
            background-color: #333;
            /* Cor de fundo escura */
            color: white;
            /* Cor do texto branco */
            border-color: #444;
            /* Cor da borda escura */
        }

        .login-image {
            display: none;
            background: url('https://via.placeholder.com/1280') no-repeat center center;
            background-size: cover;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }

        .login-form {
            width: 100%;
            padding: 40px;
        }

        .login-form h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .login-form .form-group {
            margin-bottom: 20px;
        }

        .login-form .btn-primary {
            width: 100%;
        }

        .login-form .social-login {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .login-form .social-login button {
            width: 23%;
        }

        .login-form .forgot-password {
            text-align: center;
        }

        .dark-mode .login-form .social-login .btn-outline-dark {
            /* background: white; */
            color: black;
            border-color: white;
            color: white;
        }

        .dark-mode .login-form .social-login .btn-outline-dark:hover {
            /* background: white; */
            color:#00acee;
            border-color: #00acee;
          

           
        }

        .dark-mode .btn .custom-logo {
            color: white;
            border: 2px solid white;
        }
        
        .btn .custom-logo {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 18px;
            /* Largura do logo */
            height: 18px;
            /* Altura do logo */
            /* background-color: #333; Cor de fundo do logo */
            border-radius: 5px;
            /* Bordas arredondadas */
            border: 2px solid black;
            /* Cor da borda */
            color: black;
            /* Cor do texto */
            font-size: 9px;
            /* Tamanho do texto */
            font-weight: bold;
            /* Peso do texto */
            font-family: Arial, sans-serif;
            /* Fonte do texto */
            margin-right: 5px;
            /* Espaçamento entre o logo e o texto do botão */
        }
        .btn-outline-dark:hover {
            border-color: inherit; /* Mantém a cor da borda original */
            background-color: inherit; /* Mantém a cor de fundo original */
            color: inherit; /* Mantém a cor do texto original */
        }

        .btn-outline-dark:hover {
            border-color: #00acee;
           

            /* Cor azul para a borda */
        }

        .btn-outline-dark:hover .bi {
            color: #00acee;
            border-color: #00acee;
            

            /* Cor azul para o ícone */
        }


        @media (min-width: 768px) {
            .login-card {
                flex-direction: row;
            }

            .login-image {
                display: block;
                width: 50%;
            }

            .login-form {
                width: 50%;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-image"></div>
            <div class="login-form">
                <div class="d-flex justify-content-between">
                    <a href="#"><img src="{{ asset('images/logo.png') }}" id="logo" alt="Toolzz Logo" width="80"></a>
                    <a href="#">Criar conta</a>
                </div>
                <h1>Boas-vindas!</h1>
                <p>Entre utilizando uma das opções abaixo</p>
                <div class="social-login">
                    <button class="btn btn-outline-dark">
                        <div class="bi custom-logo"><b>TZ</b></div>
                    </button>
                    <button class="btn btn-outline-dark"><i class="bi bi-facebook"></i></button>
                    <button class="btn btn-outline-dark"><i class="bi bi-apple"></i></button>
                    <button class="btn btn-outline-dark"><i class="bi bi-twitter"></i></button>
                </div>
                <p class="text-center">ou</p>
                <form>
                    <div class="form-group">
                        <label for="username">Usuário</label>
                        <input type="text" class="form-control" id="username" placeholder="Usuário">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" id="password" placeholder="Senha">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Manter conectado</label>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
                <div class="forgot-password">
                    Esqueceu sua senha? <a href="#">Recuperar senha</a>
                </div>
                <div class="text-center mt-3">
                    <button id="toggle-theme" class="btn btn-secondary">Toggle Dark Mode</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('toggle-theme').addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
        });
    </script>
</body>

</html>