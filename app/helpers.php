<?php

if (! function_exists('heightByWidth')) {
    function heightByWidth($imageUrl, $width, $default = null) {

        $imagePath = preg_replace('~^storage/~', '', $imageUrl);

        $height = $default ?: $width;

        if (Storage::disk('public')->exists($imagePath)) {
            $image = Storage::disk('public')->get($imagePath);
            $origWidth = Image::make($image)->width();
            $origHeight = Image::make($image)->height();
            $height = $origHeight / $origWidth * $width;
        }

        return $height;
    }
}

if (! function_exists('getParamIs')) {
    function getParamIs($param, $value) {
        return request()->get($param) == $value;
    }
}

if (! function_exists('selected')) {
    function selected($param, $value) {
        return getParamIs($param, $value) ? 'selected' : '';
    }
}

if (! function_exists('prepare_url')) {
    function prepare_url($url) {
        $url = strtok($url, "?");
        if (substr($url, strlen($url)-1) == "/") $url = substr($url,0,strlen($url)-1);
        return $url;
    }
}

if (! function_exists('round_up')) {
    function round_up($value, $places)
    {
        $mult = pow(10, abs($places));
        return $places < 0 ?
            ceil($value / $mult) * $mult :
            ceil($value * $mult) / $mult;
    }
}

if (! function_exists('set_atributes')) {
    function set_atributes($attributes){
        if (is_array($attributes) && !empty($attributes)){
            foreach ($attributes as $attribute) {
                echo $attribute;
            }
        }
    }
}


if (! function_exists('inCart')) {
    function inCart($id){
        $id = intval($id);
        if (session()->has('cart')) {
            $cart = session()->get('cart');
            if ($cart->items && array_key_exists($id, $cart->items)) {
                return true;
            }
        }
        return false;
    }
}

if (! function_exists('inCartExtra')) {
    function inCartExtra($id){
        $id = intval($id);
        if (session()->has('cart')) {
            $cart = session()->get('cart');
            if ($cart->extras && array_key_exists($id, $cart->extras)) {
                return true;
            }
        }
        return false;
    }
}

if (! function_exists('image')) {
    function image($id)
    {
        return \App\Models\Image::findOrNew((int)$id);
    }
}