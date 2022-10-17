<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\helper\Helper;

class Teacher extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function saveData($request, $id=null)
    {
        Teacher::updateOrCreate(['id'=>$id], [
            'name'  => $request->name,
            'email'  => $request->email,
            'phone'  => $request->phone,
            'image' =>  Helper::imageUpload($request->file('image'), 'assets/images/teachers-image/', isset($id) ? Teacher::find($id)->image : null),
            'address'  => $request->address,
            'description'  => $request->description,
            'code'      => $id != null ? Teacher::find($id)->code : Helper::generateCode(),
        ]);
    }
}
