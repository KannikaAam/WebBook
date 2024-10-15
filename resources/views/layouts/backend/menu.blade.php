<!-- Main Navbar -->
<nav class="navbar">
    <!-- User Panel -->
    <div class="user-panel">
        <img class="table-avatar"
             src="{{ asset('storage/' . auth()->user()->profile_photo_path) }}"
             alt="รูปโปรไฟล์">
        <div class="info">
            <a href="{{ route('profile') }}" class="d-block" style="color: #000000;">
                {{ auth()->user()->name }} <br>
                <span style="font-size: 12px; color: #000000;">{{ auth()->user()->email }}</span>
            </a>
        </div>
    </div>

    <!-- Navbar Menu -->
    <ul class="nav">
        <li class="nav-item">
            <a href="{{ route('backend') }}" class="nav-link">
                <i class="fas fa-home" style="margin-right: 10px;"></i>
                หน้าแรก
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-book" style="margin-right: 10px;"></i>
                หนังสือ
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-info-circle" style="margin-right: 10px;"></i>
                ข่าวสาร
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('userdata') }}" class="nav-link">
                <i class="fas fa-user" style="margin-right: 10px;"></i>
                ผู้ใช้
            </a>
        </li>
    </ul>

    <!-- Logout Button -->
    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
        @csrf
        <button type="submit" class="logout-button">
            <i class="fas fa-sign-out-alt" style="margin-right: 10px;"></i>
            ออกจากระบบ
        </button>
    </form>
</nav>

<style>
    .navbar {
        background-color: #3864a5; /* เปลี่ยนสีพื้นหลังของ navbar เป็นสีฟ้า */
        color: #3d3d3d;
    }

    .logout-button {
        display: flex; /* จัดการให้ปุ่มอยู่ในแนวเดียวกัน */
        align-items: center; /* จัดตำแหน่งไอคอนให้อยู่กึ่งกลาง */
        color: #ffffff; /* เปลี่ยนสีตัวอักษรให้เป็นสีขาว */
        background-color: #b55b64; /* เปลี่ยนสีพื้นหลังของปุ่มเป็นสีแดง */
        border: none; /* ไม่ให้มีขอบ */
        padding: 10px 15px; /* เพิ่มพื้นที่ภายใน */
        border-radius: 20px; /* มุมโค้ง */
        cursor: pointer; /* แสดงมือเมื่อชี้ที่ปุ่ม */
        transition: background-color 0.3s; /* เพิ่มการเปลี่ยนสีเมื่อ hover */
    }

    .logout-button:hover {
        background-color: #c82333; /* เปลี่ยนสีพื้นหลังเมื่อ hover */
    }

    .nav-link {
        color: #ffffff; /* สีของลิงก์ใน navbar */
    }

    .nav-link:hover {
        color: #d1e7dd; /* เปลี่ยนสีเมื่อ hover */
    }
</style>
