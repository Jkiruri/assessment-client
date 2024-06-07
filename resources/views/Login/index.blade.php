<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SIL ASSESSMENT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('landing/img/favicon.ico') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('landing/css/fontawesome-all.min.css') }}">
    <!-- Vegas CSS -->
    <link rel="stylesheet" href="{{ asset('landing/css/vegas.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('landing/font/flaticon.css') }}">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('landing/style.css') }}">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    <section class="fxt-template-animation fxt-template-layout29">
        <div class="container-fluid">
            <div id="error-message" class="alert alert-danger alert-dismissible alert-alt fade show"
                style="display: none;">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
                <strong>Error!</strong> Login failed.
            </div>
            <div class="row">
                <div class="vegas-container col-md-6 col-12 fxt-bg-img" id="vegas-slide"
                    data-vegas-options='{"delay":5000, "timer":false,"animation":"kenburns", "transition":"swirlLeft", "slides":[{"src": "{{ asset('landing/img/figure/bg29-l-1.jpg') }}"}, {"src": "{{ asset('landing/img/figure/bg29-l-2.jpg') }}"}, {"src": "{{ asset('landing/img/figure/bg29-l-3.jpg') }}"}]}'>
                    <div class="fxt-page-switcher">
                        <a href="{{ url('/login') }}" class="switcher-text1 active">Login</a>
                        <a href="{{ url('/register') }}" class="switcher-text1">Register</a>
                    </div>
                </div>
                <div class="col-md-6 col-12 fxt-bg-color">
                    <div class="fxt-content">
                        <div class="fxt-header">
                            <a href="/" class="fxt-logo"><img src="{{ asset('landing/img/logo-29.png') }}"
                                    alt="Logo" /></a>
                        </div>
                        <div class="fxt-form">
                            <div class="fxt-transformY-50 fxt-transition-delay-1">
                                <h2>Log In</h2>
                            </div>
                            <div class="fxt-transformY-50 fxt-transition-delay-2">
                                <p>Log in to continue in our website</p>
                            </div>
                            <form id="login-form" method="POST">
                                <input type="hidden" name="fallback_url" value="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Email Address" required="required">
                                        <i class="flaticon-envelope"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-5">
                                        <input type="password" class="form-control" name="password"
                                            placeholder="Password" required="required">
                                        <i class="flaticon-padlock"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-6">
                                        <div class="fxt-content-between">
                                            <button type="submit" id="login-button" class="fxt-btn-fill">Log
                                                in</button>
                                            <a href="#" class="switcher-text2">Forgot Password</a>
                                        </div>
                                    </div>
                                </div>
                            </form>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var form = document.getElementById('login-form');
            var loginButton = document.getElementById('login-button');
    
            loginButton.addEventListener('click', function (event) {
                event.preventDefault();
    
                var formData = new FormData(form);
                var fallbackUrl = formData.get('fallback_url');
    
                fetch(fallbackUrl, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json'
                    }
                })
                .then(function (response) {
                    if (response.ok) {
                        return response.json();
                    } else {
                        return response.json().then(function (errorData) {
                            throw new Error(errorData.error || 'Login failed. Please check your credentials and try again.');
                        });
                    }
                })
                .then(function (data) {
                    // Redirect to the appropriate page based on the redirectUrl
                    window.location.href = data.redirectUrl;
                })
                .catch(function (error) {
                    // Display error message
                    console.error('Login error:', error);
                    var errorMessageElement = document.getElementById('error-message');
                    errorMessageElement.innerHTML = '<strong>Error!</strong> ' + error.message;
                    errorMessageElement.style.display = 'block';
                });
            });
        });
    </script>
    


    <!-- jquery-->
    <script src="{{ asset('landing/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('landing/js/bootstrap.min.js') }}"></script>
    <!-- Imagesloaded js -->
    <script src="{{ asset('landing/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Vegas js -->
    <script src="{{ asset('landing/js/vegas.min.js') }}"></script>
    <!-- Validator js -->
    <script src="{{ asset('landing/js/validator.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('landing/js/main.js') }}"></script>

</body>

</html>
