<?php

use App\Models\Setting;

if (! function_exists('upload')) {
    function upload($file, $path = null, $removeable = '')
    {
        if ($removeable && file_exists(public_path($removeable))) {
            unlink(public_path($removeable));
        }

        $path = 'uploads/' . $path;

        $filename = time() . '_' . uniqid() . '.' . $file->extension();

        $file->move(public_path($path), $filename);

        return $path . $filename;
    }
}

if (! function_exists('setting')) {
    function setting($key, $default = null)
    {
        $setting = cache()->rememberForever('setting', fn() => Setting::get());

        return $setting->where('key', $key)->value('value', $default);
    }
}
