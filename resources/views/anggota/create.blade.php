@extends('template.master')

@section('content') 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Anggota</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Anggota</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">FORM ANGGOTA</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('anggota.store') }}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="kode_anggota">Kode Anggota</label>
                    <input type="text" name="kode_anggota" id="kode_anggota" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                  <label for="nama_anggota">Nama Anggota</label>
                  <input type="text" name="nama_anggota" id="nama_anggota" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                  <label for="jk_anggota">Jenis Kelamin</label>
                  <select name="jk_anggota" id="jk_anggota" class="form-control">
                    <option disabled selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option> 
                    <option value="Perempuan">Perempuan</option> 
                  </select>
                </div>
                <div class="form-group">
                <label for="jurusan_anggota">Jurusan Anggota</label>
                <select name="jurusan_anggota" id="jurusan_anggota" class="form-control">
                    <option disabled selected>Pilih Jurusan</option>
                    <option value="TKJ">RPL</option>
                    <option value="TKJ">TKJ</option>
                    <option value="TEI">TEI</option>
                    <option value="TITL">TITL</option>
                    <option value="TP">TP</option>
                    <option value="TPGM">TPGM</option>
                    <option value="TFLM">TFLM</option>
                    <option value="TPL">TPL</option>
                    <option value="DPIB">DPIB</option>
                    <option value="TKRO">TKRO</option>
                    <option value="TBSM">TBSM</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="no_telp_anggota">Nomor Telepon</label>
                  <input type="text" name="no_telp_anggota" id="no_telp_anggota" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                  <label for="alamat_anggota">Alamat</label>
                  <textarea name="alamat_anggota" id="alamat_anggota" cols="30" rows="5" class="form-control" placeholder=""></textarea>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                <button type="reset" value="Reset" class="btn btn-danger" style="margin-left: 5px;">Reset</button>
                <a href="" class="btn btn-secondary" style="margin-left: 5px;" data-toggle="modal" data-target="#exampleModal">Back</a>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title">Konfirmasi</h5>
      </div>
      <div class="modal-body">
        <p>Anda yakin ingin keluar dari form create anggota?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a href="{{ route('anggota.index') }}" type="button" class="btn btn-primary">Keluar</a>
      </div>
    </div>
  </div>
</div>
  <!-- /.content -->
@endsection