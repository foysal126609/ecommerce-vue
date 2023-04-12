<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function League\Flysystem\move;

class Category extends Model
{
    private static $category,$image,$imageNewName,$imageDirectory,$imgUrl;
    use HasFactory;
    public static function saveCategory($request){
        self::$category = new Category();
        self::$category->category_name = $request->category_name;
        self::$category->image = self::saveImage($request);
        self::$category->save();

    }
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = $request->category_name.'-'.rand().'.'.self::$image->extension();
        self::$imageDirectory = 'adminAssets/upload-image/category-image/';
        self::$imgUrl = self::$imageDirectory.self::$imageNewName;
        self::$image->move(self::$imageDirectory,self::$imageNewName);
        return self::$imgUrl;
    }
    public static function updateStatus($id){
        self::$category = Category::find($id);
        if (self::$category->status == 1){
            self::$category->status = 0;
        }else{
            self::$category->status = 1;
        }
        self::$category->save();
    }
    public static function categoryUpdate($request,$id){
        self::$category = Category::find($id);
        self::$category->category_name = $request->category_name;
        if ($request->file('image')){
            if (self::$category->image){
                if (file_exists(self::$category->image)){
                    unlink(self::$category->image);
                    self::$category->image = self::saveImage($request);
                }
            }else{
                self::$category->image = self::saveImage($request);
            }
        }
        self::$category->status = $request->status;
        self::$category->save();
    }
    public static function deleteCategory($id){
        self::$category = Category::findOrFail($id);
        if (self::$category->image) {
            if (file_exists(self::$category->image)) {
                unlink(self::$category->image);
            }
        }
        self::$category->delete();
    }
}
