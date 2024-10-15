<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <title>เข้าสู่ระบบ</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('asset/Frontend/images/apple-touch-icon.png') }}">

    <!-- THEME CSS -->
    <link rel="stylesheet" href="{{ asset('asset/Frontend/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/Frontend/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/Frontend/plugins/plugins/slick-carousel/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/Frontend/plugins/slick-carousel/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/Frontend/plugins/css/style.css') }}">

    <style>
        body {
            background: linear-gradient(to right, #00c6ff, #0072ff); /* Gradient background */
            font-family: 'Arial', sans-serif;
            color: #000000; /* Text color */
        }

        .login-signup {
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2); /* Shadow */
            background: rgba(255, 255, 255, 0.9); /* Background for login block */
            padding: 10px; /* Inner padding */
            margin-top: 50px; /* Top margin */
            transition: transform 0.2s; /* Hover effect */
        }

        .login-signup:hover {
            transform: translateY(-10px); /* Raise on hover */
        }

        h3 {
            color: #000000; /* Header color */
            margin-bottom: 20px; /* Space below the header */
        }

        .btn-primary {
            background-color: #0072ff; /* Button color */
            border: none; /* No border */
            border-radius: 5px; /* Rounded button */
            transition: background-color 0.3s ease, transform 0.2s; /* Hover effect */
        }

        .btn-primary:hover {
            background-color: #004c9c; /* Change color on hover */
            transform: translateY(-2px); /* Raise on hover */
        }

        .alert {
            margin-bottom: 20px; /* Space from bottom */
        }

        .form-group label {
            font-weight: bold; /* Make labels bold */
            color: #333; /* Label color */
        }

        .form-control {
            border-radius: 5px; /* Rounded corners for inputs */
            border: 1px solid #002757; /* Input border color */
            transition: border-color 0.3s; /* Transition for border color */
        }

        .form-control:focus {
            border-color: #4d5258; /* Border color on focus */
            box-shadow: 0 0 5px rgba(22, 60, 101, 0.5); /* Shadow on focus */
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #000000; /* Footer text color */
        }
    </style>
</head>

<body>
    <section class="login-signup section-padding">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <div class="login">
                        <h3 class="mt-4">เข้าสู่ระบบ</h3>
                        <p class="mb-5">กรุณากรอกอีเมลและรหัสผ่านที่ถูกต้อง</p>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}" class="login-form row">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="loginemail">อีเมล</label>
                                    <input type="text" id="loginemail" class="form-control" name="email" placeholder="กรุณากรอกอีเมล" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="loginPassword">รหัสผ่าน</label>
                                    <input type="password" id="loginPassword" class="form-control" name="password" placeholder="รหัสผ่าน" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary" type="submit">เข้าสู่ระบบ</button>
                                <p class="mt-5 mb-0">ยังไม่ได้เป็นสมาชิก? <a href="{{ route('register') }}">ลงทะเบียนที่นี่</a></p>
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('ลืมรหัสผ่าน?') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="footer-text">
        <p>&copy; {{ date('Y') }} Book Haven. สงวนลิขสิทธิ์.</p>
    </div>

    <!-- THEME JAVASCRIPT FILES -->
    <script src="{{ asset('asset/Frontend/plugins/jquery/jquery.js') }}"></script>
    <script src="{{ asset('asset/Frontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/Frontend/plugins/slick-carousel/slick.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="{{ asset('asset/Frontend/plugins/google-map/gmap.js') }}"></script>
    <script src="{{ asset('asset/Frontend/plugins/js/custom.js') }}"></script>
</body>

</html>
