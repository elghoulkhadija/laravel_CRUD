<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitControler extends Controller
{
    public function index(Request $request){
        $produits=DB::table('produits')->get();
        return view('produit',compact('produits'));
    }

    public function create(){
        return view('ajouter');
    }
    public function store(Request $request){
        $request->validate([
            'nom_p'=>'required',
            'description_p'=>'required',
            'prix_p'=>'required',
            'quantite'=>'required'
        ]);
        $data=[
            'nom_p'=> $request->input('nom_p'),
            'description_p'=>$request->input('description_p'),
            'prix_p'=>$request->input('prix_p'),
            'quantite'=>$request->input('quantite')
        ];
        DB::table('produits')->insert($data);
        return redirect()->route('produits.index');
    }
    public function show(Request $request, $id){
        $produits=DB::table('produits')->where('id',$id)->first();
       return view('detail',compact('produits'));
    }
    public function edit(Request $request, $id){
        $produits=DB::table('produits')->where('id',$id)->first();
       return view('Edit',compact('produits'));

   }

   public function update(Request $request, $id){
        DB::table('produits')->where('id',$id)->update([
            'nom_p'=> $request->input('nom_p'),
            'description_p'=>$request->input('description_p'),
            'prix_p'=>$request->input('prix_p'),
            'quantite'=>$request->input('quantite')
        ]);
        return redirect()->route('produits.index');
   }
    public function destroy(Request $request, $id){
        $produits=DB::table('produits')->where('id',$id)->delete();
        return redirect()->route('produits.index');
    }
}
