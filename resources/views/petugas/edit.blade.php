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
            <form action="{{ route('petugas.update', $petugass[0]->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="nama_petugas">Nama Petugas</label>
                  <input type="text" name="nama_petugas" id="nama_petugas" class="form-control @error('nama_petugas') is-invalid @enderror" value="{{ $petugass[0]->nama_petugas }}">
                </div>
                @error('nama_petugas')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                <label for="jabatan_petugas">Jabatan Petugas</label>
                  <select name="jabatan_petugas" id="jabatan_petugas" class="form-control @error('jabatan_petugas') is-invalid @enderror" value="{{ $petugass[0]->jabatan_petugas }}">
                  <option value="Kepala Perpustakaan" @if($petugass[0]->jabatan_petugas == 'Kepala Perpustakaan') selected @endif>Kepala Perpustakaan</option>
                  <option value="Asisten Kepala Perpustakaan" @if($petugass[0]->jabatan_petugas == 'Asisten Kepala Perpustakaan') selected @endif>Asisten Kepala Perpustakaan</option>
                  <option value="Administrasi" @if($petugass[0]->jabatan_petugas == 'Administrasi') selected @endif>Administrasi</option>
                  </select>
                </div>
                @error('jabatan_petugas')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="no_telp_petugas">Nomor Telepon</label>
                  <input type="text" name="no_telp_petugas" id="no_telp_petugas" class="form-control @error('no_telp_petugas') is-invalid @enderror" value="{{ $petugass[0]->no_telp_petugas }}">
                </div>
                @error('no_telp_petugas')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="alamat_petugas">Alamat</label>
                  <textarea name="alamat_petugas" id="alamat_petugas" cols="30" rows="5" class="form-control @error('alamat_petugas') is-invalid @enderror"  value="{{ $petugass[0]->alamat_petugas }}"></textarea>
                </div>
                @error('alamat_petugas')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              <button type="submit" value="submit" class="btn btn-warning">Update</button>
                <a href="" class="btn btn-secondary" style="margin-left: 8px;" data-toggle="modal" data-target="#exampleModal">Back</a>
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
        <p>Anda yakin ingin keluar dari form edit petugas?</p>
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