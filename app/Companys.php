<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companys extends Model
{
    protected $tablename='com';
    public $primaryKey='Cid';
    public $timestamps=true;
}
