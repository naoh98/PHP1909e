<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class BooksModel extends Model
{
    //
    protected $table="books";

    public function author(){
        return $this->belongsTo('App\User','created_by','id');
    }

    public function comment(){
    return $this->hasMany('App\Comment','book_id','id');
}

}
