<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected static $role;
    public static function createRole ($request)
    {
        Role::create($request->except('_token'));
    }
}
