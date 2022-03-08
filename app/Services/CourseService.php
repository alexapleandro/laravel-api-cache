<?php

namespace App\Services;

use App\Repositories\CourseRepository;

class CourseService{

    protected $repository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->repository = $courseRepository;
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function getByUuid(String $identify)
    {
        return $this->repository->getByUuid($identify);
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function updateByUuid(string $identify, array $data)
    {
        return $this->repository->updateByUuid($identify, $data);
    }

    public function deleteByUuid(String $identify)
    {
        return $this->repository->deleteByUuid($identify);
    }
}