<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Intervention\Image\Facades\Image as Resizer;

class Image extends \LaravelAdmin\Models\Image
{

    public static function storeImage($image, $alt = '')
    {
        $info = new \finfo(FILEINFO_MIME);
        $mime = $info->buffer($image);
        $ext = preg_match('~/(\w+);~', $mime, $m) ? $m[1] : 'jpg';
        $name = str_random(36) . '.' . $ext;
        $path = "images/{$name}";

        $im = imagecreatefromstring($image);
        $width = imagesx($im);
        $height = imagesy($im);

        Storage::disk('local')->put($path, $image);

        $imageModel = new self([
            'url' => Storage::disk('local')->url($path),
            'path' => Storage::disk('local')->path($path),
            'size' => "{$width}x{$height}",
            'alt' => $alt
        ]);

        if ($imageModel->save())
            return $imageModel->getAttributes();
        else
            return null;
    }

    public function resize( $width = null, $height = null) {
        if ($width && $height)
            return Resizer::make($this->url)->fit($width, $height)->encode();

        return Resizer::make($this->url)->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        })->encode();
    }

    public function getResized($width = null, $height = null) {

        if ($width && $height)
            $dir = $width . 'x' .$height;
        else if ($width && !$height)
            $dir = $width . 'x';
        else if (!$width && $height)
            $dir = 'x' .$height;
        else
            throw new ErrorException('Width or height required.');

        $imagePath = preg_replace('~^/storage/~', '', $this->url);

        $resizedPath = dirname($imagePath) . "/{$dir}/" . basename($imagePath);

        if (!Storage::disk('public')->exists($resizedPath)) {

            if (Storage::disk('public')->exists($imagePath)) {
                $image = Storage::disk('public')->get($imagePath);
            }
            else if (Storage::disk('local')->exists($imagePath)){
                $image = Storage::disk('local')->get($imagePath);
            }
            else {
                return $this->url;
            }

            if ($width && $height)
                $resized = Resizer::make($image)->fit($width, $height)->encode();
            else
                $resized = Resizer::make($image)->resize($width, $height, function ($constraint) {
                    $constraint->aspectRatio();
                })->encode();

            Storage::disk('public')->put($resizedPath, $resized);
        }

        return 'storage/' .  $resizedPath;
    }

}