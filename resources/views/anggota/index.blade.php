@extends('template.master')

@push('css')
<link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endpush

@section('content')

  <!-- Content Header (Page header) -->
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
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            <div class="col text-right">
              <a href="{{ route('anggota.create') }}" class="btn btn-success">
                <i class="fas fa-plus"></i> Create Anggota
              </a>
            </div>
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="dataTables" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Anggota</th>
                    <th>Jenis Kelamin</th>
                    <th>Jurusan Anggota</th>
                    <th>No Telp Anggota</th>
                    <th>Alamat Anggota</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($anggotas as $key => $value)
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->nama_anggota }} </td>
                    <td>{{ $value->jk_anggota}} </td>
                    <td>{{ $value->jurusan_anggota}} </td>
                    <td>{{ $value->no_telp_anggota}} </td>
                    <td>{{ $value->alamat_anggota}} </td>
                  <td>
                  <div class="btn-group">
                      <a href="{{ route('anggota.show', $value->id) }}" class=" btn-sm btn-info" >
                        Detail
                      </a>
                      <a href="{{ route('anggota.edit', $value->id) }}" class="btn-sm btn-warning" style="margin-left: 8px;">
                        Edit
                      </a>
                      <a href="" type="sumbit" class=" btn-sm btn-danger" style="margin-left: 10px;" data-toggle="modal" data-target="#exampleModal">Delete</a>
                      </div>
                    </td>
                  </tr>
                  @endforeach                  
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title">Konfirmasi</h5>
      </div>
      <div class="modal-body">
        <p>Anda yakin ingin menghapus data anggota?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Cancel</button>
        <form action="{{ route('anggota.destroy', $value->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" style="margin-left: 8px;">Delete</button>
                      </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('script')
  <!-- DataTables  & Plugins -->
<script src="{{ asset('/adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script>
  $(function () {
    $('#dataTables').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush