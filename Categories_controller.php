<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categories;

class Categories_controller extends Controller
{
    function insert(Request $req){
        $categories=new Categories();
        $categories->name_c= $req->name_c;

        $categories->save();
        return redirect()->route("categories.show");
    }

    function show(){
        $data_categories=Categories::all();
        return view("list_categories", compact("data_categories"));
    }
    
}


