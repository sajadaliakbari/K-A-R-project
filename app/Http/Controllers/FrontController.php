<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\category;
use App\Models\Size;
use App\Models\Pattern;
use App\Models\cloth;
use App\Models\setting;
use App\Models\Color;


use Illuminate\Http\Request;

class FrontController extends Controller
{

    function showhomepage (){


        $bg = setting::orderBy('id', 'DESC')->paginate(1);
        $data = product::orderBy('id', 'DESC')->paginate(3);
        // $menCat = Category::Where('Name','Men')->get();
        // $men = product::Where('category_id',$menCat->id)->get();

        $menProducts = product::join('categories as c','c.id','products.category_id')
        ->where('c.c_name','Men')
        ->get();

        $womenProducts = product::join('categories as c','c.id','products.category_id')
        ->where('c.c_name','Women')
        ->get();


        return view('front.index')->with(['products' => $data,'men'=>$menProducts, 'women'=> $womenProducts, 'bg' => $bg]);
    }

    



    function showproductpage(){
        $bg = setting::orderBy('id', 'DESC')->paginate(1);

        $size = Size::all();
        $colors = Color::all();
        $cloths = cloth::all();
        $style = Pattern::all();


        $toptrending = product::paginate(4);

        $alldata = product::all();

        $webpro = product::paginate(9);


        return view('front.product')->with(['product' => $toptrending, 'bg'=> $bg, 'webproducts' => $webpro, 'size'=> $size, 'colors' =>$colors, 'cloths' =>$cloths, 'style' =>$style,'allproduct' => $alldata ]);
    }



    function showcontactpage(){
        $bg = setting::orderBy('id', 'DESC')->paginate(1);

     


        return view('front.contact')->with(['bg'=> $bg]);
    }












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
        //
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
    public function book(string $id)
    {
        
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
