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
            <form action="{{ route('anggota.update', $anggotas[0]->id) }}" method="POST">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                <label for="kode_anggota">Kode Anggota</label>
                    <input type="text" name="kode_anggota" id="kode_anggota" class="form-control @error('kode_anggota') is-invalid @enderror" value="{{ $anggotas[0]->kode_anggota }}">
                </div>
                @error('kode_anggota')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                <div class="form-group">
                  <label for="nama_anggota">Nama Anggota</label>
                  <input type="text" name="nama_anggota" id="nama_anggota" class="form-control @error('nama_anggota') is-invalid @enderror" value="{{ $anggotas[0]->nama_anggota }}">
                </div>
                @error('nama_anggota')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                <label for="jk_anggota">Jenis Kelamin</label>
                  <select name="jk_anggota" id="jk_anggota" class="form-control @error('jk_anggota') is-invalid @enderror" value="{{ $anggotas[0]->jk_anggota }}">
                  <option value="Laki-laki" @if($anggotas[0]->jk_anggota == 'L') selected @endif>Laki-Laki</option>
                  <option value="Perempuan" @if($anggotas[0]->jk_anggota == 'P') selected @endif>Perempuan</option>
                  </select>
                </div>
                @error('jk_anggota')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                <label for="jurusan_anggota">Jurusan Anggota</label>
                  <select name="jurusan_anggota" id="jurusan_anggota" class="form-control @error('jurusan_anggota') is-invalid @enderror" value="{{ $anggotas[0]->jurusan_anggota }}" >
                    <option value="RPL" @if($anggotas[0]->jurusan_anggota == 'RPL') selected @endif>RPL</option>
                    <option value="TKJ" @if($anggotas[0]->jurusan_anggota == 'TKJ') selected @endif>TKJ</option>
                    <option value="TEI" @if($anggotas[0]->jurusan_anggota == 'TEI') selected @endif>TEI</option>
                    <option value="TITL" @if($anggotas[0]->jurusan_anggota == 'TITL') selected @endif>TITL</option>
                    <option value="TP" @if($anggotas[0]->jurusan_anggota == 'TP') selected @endif>TP</option>
                    <option value="TPGM" @if($anggotas[0]->jurusan_anggota == 'TPGM') selected @endif>TPGM</option>
                    <option value="TFLM" @if($anggotas[0]->jurusan_anggota == 'TFLM') selected @endif>TFLM</option>
                    <option value="TPL" @if($anggotas[0]->jurusan_anggota == 'TPL') selected @endif>TPL</option>
                    <option value="DPIB" @if($anggotas[0]->jurusan_anggota == 'DPIB') selected @endif>DPIB</option>
                    <option value="TKRO" @if($anggotas[0]->jurusan_anggota == 'TKRO') selected @endif>TKRO</option>
                    <option value="TBSM" @if($anggotas[0]->jurusan_anggota == 'TBSM') selected @endif>TBSM</option>
                  </select>
                </div>
                @error('jurusan_anggota')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="no_telp_anggota">Nomor Telepon</label>
                  <input type="text" name="no_telp_anggota" id="no_telp_anggota" class="form-control @error('no_telp_anggota') is-invalid @enderror" value="{{ $anggotas[0]->no_telp_anggota }}">
                </div>
                @error('no_telp_anggota')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                  <label for="alamat_anggota">Alamat</label>
                  <textarea name="alamat_anggota" id="alamat_anggota" cols="30" rows="5" class="form-control @error('alamat_anggota') is-invalid @enderror"  value="{{ $anggotas[0]->alamat_anggota }}"></textarea>
                </div>
                @error('alamat_anggota')
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
        <p>Anda yakin ingin keluar dari form edit anggota?</p>
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