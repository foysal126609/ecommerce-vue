@extends('admin.master')
@section('title')
    Add and Edit Product
@endsection
@section('style')
    <style>

    </style>
@endsection
@section('script')
    <script>

    </script>
@endsection
@section('content')
    <main class="page-content">
        <section class="add-category">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-1">
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-3 rounded">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="mb-0 text-uppercase">Product Form</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.product.index') }}" class="btn btn-secondary float-end">Manage Product</a>
                                        </div>
                                    </div>
                                    <hr/>
                                    <form class="row g-3" action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
{{--                                        @if(isset($sub_category))--}}
{{--                                            @method('put')--}}
{{--                                        @endif--}}
                                        @csrf
                                        <div class="col-12">
                                            <label class="form-label">Category </label>
                                            <select name="category_id" id="" class="form-control">
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Sub Category </label>
                                            <select name="sub_category_id" id="" class="form-control">
                                                @foreach($sub_categories as $sub_category)
                                                    <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Brand </label>
                                            <select name="brand_id" id="" class="form-control">
                                                @foreach($brands as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Color </label>
                                            <select name="color_id[]" id="" class="form-control multiple-select" multiple="multiple">
                                                @foreach($colors as $color)
                                                    <option value="{{ $color->id }}">{{ $color->color_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">size </label>
                                            <select name="size_id[]" id="" class="form-control multiple-select" multiple="multiple">
                                                @foreach($sizes as $size)
                                                    <option value="{{ $size->id }}">{{ $size->size_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">supplier </label>
                                            <select name="supplier_id" id="" class="form-control">
                                                @foreach($suppliers as $supplier)
                                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Product Name</label>
                                            <input type="text" class="form-control" name="product_name">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Product code</label>
                                            <input type="text" class="form-control" name="product_code">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Product Price</label>
                                            <input type="number" class="form-control" name="price">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Product Discount amount</label>
                                            <input type="number" class="form-control" name="dis_amount">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Product Discount Price</label>
                                            <input type="number" class="form-control" name="dis_price">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Product Main Image</label>
                                            <input type="file" class="form-control" name="main_image">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Product secondary Image</label>
                                            <input type="file" class="form-control" name="secondary_image">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Product sub Image</label>
                                            <input type="file" class="form-control" name="sub_image[]" multiple="">
                                        </div>

{{--                                        @if(isset($sub_category))--}}
{{--                                            <div class="col-12">--}}
{{--                                                <label class="form-label">Status</label>--}}
{{--                                                <input type="radio" name="status" value="1" {{ $sub_category->status == 1 ? 'checked':''}}>published--}}
{{--                                                <input type="radio" name="status" value="1" {{ $sub_category->status == 0 ? 'checked':''}}>Unpublished--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary form-control">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
