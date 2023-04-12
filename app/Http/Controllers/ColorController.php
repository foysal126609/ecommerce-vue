<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.color.manage-color',[
            'colors'=>Color::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.color.add-color');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Color::saveColor($request);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Color::updateStatus($id);
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
//        $color = Color::find($id);
//        return $color;
        return view('admin.color.add-color',[
            'color'=>Color::find($id),
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         Color::updateColor($request,$id);
         return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Color::deleteColor($id);
        return back();
    }
}
