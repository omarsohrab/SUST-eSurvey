<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'schools';

    protected $fillable = array(
        'school_name', 'dean_id',
    );

    public $timestamps = false;
}
