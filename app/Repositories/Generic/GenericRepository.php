<?php

namespace App\Repositories\Generic;

use Illuminate\Database\Eloquent\Model;

class GenericRepository implements IGenericInterface
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function find($id): ?Model
    {
        return $this->model->find($id);
    }
}
