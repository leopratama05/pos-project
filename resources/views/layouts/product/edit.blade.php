@extends('master');

@section('title')
    <title>Edit Product Page</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Product</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">
                    <a href="#">Home</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Halaman Edit Data Product</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('product.update', $product->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <table class="table table-bordered">
                                <tr>
                                    <td>Name Product</td>
                                    <td><input type="text" name="name_product" value="{{ $product->name_product }}" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td><input type="text" name="description" value="{{ $product->description }}" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td><input type="text" name="price" value="{{ $product->price }}" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>Stock</td>
                                    <td><input type="text" name="stock" value="{{ $product->stock }}" class="form-control" id=""></td>
                                </tr>
                                <tr>
                                    <td>
                                        <select name="category_id" class="form-control">
                                            <option value="0">-Pilih Data-</option>
                                            @foreach ($category as $cat)
                                                @if ($product->category_id == $cat->id)
                                                <option value="{{ $cat->id }}" selected>{{ $cat->name_category }}</option>
                                                @else
                                                    
                                                @endif
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td><button type="submit" class="btn btn-primary">Save</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection