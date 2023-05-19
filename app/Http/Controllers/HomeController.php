<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        return view('front-end.home.home',[
           'products' => Product::all()
        ]);
    }
    public function productDetails($id){
//        $aa=DB::table('product_sub_images')
//            ->join('products','product_sub_images.product_id','products.id')
//            ->select('product_sub_images.product_id','product_sub_images.sub_image')
//            ->where('product_id',$id)
//            ->get();
//        return $aa;

        return view('front-end.product.product-details',[
            'products' => Product::find($id),
            'productColors'=>DB::table('product_colors')
                ->join('colors','product_colors.color_id','colors.id')
                ->select('colors.color_name','colors.color_code','product_colors.product_id')
                ->where('product_id',$id)
                ->get(),
            'productSizes'=>DB::table('product_sizes')
                ->join('sizes','product_sizes.size_id','sizes.id')
                ->select('sizes.size_name','product_sizes.product_id')
                ->where('product_id',$id)
                ->get(),
            'subImages'=>DB::table('product_sub_images')
                ->join('products','product_sub_images.product_id','products.id')
                ->select('product_sub_images.product_id','product_sub_images.sub_image')
                ->where('product_id',$id)
                ->get(),

        ]);
    }
}
