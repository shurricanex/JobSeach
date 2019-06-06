<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $tablename='Post';

    public $primaryKey='id';

    public $timestamps=true;

}
