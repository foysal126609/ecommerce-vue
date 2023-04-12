<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    private static $size;
    public static function saveSize($request){
        self::$size = new Size();
        self::$size->size_name = $request->size_name;
        self::$size->save();
    }
    public static function updateStatus($id){
        self::$size = Size::find($id);
        if (self::$size->status == 1){
            self::$size->status = 0;
        }else{
            self::$size->status = 1;
        }
        self::$size->save();
    }
    public static function updateSize($request,$id){
        self::$size = Size::find($id);
        self::$size->size_name = $request->size_name;
        self::$size->status = $request->status;
        self::$size->save();
    }
    public static function deleteSize($id){
        self::$size=Size::findOrFail($id);
        self::$size->delete();
    }
}
