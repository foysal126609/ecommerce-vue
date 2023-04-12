<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    private static $supplier,$image,$imageNewName,$directory,$imgUrl;
    public static function saveSupplier($request){
        self::$supplier = new Supplier();
        self::$supplier->name = $request->name;
        self::$supplier->phone = $request->phone;
        self::$supplier->email = $request->email;
        self::$supplier->image = self::saveImage($request);
        self::$supplier->account = $request->account;
        self::$supplier->address = $request->address;
        self::$supplier->save();
    }

    private static function saveImage($request){
          self::$image = $request->file('image');
          self::$imageNewName = $request->name.'-'.rand().'.'.self::$image->getClientOriginalExtension();
          self::$directory = 'adminAssets/upload-image/supplier-image/';
          self::$imgUrl = self::$directory.self::$imageNewName;
          self::$image->move(self::$directory,self::$imageNewName);
          return self::$imgUrl;
    }
    public static function updateSupplier($request,$id){
        self::$supplier=Supplier::find($id);
        self::$supplier->name = $request->name;
        self::$supplier->phone = $request->phone;
        self::$supplier->email = $request->email;
        if ($request->file('image')){
            if (self::$supplier->image){
                if (file_exists(self::$supplier->image)){
                    unlink(self::$supplier->image);
                    self::$supplier->image = self::saveImage($request);
                }else{
                    self::$supplier->image = self::saveImage($request);
                }
            }
        }
        self::$supplier->account = $request->account;
        self::$supplier->address = $request->address;
        self::$supplier->status = $request->status;
        self::$supplier->save();

    }
    public static function deleteSupplier($id){
        self::$supplier = Supplier::find($id);
        if (self::$supplier->image){
            if (file_exists(self::$supplier->image)){
                unlink(self::$supplier->image);
            }
        }
        self::$supplier->delete();

    }
}
