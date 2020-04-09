<?php

namespace Core\Jobs;

use App\User\Models\Post;
use Illuminate\Queue\SerializesModels;

class ExampleJob extends Job
{
    use SerializesModels;

    public function handle(): void
    {

    }
}
