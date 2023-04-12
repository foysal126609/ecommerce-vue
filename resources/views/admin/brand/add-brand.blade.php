@extends('admin.master')
@section('title')
    Add and Edit Brand
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
                    <div class="col-md-8 offset-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-3 rounded">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="mb-0 text-uppercase">Brand Form</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.brand.index') }}" class="btn btn-secondary float-end">Manage Brand</a>
                                        </div>
                                    </div>
                                    <hr/>
                                    <form class="row g-3" action="{{ isset($brand) == NUll ? route('admin.brand.store') : route('admin.brand.update',$brand->id) }}" method="post" enctype="multipart/form-data">
                                        @if(isset($brand))
                                            @method('put')
                                        @endif
                                        @csrf
                                        <div class="col-12">
                                            <label class="form-label">Brand name</label>
                                            <input type="text" class="form-control" name="brand_name" value="{{ isset($brand) ? $brand->brand_name : ' ' }}">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Brand Image</label>
                                            <input type="file" class="form-control" name="image">
                                            @if(isset($brand))
                                                <img src="{{ asset($brand->image) }}" alt="" class="img-fluid rounded-1" style="height: 50px; width: 50px;">
                                            @endif
                                        </div>
                                        @if(isset($brand))
                                            <div class="col-12">
                                                <label class="form-label">Status</label>
                                                <input type="radio" name="status" value="1" {{ $brand->status == 1 ? 'checked':''}}>published
                                                <input type="radio" name="status" value="1" {{ $brand->status == 0 ? 'checked':''}}>Unpublished
                                            </div>
                                        @endif
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
