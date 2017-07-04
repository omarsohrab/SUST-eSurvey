<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'courses';

    protected $fillable = array(
        'course_id','course_name', 'dept_name','lavel',
    );

    public $timestamps = true;
}
