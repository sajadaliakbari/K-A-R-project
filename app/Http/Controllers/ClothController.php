<?php

namespace App\Http\Controllers;

use App\Models\Cloth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClothController extends Controller
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
        $data = Cloth::all();

        return view('sizeclothcolor.Cloths')->with(['cloths' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request -> validate([
            'c_name'=>'required',
            'image' => 'required'
        ]);


        $image = $request->file('image')->store('public');

        $store = Cloth::create([
            'c_name'=>$request->input('c_name'),
            'image'=>$image
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

        $data = Cloth::find($id);

        return view('sizeclothcolor.edit_cloths')->with(['product'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product = Cloth::find($id);

        if($request->file('image')){
            $preImage = $product->image;
            Storage::delete($preImage);
            $newImage = $request->file('image')->store('public');
            $product->image = $newImage;
        }


        $product->c_name = $request->input('c_name');

        $product->update();

        return redirect('/showCloths');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Cloth::find($id);
        if(Storage::delete($product->image)){
            $product->delete();        
        }

        return redirect('/showCloths');
    }
}
