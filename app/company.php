<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $tablename='Companies';
    public $primaryKey='CID';
    public $timestamps=true;
}
