<?php

namespace App\User\Repositories;

use App\User\DataMappers\PostDataMapper;
use App\User\Models\Post;
use Core\Repository;

class PostRepository extends Repository
{
    public function __construct()
    {
        parent::__construct(new PostDataMapper(), new Post());
    }
}
