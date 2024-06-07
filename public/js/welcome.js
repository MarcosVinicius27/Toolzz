

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

});

