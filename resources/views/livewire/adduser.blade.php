<div>
    {{-- สร้าง UI Input From User จากไฟล์ project-add.html --}}
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Project Add</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Project Add</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">General</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="insert" wire:ignore.self  class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName"> ชื่อ</label>
                    <input type="text" wire:model="name" id="Name" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputName"> อีเมล์</label>
                    <input type="text" wire:model="email" id="email" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputName"> รหัสผ่าน</label>
                    <input type="text" wire:model="password" id="password" class="form-control">
                  </div>
                  <div>
                    <label for="inputName2" class="col-sm-2 col-form-label">รูปภาพ</label>
                    <div class="col-sm-10">
                      <input type="file" wire:model="photo" class="form-control" id="photo"">
                    </div><br>

                    <div class="col-12">
                    <a href="javascript:void(0);" class="btn btn-secondary" onclick="history.back();">ยกเลิก</a>
                    <input type="submit" value="Submit" class="btn btn-success float-right">
                    </div>
                    </form>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>

          </div>
        </section>
        <!-- /.content -->
      </div>
</div>
