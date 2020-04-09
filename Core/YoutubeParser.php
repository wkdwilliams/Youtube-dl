<?php

namespace Core;

use YouTube\YouTubeDownloader;

class YoutubeParser
{
    /**
     * @var array
     */
    private array $links;

    /**
     * @var bool
     */
    public bool $success;

    /**
     * YoutubeParser constructor.
     * @param string $url
     */
    public function __construct(string $url)
    {
        $yt = new YouTubeDownloader();
        $links = [];
        $attempts = 0;

        do{
            $links = $yt->getDownloadLinks($url);
            $attempts++;
        }
        while(empty($links) && $attempts < 5);  // Sometimes we don't get the URL. Attempt 5 times.

        $this->links = $links;
        $this->success = !empty($links);
    }

    /**
     * @return array
     */
    public function parse(): array
    {
        $links = [
            '1080'  => '',
            '720'   => '',
            '360'   => ''
        ];

        foreach ($this->links as $link)
        {
            $parsedFormat = explode(", ", $link['format']);

            if(in_array("mp4", $parsedFormat) && in_array("1080p", $parsedFormat))
                $links['1080'] = $link['url'];

            if(in_array("mp4", $parsedFormat) && in_array("720p", $parsedFormat))
                $links['720'] = $link['url'];

            if(in_array("mp4", $parsedFormat) && in_array("360p", $parsedFormat))
                $links['360'] = $link['url'];
        }

        return $links;
    }

    /**
     * @return string
     */
    public function getHighestQuality(): string
    {
        foreach ($this->parse() as $link) {
            if(!empty($link)) return $link;
        }

        return '';
    }

}