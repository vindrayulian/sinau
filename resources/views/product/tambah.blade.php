@extends('layout.master')

@section('content')
<div class="container-fluid">
    <div class="card card-danger">
        <div class="card-header">
          <h3 class="card-title">Tambah data Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="/insertdata" method="POST">
            @csrf
          <div class="card-body">
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Nama Product</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="Nama Product">
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Stok</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="stok" placeholder="Stok">
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Harga</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="harga" placeholder="Harga">
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-danger">Kirim</button>
            <a href="/" class="btn btn-danger float-right">Kembali</a>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
</div>
@endsection
