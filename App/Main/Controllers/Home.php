<?php

namespace App\Main\Controllers;

use App\DownloadedVideos\DataMappers\DownloadedVideosDataMapper;
use App\DownloadedVideos\Models\DownloadedVideos;
use App\DownloadedVideos\Repositories\DownloadedVideosRepository;
use Core\Entity\EntityFactory;
use Core\Http\Controllers\Controller;
use Core\View;
use Core\YoutubeParser;
use Illuminate\Http\Request;

class Home extends Controller
{

    public function homePage()
    {
        return View::render('home');
    }

    public function getURL(Request $request)
    {
        $video = (new YoutubeParser($request->input('url')));

        if (!$video->success) {
            return abort(404);
        }

        (new DownloadedVideosRepository())->create(
            EntityFactory::create(DownloadedVideosDataMapper::class, DownloadedVideos::class, [
                'url' => $request->input('url')
            ])
        );

        return $video->getHighestQuality();
    }
}