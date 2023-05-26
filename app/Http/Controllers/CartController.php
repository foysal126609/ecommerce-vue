<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{
    public function addToCart( Request $request){
       $product = Product::find($request->product_id);
//       return $product;
        Cart::add([
            'id'=>$request->product_id,
            'name'=>$product->product_name,
            'qty'=>1,
            'price'=>$product->price,
        ]);
        return redirect('/cart');
    }
    public function showCart(){
//        return Cart::content();
        return view('admin.cart.show-cart',[
            'products'=>Cart::content()
        ]);
    }
    public function cartDelete($id){
        Cart::remove($id);
        return redirect('/cart');
    }
    public function cartUpdate(Request $request){
        Cart::update(
            $request->rowId,
            $request->qty
        );
        return redirect('/cart');
    }
}
