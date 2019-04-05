<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){
        return view('allcategories')->with('categories',Category::all());
    }

    public function create(){
        return view('createcategory');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required'
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return redirect()->route('categories.index');
    }

    public function edit($id){
        return view('editcategory')->with('category',Category::find($id));
    }

    public function update($id){
        $this->validate(request(),[
            'name' => 'required'
        ]);
        $category =  Category::find($id);
        $category->name = request()->name;
        $category->save();

        return redirect()->route('categories.index');
    }

    public function show($id){
        $category = Category::find($id);
        return view('showcategory')->with('category',$category);
    }

    public function delete($id){
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categories.index');
    }
}
