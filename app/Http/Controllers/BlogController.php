<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori as Kategori;
use App\Models\blog as Blog;

class BlogController extends Controller
{
    public function createblog(){
        return view('create', [
            'categories' => Kategori::all(),
            'title' => 'createblog',


        ]);
    }

    public function postblog(Request $request){
        $blog = new blog([  'Penulis' => $request->penulis,
                            'Tanggal Publish' => $request->tanggal_publish,
                            'Gambar' => $request->gambar,
                            'Judul' => $request->judul,
                            'konten' => $request->konten,
                          
    ]);
  
        $post = Post::find(1);
        $post->comments()->save($comment);
    }
}
