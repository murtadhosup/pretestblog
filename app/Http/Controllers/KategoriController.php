<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategori as Kategori;
use App\Models\blog as Blog;

class KategoriController extends Controller
{
    public function kategoriblog(){
        return view('create_kategori', [
            'title' => 'createblog',


        ]);
    }

    public function postkategoriblog(Request $request){
            // $request->validate([
            //     'kategori' => 'required|max:255',
            // ]);
            $kategori = new Kategori(['KATEGORI' => $request->kategori]);
            // var_dump($request->kategori);
            // die();
            if ($kategori->save()){
                return redirect('/dashboard')->with('success');
            }
            return back()->withErrors('failed');

        }
    
}
