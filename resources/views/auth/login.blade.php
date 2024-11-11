<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mediplus - Registration</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Custom Styles -->
    <style>
        body {
            background: url('img/background.jpg') no-repeat center center fixed;
            background-size: cover;
            backdrop-filter: blur(8px);
            font-family: 'Poppins', sans-serif;
        }

        .form-container {
            width: 80%;
            max-width: 600px;
            padding: 2rem;
            background: linear-gradient(to right, #55112e 70%, rgba(85, 17, 46, 0.8));
            color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            background-color: #fff;
            color: #55112e;
            border: none;
        }

        .btn-custom:hover {
            background-color: #f1f1f1;
            color: #000;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="form-container">
            <div class="text-center mb-4">
                <img src="img/logo.jpg" alt="Company Logo" class="img-fluid" style="max-height: 64px;">
            </div>
            <h3 class="text-center mb-4">Login</h3>
             <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email Field -->
                <div class="form-group">
                    <label for="email" :value="__('Email')">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" 
                        :value="old('email')" required autofocus autocomplete="username" placeholder="Enter email"
                        required>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Password Field -->
                <div class="form-group">
                    <label for="password" :value="__('Password')">Password</label>
                    <input id="password" class="form-control" type="password" name="password" placeholder="Password"
                        required autocomplete="current-password" required>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="d-flex justify-content-between align-items-center mt-4">
                    @if (Route::has('password.request'))
                        <a class="text-decoration-none text-light"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <!-- Login Button -->
                    <button class="btn ms-3" style="cursor: pointer">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
            <!-- Sign Up Button (Left of Login) -->
            <div class="text-center mt-4">
                <a href="{{ route('register') }}" class="btn btn-custom">
                    {{ __('Don\'t have an account? Sign up') }}
                </a>
            </div>
        </div>
    </div>

    <!-- Bootstrap and jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
