<?php

namespace App\Http\Controllers;

use App\Models\album;
use App\Models\artist;
use App\Models\genre;
use App\Models\music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

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

  public function destroy($id)
{
    $user = User::find($id);
    $user->delete(); // trash me chala jayega
    return redirect()->back()->with('success','User moved to trash.');
}  
public function trash()
{
    $trashedUsers = User::onlyTrashed()->get();
    return view('admin.trash', compact('trashedUsers'));
}
public function restore($id)
{
    User::withTrashed()->find($id)->restore();
    return redirect()->back()->with('success','User restored successfully.');
}
public function forceDelete($id)
{
    User::withTrashed()->find($id)->forceDelete();
    return redirect()->back()->with('success','User permanently deleted.');
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
   $thumb = $mus->file('thumbnail');
   $thumbname = $thumb->getClientOriginalName();
   $thumb->move(public_path('uploads'),$thumbname);
   $table->thumbnail = $thumbname;
   $table->save();
   return Redirect()->back();

  }

  //fetch music details
  public function getmusic(){
   $musics = music::join("albums","albums.id","music.albumid")->join('artists',"artists.id","music.artistid")->join('genres','genres.id','artists.genreid')->select('music.id as musicid','music.name as musicname','albums.id as albumsid','artists.id as artistid','artists.name as artistname','albums.name as albumname','genres.name as genrename','music.music as musictype','music.thumbnail as thumbnail')->get();
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
   $artist = artist::get();
   $album = album::get();
   $genre = genre::get();
   $rep = music::join("albums","albums.id","music.albumid")->join('artists',"artists.id","music.artistid")->join('genres','genres.id','artists.genreid')->select('music.id as musicid','music.name as musicname','albums.id as albumsid','artists.id as artistid','artists.name as artistname','albums.name as albumname','genres.name as genrename','genres.id as genreid','music.music as musictype','music.file as musicfile','music.thumbnail as thumbnail')->find($id);
   return view("updatemusic",compact("rep","artist",'album',"genre"));
}
//update music record
public function updatemusic(Request $fer){
   $id =$fer->id;
   $q =music::find($id);
   $q->name=$fer->musicname;
   $q->artistid=$fer->artistname;
   $q->albumid=$fer->albumname;
   $q->music=$fer->musictypename;
   $q->file=$fer->musicfileupd;
   $q->thumbnail=$fer->musicthumbnailupd;
   $q->save();
   return redirect("/musicfetch");

}

//fetch albums in webiste album page
public function fetalbums(){
   $getart =artist::join('genres','genres.id','artists.genreid')->select('artists.name as artistname','artists.file as artistsfile','genres.name as genresname')->get();
   return view("fetchartist",compact("getart"));
}
//fetch artist in website page
public function fetchalb(){
   $getalb =album::get();
   return view("fetchalbums",compact("getalb"));
}
//get music in website page
public function fetchmusicdata(){
   $getmusic =music::join("albums","albums.id","music.albumid")->join('artists',"artists.id","music.artistid")->join('genres','genres.id','artists.genreid')->select('music.id as musicid','music.name as musicname','albums.id as albumsid','artists.id as artistid','artists.name as artistname','albums.name as albumname','genres.name as genrename','music.music as musictype','music.file as musicfile','music.thumbnail as thumbnail')->get();
   return view("music",compact("getmusic"));
}
public function fetchmusicdata2(){
   
   $audio =music::join("albums","albums.id","music.albumid")->join('artists',"artists.id","music.artistid")->join('genres','genres.id','artists.genreid')->select('music.id as musicid','music.name as musicname','albums.id as albumsid','artists.id as artistid','artists.name as artistname','albums.name as albumname','genres.name as genrename','music.music as musictype','music.file as musicfile','music.thumbnail as thumbnail')->get();
   return view("index",compact("audio"));
}
public function getmusics()
{
    $audio =music::join("albums","albums.id","music.albumid")->join('artists',"artists.id","music.artistid")->join('genres','genres.id','artists.genreid')->select('music.id as musicid','music.name as musicname','albums.id as albumsid','artists.id as artistid','artists.name as artistname','albums.name as albumname','genres.name as genrename','music.music as musictype','music.file as musicfile','music.thumbnail as thumbnail')->get();
   return view("index",compact("audio"));
}
      
 }
        
    

