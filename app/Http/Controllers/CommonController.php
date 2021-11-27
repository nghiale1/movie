<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommonController extends Controller
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
}