<?php

namespace App\User\DataMappers;

use App\User\Entities\PostEntity;
use Core\DataMapper\DataMapper;

class PostDataMapper extends DataMapper
{
    protected $entity = PostEntity::class;

    protected function fromRepository(array $data): array
    {
        return [
            'id'    => $data['id'],
            'name'  => $data['name'],
            'email' => $data['email']
        ];
    }

    protected function fromApplication(array $data): array
    {
        return [];
    }

}
