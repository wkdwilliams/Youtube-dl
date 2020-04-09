<?php

namespace App\DownloadedVideos\Repositories;

use App\DownloadedVideos\DataMappers\DownloadedVideosDataMapper;
use App\DownloadedVideos\Models\DownloadedVideos;
use Core\Repository;

class DownloadedVideosRepository extends Repository
{
    public function __construct()
    {
        parent::__construct(new DownloadedVideosDataMapper(), new DownloadedVideos());
    }
}
