<?php

namespace App\User\DataMappers;

use App\User\Entities\UserInfoEntity;
use Core\DataMapper\DataMapper;
use Core\Entity\Entity;

class UserInfoDataMapper extends DataMapper
{
    protected $entity = UserInfoEntity::class;

    protected function fromRepository(array $data): array
    {
        return [
            'id'    => $data['id']    ?? '',
            'name'  => $data['name']  ?? '',
            'email' => $data['email'] ?? ''
        ];
    }

    protected function fromApplication(array $data): array
    {
        return [
            'id'    => $data['id']    ?? '',
            'name'  => $data['name']  ?? '',
            'email' => $data['email'] ?? ''
        ];
    }

    protected function fromEntity(Entity $entity): array
    {
        return [
            'id'    => $entity->getId(),
            'name'  => $entity->getName(),
            'email' => $entity->getEmail()
        ];
    }

}
