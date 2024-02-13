@extends('layout.master')

@section('content')
<div class="container-fluid">
    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Edit data Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="/editdata/{{$data->id_product}}" method="POST">
            @csrf
          <div class="card-body">
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Nama Product</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nama" placeholder="Nama Product" value="{{$data->nama}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Stok</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="stok" placeholder="Stok" value="{{$data->stok}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="" class="col-sm-2 col-form-label">Harga</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="harga" placeholder="Harga" value="{{$data->harga}}">
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Kirim</button>
            <a href="/" class="btn btn-default float-right">Kembali</a>
          </div>
          <!-- /.card-footer -->
        </form>
      </div>
</div>
@endsection
