<?php

namespace Core\DataMapper;

use Core\Entity\Entity;

abstract class DataMapper
{
    /**
     * @var Entity
     */
    protected $entity;

    public function __construct()
    {
        $this->entity = new $this->entity();
    }

    /**
     * @param array $data
     * @return Entity
     */
    public function getEntityFromRepository(array $data): Entity
    {
        $this->entity = new $this->entity();

        return $this->entity->populate($this->fromRepository($data));
    }

    /**
     * @param array $data
     * @return Entity
     */
    public function getEntityFromApplication(array $data): Entity
    {
        $this->entity = new $this->entity();

        return $this->entity->populate($this->fromApplication($data));
    }

    /**
     * @param Entity $entity
     * @return array
     */
    public function getDataFromEntity(Entity $entity): array
    {
        return $this->fromEntity($entity);
    }

    /**
     * @param array $data
     * @return array
     */
    abstract protected function fromRepository(array $data): array;

    /**
     * @param array $data
     * @return array
     */
    abstract protected function fromApplication(array $data): array;

    /**
     * @param Entity $entity
     * @return array
     */
    abstract protected function fromEntity(Entity $entity): array;

}
