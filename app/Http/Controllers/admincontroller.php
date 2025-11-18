<?php

namespace App\Http\Controllers;

use App\Models\album;
use App\Models\genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class admincontroller extends Controller
{
    //genre databaseconnection
     public function genrepost(Request $req){
        $table = new genre();
        $table->name = $req->name;
        $table->save();
        return redirect()->back();
     }

 //album databaseconnection
 public function album(Request $rec){
    $table = new album();
    $table->name = $rec->name;
    $table->year = $rec->year;
    $table->save();
    return Redirect()->back();

}
    
 }
        
    

