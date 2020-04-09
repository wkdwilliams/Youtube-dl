<?php

use App\DownloadedVideos\Models\DownloadedVideos;
use Illuminate\Database\Seeder;

class DownloadedVideosSeeder extends Seeder
{
    public function run()
    {
        factory(DownloadedVideos::class, 20)->create();
    }
}
