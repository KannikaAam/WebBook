<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="utf-8">
    <title>Book Store</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f4ff; /* สีพื้นหลังใหม่เป็นฟ้าอ่อน */
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center; /* จัดให้อยู่ตรงกลางในแนวนอน */
        }

        .navbar {
            background-color: #a2c2e2; /* สีของ Navbar ใหม่ */
        }

        .navbar {
            background-color: #d3e7f8; /* สีของ Navbar */
            width: 100%; /* ทำให้ Navbar กว้างเต็มหน้า */
            position: relative; /* ทำให้ Navbar อยู่ที่ตำแหน่งคงที่เมื่อเลื่อนหน้า */
            top: 0; /* ตั้งให้ Navbar อยู่ที่ด้านบน */
            left: 0; /* ตั้งให้ Navbar เริ่มที่ขอบซ้าย */
            z-index: 1000; ทำให้ Navbar อยู่บนสุดของเนื้อหา
        }


        .hero {
            background-color: #0056b3; /* สีของ Hero Section ใหม่ */
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px;
            margin-bottom: 10px;
            width: 100%; /* กำหนดความกว้างให้เต็มหน้า */
            position: relative; /* เพื่อให้สามารถใช้แนวทางการจัดการกับตำแหน่งได้ */
            left: 0; /* ตั้งค่าตำแหน่งซ้ายให้เป็น 0 */
            right: 0; /* ตั้งค่าตำแหน่งขวาให้เป็น 0 */
        }


        .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* จัดให้อยู่ตรงกลาง */
            margin: 10px;
            max-width: 1200px; /* กำหนดความกว้างสูงสุดของเนื้อหา */
        }

        .book-card {
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 15px;
            flex: 1 1 300px;
            transition: transform 0.2s;
        }

        .book-card:hover {
            transform: scale(1.00); /* ขยายการ์ดเมื่อเอาเมาส์วาง */
        }

        .book-card img {
            max-width: 100%;
            border-radius: 5px;
            height: 250px; /* กำหนดความสูงของภาพ */
            object-fit: cover; /* จัดการให้ภาพมีอัตราส่วนที่ถูกต้อง */
        }

        h5 {
            /* text-align: center; */
            margin-bottom: 10px;
            font-size: 24px;
            color: #0056b3; /* สีของชื่อหนังสือใหม่ */
        }

        .footer {
            background-color: #0056b3; /* สีของ Footer ใหม่ */
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .btn-primary {
            background-color: #ff8f00; /* สีของปุ่มซื้อใหม่ */
            border: none;
        }

        .btn-primary:hover {
            background-color: #004494; /* สีของปุ่มเมื่อ Hover ใหม่ */
        }

        /* การออกแบบสำหรับสไตล์การ์ดหนังสือ */
        .book-description {
            font-size: 14px;
            color: #666;
            text-align: center;
            margin-top: 5px;
        }

        .price {
            font-weight: bold;
            font-size: 16px;
            color: #616161; /* สีราคาหนังสือใหม่ */
            text-align: center;
            margin: 10px 0;
        }

        img {
            display: block; /* ทำให้รูปภาพเป็นบล็อก */
            margin: 0 auto; /* จัดให้รูปภาพอยู่ตรงกลาง */
        }
    </style>


<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm p-3 mb-5 bg-white rounded">
        <a class="navbar-brand" href="#">
            <img src="{{ Asset('Asset/frontend/images/logos/Logo1.png') }}" alt="Logo" width="100" height="auto">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-home" style="margin-right: 10px;"></i> <!-- ไอคอนหน้าแรก -->
                        หน้าแรก
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-book-open" style="margin-right: 10px;"></i> <!-- ไอคอนหนังสือ -->
                        หนังสือ
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-newspaper" style="margin-right: 10px;"></i> <!-- ไอคอนข่าวสาร -->
                        ข่าวสาร
                    </a>
                </li>
            </ul>

            <!-- ปุ่มค้นหา -->
            <form class="form-inline my-2 my-lg-0" action="#" method="get">
                <input class="form-control mr-sm-2" type="search" placeholder="ค้นหา..." aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหา</button>
            </form>

            <!-- เมนูโปรไฟล์ -->
            <div class="nav-item dropdown ml-auto">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ Asset('Asset/frontend/images/logos/user1.jpeg') }}" alt="User Icon" style="width: 30px; border-radius: 50%;">
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    @if(auth()->check())
                    <form method="POST" action="{{ route('userdata') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="logout-button dropdown-item">
                            ผู้ใช้
                        </button>
                    </form>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="logout-button dropdown-item">
                                ออกจากระบบ
                            </button>
                        </form>

                    @else
                        <a class="dropdown-item" href="{{ route('login') }}">เข้าสู่ระบบ</a>
                        <a class="dropdown-item" href="{{ route('register') }}">สมัคร</a>
                    @endif
                </div>

                </div>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <div class="hero">
        <h3>ยินดีต้อนรับสู่ Book haven</h3>
    </div>


    <!-- Main Content -->


    <div class="container content">
        <div class="book-card">
            <img src="{{ Asset('Asset/frontend/images/logos/book2.jpg') }}" alt="User Icon ">
                <h5 class="card-title">จิตวิทยาสายดาร์ก</h5>
                <p class="card-text">ผู้เขียน: Dr.Hiro</p>
                <p class="card-text">สำนักพิมพ์: วีเลิร์น (WeLearn)</p>
                <p class="card-text">หมวดหมู่: จิตวิทยา การพัฒนาตัวเอง</p>
                <p class="price text-success">ราคา: 213 บาท</p>
                <button class="btn btn-primary w-100">ซื้อ</button>
        </div>


        <div class="book-card">
            <img src="{{ Asset('Asset/frontend/images/logos/book3.jpg') }}" alt="Book Cover">
                <h5 class="card-title">Nexus ประวัติย่อการสื่อสาร</h5>
                <p class="card-text">ผู้เขียน: ยูวัล โนอาห์ แฮรารี</p>
                <p class="card-text">สำนักพิมพ์: ยิปซี</p>
                <p class="card-text">หมวดหมู่: หนังสือบทความ สารคดี , ประวัติศาสตร์</p>
                <p class="price text-success">ราคา: 552 บาท</p>

            <button class="btn btn-primary w-100">ซื้อ</button>
        </div>

        <div class="book-card">
            <img src="{{ Asset('Asset/frontend/images/logos/book4.jpg') }}" alt="Book Cover">
                <h5 class="card-title">GQ Thailand ปก แบมแบม</h5>
                <p class="card-text">ผู้เขียน: กองบรรณาธิการ</p>
                <p class="card-text">สำนักพิมพ์: นิตยสาร Sup. อื่น</p>
                <p class="card-text">หมวดหมู่: สินค้าแฟชั่น , สินค้าแฟชั่นบุรุษ</p>
                <p class="price text-success">ราคา: 250 บาท</p>
            <button class="btn btn-primary w-100">ซื้อ</button>
        </div>

        <div class="book-card">
            <img src="{{ Asset('Asset/frontend/images/logos/book5.jpg') }}" alt="Book Cover">
            <h5>คนสองวิญญาณ</h5>
            <p class="card-title">ผู้เขียน: สรจักร</p>
            <p class="card-text">สำนักพิมพ์: prism publishing , ปริซึม</p>
            <p class="card-text">หมวดหมู่: นิยาย , นิยายสืบสวนสอบสวน นิยายลี้ลับ</p>
            <p class="price text-success">ราคา: 250 บาท</p>
            <button class="btn btn-primary w-100">ซื้อ</button>
        </div>

        <div class="book-card">
            <img src="{{ Asset('Asset/frontend/images/logos/book6.jpg') }}" alt="Book Cover">
            <h5>คำสารภาพในคืนฆาตกรรม</h5>
            <p class="card-title">ผู้เขียน: อามาเนะ เรียว</p>
            <p class="card-text">สำนักพิมพ์: prism publishing , ปริซึม</p>
            <p class="card-text">หมวดหมู่: นิยายแปล , นิยายแปล</p>
            <p class="price text-success">ราคา: 248 บาท</p>
            <button class="btn btn-primary w-100">ซื้อ</button>
        </div>

        <div class="book-card">
            <img src="{{ Asset('Asset/frontend/images/logos/book7.jpg') }}" alt="Book Cover">
            <h5>ทุกวันคือของขวัญจากตัวเอง</h5>
            <p class="card-title">ผู้เขียน: คิดมาก x คิ้วต่ำ</p>
            <p class="card-text">สำนักพิมพ์: Springbooks</p>
            <p class="card-text">หมวดหมู่: จิตวิทยา การพัฒนาตัวเอง</p>
            <p class="price text-success">ราคา: 250 บาท</p>
            <button class="btn btn-primary w-100">ซื้อ</button>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© 2024 ร้านขายหนังสือ.Book Haven.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
