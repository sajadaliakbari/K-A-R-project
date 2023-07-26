<?php

namespace App\Http\Controllers;

use App\Models\order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
   
    




    public function index()
    {

        $data = order::all();
        return view('orderandbookingpage.orderlist')->with(['orders' => $data]);


    }

 
    







    public function create()
    {
        
    }

    
    





    public function store(Request $request)
    {
        $request->validate([
            'product' => 'required',
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'contact_number' => 'required'
        ]);

        $store = order::create([
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'contact_number' => $request->input('contact_number'),
            'quantity' => $request->input('quantity')

        ]);


        if($store){
            return redirect('homepagename');
        }
    }

    
    





    public function show( $id)
    {


        $data = order::find($id);

        return view ('orderandbookingpage.singleorder')->with(['singleorder' => $data]);

        
    }

    
    




    public function edit(string $id)
    {
        $data = order::find($id);

        return view('orderandbookingpage.editorder')->with(['editorder' => $data]);
    }

    
    




    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        ]);
        $data = order::find($id);

        $data->name = $request->input('name');
        $data->last_name = $request->input('last_name');
        $data->email = $request->input('email');
        $data->contact_number = $request->input('contact_number');
        $data->quantity = $request->input('quantity');

        $data->update();

        return redirect()->route('allorder');



    }

   





    public function destroy(string $id)
    {
        $delete = order::find($id);

        $delete->delete();

        return redirect()->route('allorder');
    }
}
