<?php


namespace App\helper;


use App\Models\Teacher;

class Helper
{
    protected static $fileName;
    protected static $fileUrl;
    protected static $code;

    public static function imageUpload ($image, $imageDirectory, $existFileUrl=null)
    {
        if ($image)
        {
            if (file_exists($existFileUrl))
            {
                unlink($existFileUrl);
            }
            self::$fileName = time().rand(10,10000).'.'.$image->getClientOriginalExtension();
            $image->move($imageDirectory, self::$fileName);
            self::$fileUrl = $imageDirectory.self::$fileName;
        } else {
            if (isset($existFileUrl))
            {
                self::$fileUrl = $existFileUrl;
            } else {
                self::$fileUrl = '';
            }
        }
        return self::$fileUrl;
    }

    public static function generateCode ()
    {
        self::$code = 'BITM-'.rand(10,10000);
        $existCode = Teacher::where('code', self::$code)->first();
        if ($existCode)
        {
            Helper::generateCode();
        } else {
            return self::$code;
        }
    }
}
