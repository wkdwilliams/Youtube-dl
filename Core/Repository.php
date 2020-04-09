<?php

namespace Core;

use Core\Entity\Entity;
use Core\DataMapper\DataMapper;
use Core\Entity\EntityCollection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

abstract class Repository
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * @var DataMapper
     */
    protected $datamapper;

    /**
     * @var Builder
     */
    protected $query;

    public function __construct(DataMapper $dataMapper, Model $model)
    {
        $this->model        = $model;
        $this->query        = $model;
        $this->datamapper   = $dataMapper;
    }

    /**
     * @return mixed
     */
    protected function getQuery()
    {
        return $this->query;
    }

    /**
     * @param $query
     * @return Repository
     */
    protected function setQuery($query): Repository
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @param $column
     * @param string $direction
     * @return Repository
     */
    public function orderBy($column, $direction = 'asc'): Repository
    {
        return $this->setQuery($this->getQuery()->orderBy($column, $direction));
    }

    /**
     * @param array $query
     * @return Repository
     */
    public function where(array $query): Repository
    {
        return $this->setQuery($this->getQuery()->where($query));
    }

    /**
     * @param $column
     * @return Repository
     */
    public function whereNotNull($column): Repository
    {
        return $this->setQuery($this->getQuery()->whereNotNull($column));
    }

    public function count(string $column, $value)
    {
        return $this->model->where($column, $value)->count();
    }

    /**
     * Delete all records
     * @return mixed
     */
    public function truncate()
    {
        return $this->whereNotNull('id')->delete();
    }

    /**
     * @param int $value
     * @return Repository
     */
    public function limit(int $value): Repository
    {
        $query = $this->getQuery()->limit($value);

        return $this->setQuery($query);
    }

    /**
     * @param string $id
     * @return Repository
     */
    public function findById(string $id): Repository
    {
        return $this->setQuery($this->getQuery()->where(['id' => $id]));
    }

    /**
     * @return Repository
     */
    public function findAll(): Repository
    {
        $query = $this->getQuery()->whereNotNull('id');

        return $this->setQuery($query);
    }

    public function create(Entity $entity)
    {
        $data = $this->datamapper->getDataFromEntity($entity);

        //dd($data);

        $this->model::create($data);
    }

    /**
     * @return Entity
     */
    public function entity(): Entity
    {
        $data = $this->getQuery()->get()->toArray()[0];

        return $this->datamapper->getEntityFromRepository($data);
    }

    /**
     * @return EntityCollection
     */
    public function entityCollection()
    {
        $data = $this->getQuery()->get()->toArray();

        $collection = new EntityCollection();

        foreach ($data as $d)
        {
            $collection->push($this->datamapper->getEntityFromRepository($d));
        }

        return $collection;
    }

}
