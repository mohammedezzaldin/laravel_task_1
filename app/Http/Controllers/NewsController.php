<?php

namespace App\Http\Controllers;

use App\Category;
use App\NewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index(){
        return view('allnews')->with('news',NewModel::all());
    }

    public function create(){
        $categories = Category::all();
        return view('createnews')->with('categories',$categories);
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'photo' => 'required|image',
            'category_id' => 'required'
        ]);

        $photo = $request->photo;
        $photo_new_name = time().$photo->getClientOriginalName();
        $photo->move('photos',$photo_new_name);

        $news = new NewModel();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->category_id = $request->category_id;
        $news->photo = '/photos/' . $photo_new_name;

        $news->save();

        return redirect()->route('news.index');
    }

    public function show($id){
        $news = NewModel::find($id);
        return view('shownews')->with('news',$news);
    }

    public function edit($id){
        return view('editnews')->with('new',NewModel::find($id));
    }

    public function delete($id){
        $news = NewModel::find($id);
        $news->delete();

        return redirect()->route('news.index');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $categories = DB::table('categories')->where('name','like', '%'.$search.'%')->get();
        $news = DB::table('new_models')->where('title','like', '%'.$search.'%')->get();
        return view('searchresults')->with('categories',$categories)->with('news',$news);
    }
}
