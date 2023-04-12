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
                                        <h6 class="mb-0 text-uppercase">Managge Category</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.brand.create') }}" class="btn btn-secondary float-end">Add category</a>
                                    </div>
                                </div>
                                <hr/>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Category Name</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=1; @endphp
                                        @foreach($brands as $brand)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $brand->brand_name }}</td>
                                                <td>
                                                    <img src="{{ asset($brand->image) }}" alt="" class="img-fluid" style="height: 50px; width: 50px; border-radius: 50%">
                                                </td>
                                                <td>{{ $brand->status == 1 ? 'published':'Unpublished' }}</td>
                                                <td class="d-flex">
                                                    <a href="{{ route('admin.brand.edit',['brand'=>$brand->id]) }}" class="btn btn-primary btn-sm mx-2" title="Edit">Edit</a>

                                                    @if($brand->status == 1)
                                                        <a href="{{ route('admin.brand.show',['brand'=>$brand->id]) }}" class="btn btn-warning btn-sm mx-2">Unpublished</a>
                                                    @else
                                                        <a href="{{ route('admin.brand.show',['brand'=>$brand->id]) }}" class="btn btn-primary btn-sm mx-2">published</a>
                                                    @endif

                                                    <form action="{{ route('admin.brand.destroy',['brand'=>$brand->id]) }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Category Name</th>
                                            <th>Image</th>
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

