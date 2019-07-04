<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $tablename='Post';

    public $primaryKey='PID';

    public $timestamps=true;
    public function user(){
        return $this->belongsTo('App\User');
    }
}



