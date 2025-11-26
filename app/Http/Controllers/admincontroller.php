<?php

namespace App\Http\Controllers;

use App\Models\album;
use App\Models\artist;
use App\Models\genre;
use App\Models\music;
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
//genre transfer data to upload artist
 public function artistuploading(){
    $records = genre::get();
    return view ("addartist",compact("records"));
 }
 //artist connection
  public function artistconnection(Request $rec){
   $table = new artist();
   $table->name =  $rec->name;
   $table->genreid = $rec->genrelist;
   $table->save();
   return redirect()->back();
  }

  //artist transfer data to upload music
  public function artistdata(){
   $artist = artist::get();
   $album = album::get();
   return view("uploadmusic",compact("artist","album"));
  }


  //music table connection
  public function musicadd(Request $mus){
   $table = new music();
   $table->name = $mus->name;
   $table->artistid = $mus->artistlist;
   $table->albumid = $mus->albumlist;
   $table->music = $mus->musictype;
   $file = $mus->file('file');
   $filename = $file->getClientOriginalName();
   $file->move(public_path('uploads'),$filename);
   $table->file = $filename;
   $table->save();
   return Redirect()->back();

  }

  //fetch music details
  public function getmusic(){
   $musics = music::get();
   return view("fetchmusic",compact("musics"));

  }
  public function uploadmusicpage()
  {
   return view();
  }


    
 }
        
    

