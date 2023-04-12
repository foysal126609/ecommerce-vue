@extends('admin.master')
@section('title')
    Add Categoey
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
                                            <h6 class="mb-0 text-uppercase">Category Form</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.category.index') }}" class="btn btn-secondary float-end">Manage category</a>
                                        </div>
                                    </div>
                                    <hr/>
                                    <form class="row g-3" action="{{ isset($category) == NUll ? route('admin.category.store') : route('admin.category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                                        @if(isset($category))
                                            @method('put')
                                        @endif
                                        @csrf
                                        <div class="col-12">
                                            <label class="form-label">Category name</label>
                                            <input type="text" class="form-control" name="category_name" value="{{ isset($category) ? $category->category_name : ' ' }}">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Category Image</label>
                                            <input type="file" class="form-control" name="image">
                                            @if(isset($category))
                                              <img src="{{ asset($category->image) }}" alt="" class="img-fluid rounded-1" style="height: 50px; width: 50px;">
                                            @endif
                                        </div>
                                        @if(isset($category))
                                        <div class="col-12">
                                            <label class="form-label">Status</label>
                                            <input type="radio" name="status" value="1" {{ $category->status == 1 ? 'checked':''}}>published
                                            <input type="radio" name="status" value="1" {{ $category->status == 0 ? 'checked':''}}>Unpublished
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
