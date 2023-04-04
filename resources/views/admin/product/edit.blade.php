@extends('layouts.app')
@section('title', 'Produk')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Gambar</h5>
                        </div>
                        <div class="card-body">
                            <img src="{{ Storage::url('/public/product/') . $product->file }}" width="200px" alt="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Edit Data Kategori</h3>
                        </div>
                        <!-- /.card-header -->
                        <form action="{{ Route('product.update', $product->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Produk :</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" aria-describedby="emailHelp" name="name"
                                        value="{{ $product->name }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            Nama Produk tidak boleh kosong
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Harga :</label>
                                    <input type="text" class="form-control @error('price') is-invalid @enderror"
                                        id="price" aria-describedby="emailHelp" name="price"
                                        value="{{ $product->price }}">
                                    @error('price')
                                        <div class="invalid-feedback">
                                            Harga Produk tidak boleh kosong
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="category_id">Kategori :</label>
                                    <select name="category_id" value="{{ old('category_id') }}"
                                        class="form-control @error('category_id') is-invalid @enderror">
                                        <option value="">Pilih Kategori Produk</option>
                                        @foreach ($category as $c)
                                            <option value="{{ $c->id }}"
                                                {{ $product->category_id == $c->id ? 'selected' : '' }}>
                                                {{ $c->name }}
                                            </option>
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
                                        <label for="description" class="form-label">Deskripsi</label>
                                        <textarea name="description" rows="5" class="form-control  @error('description') is-invalid @enderror">{{ $product->description }}</textarea>
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
