<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cat = categories::get();
        return view('dashboard.view_category',compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.Category_forms');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->get('name1');
        $name2 = $request->get('name2');
        
        if($name==$name2){
            $name3 = $name;    
            $category = new categories([
                'Cname'=>$name3
            ]);
            $category->save();
            return redirect()->action([CategoryController::class,'create']);
            // return redirect()->action([CategoryController::class,'create']);
        }else{
            echo "<script>alert('Both Names should be same')</script>";
            return redirect('/category');
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
        $cat = categories::find($id);
        return view('dashboard.update_category',compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = $request->get('name1');
        $name2 = $request->get('name2');

        if($name == $name2){
            $cat = categories::find($id);
            $cat->Cname=$name;
            $cat->update();
            return redirect()->action([CategoryController::class,'index']);
        }else{
            echo "<script>alert('Second name should be same as Name')</script>";
            return redirect()->action([CategoryController::class,'index']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = categories::find($id);
        $cat->delete();
        return redirect()->action([CategoryController::class,'index']);
    }
}
