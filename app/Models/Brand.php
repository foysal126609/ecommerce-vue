<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    private static $brand,$image,$imageNewName,$imageDirectory,$imgUrl;
    use HasFactory;
    public static function saveBrand($request){
        self::$brand = new Brand();
        self::$brand->brand_name = $request->brand_name;
        self::$brand->image = self::saveImage($request);
        self::$brand->save();

    }
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = $request->brand_name.'-'.rand().'.'.self::$image->getClientOriginalExtension();
        self::$imageDirectory = 'adminAssets/upload-image/brand-image/';
        self::$imgUrl = self::$imageDirectory.self::$imageNewName;
        self::$image->move(self::$imageDirectory,self::$imageNewName);
        return self::$imgUrl;
    }
    public static function updateStatus($id){
        self::$brand = Category::find($id);
        if (self::$brand->status == 1){
            self::$brand->status = 0;
        }else{
            self::$brand->status = 1;
        }
        self::$brand->save();
    }
    public static function brandUpdate($request,$id){
        self::$brand = Brand::find($id);
        self::$brand->brand_name = $request->brand_name;
        if ($request->file('image')){
            if (self::$brand->image){
                if (file_exists(self::$brand->image)){
                    unlink(self::$brand->image);
                    self::$brand->image = self::saveImage($request);
                }
            }else{
                self::$brand->image = self::saveImage($request);
            }
        }
        self::$brand->status = $request->status;
        self::$brand->save();
    }
    public static function deleteBrand($id){
        self::$brand = Category::findOrFail($id);
        if (self::$brand->image) {
            if (file_exists(self::$brand->image)) {
                unlink(self::$brand->image);
            }
        }
        self::$brand->delete();
    }
}
