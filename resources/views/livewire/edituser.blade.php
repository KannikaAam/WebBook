<div>
    <div class="content-wrapper">
        <!-- หัวข้อเนื้อหา (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col">
                        <h1 class="text-center">แก้ไขผู้ใช้</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- เนื้อหาหลัก -->
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">ข้อมูลผู้ใช้</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="ย่อ">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="insert" class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputName">ชื่อ</label>
                                    <input type="text" wire:model="name" id="inputName" class="form-control" placeholder="กรุณากรอกชื่อของคุณ" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail">อีเมล</label>
                                    <input type="email" wire:model="email" id="inputEmail" class="form-control" placeholder="กรุณากรอกอีเมลของคุณ" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">รหัสผ่าน</label>
                                    <input type="password" wire:model="password" id="inputPassword" class="form-control" placeholder="กรุณากรอกรหัสผ่านของคุณ" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputphoto" class="col-sm-2 col-form-label">รูปภาพ</label>
                                    <div class="col-sm-10">
                                        <input type="file" wire:model="photo" class="form-control" id="photo">
                                        <!-- แสดงรูปภาพถ้ามีการอัปโหลด -->
                                        @if ($photo)
                                            <div class="mt-2">
                                                <img src="{{ $photo->temporaryUrl() }}" alt="Uploaded Photo" class="img-thumbnail" style="max-width: 100%; max-height: 200px;">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a href="javascript:void(0);" class="btn btn-secondary" onclick="history.back();">ยกเลิก</a>
                                    <input type="submit" value="บันทึก" class="btn btn-success float-right">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>
