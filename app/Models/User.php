<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected static $user;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    protected static $teacher;
    protected static $student;

    public static function createNewUserByAdmin ($request)
    {
        self::$user = new User();
        self::$user->name     = $request->name;
        self::$user->email    = $request->email;
        self::$user->password = bcrypt($request->password);
        self::$user->role     = $request->role;
        self::$user->save();

        if ($request->role == 'teacher')
        {
            self::$teacher = new Teacher();
            self::$teacher->name = $request->name;
            self::$teacher->email = $request->email;
            self::$teacher->user_id = self::$user->id;
            self::$teacher->save();
        } elseif ($request->role == 'user')
        {
            self::$student = new StudentData();
            self::$student->name = $request->name;
            self::$student->email = $request->email;
            self::$student->user_id = self::$user->id;
            self::$student->save();
        }
    }

    public static function updateUser ($request, $id)
    {
        self::$user = User::find($id);
        self::$user->name   = $request->name;
        self::$user->email   = $request->email;
        self::$user->role   = $request->role;
        self::$user->save();

        if ($request->role == 'teacher')
        {
            self::$teacher = Teacher::where('user_id', $id)->first();
            self::$teacher->name = $request->name;
            self::$teacher->email = $request->email;
            self::$teacher->save();
        } elseif ($request->role == 'user') {
            self::$student = StudentData::where('user_id', $id)->first();
            self::$student->name = $request->name;
            self::$student->email = $request->email;
            self::$student->save();
        }
    }
}
