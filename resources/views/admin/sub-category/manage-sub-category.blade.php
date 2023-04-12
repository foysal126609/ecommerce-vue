@extends('admin.master')
@section('title')
    All Category
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="mb-0 text-uppercase">Managge Sub-Category</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.sub-category.create') }}" class="btn btn-secondary float-end">Add Sub-Category</a>
                                    </div>
                                </div>
                                <hr/>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Category Name</th>
                                            <th>Sub-category Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=1; @endphp
                                        @foreach($sub_categories as $sub_category)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $sub_category->category_name }}</td>
                                                <td>{{ $sub_category->name }}</td>
                                                <td>{{ $sub_category->status == 1 ? 'published':'Unpublished' }}</td>
                                                <td class="d-flex mx-2">
                                                    <a href="{{ route('admin.sub-category.edit',$sub_category->id) }}" class="btn btn-success btn-sm">Edit</a>
                                                    @if($sub_category->status == 1)
                                                        <a href="{{ route('admin.sub-category.show',$sub_category->id) }}" class="btn btn-warning btn-sm">Unpublish</a>
                                                    @else
                                                        <a href="{{ route('admin.sub-category.show',$sub_category->id) }}" class="btn btn-secondary btn-sm">Published</a>
                                                    @endif

                                                    <form action="{{ route('admin.sub-category.destroy',$sub_category->id) }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Color Name</th>
                                            <th>Color Code</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection



