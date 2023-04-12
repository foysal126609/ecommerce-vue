<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.manage-product',[
           'products'=> Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.add-product',[
            'categories'=>Category::all(),
            'sub_categories'=>SubCategory::all(),
            'brands'=>Brand::all(),
            'colors'=>Color::all(),
            'sizes'=>Size::all(),
            'suppliers'=>Supplier::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * $productId
     *
     */
    public function store(Request $request)
{
//    return $request;
    $productId=Product::saveProduct($request);
        Product::uploadImage($request,$productId);
    $colors=count($request->color_id);
        Product::color($request,$productId,$colors);
    $sizes=count($request->size_id);
        Product::size($request,$productId,$sizes);
    return back();
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
//        $pro=ProductColor::where('product_id',$id)->get()->toArray();
//        return $pro;
        return view('admin.product.edit-product',[
            'categories'=>Category::all(),
            'sub_categories'=>SubCategory::all(),
            'brands'=>Brand::all(),
            'colors'=>Color::all(),
            'sizes'=>Size::all(),
            'suppliers'=>Supplier::all(),
            'product'=>Product::find($id),
            'productColor' =>ProductColor::select('color_id')->where('product_id',$id)->get()->toArray(),
            'productSize' =>ProductSize::select('size_id')->where('product_id',$id)->get()->toArray(),

        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $productId=Product::updateProduct($request,$id);
//        Product::uploadImage($request,$productId);
        $colors=count($request->color_id);
        Product::updateColor($request,$productId,$colors);
//        $sizes=count($request->size_id);
//        Product::size($request,$productId,$sizes);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
