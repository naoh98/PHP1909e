<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $table = 'roles';

    public function find_user(){
        return $this->belongsToMany('App\User','roleusers','role_id','user_id');
    }
}
