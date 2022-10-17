<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function createProfile ()
    {
        return view('teacher.profile.create');
    }

    public function newProfile (Request $request)
    {
        Teacher::saveData($request);
        return redirect()->back()->with('message', 'Profile created successfully...');
    }

    public function manageProfile()
    {
        return view('teacher.profile.manage', [
            'teachers'  => Teacher::all(),
        ]);
    }

    public function editProfile ($id)
    {
        return view('teacher.profile.edit', [
            'teacher'   => Teacher::find($id),
        ]);
    }

    public function updateProfile (Request $request, $id)
    {
        Teacher::saveData($request, $id);
        return redirect('/manage-profile')->with('message', 'Teacher Updated successfully.');
    }

    public function deleteProfile($id)
    {
        return redirect()->back()->with('message', 'profile deleted successfully');
    }

    public function profileStatus ($id)
    {

    }

}
