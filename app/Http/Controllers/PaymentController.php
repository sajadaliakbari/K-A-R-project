<?php

namespace App\Http\Controllers;

// use Faker\Provider\ar_EG\Payment;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Pattern;
use Nette\Utils\Strings;

class PaymentController extends Controller
{
    // public function viewpaymentform(){
    //     $orders = order::all();
    //     return view()->with('orders'=>$orders);

    // }


    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_id'=>'required',
            'costumer_name'=>'required|min:3',
            'email'=>'required|min:9',
            'contact'=>'required|min:10|max:14',
            'price'=>'required',
            'paid'=>'required',
            'amount'=>'required',
        ]);


        $store = Payment::create([
            
            'order_id'=>$request->input('order_id'),
            'costumer_name'=>$request->input('costumer_name'),
            'email'=>$request->input('email'),
            'contact'=>$request->input('contact'),
            'price'=>$request->input('price'),
            'paid'=>$request->input('paid'),
            'unpaid'=>$request->input('unpaid'),
            'amount'=>$request->input('amount')

        ]);
        return redirect()->back();
        

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $payments = Payment::all();
        return view('payments.payment')->with(['payments'=>$payments]);
    }

    /**
     * Display the specified resource.
     */
    public function show_add()
    {
        $orders = Pattern::all();
        return view('payments.addpayment')->with(['orders'=>$orders]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit_pay(string $id)
    {
        $orders = Pattern::all();
        $edit_payment = Payment::find($id);
        return view('edit pages.editpayment')->with(['edit_payment'=>$edit_payment,'orders'=>$orders]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $payment = Payment::find($id);
            
            
        $payment->order_id =$request->input('order_id');
        $payment->costumer_name =$request->input('costumer_name');
        $payment->email =$request->input('email');
        $payment->contact =$request->input('contact');
        $payment->price =$request->input('price');
        $payment->paid =$request->input('paid');
        $payment->unpaid =$request->input('unpaid');
        $payment->amount =$request->input('amount');
        $payment->update();


        return redirect()->back();
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payment = Payment::find($id);
            $payment->delete();
        return redirect()->route('showPayment');
    }
   
}
