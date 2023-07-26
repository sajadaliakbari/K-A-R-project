<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('setting.setting');
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
            'homebg' => 'required',
            'productbg' => 'required',
            'contactbg' => 'required'
        ]);

        $homebg = $request->file('homebg')->store('public');
        $productbg = $request->file('productbg')->store('public');
        $contactbg = $request->file('contactbg')->store('public');


        $store = setting::create([
            'homebg' => $homebg,
            'productbg' => $productbg,
            'contactbg' => $contactbg
        ]);

        if($store){
            return redirect()->back();
        }else{
            return view('product.edit');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
