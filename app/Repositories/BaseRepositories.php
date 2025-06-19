<?php

namespace App\Repositories;

abstract class BaseRepositories implements RepositoriesInterface
{
    protected $model;

    // public function __construct()
    // {
    //     return $this->model = app()->make(
    //         $this->getModel()
    //     );
    // }

    // abstract public function getModel();
    public function __construct()
    {
        $this->setModel();
    }

    //lấy model tương ứng
    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }
    public function all()
    {
        return $this->model->all();
    }

    public function find(int $id)
    {
        return $this->model->findOrFail($id);
    }
    public function create(array $data)
    {
        return $this->model->create($data);
    }
    public function update(array $data, $id)
    {
        $object = $this->model->find($id);

        return $object->update($data);
    }
    public function delete($id)
    {
        $object = $this->model->find($id);

        return $object->delete();
    }
}
