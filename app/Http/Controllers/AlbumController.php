<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;


class AlbumController extends Controller
{
  
    public function index()
    {
        $rows = Album::All();
        return view('album.index', compact('rows'));
    }

    public function create()
    {
        return view('album.add');
    }

    
    public function store(Request $request)
    {
         $request->validate([
            'album_name' => 'bail|required:tb_album'
        ],
        [
            'album_name.required' => 'Isi Nama !'
       ]);

       Album::create([
            'album_name' => $request->album_name,
            'album_text' => $request->album_text,
            'album_pho_id' => $request->album_pho_id

       ]);

       return redirect('album'); 
    }

    
    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
         $row = Album::findOrFail($id);
         return view('album.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $request->validate([
            'album_name' => 'bail|required:tb_album'
        ],
        [
            'album_name.required' => 'Isi Nama !'
        ]);

        $row = Album::findOrFail($id);
        $row->update([
            'album_name' => $request->album_name,
            'album_text' => $request->album_text,
            'album_pho_id' => $request->album_pho_id
        ]);

        return redirect('album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Album::findOrFail($id);
        $row->delete();

        return redirect('album');
    }
}
