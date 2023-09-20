@extends('template.master')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Data Petugas</h1>
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
              <h3 class="card-title">FORM PETUGAS</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
              <div class="card-body">
                <div class="form-group">
                  <label for="nama_anggota">Nama Petugas</label>
                  <input type="text" name="nama_petugas" id="nama_petugas" class="form-control" value="{{ $petugass[0]->nama_petugas }}" disabled>
                </div>
                <div class="form-group">
                  <label for="jk_anggota">Jabatan Petugas</label>
                  <input type="text" name="jabatan_petugas" id="jabatan_petugas" class="form-control" value="{{ $petugass[0]->jabatan_petugas }}" disabled>
                </div>
                <div class="form-group">
                  <label for="no_telp_petugas">Nomor Telepon</label>
                  <input type="text" name="no_telp_petugas" id="no_telp_petugas" class="form-control" value="{{ $petugass[0]->no_telp_petugas }}" disabled>
                </div>
                <div class="form-group">
                  <label for="alamat_petugas">Alamat</label>
                  <textarea name="alamat_petugas" id="alamat_petugas" cols="30" rows="5" class="form-control" disabled>{{ $petugass[0]->alamat_petugas }}</textarea>
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
        <p>Anda yakin ingin keluar dari form detail petugas?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a href="{{ route('petugas.index') }}" type="button" class="btn btn-primary">Keluar</a>
      </div>
    </div>
  </div>
</div>
  <!-- /.content -->

@endsection
