<?php

namespace App\Traits;

use Image;

trait HandleImageTrait
{
    protected $path = 'upload/';

    public function verify($request)
    {
        return $request->has('image');
    }

    public function saveImage($request)
    {
        if($this->verify($request))
        {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save($this->path . $name);
            return $name;
        }
    }

    public function updateImage($request, $currentImage)
    {
        if($this->verify($request))
        {
            $this->deleteImage($currentImage);
            return $this->saveImage($request);
        }
        return $currentImage;
    }

    public function deleteImage($imageCurrentName)
    {
        if($imageCurrentName && file_exists($this->path . $imageCurrentName))
        {
            unlink($this->path . $imageCurrentName);
        }
    }
}
