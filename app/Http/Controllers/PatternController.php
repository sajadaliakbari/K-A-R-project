<?php

namespace App\Http\Controllers;

use App\Models\Pattern;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PatternController extends Controller
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
        $image = $request->file('image')->store('public');
            $request->validate([
                'image'=>'required',
                'name'=>'required|min:3',
                'description'=>'required|min:30|max:500'
            ]);

            $pay = Pattern::create([
            
                
                'image'=>$image,
                'name'=>$request->input('name'),
                'description'=>$request->input('description'),

            ]);
             return redirect()->back()->with(['patterns'=>$pay]);
        

    }


    public function show()
    {
        $patterns = Pattern::all();
        return view('pages.pattern')->with(['patterns'=>$patterns]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
            $pattern = Pattern::find($id);
    
    
            return view('edit pages.editpattern')->with(['pattern'=>$pattern]);
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pattern = Pattern::find($id);

        if($request->file('image')){
            $preImage = $pattern->image;
            Storage::delete($preImage);
            $newImage = $request->file('image')->store('public');
            $pattern->image = $newImage;
        }

        $pattern->name = $request->input('name');
        $pattern->description = $request->input('description');
        $pattern->update();


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pattern = Pattern::find($id);
        if(Storage::delete($pattern->image)){
            $pattern->delete();
        }
        return redirect()->route('showPattern');
    }
}
