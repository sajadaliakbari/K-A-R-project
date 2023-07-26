<?php

namespace App\Http\Controllers;
use App\Models\booking;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    
    public function index()
    {

        $data = booking::all();

        return view('orderandbookingpage.booking')->with(['booking' => $data]);
    
    }

   
    



    public function create()
    {
        //
    }

    




    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'contact_number' => 'required',
            'quantity' => 'required',

        ]);

        $store = booking::create([
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'contact_number' => $request->input('contact_number'),
            'size' => $request->input('size'),
            'color' => $request->input('color'),
            'pattern' => $request->input('pattern'),
            'cloth' => $request->input('cloth'),

            'quantity' => $request->input('quantity')

        ]);


        if($store){
            return redirect()->route('allbooking');
        }
    }

    
    
    
    


    public function show(string $id)
    {
       
        $data = booking::find($id);

        return view ('orderandbookingpage.singlebooking')->with(['singlebooking' => $data]);
    }

   
    




    public function edit(string $id)
    {
        $data = booking::find($id);

        return view('orderandbookingpage.editbooking')->with(['editbooking' => $data]);
    }

    
    



    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        ]);
        $data = booking::find($id);

        $data->name = $request->input('name');
        $data->last_name = $request->input('last_name');
        $data->email = $request->input('email');
        $data->contact_number = $request->input('contact_number');
        $data->quantity = $request->input('quantity');

        $data->update();

        return redirect()->route('allbooking');


    }

  
    



    public function destroy(string $id)
    {
        $delete = booking::find($id);

        $delete->delete();

        return redirect()->route('allbooking');
    }
}
