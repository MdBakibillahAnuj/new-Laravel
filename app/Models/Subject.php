<?php

namespace App\Models;

use App\helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static $subject;

    public static function saveData($request)
    {
        self::$subject  = new Subject();
        self::$subject->teacher_id          = Auth::id();
        self::$subject->title               = $request->title;
        self::$subject->code                = Subject::generateCode();
        self::$subject->fee                 = $request->fee;
        self::$subject->image               = Helper::imageUpload($request->image,'assets/images/subject/');
        self::$subject->short_description   = $request->short_description;
        self::$subject->long_description    = $request->long_description;
        self::$subject->save();
    }
    public static function generateCode ()
    {
        $code = 'BITM-'.rand(10,10000);
        $existCode = Subject::where('code', $code)->first();
        if ($existCode)
        {
            Subject::generateCode();
        } else {
            return $code;
        }
    }

    public static function updateData($request, $id)
    {
        self::$subject  = Subject::find($id);
        self::$subject->title  = $request->title;
        self::$subject->fee  = $request->fee;
        self::$subject->image  = Helper::imageUpload($request->image,'assets/images/subject/', self::$subject->image);
        self::$subject->short_description   = $request->short_description;
        self::$subject->long_description   = $request->long_description;
        self::$subject->save();
    }

    public function teacher ()
    {
        return $this->belongsTo(Teacher::class);
    }
}
