<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function fetch()
    {
        // Get all users registered via Jetstream
        $users = User::all();

        // Pass data to fetch.blade.php in admin folder
        return view('admin.fetch', compact('users'));
    }
    // Edit user form
public function edit($id)
{
    $user = \App\Models\User::findOrFail($id);
    return view('admin.edit', compact('user'));
}

// Update user
public function update(Request $request, $id)
{
    $user = \App\Models\User::findOrFail($id);
    $user->update($request->only('name', 'email'));
     if ($request->password) {
        $user->password = Hash::make($request->password);
    }
    return redirect('admin.fetch')->with('success', 'User updated successfully!');
}

// Delete user
public function destroy($id)
{
    $user = \App\Models\User::findOrFail($id);
    $user->delete();
    return redirect('admin.fetch')->with('success', 'User deleted successfully!');
}

/// Trash Page ////
    public function trash()
{
    $trashedUsers = User::onlyTrashed()->get();
    return view('admin.trash', compact('trashedUsers'));
}

// Recover user
public function recover($id)
{
    $user = User::withTrashed()->findOrFail($id);
    $user->restore(); // back to fetch page
    return redirect()->route('admin.trash')->with('success', 'User recovered successfully!');
}

// Permanent delete
public function permanentDelete($id)
{
    $user = User::withTrashed()->findOrFail($id);
    $user->forceDelete(); // completely delete from DB
    return redirect()->route('admin.trash')->with('success', 'User permanently deleted!');
}


}

