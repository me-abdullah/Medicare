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
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="form-container">
            <div class="text-center mb-4">
                <img src="img/logo.jpg" alt="Company Logo" class="img-fluid" style="max-height: 64px;">
            </div>
            <h3 class="text-center mb-4">Register</h3>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name Field -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required>
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
                    <small class="form-text" style="color: #e2e2e2;">We'll never share your email with anyone else.</small>
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>

                <!-- Confirm Password Field -->
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password" required>
                </div>

                <!-- Role Selection Field -->
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" name="role" id="role" required>
                        <option value="" disabled selected>Select your Role</option>
                        <option value="doctor">Doctor</option>
                        <option value="patient">Patient</option>
                        <option value="management">Management</option>
                    </select>
                </div>

                <!-- Register Button -->
                <div class="d-flex justify-content-between align-items-center mt-4">
                    <a href="{{ route('login') }}" class="text-decoration-none" style="color: #f1f1f1;">Already registered?</a>
                    <button type="submit" class="btn btn-custom">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap and jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
