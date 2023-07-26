<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        $categories = category::all();

        return view('categories.categories')->with(['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);

        $store = category::create([
            'c_name'=>$request->input('name'),
            'c_description'=>$request->input('description')
        ]);

        if($store){
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = category::find($id);

        return view('categories.editcategory')->with(['category'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request-> validate([
            'name'=>'required|min:3',
            'description'=>'required|min:7'
        ]);

        $category = category::find($id);

        $category->c_name = $request->input('name');
        $category->c_description = $request->input('description');
        $category->update();

        return redirect()->route('showcategories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = category::find($id);

        $data->delete();

        return redirect()->route('showcategories');
    }
}
