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
                                        <h6 class="mb-0 text-uppercase">Sub-Category Form</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.sub-category.index') }}" class="btn btn-secondary float-end">Manage Sub-category</a>
                                    </div>
                                </div>
                                <hr/>
                                <form class="row g-3" action="{{ isset($sub_category) == NUll ? route('admin.sub-category.store') : route('admin.sub-category.update',$sub_category->id) }}" method="post" enctype="multipart/form-data">
                                    @if(isset($sub_category))
                                    @method('put')
                                    @endif
                                    @csrf
                                    <div class="col-12">
                                        <select name="category_id" id="" class="form-control">
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Sub-category Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ isset($sub_category) ? $sub_category->name: ' '}}">
                                    </div>
                                    @if(isset($sub_category))
                                    <div class="col-12">
                                        <label class="form-label">Status</label>
                                        <input type="radio" name="status" value="1" {{ $sub_category->status == 1 ? 'checked':''}}>published
                                        <input type="radio" name="status" value="1" {{ $sub_category->status == 0 ? 'checked':''}}>Unpublished
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
