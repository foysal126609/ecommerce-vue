<?php

namespace App\Models;

use App\Models\ProductColor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Monolog\Handler\selectErrorStream;
use App\Models\ProductSubImage;
use App\Models\ProductSize;

class Product extends Model
{
    use HasFactory;

    private static $product,$productId,$productSubImage,$file,$files,$image,$imageNewName,$imageDirectory,$imgUrl;
    public static  function saveProduct($request){
        self::$product = new Product();
        self::$product->category_id =$request->category_id;
        self::$product->sub_category_id =$request->sub_category_id;
        self::$product->brand_id =$request->brand_id;
        self::$product->supplier_id =$request->supplier_id;
        self::$product->product_name =$request->product_name;
        self::$product->product_code =$request->product_code;
        self::$product->price =$request->price;
        self::$product->dis_amount =$request->dis_amount;
        self::$product->dis_price =$request->dis_price;
        self::$product->main_image =self::saveMainImage($request);
        self::$product->secondary_image =self::saveSecondaryImage($request);
        self::$product->save();
        self::$productId=self::$product->id;
        return self::$productId;
    }
    private static function saveMainImage($request){
        self::$image = $request->file('main_image');
        self::$imageNewName = $request->product_name.'-'.rand().'.'.self::$image->extension();
        self::$imageDirectory = 'adminAssets/upload-image/main-image/';
        self::$imgUrl = self::$imageDirectory.self::$imageNewName;
        self::$image->move(self::$imageDirectory,self::$imageNewName);
        return self::$imgUrl;
    }
    private static function saveSecondaryImage($request){
        self::$image = $request->file('secondary_image');
        self::$imageNewName = $request->product_name.'-'.rand().'.'.self::$image->extension();
        self::$imageDirectory = 'adminAssets/upload-image/secondary-image/';
        self::$imgUrl = self::$imageDirectory.self::$imageNewName;
        self::$image->move(self::$imageDirectory,self::$imageNewName);
        return self::$imgUrl;
    }

    public static function uploadImage($request,$productId){
        if(self::$files=$request->file('sub_image')){
            foreach (self::$files as self::$file){
                self::$imageNewName = rand().'.'.self::$file->extension();
                self::$imageDirectory = 'adminAssets/upload-image/sub-image/';
                self::$imgUrl = self::$imageDirectory.self::$imageNewName;
                self::$file->move(self::$imageDirectory,self::$imageNewName);
                self::$productSubImage = new ProductSubImage();
                self::$productSubImage->product_id =$productId;
                self::$productSubImage->sub_image =self::$imgUrl;
                self::$productSubImage->save();
            }

        }
    }

    public static function color($request,$productId,$colors){

//       $colors = count($request->color_id);
//        dd($colors);

       if ($colors > 0){
           for ($i = 0; $i<$colors; $i++){
              $productColor = new ProductColor();
              $productColor->product_id = $productId;
              $productColor->color_id = $request->color_id[$i];
              $productColor->save();
           }
       }

    }

    public static function size($request,$productId,$sizes){

               if ($sizes > 0){
                   for ($i = 0; $i<$sizes; $i++){
                      $size = new ProductSize();
                      $size->product_id = $productId;
                      $size->size_id = $request->size_id[$i];
                      $size->save();
                   }
               }

            }

            public function getSupplierName(){
                return  $this->belongsTo(Supplier::class,'supplier_id');
            }

            public static function updateProduct($request,$id){
                self::$product =Product::find($id);
                self::$product->category_id =$request->category_id;
                self::$product->sub_category_id =$request->sub_category_id;
                self::$product->brand_id =$request->brand_id;
                self::$product->supplier_id =$request->supplier_id;
                self::$product->product_name =$request->product_name;
                self::$product->product_code =$request->product_code;
                self::$product->price =$request->price;
                self::$product->dis_amount =$request->dis_amount;
                self::$product->dis_price =$request->dis_price;
                self::$product->main_image =$request->main_image;
                self::$product->secondary_image =$request->secondary_image;
                self::$product->save();
                self::$productId=self::$product->id;
                return self::$productId;
            }
    public static function updateColor($request,$productId,$colors){

        self::$product= ProductColor::where('product_id',$productId)->get();

        foreach (self::$product as $item){
            $item->delete();
        }

        if ($colors > 0){
            for ($i = 0; $i<$colors; $i++){
                $productColor = new ProductColor();
                $productColor->product_id = $productId;
                $productColor->color_id = $request->color_id[$i];
                $productColor->save();
            }
        }

    }


}
