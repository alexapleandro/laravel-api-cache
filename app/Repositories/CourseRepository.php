<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository{

    protected $entity;

    public function __construct(Course $course)
    {
        $this->entity = $course;
    }

    public function getAll(){
        return $this->entity->all();
    }

    public function getByUuid(String $identify){
        return $this->entity->where('uuid', $identify)->firstOrfail();
    }

    public function create(array $data){
        return $this->entity->create($data);
    }

    public function updateByUuid(string $identify, array $data)
    {
        $course = $this->getByUuid($identify);
        return $course->update($data);
    }

    public function deleteByUuid(String $identify){
        $course = $this->getByUuid($identify);
        return $course->delete();
    }
}