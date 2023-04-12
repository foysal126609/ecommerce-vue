<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\HttpFoundation\Session\Storage\save;

class SubCategory extends Model
{
    private static $subCategory;
    use HasFactory;
    public static function saveSubCategory($request){
        self::$subCategory = new SubCategory();
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name = $request->name;
        self::$subCategory->save();

    }
    public static function updateStatus($id){
        self::$subCategory = SubCategory::find($id);
        if (self::$subCategory->status == 1){
            self::$subCategory->status = 0;
        }else{
            self::$subCategory->status = 1;
        }
        self::$subCategory->save();
    }
    public static function updateSubCategory($request,$id){
        self::$subCategory = SubCategory::find($id);
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name = $request->name;
        self::$subCategory->status = $request->status;
        self::$subCategory->save();
    }
    public static function deleteSubCategory($id){
        self::$subCategory = SubCategory::findOrFail($id);
        if (self::$subCategory->image) {
            if (file_exists(self::$subCategory->image)) {
                unlink(self::$subCategory->image);
            }
        }
        self::$subCategory->delete();
    }
}
