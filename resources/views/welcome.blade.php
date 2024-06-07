@include('include.header')
<div class="login-container">
    <div class="login-image">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="button-container">

                <div class="row">
                    <button id="toggle-theme"><i class="bi bi-moon-fill"></i></button>
                </div>
                <div class="row2">
                    <button id="toggle-theme2"><i class="bi bi-arrow-left-circle"></i></button>
                </div>

            </div>

            <div class="carousel-indicators" style="justify-content:left;">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <button class="seta" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="seta2" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/foto.jpg')}}" alt="">
                    <div class="carousel-caption d-none d-md-block" style="text-align:left;padding-bottom: 10.25rem;">
                        <span class="tag">cursos</span>
                        <h5 class="mt-3">Plataforma de cursos completa</h5>
                        <p>Lorem ipsum nisl etiam himenaeos ligula augue vehicula gravida tincidunt, etiam magna sapien gravida sodales sed vel pulvinar suspendisse, morbi mi proin urna ornare posuere donec aptent. orci vivamus primis fusce lacinia libero nostra aliquam vestibulum</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/foto.jpg')}}" alt="">
                    <div class="carousel-caption d-none d-md-block" style="text-align:left;padding-bottom: 10.25rem;">
                        <span class="tag">cursos</span>
                        <h5 class="mt-3">Plataforma de cursos completa 2</h5>
                        <p>Lorem ipsum nisl etiam himenaeos ligula augue vehicula gravida tincidunt, etiam magna sapien gravida sodales sed vel pulvinar suspendisse, morbi mi proin urna ornare posuere donec aptent. orci vivamus primis fusce lacinia libero nostra aliquam vestibulum</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/foto.jpg')}}" alt="">
                    <div class="carousel-caption d-none d-md-block" style="text-align:left;padding-bottom: 10.25rem;">
                        <span class="tag">cursos</span>
                        <h5 class="mt-3">Plataforma de cursos completa 3</h5>
                        <p>Lorem ipsum nisl etiam himenaeos ligula augue vehicula gravida tincidunt, etiam magna sapien gravida sodales sed vel pulvinar suspendisse, morbi mi proin urna ornare posuere donec aptent. orci vivamus primis fusce lacinia libero nostra aliquam vestibulum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="login-form">
        <div class="d-flex justify-content-between">
            <a href="#"><img src="{{ asset('images/logo.png') }}" id="logo" alt="Toolzz Logo" width="80"></a>
            <a href="{{route('criarConta')}}">Criar conta</a>
        </div>
        <h1 class="mt-4">Boas-vindas!</h1>
        <p>Entre utilizando uma das opções abaixo</p>

        <div class="social-login mt-4">
            <button class="btn btn-outline-dark"><i class="bi bi-google"></i></button>
            <button class="btn btn-outline-dark"><i class="bi bi-facebook"></i></button>
            <button class="btn btn-outline-dark"><i class="bi bi-apple"></i></button>
            <button class="btn btn-outline-dark"><i class="bi bi-twitter"></i></button>
        </div>
        <div class="hr-container mt-4">
            <hr>
            <p>ou</p>
            <hr>
        </div>


        <div class="alert alert-success" role="alert" style="display: none;">
            Login realizado com sucesso!
        </div>

        <div class="alert alert-danger" role="alert" style="display: none;">
            Acesso não autorizado!
        </div>

        <div class="alert alert-warning" role="alert" style="display: none;">
            Por favor, complete o reCaptcha.
        </div>

        <form id="login-form">
            <div class="form-group">
                <label for="username">Usuário</label>
                <div class="input-icon">
                <i class="bi bi-person-fill"></i>
                    <input type="text" class="form-control" id="username" name="username" placeholder="aluno290_1u" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <div class="input-icon">
                <i class="bi bi-lock-fill"></i>
                <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                </div>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Manter conectado</label>
            </div>
            <div class="centraliza">

                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LeA0PIpAAAAAFYvjjwvDPRdUZqCXobYraHTPcZS"></div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-right"></i> Entrar</button>
        </form>
        <div class="forgot-password mt-4">
            Esqueceu sua senha? <a href="#">Recuperar senha</a>
        </div>
    </div>
</div>
@include('include.footer')