<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data = Product::all();
        return view('product.index', compact('data'));
    }

    public function tambahproduct(){
        return view('product.tambah');
    }

    public function insertdata(Request $request){
        Product::create($request->all());
        return redirect()->route('index');
    }

    public function tampilkanproduct($id){
        $data = Product::find($id);
        return view('product.edit', compact('data'));
    }

    public function editdata(Request $request, $id){
        $input = $request->all();
        $data = Product::find($id);
        $data->update($input);
        return redirect()->route('index')->with('success', 'Data Berhasil Di Edit');
    }

    public function deleteproduct($id){
        $data = Product::where('id_product',$id)->first();
        $data->delete();
        return redirect()->route('index')->with('success', 'Data Berhasil Di Hapus');
    }

    public function exportpdf(){
        $data = Product::all();
        view()->share('data', $data);
        $pdf = PDF::loadView('product.dataproduk-pdf');
        return $pdf->download('dataproduk-pdf.pdf');
    }

}
