<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $tablename='Company'; 

    public $primaryKey='CID';

    public $timestamps=true;
}
