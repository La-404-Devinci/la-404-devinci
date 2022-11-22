<?php

namespace App\Helpers;

use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileHelper
{
    /**
     * Undocumented function
     * @param mixed $file
     * @param string $name
     * @return File
     */
    public static function uploadImage($file)
    {
        try {
            $path = 'images/' . Str::uuid();
            Storage::disk('upload')->put($path, $file);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return $path;
    }

    /**
     * Undocumented function
     * @param mixed $file
     * @param string $name
     * @return void
     */
    public function uploadVideo($file)
    {
        try {
            $path = 'videos/' . Str::uuid();
            Storage::disk('upload')->put($path, $file);
        } catch (Exception $e) {
            dd($e->getMessage());
        }

        return $path;
    }
}
