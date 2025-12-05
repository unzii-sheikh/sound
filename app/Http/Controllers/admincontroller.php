<?php

namespace App\Http\Controllers;

use App\Models\album;
use App\Models\genre;
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

 }
        
    

