<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function League\Flysystem\delete;

class Color extends Model
{
    use HasFactory;
    private static $color;
    public static function saveColor($request){
        self::$color = new Color();
        self::$color->color_name = $request->color_name;
        self::$color->color_code = $request->color_code;
        self::$color->save();
    }
    public static function updateStatus($id){
        self::$color = Color::find($id);
        if (self::$color->status == 1){
            self::$color->status = 0;
        }else{
            self::$color->status = 1;
        }
        self::$color->save();
    }
    public static function updateColor($request,$id){
        self::$color = Color::find($id);
        self::$color->color_name = $request->color_name;
        self::$color->color_code = $request->color_code;
        self::$color->status = $request->status;
        self::$color->save();
    }
    public static function deleteColor($id){
        self::$color=Color::findOrFail($id);
        self::$color->delete();
    }
}
