<?php

namespace App\DownloadedVideos\Entities;

use Core\Entity\Entity;

class DownloadedVideosEntity extends Entity
{
    /**
     * @var string
     */
    protected $url;

    public function getURL(): string
    {
        return $this->url;
    }

    public function setURL($url)
    {
        $this->url = $url;
    }
}
