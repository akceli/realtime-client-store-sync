<?php

namespace Akceli\RealtimeClientStoreSync;

use Illuminate\Database\Eloquent\Model;

class PusherStoreSingle implements PusherStoreInterface
{
    private string $resource;
    private $builder;

    /**
     * PusherStoreCollection constructor.
     * @param string $resource
     * @param $builder
     */
    public function __construct(string $resource, $builder)
    {
        $this->resource = $resource;
        $this->builder = $builder;
    }

    public function getDataFromModel(Model $model)
    {
        return (new $this->resource($model))->resolve();
    }

    public function getSingleData(int $id)
    {
        return new $this->resource($this->builder->findOrFail($id));
    }

    public function getData()
    {
        return new $this->resource($this->builder->first());
    }

    public function getDefaultData()
    {
        return null;
    }
}