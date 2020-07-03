<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
   
    public function index()
     {
        $rows = Category::All();
        return view('category.index', compact('rows'));
    }

    public function create()
    {
        return view('category.add');
    }

   
    public function store(Request $request)
     {
       $request->validate([
            'cat_name' => 'bail|required:tb_category'
        ],
        [
            'cat_name.required' => 'Isi Nama !'
       ]);

       Category::create([
            'cat_name' => $request->cat_name,
            'cat_text' => $request->cat_text
       ]);

       return redirect('category'); 
    }
    
    public function show($id)
    {
        
    }

    public function edit($id)
    {
          $row = Category::findOrFail($id);
        return view('category.edit', compact('row'));
    }

   
    public function update(Request $request, $id)
    {
         $request->validate([
            'cat_name' => 'bail|required:tb_category'
        ],
        [
            'cat_name.required' => 'Isi Nama !'
        ]);

        $row = Category::findOrFail($id);
        $row->update([
            'cat_name' => $request->cat_name,
            'cat_text' => $request->cat_text
        ]);

        return redirect('category');
    }

   
    public function destroy($id)
  {
        $row = Category::findOrFail($id);
        $row->delete();

        return redirect('category');
    }
}
