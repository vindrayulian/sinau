@extends('layout.master')

@section('content')
<div class="col-12">
    <div class="card card-danger">
      <div class="card-header">
        <h3 class="card-title ">DataTable Product</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        @if (Auth::user()->level === "admin")
            <a href="/tambahproduct" class="btn btn-primary">Tambah data+</a>
            <a href="/produk-exportpdf" class="btn btn-info">Export PDF</a>
        @endif
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama Product</th>
            <th>Stok</th>
            <th>Harga</th>
          </tr>
          </thead>
          <tbody>
            @php
                $no=1;
            @endphp
            @foreach ($data as $row)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$row->nama}}</td>
              <td>{{$row->stok}}</td>
              <td>{{$row->harga}}</td>
              @if (Auth::user()->level === "admin")
              <td>
                <a href="/tampilkanproduct/{{$row->id_product}}" class="btn btn-warning">Edit</a>
                <button class="btn btn-danger" onclick="confirm('Anda menghapus data ini')"><a href="/deleteproduct/{{$row->id_product}}">Delete</a></button>
                </td>
            @endif
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </div>
@endsection
