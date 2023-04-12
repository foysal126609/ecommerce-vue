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
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h6 class="mb-0 text-uppercase">Managge Supplier</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="{{ route('admin.supplier.create') }}" class="btn btn-secondary float-end">Add Supplier</a>
                                    </div>
                                </div>
                                <hr/>
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Supplier name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Image</th>
                                            <th>Account</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i=1; @endphp
                                        @foreach($suppliers as $supplier)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $supplier->name }}</td>
                                                <td>{{ $supplier->phone }}</td>
                                                <td>{{ $supplier->email }}</td>
                                                <td>
                                                    <img src="{{ asset($supplier->image) }}" alt="" class="img-fluid" style="height: 50px; width: 50px; border-radius: 50%">
                                                </td>
                                                <td>{{ $supplier->account }}</td>
                                                <td>{{ $supplier->address }}</td>
                                                <td>{{ $supplier->status == 1 ? 'published':'Unpublished' }}</td>
                                                <td class="d-flex mx-2">
                                                    <a href="{{ route('admin.supplier.edit',['supplier'=>$supplier->id]) }}" class="btn btn-success btn-sm">Edit</a>
                                                    @if($supplier->status == 1)
                                                        <a href="{{ route('admin.supplier.show',['supplier'=>$supplier->id]) }}" class="btn btn-warning btn-sm">Unpublish</a>
                                                    @else
                                                        <a href="{{ route('admin.supplier.show',['supplier'=>$supplier->id]) }}" class="btn btn-secondary btn-sm">Published</a>
                                                    @endif

                                                    <form action="{{ route('admin.supplier.destroy',['supplier'=>$supplier->id]) }}" method="post">
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
                                            <th>Supplier name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Image</th>
                                            <th>Account</th>
                                            <th>Address</th>
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



