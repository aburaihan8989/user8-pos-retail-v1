@extends('layouts.app')

@section('title', 'Edit Product')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Product</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{ route('home') }}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{ route('product.index') }}">Products</a></div>
                    <div class="breadcrumb-item">Edit Product</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Products</h2>

                <div class="card">
                    <form action="{{ route('product.update', $product) }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Input Data</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text"
                                    class="form-control @error('name')
                                is-invalid
                            @enderror"
                                    name="name" value="{{ $product->name }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Cost Price</label>
                                <input type="number"
                                    class="form-control @error('cost_price')
                                is-invalid
                            @enderror"
                                    name="cost_price" value="{{ $product->cost_price }}">
                                @error('cost_price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Sell Price</label>
                                <input type="number"
                                    class="form-control @error('price')
                                is-invalid
                            @enderror"
                                    name="price" value="{{ $product->price }}">
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- <div class="form-group">
                                <label>Stock</label>
                                <input type="number"
                                    class="form-control @error('stock')
                                is-invalid
                            @enderror"
                                    name="stock" value="{{ $product->stock }}">
                                @error('stock')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}
                            <div class="form-group">
                                <label class="form-label">Category</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category" value="sayuran" class="selectgroup-input"
                                            @if ($product->category == 'sayuran') checked @endif>
                                        <span class="selectgroup-button">Sayuran</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category" value="sembako" class="selectgroup-input"
                                            @if ($product->category == 'sembako') checked @endif>
                                        <span class="selectgroup-button">Sembako</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="category" value="retail" class="selectgroup-input"
                                            @if ($product->category == 'retail') checked @endif>
                                        <span class="selectgroup-button">Retail</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Photo Product</label>
                                <div class="col-sm-6">
                                    <input type="file" class="form-control" name="image"
                                        @error('image') is-invalid @enderror>
                                </div>
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
