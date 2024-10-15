<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <title>ลงทะเบียน</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('asset/Frontend/images/apple-touch-icon.png')}}">

    <!-- THEME CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('asset/Frontend/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('asset/Frontend/plugins/font-awesome/css/font-awesome.min.css')}}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('asset/Frontend/plugins/plugins/slick-carousel/slick.css')}}">
    <link rel="stylesheet" href="{{asset('asset/Frontend/plugins/slick-carousel/slick-theme.css')}}">
    <!-- main stylesheet -->
    <link rel="stylesheet" href="{{asset('asset/Frontend/plugins/css/style.css')}}">

    <style>
        body {
            background-color: #e6f0ff; /* พื้นหลังของหน้า */
            font-family: 'Arial', sans-serif;
        }

        .login-signup {
            background: #ffffff; /* พื้นหลังของฟอร์ม */
            border-radius: 10px; /* มุมโค้ง */
            padding: 40px; /* ระยะห่างภายใน */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* เงา */
            margin-top: 50px; /* ระยะห่างด้านบน */
            transition: transform 0.2s; /* เอฟเฟคเมื่อชี้ */
        }

        .login-signup:hover {
            transform: translateY(-3px); /* ยกขึ้นเมื่อชี้ */
        }

        h3 {
            color: #007bff; /* สีหัวข้อ */
            margin-bottom: 20px; /* ระยะห่างด้านล่าง */
        }

        .signup p {
            font-size: 1.1em; /* ขนาดฟอนต์ของคำอธิบาย */
            margin-bottom: 30px; /* ระยะห่างด้านล่าง */
        }

        .form-group {
            margin-bottom: 20px; /* ระยะห่างระหว่างฟอร์ม */
        }

        .form-group label {
            font-weight: bold; /* ทำให้ฟอนต์ของ label หนา */
            margin-bottom: 5px; /* ระยะห่างด้านล่างของ label */
            color: #333; /* สีของ label */
        }

        .form-control {
            border-radius: 5px; /* มุมโค้งของฟอร์ม */
            border: 1px solid #007bff; /* กรอบฟอร์มเป็นสีฟ้า */
            padding: 10px; /* ระยะห่างภายใน */
            transition: border-color 0.3s; /* เอฟเฟคเมื่อชี้ */
        }

        .form-control:focus {
            border-color: #0056b3; /* เปลี่ยนสีเมื่อฟอร์มถูกเลือก */
            box-shadow: 0 0 5px rgba(0, 86, 179, 0.5); /* เงาเมื่อเลือกฟอร์ม */
        }

        .btn-primary {
            background-color: #007bff; /* สีปุ่ม */
            border: none; /* ไม่มีกรอบ */
            color: #fff; /* สีข้อความปุ่ม */
            border-radius: 5px; /* มุมปุ่มโค้ง */
            padding: 10px 20px; /* ระยะห่างภายในปุ่ม */
            font-size: 1.1em; /* ขนาดฟอนต์ปุ่ม */
            transition: background-color 0.3s ease, transform 0.3s ease; /* เอฟเฟคเมื่อชี้ */
            width: 100%; /* ปรับขนาดปุ่มให้เต็ม */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* เปลี่ยนสีเมื่อชี้ */
            transform: translateY(-2px); /* ยกขึ้นเมื่อชี้ */
        }

        .mt-5 {
            margin-top: 30px; /* ระยะห่างด้านบน */
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9em;
            color: #777; /* สีข้อความใน footer */
        }
    </style>
</head>

<body>

<section class="login-signup section-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7">
                <div class="signup">
                    <h3 class="mt-4">เข้าร่วมกับเราในวันนี้!</h3>
                    <p class="mb-5">ลงทะเบียนเพื่อปลดล็อกฟีเจอร์และสิทธิประโยชน์พิเศษ!</p>
                    <form method="POST" action="{{ route('register') }}" class="singup-from row">
                    @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">ชื่อ</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อจริง" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email-address">อีเมล</label>
                                <input type="email" class="form-control" name="email" id="email-address" placeholder="กรอกอีเมลที่ถูกต้อง" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="password">รหัสผ่าน</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่านที่แข็งแกร่ง" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="password_confirmation">ยืนยันรหัสผ่าน</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="กรอกรหัสผ่านอีกครั้ง" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">ลงทะเบียน</button>
                            <p class="mt-5 mb-0">เป็นสมาชิกอยู่แล้ว? <a href="{{ route('login') }}">เข้าสู่ระบบ</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<div class="footer-text">
    <p>&copy; {{ date('Y') }} Book Haven. สงวนลิขสิทธิ์.</p>
</div>

<!-- THEME JAVASCRIPT FILES -->
<script src="{{asset('asset/Frontend/plugins/jquery/jquery.js')}}"></script>
<script src="{{asset('asset/Frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('asset/Frontend/plugins/slick-carousel/slick.min.js')}}"></script>
<script src="{{asset('asset/Frontend/plugins/google-map/gmap.js')}}"></script>
<script src="{{asset('asset/Frontend/plugins/js/custom.js')}}"></script>

</body>
</html>
