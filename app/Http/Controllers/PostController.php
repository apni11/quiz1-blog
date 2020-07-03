<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{
    
    public function index()
    {
        $rows = Post::All();
        return view('post.index', compact('rows'));
    
    }

    
    public function create()
    {
        return view('post.add');
    }

    
    public function store(Request $request)
    {
         $request->validate([
            'post_date' => 'bail|required:tb_post',
            'post_tittle' => 'required'
        ],
        [
            'post_date.required' => 'Isi Tanggal !',
            'post_tittle.required' => 'Isi Judul !'
       ]);

       Post::create([
            'post_date' => $request->post_date,
            'post_slug' => $request->post_slug,
            'post_tittle' => $request->post_tittle,
            'post_text' => $request->post_text,
            'post_cat_id' => $request->post_cat_id
       ]);

       return redirect('post'); 
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
         $row = Post::findOrFail($id);
        return view('post.edit', compact('row'));
    }

    
    public function update(Request $request, $id)
    {
         $request->validate([
            'post_date' => 'bail|required:tb_post',
            'post_tittle' => 'required'
        ],
        [
            'post_date.required' => 'Isi Tanggal !',
            'post_tittle.required' => 'Isi Judul !'
        ]);

        $row = Post::findOrFail($id);
        $row->update([
            'post_date' => $request->post_date,
            'post_slug' => $request->post_slug,
            'post_tittle' => $request->post_tittle,
            'post_text' => $request->post_text,
            'post_cat_id' => $request->post_cat_id   
        ]);
        return redirect('post');
    }

    
    public function destroy($id)
    {
         {
        $row = Post::findOrFail($id);
        $row->delete();

        return redirect('post');
    }
    }
}
