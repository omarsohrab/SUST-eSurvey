<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Dept extends Model
{
    

    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'dept';

    protected $fillable = array(
        'full_name', 'dept_name','head_id','school_id',
    );

    public $timestamps = true;
}
