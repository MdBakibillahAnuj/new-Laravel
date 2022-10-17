<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class PageViewController extends Controller
{
    protected $subject;
    public function home ()
    {
        return view('front.home.home',[
            'subjects'  => Subject::where('status', 1)->latest()->get(),
        ]);
    }
    public function SubjectDetails($id)
    {
        $this->subject = Subject::find($id);
        $this->subject->hit_count = $this->subject->hit_count =1;
        $this->subject->save();

        return view('front.subject.details', [
            'subject' => Subject::find($id),
        ]);
    }
}
