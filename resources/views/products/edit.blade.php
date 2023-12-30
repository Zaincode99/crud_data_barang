@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error!</strong> <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID</strong>
                    <input type="text" name="id" value="{{ $product->id }}" class="form-control" placeholder="{{ $product->id }}" disabled readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Barang</strong>
                    <input type="text" name="nama_barang" value="{{ $product->nama_barang }}" class="form-control" placeholder="{{ $product->nama_barang }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Satuan</strong>
                    <input type="text" name="satuan" value="{{ $product->satuan }}" class="form-control" placeholder="{{ $product->satuan }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga Jual</strong>
                    <input type="text" name="hrg_jual" value="{{ $product->hrg_jual }}" class="form-control" placeholder="{{ $product->hrg_jual }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga Beli</strong>
                    <input type="text" name="hrg_beli" value="{{ $product->hrg_beli }}" class="form-control" placeholder="{{ $product->hrg_beli }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Profit</strong>
                    <input type="text" name="profit" value="{{ $product->hrg_jual-$product->hrg_beli }}" class="form-control" placeholder="{{ $product->hrg_jual-$product->hrg_beli }}" readonly>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Stok</strong>
                    <input type="text" name="stok" value="{{ $product->stok }}" class="form-control" placeholder="{{ $product->stok }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection