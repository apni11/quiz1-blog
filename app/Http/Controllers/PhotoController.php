<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;


class PhotoController extends Controller
{
   
    public function index()
    {
        $rows = Photo::All();
        return view('photo.index', compact('rows'));
    }

    public function create()
    {
        return view('photo.add');
    }


    public function store(Request $request)
     {
         $request->validate([
            'pho_date' => 'bail|required:tb_photo',
            'pho_tittle' => 'required'
        ],
        [
            'pho_date.required' => 'Isi Tanggal !',
            'pho_tittle.required' => 'Isi Judul !'
       ]);

       Photo::create([
            'pho_date' => $request->pho_date,
            'pho_tittle' => $request->pho_tittle,
            'pho_text' => $request->pho_text,
            'pho_post_id' => $request->pho_post_id
       ]);

       return redirect('photo'); 
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
         $row = Photo::findOrFail($id);
        return view('photo.edit', compact('row'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'pho_date' => 'bail|required:tb_photo',
            'pho_tittle' => 'required'
        ],
        [
            'pho_tittle.required' => 'Isi Tanggal !',
            'pho_tittle.required' => 'Isi Judul !'
       ]);

        $row = Photo::findOrFail($id);
        $row->update([
            'pho_date' => $request->pho_date,
            'pho_tittle' => $request->pho_tittle,
            'pho_text' => $request->pho_text,
            'pho_post_id' => $request->pho_post_id   
        ]);
        return redirect('photo'); 
    }

    
    public function destroy($id)
    {
        $row = Photo::findOrFail($id);
        $row->delete();

        return redirect('photo');
    }
}
