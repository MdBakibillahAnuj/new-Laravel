<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    protected $subject;
    public function createSubject ()
    {
        return view('admin.subject.create');
    }

    public function newSubject (Request $request)
    {
        Subject::saveData($request);
        return redirect()->back()->with('message', 'Subject created successfully...');
    }

    public function manageSubject()
    {
        return view('admin.subject.manage', [
            'subjects'  => Subject::latest()->get(),
        ]);
    }

    public function editSubject ($id)
    {
        return view('admin.subject.edit', [
            'subject'   => Subject::find($id),
        ]);
    }

    public function updateSubject (Request $request, $id)
    {
        Subject::updateData($request, $id);
        return redirect('/manage-subject')->with('message', 'Subject Updated successfully.');
    }

    public function deleteSubject($id)
    {
        $this->subject = Subject::find($id);
        if (file_exists($this->subject->image))
        {
            unlink($this->subject->image);
        }
        $this->subject->delete();
        return redirect()->back()->with('message', 'Subject deleted successfully');
    }

    public function subjectStatus ($id)
    {
        $this->subject = Subject::find($id);
        $this->subject->status = $this->subject->status == 1 ? 0 : 1;
        $this->subject->save();
        return redirect()->back()->with('message', 'Status Changed Successfully.');
    }
}
