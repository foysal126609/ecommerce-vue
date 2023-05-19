@extends('front-end.master')
@section('title')
    Monsta - Jewelry eCommerce Bootstrap 4 Template
@endsection
@section('meta-description')

@endsection
@section('meta-keywords')

@endsection
@section('meta-title')

@endsection
@section('style')

@endsection
@section('script')

@endsection

@section('content')
    <table class="table table-bordered table-striped" style="color: #fff">
        <tr style="color: #fff">
            <th>sl</th>
            <th>name</th>
            <th>qty</th>
            <th>price</th>
            <th>sub total</th>
            <th>delete</th>
        </tr>
        @foreach($products as $product)
        <tr style="color: #fff">
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->qty }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->qty*$product->price }}</td>
            <td>
                <a href="{{ route('cart-delete',['id'=>$product->rowId]) }}">delete</a>
            </td>
        </tr>
            @endforeach
    </table>


@endsection
