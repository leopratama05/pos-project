@extends('master')

@section('title')
    <title>Order Page</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Cart</h1>
        </div>
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card card-primary">
                    <form action="#" method="post">
                        <div class="card-header">
                            <h4>Pilih Produk</h4>
                        </div>
                        <div class="card-body">
                            <label for="">Nama Produk</label>
                            <select name="nama_produk" class="form-control">
                                <option value="0">- Pilih Produk</option>
                                <option value="1">Test</option>
                            </select>
                            <div class="invalid-feedback">
                                Form nama produk harus diisi
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <div class="row">
                                <div class="col-11">
                                    <input type="number" class="form-control" name="jumlah" required>
                                </div>
                            </div>
                            <button class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection