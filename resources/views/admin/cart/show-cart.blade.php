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
            <td>
                <form action="{{ route('cart-update') }}" method="post">
                    @csrf
                    <input type="text" name="qty" value="{{ $product->qty }}">
                    <input type="hidden" name="rowId" value="{{ $product->rowId }}">
                    <input type="submit" value="update">
                </form>

            </td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->qty*$product->price }}</td>
            <td>
                <a href="{{ route('cart-delete',['id'=>$product->rowId]) }}">delete</a>
            </td>
        </tr>
            @endforeach
    </table>

  <div class="row">
      <div class="col-md-4 offset-md-4">
          <table class="table table-bordered table-striped" >
              <tr style="color: #fff">
                  <th>sub total </th>
                  <td>{{ Cart::subtotal() }} </td>
              </tr>
              <tr style="color: #fff">
                  <th>shipping charge </th>
                  <td>30</td>
              </tr>
              <tr style="color: #fff">
                  <th> total </th>
                  <td>
                      {{ Cart::subtotal()+30 }}
                  </td>
              </tr>
              <tr style="color: #fff">
                  <th></th>
                  <td>
                      <a href="{{ route('checkout') }}"  class="btn btn-success">checkout</a>
                  </td>
              </tr>
          </table>
      </div>
  </div>




@endsection
