<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model
{
    
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    protected $table = 'options';


    protected $fillable = array(
        'qsn_id', 'opt1','opt2','opt3','opt4','opt5',
    );

    public $timestamps = true;
}
