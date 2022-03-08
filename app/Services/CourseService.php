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

    public function getByUUID(String $identify)
    {
        return $this->repository->getByUUID($identify);
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }
}