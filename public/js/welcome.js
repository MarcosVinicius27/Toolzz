

$(document).ready(function () {

    $('#register-form').on('submit', function (e) {
        e.preventDefault();

        var recaptchaToken = grecaptcha.getResponse();

        if (!recaptchaToken) {
            $('.alert-danger').hide();
            $('.alert-success').hide();
            $('.alert-warning').show();
            return;
        }

        var formData = {
            name: $('#name').val(),
            usuario: $('#usuario').val(),
            password: $('#password').val(),
            _token: '{{ csrf_token() }}'
        };

        $.ajax({
            type: 'POST',
            url: '/api/register',
            data: JSON.stringify(formData),
            contentType: 'application/json',
            success: function (response) {
                $('.alert-danger').hide();
                $('.alert-warning').hide();
                $('.alert-success').show();
            },
            error: function (xhr, status, error) {
                $('.alert-success').hide();
                $('.alert-warning').hide();
                $('.alert-danger').show();
            }
        });
    });

    $('#login-form').on('submit', function (e) {
        e.preventDefault();

        var recaptchaToken = grecaptcha.getResponse();

        if (!recaptchaToken) {
            $('.alert-danger').hide();
            $('.alert-success').hide();
            $('.alert-warning').show();
            return;
        }

        var formData = {
            username: $('#username').val(),
            password: $('#password').val(),
            _token: '{{ csrf_token() }}'
        };

        $.ajax({
            type: 'POST',
            url: '/api/login',
            data: JSON.stringify(formData),
            contentType: 'application/json',
            success: function (response) {
                $('.alert-danger').hide();
                $('.alert-warning').hide();
                $('.alert-success').show();
            },
            error: function (xhr, status, error) {
                $('.alert-success').hide();
                $('.alert-warning').hide();
                $('.alert-danger').show();
            }
        });
    });



    document.addEventListener('DOMContentLoaded', function() {
        var logoLight = @json(asset('images/logo.png'));
        var logoDark = @json(asset('images/logo_darkmode.png'));

        document.getElementById('toggle-theme').addEventListener('click', function () {
            var logo = document.getElementById('logo');
            console.log('Button clicked'); // Log para depuração
            if (document.body.classList.toggle('dark-mode')) {
                logo.src = logoDark;
                console.log('Switched to dark mode, logo:', logoDark); // Log para depuração
            } else {
                logo.src = logoLight;
                console.log('Switched to light mode, logo:', logoLight); // Log para depuração
            }
        });
    });

});

