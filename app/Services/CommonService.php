<?php

namespace App\Services;

use App\Models\Banner;
use App\Models\Food;
use App\Models\Movie;
use App\Models\Others\Notification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class CommonService
{
    public function getDateFolderCreate($date)
    {
        $date = Carbon::parse($date);

        return $date->format('Y') . '/' . $date->format('Ymd');
    }

    public function getFile($name, $disk)
    {

        return Storage::disk($disk)->url($name);
    }

    public function getPathFile($datetime, $name, $disk)
    {
        $path = $this->getDateFolderCreate($datetime) . '/' . $name;
        
        return Storage::disk($disk)->getAdapter()->applyPathPrefix($path);
    }

    public function deleteFile($datetime, $name, $disk)
    {
        if (!$name || !$datetime || !$disk) {
            $file = $this->getDateFolderCreate($datetime) . '/' . $name;
            if (Storage::disk($disk)->exists($file)) {
                Storage::disk($disk)->delete($file);
            }
        }
    }

    public function uploadTrailer(Movie $movie, $request)
    {
        if ($request->hasFile('trailer')) {
                $path = $this->getDateFolderCreate(date('Y-m-d H:i:s'));
    
                Storage::disk('trailer')->makeDirectory($path);
    
                $storagePath = Storage::disk('trailer')->put($path, $request->file('trailer'));
                $movie->update([
                    'trailer' => 'trailer/'.$storagePath,
                ]);
        }
    }

    public function uploadPoster(Movie $movie, $request)
    {
        if ($request->hasFile('image')) {
                $path = $this->getDateFolderCreate(date('Y-m-d H:i:s'));
    
                Storage::disk('poster')->makeDirectory($path);
    
                $storagePath = Storage::disk('poster')->put($path, $request->file('image'));
                $movie->update([
                    'image' => 'poster/'.$storagePath,
                ]);
        }
    }

    public function uploadBanner(Banner $banner, $request)
    {
        if ($request->hasFile('banner_img')) {
                $path = $this->getDateFolderCreate(date('Y-m-d H:i:s'));
    
                Storage::disk('banner')->makeDirectory($path);
    
                $storagePath = Storage::disk('banner')->put($path, $request->file('banner_img'));
                $banner->update([
                    'banner_img' => 'banner/'.$storagePath,
                ]);
        }
    }

    public function uploadFood(Food $food, $request)
    {
        if ($request->hasFile('food_pic')) {
                $path = $this->getDateFolderCreate(date('Y-m-d H:i:s'));
    
                Storage::disk('food')->makeDirectory($path);
    
                $storagePath = Storage::disk('food')->put($path, $request->file('food_pic'));
                $food->update([
                    'food_pic' => 'food/'.$storagePath,
                ]);
        }
    }
}