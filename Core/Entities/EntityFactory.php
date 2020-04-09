<?php

namespace Core\Entity;

use Core\DataMapper\DataMapper;
use Illuminate\Database\Eloquent\Model;

class EntityFactory
{

    /**
     * Create a new entity
     * @param string $dataMapper
     * @param string $model
     * @param array $data
     * @return Entity
     */
    public static function create(string $dataMapper, string $model, array $data = []): Entity
    {
        $factory = factory($model)->make($data)->toArray();

        return (new $dataMapper())->getEntityFromApplication($factory);
    }

}