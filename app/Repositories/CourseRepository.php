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
}