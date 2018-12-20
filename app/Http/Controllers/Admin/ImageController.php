<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Image;

class ImageController extends \LaravelAdmin\Controllers\ImageController
{
    public function upload(Request $request)
    {
        $alt = $request->file('image')->getClientOriginalName();
        $ext = $request->file('image')->getClientOriginalExtension();
        $alt = str_replace(".{$ext}", '', $alt);
        $data = Image::storeImage($request->file('image')->get(), $alt);
        return Response::json($data);
    }
}
