<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;
use App\Models\Cloth;
use App\Models\Color;
use Illuminate\Support\Facades\Storage;


class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $size = Size::all();
        $cloth = Cloth::all();
        $color = Color::all();

    
        return view('sizeclothcolor.show_cloths')->with(['sizes'=>$size, 'cloths' => $cloth, 'colors' => $color]);

    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Size::all();

        return view('sizeclothcolor.Sizes')->with(['sizes' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'size' => 'required',
        ]);
        

        $store = Size::create([
            'size'=>$request->input('size'),
            'size_des'=>$request->input('size_des')
        ]);

        if($store){
            return redirect()->back();
        }
    
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
        $data = Size::find($id);

        return view('sizeclothcolor.edit_size')->with(['product'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product = Size::find($id);


        $product->size = $request->input('size');
        $product->size_des = $request->input('size_des');

        $product->update();

        return redirect('/showSizes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $product = Size::find($id);
        $product->delete();                
        

        return redirect('/showSizes');
    }
}
