<?php

namespace App\Http\Controllers\Backend;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Models\Backend\BooksModel;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class LearnormController extends Controller
{
    public function index($action){
        $this->$action();
    }

    public function demo1(){
        $book1 = BooksModel::find(4)->author;

        dump($book1);
    }

    public function demo2(){
        $user = User::find(1)->book;

        dump($user);
    }

    public function demo3(){
        $book3 = BooksModel::find(4);
        $comment = $book3->comment;

        dump($book3);
        dump($comment);
    }

    public function demo4(){
        $comment = Comment::find(1);
        $book4 = $comment->book_comment;

        dump($comment);
        dump($book4);

    }

    public function demo5(){
        $user = User::find(1)->roles;

        dump($user);
    }

    public function demo6(){
        $role = Role::find(4);
        $user = $role->find_user;

        dump($role);
        dump($user);
    }

}
