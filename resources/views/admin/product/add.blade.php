@extends('layouts.app')
@section('title', 'Produk')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Data Produk</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ Route('product.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="name">Nama :</label>
                                        <input type="text" name="name" value="{{ old('name') }}"
                                            class="form-control @error('name') is-invalid @enderror" placeholder="Nama">
                                        <div class="text-danger">
                                            @error('name')
                                                Nama Kategori tidak boleh kosong.
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="price">Harga :</label>
                                        <input type="text" name="price" value="{{ old('price') }}"
                                            class="form-control @error('price') is-invalid @enderror" placeholder="Harga">
                                        <div class="text-danger">
                                            @error('price')
                                                Harga tidak boleh kosong.
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="category_id">Kategori :</label>
                                    <select name="category_id" value="{{ old('category_id') }}"
                                        class="form-control @error('category_id') is-invalid @enderror">
                                        <option value="">Pilih Kategori Produk</option>
                                        @foreach ($category as $c)
                                            <option value="{{ $c->id }}">- {{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('category_id')
                                            Pilih salah satu Kategori.
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="description">Deskripsi :</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Deskripsi"
                                            id="message-text"></textarea>
                                        <div class="text-danger">
                                            @error('description')
                                                Deskripsi tidak boleh kosong.
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href="{{ route('product') }}" type="button" class="btn btn-warning"><i class='nav-icon fas fa-arrow-left'></i> &nbsp;
                                    Kembali</a>
                                <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i>
                                    &nbsp;
                                    Simpan</button>
                            </div>
                        </form>
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
@endsection
@section('script')
    <script type="text/javascript">
        $("#product").addClass("active");
    </script>
@endsection
