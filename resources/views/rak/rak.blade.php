@extends('template.master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Rak</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/rak/store" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputText">Nama Rak</label>
                    <input type="text" class="form-control" name="nama_rak" placeholder="">
                    <label for="exampleInputText">Lokasi</label>
                    <input type="text" class="form-control" name="lokasi" placeholder="">
</div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" value="Save" class="btn-primary">Submit</button>
                  <button type="reset"  name="reset" value="reset" class="btn-primary">Reset</button>
                </div>
              </form>
            </div>
</div>

@endsection