<?php

namespace Core\Entity;

class EntityCollection
{
    /**
     * @var array
     */
    private array $entities;

    public function __construct(array $entities = [])
    {
        $this->entities = $entities;
    }

    /**
     * Push an entity to the collection
     * @param Entity $entity
     * @return EntityCollection
     */
    public function push(Entity $entity): EntityCollection
    {
        $this->entities[] = $entity;

        return $this;
    }

    /**
     * Empty the collection
     * @return EntityCollection
     */
    public function empty(): EntityCollection
    {
        $this->entities = [];

        return $this;
    }

    /**
     * @return array
     */
    public function getEntities(): array
    {
        return $this->entities;
    }
}
