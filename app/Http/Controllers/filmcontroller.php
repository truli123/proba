<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\filmovi;



class filmcontroller extends Controller
{
public function index()

    {
    $film = Filmovi::get();
    return view( 'welcome', [ 'film' => $film ] );
  
    }
public function pregled()
    {
   return view( 'pregled');
    }
    public function brisanje()
    {
    $film = filmovi::get();
return view( 'unos', ['film' => $film ] );
    }
public function unos()
    {
return view('unos');  

    }

public function store(Request $request)
{
    $filmovi = new filmovi;
    $filmovi->naslov = $request->all()['name'];
    $filmovi->godina = $request->all()['godina'];
    $filmovi->id_zanr = $request->all()['zanr'];
    $filmovi->trajanje= $request->all()['duzina'];
    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $extension = $request->image->extension();
        $filmovi->image = "./slike/".$filmovi->naslov.".".$extension;
        $file = $request->file('image');
        $file->move( "slike", $filmovi->naslov.".".$extension );
    }
    else $filmovi->image = "";
    $filmovi->save();
    return redirect( '/' );
}
public function destroy($id)
     
    {
        $product = filmovi::find( $id );
		$product->delete();
		return redirect( '/' );
    }


  
    public function slovo($sl)
     {  
        $film = Filmovi::get();
               
        return view( 'show', [ 'film' => $film ],['slovo'=>$sl] );
       
    }
}