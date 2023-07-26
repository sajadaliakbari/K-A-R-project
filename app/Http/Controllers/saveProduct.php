<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\Size;
use App\Models\Color;
use Psy\Command\WhereamiCommand;
use Storage;
use Symfony\Component\Console\Input\Input;


class saveProduct extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'p_name'=>'required|min:3',
            'price' => 'required',
            'category_id' => 'required',
            'stock_availability' => 'required',
            'description' => 'required',
            'image1' => 'required',
            'color1'=>'required',
            'size1' => 'required'
        ]);
            $image1 = $request->file('image1')->store('public');
            if($request->file('image2')){
            $image2 = $request->file('image2')->store('public');
            }else{
                $image2 = '';
            }
            if($request->file('image3')){
            $image3 = $request->file('image3')->store('public');

            }else{
                $image3 = '';
            }

        $store = product::create([
            'Name'=> $request->input('p_name'),
            'Description'=> $request->input('description'),
            'Price'=> $request->input('price'),
            'category_id'=> $request->input('category_id'),
            'stock_availability'=> $request->input('stock_availability'),
            'size1' => $request->input('size1'),
            'size2' => $request->input('size2'),
            'size3' => $request->input('size3'),
            'size4' => $request->input('size4'),
            'size5' => $request->input('size5'),
            'color1' => $request->input('color1'),
            'color2' => $request->input('color2'),
            'color3' => $request->input('color3'),
            'color4' => $request->input('color4'),
            'Image1'=> $image1,
            'Image2'=> $image2,
            'Image3'=> $image3
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
        $data = product::find($id);


        return view('product.index')->with(['product' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = product::find($id);
        $categories = category::all();
        $sizes = Size::all();
        $colors = Color::all();



        return view('product.edit')->with(['product'=>$data , 'categories'=>$categories, 'sizes' =>$sizes, 'colors' => $colors]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'p_name'=>'required|min:3',
            'price' => 'required',
            'category_id' => 'required',
            'stock_availability' => 'required',
            'description' => 'required',
            'color1'=>'required',
            'size1' => 'required'
        ]);

        $product = product::find($id);

        if($request->file('image1')){
            $preimage1 = $product->Image1;
            storage::delete($preimage1);
            $newimage1 = $request->file('image1')->store('public');
            $product->Image1 = $newimage1;
        }
        if($request->file('image2')){
            $preimage2 = $product->Image2;
            storage::delete($preimage2);
            $newimage2 = $request->file('image2')->store('public');
            $product->Image2 = $newimage2;
        }
        if($request->file('image3')){
            $preimage3 = $product->Image3;
            storage::delete($preimage3);
            $newimage3 = $request->file('image3')->store('public');
            $product->Image3 = $newimage3;
        }

        $product->Name = $request->input('p_name');
        $product->Description = $request->input('description');
        $product->category_id = $request->input('category_id');
        $product->stock_availability = $request->input('stock_availability');
        $product->Price = $request->input('price');
        $product->update();

        return redirect()->route('productList');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = product::find($id);

        if(Storage::delete($data->Image1)){
            if($data->Image2){
                Storage::delete($data->Image2);
            }
            if($data->Image3){
                Storage::delete($data->Image3);
            }

            $data->delete();
        }



        return redirect()->back();
    }
}
