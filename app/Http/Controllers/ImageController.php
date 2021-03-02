<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function showImage($fileName) {
        $path = storage_path() . '/app/public/' . $fileName;

        return response()->file($path);
    }
}
