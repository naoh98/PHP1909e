<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';

    public function book_comment(){
        return $this->belongsTo('App\Models\Backend\BooksModel','book_id','id');
    }
}
