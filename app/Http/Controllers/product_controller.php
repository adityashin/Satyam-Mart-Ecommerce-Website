<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\product;
use Illuminate\Http\Request;
use DB;
use Illuminate\Routing\Controller;

class product_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $cat = DB::table('products')
        ->join('categories','products.pcid','=','categories.id')
        ->select('products.*','categories.Cname')
        ->get();
        return view('dashboard.view_product',compact('cat'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat = categories::get();
        return view('dashboard.add_product',compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $name = $request->get('name');
    $cat = $request->get('category');
    $description = $request->get('description');
    $price = $request->get('price');
    $image = $request->file('image');
    
    if (!empty($image)) {
        $filename = $image->getClientOriginalName();
        $image->move('images/', $filename);
        
        $product = new Product([
            'pcid' => $cat,
            'pname' => $name,
            'pdescription' => $description,
            'price' => $price,
            'image' => $filename
        ]);
        $product->save();
        
        return redirect()->action([product_controller::class,'create']);
    } else {
        // Handle the case when the image is not provided
        return back()->withInput()->withErrors(['image' => 'Please provide an image.']);
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
        $product = product::find($id);
        $cat = categories::get();
        return view('dashboard.update_product',compact('product','cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->get('name');
        $cat = $request->get('category');
        $desc = $request->get('description');
        $price = $request->get('price');
        $image = $request->file('image');

        if(!empty($image)){
            $filename = $image->getClientOriginalName();
            $image->move('images/',$filename);
        }
        
        $product = product::find($id);
        $product->pcid=$cat;
        $product->pname=$name;
        $product->pdescription=$desc;
        $product->price=$price;
        $product->image=$filename;
        $product->update();
        return redirect()->action([product_controller::class,'index']);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect()->action([product_controller::class,'index']);
    }
}
