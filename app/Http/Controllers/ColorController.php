<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Color;
use Illuminate\Support\Facades\Storage;



class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Color::all();

        return view('sizeclothcolor.Colors')->with(['colors' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'clr_name'=> 'required',
            'color' => 'required'
        ]);

        $store = Color::create([
            'clr_name'=>$request->input('clr_name'),
            'color'=>$request->input('color')
        ]);

        return redirect()->back();
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
        //
        $data = Color::find($id);

        return view('sizeclothcolor.edit_colors')->with(['product'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product = Color::find($id);


        $product->clr_name = $request->input('clr_name');
        $product->color = $request->input('color');

        $product->update();

        return redirect('/showColors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $product = Color::find($id);
        $product->delete();        

        return redirect('/showColors');
    }
}
