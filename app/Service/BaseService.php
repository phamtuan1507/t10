<?php

namespace App\Service;

class BaseService implements ServiceInterface {
    public $repository;
    public function all()
    {
        return $this->repository->all();
    }

    public function find(int $id)
    {
        return $this->repository->findOrFail($id);
    }
    public function create(array $data)
    {
        return $this->repository->create($data);
    }
    public function update(array $data, $id)
    {
        $object = $this->repository->find($id);

        return $object->update($data);
    }
    public function delete($id)
    {
        $object = $this->repository->find($id);

        return $object->delete();
    }
}
