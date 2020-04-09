<?php

namespace App\DownloadedVideos\Models;

use Core\BaseModel;

class DownloadedVideos extends BaseModel
{
    protected $table    = "downloaded_videos";
    protected $fillable = ['id', 'url'];

}
