@extends('admin.master')
@section('title')
    Add and Edit Supplier
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
                                            <h6 class="mb-0 text-uppercase">Supplier Form</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.supplier.index') }}" class="btn btn-secondary float-end">Manage supplier</a>
                                        </div>
                                    </div>
                                    <hr/>
                                    <form class="row g-3" action="{{ isset($supplier) == null ? route('admin.supplier.store') : route('admin.supplier.update',['supplier'=>$supplier->id]) }}" method="post" enctype="multipart/form-data">
                                        @if(isset($supplier))
                                            @method('put')
                                        @endif
                                        @csrf
                                        <div class="col-12">
                                            <label class="form-label">Supplier name</label>
                                            <input type="text" class="form-control" name="name" value="{{ isset($supplier) ? $supplier->name: ' ' }}">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Supplier Phone</label>
                                            <input type="phone" class="form-control" name="phone" value="{{ isset($supplier) ? $supplier->phone: ' ' }}">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Supplier Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ isset($supplier) ? $supplier->email: ' ' }}">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Supplier Image</label>
                                            <input type="file" class="form-control" name="image">
                                            @if(isset($supplier))
                                            <img src="{{ asset($supplier->image) }}" alt="" class="img-fluid" style="height: 50px; width: 50px; border-radius: 50%">
                                            @endif
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Supplier Account No</label>
                                            <input type="text" class="form-control" name="account" value="{{ isset($supplier) ? $supplier->account: ' ' }}">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Supplier Address</label>
                                            <input type="text" class="form-control" name="address" value="{{ isset($supplier) ? $supplier->address: ' ' }}">
                                        </div>
                                        @if(isset($supplier))
                                            <div class="col-12">
                                                <label class="form-label">Status</label>
                                                <input type="radio" name="status" value="1" {{ $supplier->status == 1 ? 'checked':''}}>published
                                                <input type="radio" name="status" value="1" {{ $supplier->status == 0 ? 'checked':''}}>Unpublished
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

