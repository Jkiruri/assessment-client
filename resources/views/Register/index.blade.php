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
			<div class="row">
				<div class="vegas-container col-md-6 col-12 fxt-bg-img" id="vegas-slide" data-vegas-options='{"delay":5000, "timer":false,"animation":"kenburns", "transition":"swirlLeft", "slides":[{"src": "{{ asset('landing/img/figure/bg29-l-1.jpg') }}"}, {"src": "{{ asset('landing/img/figure/bg29-l-2.jpg') }}"}, {"src": "{{ asset('landing/img/figure/bg29-l-3.jpg') }}"}]}'>
					<div class="fxt-page-switcher">
						<a href="{{ url('/login') }}" class="switcher-text1">Login</a>
						<a href="{{ url('/register') }}" class="switcher-text1 active">Register</a>
					</div>
				</div>
				<div class="col-md-6 col-12 fxt-bg-color">
					<div class="fxt-content">
						<div class="fxt-header">
							<a href="{{ url('/register') }}" class="fxt-logo"><img src="{{ asset('landing/img/logo-29.png') }}" alt="Logo"></a>
						</div>
						<div class="fxt-form">
							<div class="fxt-transformY-50 fxt-transition-delay-1">
								<h2>Register</h2>
							</div>
							<div class="fxt-transformY-50 fxt-transition-delay-2">
								<p>Create an account free and enjoy it</p>
							</div>
							<form id="register-form" method="POST">
                                <input type="hidden" name="fallback_url" value="{{ route('register') }}">
                                @csrf
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
										<i class="flaticon-user"></i>
									</div>
								</div>
                                <div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
										<i class="flaticon-user"></i>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-1">
										<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
										<i class="flaticon-envelope"></i>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input type="password" class="form-control" name="password" placeholder="Password" required="required">
										<i class="flaticon-padlock"></i>
									</div>
								</div>
                                <div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-2">
										<input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required="required">
										<i class="flaticon-padlock"></i>
									</div>
								</div>
								<div class="form-group">
									<div class="fxt-transformY-50 fxt-transition-delay-3">
										<button type="submit" id="register-button" class="fxt-btn-fill">Register</button>
									</div>
								</div>
							</form>
						</div>
						<div class="fxt-footer">
							<div class="fxt-transformY-50 fxt-transition-delay-8">
								<h3>Or Login With:</h3>
							</div>
							<ul class="fxt-socials">
								<li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-9">
									<a href="register-29.html#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-10">
									<a href="register-29.html#" title="twitter"><i class="fab fa-twitter"></i></a>
								</li>
								<li class="fxt-google fxt-transformY-50 fxt-transition-delay-11">
									<a href="register-29.html#" title="google"><i class="fab fa-google-plus-g"></i></a>
								</li>
								<li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-12">
									<a href="register-29.html#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
								</li>
								<li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-13">
									<a href="register-29.html#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var form = document.getElementById('register-form');
            var registerButton = document.getElementById('register-button');
    
            registerButton.addEventListener('click', function (event) {
                event.preventDefault();
    
                var formData = new FormData(form);
                var fallbackUrl = formData.get('fallback_url');
    
                fetch(fallbackUrl, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    }
                })
                .then(function (response) {
                    console.log('Response status:', response.status);
                    return response.json().then(function (data) {
                        console.log('Response data:', data);
                        if (response.ok) {
                            return data;
                        } else {
                            throw new Error(data.error);
                        }
                    });
                })
                .then(function (data) {
                    // Check if redirectUrl is present
                    if (data.redirectUrl) {
                        window.location.href = data.redirectUrl;
                    } else {
                        throw new Error('No redirect URL provided.');
                    }
                })
                .catch(function (error) {
                    // Display error message
                    console.error('Registration error:', error);
                    var errorMessageElement = document.getElementById('error-message');
                    if (errorMessageElement) {
                        errorMessageElement.innerHTML = '<strong>Error!</strong> ' + error.message;
                        errorMessageElement.style.display = 'block';
                    }
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
