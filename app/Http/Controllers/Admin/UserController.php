<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser ()
    {
        return view('admin.user.create');
    }

    public function newUser (Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'email'  => 'required|email|unique:users,email',
            'password'  => 'required|min:10',
            'role'  => 'required',
        ]);
        User::createNewUserByAdmin($request);
        return redirect()->back()->with('message', 'User created successfully');
    }

    public function manageUser ()
    {
        return view('admin.user.manage',[
            'users' => User::latest()->get(),
        ]);
    }

    public function editUser($id)
    {
        return view('admin.user.edit',[
            'user'  => User::find($id),
        ]);
    }

    public function updateUser (Request $request, $id)
    {
        User::updateUser($request, $id);
        return redirect('/manage-user')->with('message', 'User info updated successfully.');
    }

    public function deleteUser ($id)
    {
        return redirect()->back()->with('message', 'User deleted successfully.');
    }
}
