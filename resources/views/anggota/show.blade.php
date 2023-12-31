@extends('template.master')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Anggota</h1>
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
              <div class="card-body">
                <div class="form-group">
                  <label for="kode_anggota">Kode Anggota</label>
                  <input type="text" name="kode_anggota" id="kode_anggota" class="form-control" value="{{ $anggotas[0]->kode_anggota }}" disabled>
                </div>
                <div class="form-group">
                  <label for="nama_anggota">Nama Anggota</label>
                  <input type="text" name="nama_anggota" id="nama_anggota" class="form-control" value="{{ $anggotas[0]->nama_anggota }}" disabled>
                </div>
                <div class="form-group">
                  <label for="jk_anggota">Jenis Kelamin</label>
                  <input type="text" name="jk_anggota" id="jk_anggota" class="form-control" value="{{ $anggotas[0]->jk_anggota }}" disabled>
                </div>
                <div class="form-group">
                  <label for="jurusan_anggota">Jurusan Anggota</label>
                  <input type="text" name="jurusan_anggota" id="jurusan_anggota" class="form-control" value="{{ $anggotas[0]->jurusan_anggota }}" disabled>
                </div>
                <div class="form-group">
                  <label for="no_telp_anggota">Nomor Telepon</label>
                  <input type="text" name="no_telp_anggota" id="no_telp_anggota" class="form-control" value="{{ $anggotas[0]->no_telp_anggota }}" disabled>
                </div>
                <div class="form-group">
                  <label for="alamat_anggota">Alamat</label>
                  <textarea name="alamat_anggota" id="alamat_anggota" cols="30" rows="5" class="form-control" disabled>{{ $anggotas[0]->alamat_anggota }}</textarea>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
              <a href="" class="btn btn-secondary" style="margin-left: 8px;" data-toggle="modal" data-target="#exampleModal">Back</a>
              </div>
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
        <p>Anda yakin ingin keluar dari form detail anggota?</p>
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
