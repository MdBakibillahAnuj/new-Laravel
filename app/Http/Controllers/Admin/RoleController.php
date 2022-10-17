<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create ()
    {
        return view('admin.role.create');
    }

    public function newRole (Request $request)
    {
        Role::createRole($request);
        return redirect()->back()->with('message', 'Role created successfully.');
    }
}
