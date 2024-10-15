@extends('layouts.backend.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<section class="bookstore" style="background: #f0f8ff; padding: 40px 0;">
    <div class="container">
        <h2 class="text-center my-4" style="color: #007bff;">ยินดีต้อนรับสู่ร้านหนังสือของเรา</h2>
        <div class="row">
            <!-- Book Card 1 -->
            <div class="col-md-4">
                <div class="card mb-4 shadow border-light" style="border: none;">
                    <img class="card-img-top" src="{{ asset('asset/frontend/images/logos/book2.jpg') }}" alt="จิตวิทยาสายดาร์ก">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="color: #007bff;">จิตวิทยาสายดาร์ก</h5>
                        <p class="book-description">ผู้เขียน: Dr.Hiro</p>
                        <p class="price">สำนักพิมพ์: วีเลิร์น (WeLearn)</p>
                        <p class="price">หมวดหมู่: จิตวิทยา, การพัฒนาตัวเอง</p>
                        <p class="price" style="font-weight: bold;">ราคา: 213 บาท</p>
                        <button class="btn btn-primary w-100">ซื้อ</button>
                    </div>
                </div>
            </div>

            <!-- Book Card 2 -->
            <div class="col-md-4">
                <div class="card mb-4 shadow border-light" style="border: none;">
                    <img class="card-img-top" src="{{ asset('asset/frontend/images/logos/book3.jpg') }}" alt="Nexus ประวัติย่อการสื่อสาร จากยุคหิน">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="color: #007bff;">Nexus ประวัติย่อการสื่อสาร จากยุคหิน</h5>
                        <p class="book-description">ผู้เขียน: ยูวัล โนอาห์ แฮรารี</p>
                        <p class="price">สำนักพิมพ์: ยิปซี</p>
                        <p class="price">หมวดหมู่: หนังสือบทความ, สารคดี</p>
                        <p class="price" style="font-weight: bold;">ราคา: 552 บาท</p>
                        <button class="btn btn-primary w-100">ซื้อ</button>
                    </div>
                </div>
            </div>

            <!-- Book Card 3 -->
            <div class="col-md-4">
                <div class="card mb-4 shadow border-light" style="border: none;">
                    <img class="card-img-top" src="{{ asset('asset/frontend/images/logos/book4.jpg') }}" alt="GQ Thailand ปก แบมแบม (E-Com)">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="color: #007bff;">GQ Thailand ปก แบมแบม (E-Com)</h5>
                        <p class="book-description">ผู้เขียน: กองบรรณาธิการ</p>
                        <p class="price">สำนักพิมพ์: นิตยสาร Sup. อื่น</p>
                        <p class="price">หมวดหมู่: สินค้าแฟชั่น</p>
                        <p class="price" style="font-weight: bold;">ราคา: 250 บาท</p>
                        <button class="btn btn-primary w-100">ซื้อ</button>
                    </div>
                </div>
            </div>

            <!-- Book Card 4 -->
            <div class="col-md-4">
                <div class="card mb-4 shadow border-light" style="border: none;">
                    <img class="card-img-top" src="{{ asset('asset/frontend/images/logos/book5.jpg') }}" alt="คนสองวิญญาณ">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="color: #007bff;">คนสองวิญญาณ</h5>
                        <p class="book-description">ผู้เขียน: สรจักร</p>
                        <p class="price">สำนักพิมพ์: Prism Publishing</p>
                        <p class="price">หมวดหมู่: นิยาย, นิยายสืบสวนสอบสวน</p>
                        <p class="price" style="font-weight: bold;">ราคา: 250 บาท</p>
                        <button class="btn btn-primary w-100">ซื้อ</button>
                    </div>
                </div>
            </div>

            <!-- Book Card 5 -->
            <div class="col-md-4">
                <div class="card mb-4 shadow border-light" style="border: none;">
                    <img class="card-img-top" src="{{ asset('asset/frontend/images/logos/book6.jpg') }}" alt="คำสารภาพในคืนฆาตกรรม">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="color: #007bff;">คำสารภาพในคืนฆาตกรรม</h5>
                        <p class="book-description">ผู้เขียน: อามาเนะ เรียว</p>
                        <p class="price">สำนักพิมพ์: Prism Publishing</p>
                        <p class="price">หมวดหมู่: นิยายแปล</p>
                        <p class="price" style="font-weight: bold;">ราคา: 248 บาท</p>
                        <button class="btn btn-primary w-100">ซื้อ</button>
                    </div>
                </div>
            </div>

            <!-- Book Card 6 -->
            <div class="col-md-4">
                <div class="card mb-4 shadow border-light" style="border: none;">
                    <img class="card-img-top" src="{{ asset('asset/frontend/images/logos/book7.jpg') }}" alt="ทุกวันคือของขวัญจากตัวเอง">
                    <div class="card-body text-center">
                        <h5 class="card-title" style="color: #007bff;">ทุกวันคือของขวัญจากตัวเอง</h5>
                        <p class="book-description">ผู้เขียน: คิดมาก x คิ้วต่ำ</p>
                        <p class="price">สำนักพิมพ์: Springbooks</p>
                        <p class="price">หมวดหมู่: จิตวิทยา, การพัฒนาตัวเอง</p>
                        <p class="price" style="font-weight: bold;">ราคา: 250 บาท</p>
                        <button class="btn btn-primary w-100">ซื้อ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- /.content-wrapper -->

@endsection
