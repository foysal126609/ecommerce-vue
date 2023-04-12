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
                                            <h6 class="mb-0 text-uppercase">Color Form</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.color.index') }}" class="btn btn-secondary float-end">Manage Color</a>
                                        </div>
                                    </div>
                                    <hr/>
                                    <form class="row g-3" action="{{ isset($color)== null ? route('admin.color.store') : route('admin.color.update',$color->id) }}" method="post">
                                        @if(isset($color))
                                            @method('put')
                                        @endif
                                        @csrf
                                        <div class="col-12">
                                            <label class="form-label">Color name</label>
                                            <input type="text" class="form-control" name="color_name" value="{{ isset($color) ? $color->color_name : ' ' }}">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Color Code</label>
                                            <input type="text" class="form-control" name="color_code" value="{{ isset($color) ? $color->color_code : ' ' }}" >
                                        </div>
                                            @if(isset($color))
                                                <div class="col-12">
                                                    <label class="form-label">Status</label>
                                                    <input type="radio" name="status" value="1" {{ $color->status == 1 ? 'checked':''}}>published
                                                    <input type="radio" name="status" value="1" {{ $color->status == 0 ? 'checked':''}}>Unpublished
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
