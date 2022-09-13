<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function courses()
    {
        //I wrote this code line when i rename the table student_course to my_courses
        // return $this->belongsToMany(Course::class,'my_courses');
        return $this->belongsToMany(Course::class,'course_student');
    }
}
