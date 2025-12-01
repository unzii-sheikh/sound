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
    $compounds = genre::get();
    return view ("addartist",compact("compounds"));
 }
 //artist connection
  public function artistconnection(Request $rec){
   $table = new artist();
   $table->name =  $rec->name;
   $table->genreid = $rec->genrelist;
   $file =$rec->file("artistphoto");
   $filename = $file->getClientOriginalName();
   $file->move(public_path("uploads"),$filename);
   $table->file=$filename;
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
   $musics = music::join("albums","albums.id","music.albumid")->join('artists',"artists.id","music.artistid")->join('genres','genres.id','artists.genreid')->select('music.id as musicid','music.name as musicname','albums.id as albumsid','artists.id as artistid','artists.name as artistname','albums.name as albumname','genres.name as genrename','music.music as musictype')->get();
   return view("fetchmusic",compact("musics"));

  }
  //delete music record
  public function deleterecord($id){
   $res = music::find($id);
   $res->delete();
   return Redirect()->back();
}
//data transfer to update page
public function updatedata($id){
   $rep = music::find($id);
   return view("updatemusic",compact("rep"));
   
}
   

   
 }
        
    

