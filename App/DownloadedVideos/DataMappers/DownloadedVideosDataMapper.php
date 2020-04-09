<?php

namespace App\DownloadedVideos\DataMappers;

use App\DownloadedVideos\Entities\DownloadedVideosEntity;
use Core\DataMapper\DataMapper;
use Core\Entity\Entity;

class DownloadedVideosDataMapper extends DataMapper
{
    protected $entity = DownloadedVideosEntity::class;

    protected function fromRepository(array $data): array
    {
        return [
            'id'    => $data['id']  ?? '',
            'url'   => $data['url'] ?? '',
        ];
    }

    protected function fromApplication(array $data): array
    {
        return [
            'id'    => $data['id']  ?? '',
            'url'   => $data['url'] ?? '',
        ];
    }

    protected function fromEntity(Entity $entity): array
    {
        return [
            'id'    => $entity->getId(),
            'url'   => $entity->getURL()
        ];
    }

}
