<?php

namespace App\Repositories\Eloquent;

use App\Constracts\Eloquent\BaseRepository;

class BaseRepositoryEloquent implements BaseRepository {

    public function __construct($model)
    {
        $model = $this->model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create($data = [])
    {
        return $this->model->create($data);
    }

    public function fill($data = [])
    {
        return $this->model->fill($data);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function destroy($id)
    {
        return $this->model->destroy($id);
    }
}