<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LearndbController extends Controller
{
    public function index($action){
        $this->$action();
    }

    public function demo1(){
        echo __METHOD__;
        $book1 = DB::table('books')->get();

        foreach($book1 as $book){
            echo "<pre>";
            echo $book->book_name;
            echo $book->book_intro;
            echo "</pre>";
        }

        echo "<br>" . DB::table('books')->toSql();
        dump($book1);
        dd($book1);

    }

    public function demo2(){
        echo __METHOD__;
        $book2 = DB::table('books')->where('book_status',1)->first();
        echo "<br>" . $book2->book_name;
        echo "<br>" . DB::table('books')->where('book_status',1)->toSql();
        dump($book2);
        dd($book2);
    }

    public function demo3(){
        DB::enableQueryLog();
        echo __METHOD__;
        $book3 = DB::table('books')->find(5);
        echo "<br>" . $book3->book_name;
        dump($book3);
        dd($book3);
        dump(DB::getQueryLog());
    }

    /*
    * Lấy ra 1 danh sách các cột trong bảng
    * */
    public function demo4(){
        $book_names = DB::table('books')->pluck('book_name');

        $book_slug = DB::table('books')->pluck('book_slug');

        dump($book_names);

        dump($book_slug);
    }

    public function demo5(){
        DB::enableQueryLog();
        $count = DB::table('books')->count();
        dump($count);

        $maxID = DB::table('books')->max('id');
        dump($maxID);
        dump(DB::getQueryLog());
    }

    public function demo6(){
        DB::enableQueryLog();
        $book6 = DB::table('books')->select('book_name','book_images as anhcuasach')->get();
        dump($book6);
        dump(DB::getQueryLog());
    }

    public function demo7(){
        DB::enableQueryLog();
        $res = DB::table('books')
        ->select(DB::raw('book_author, count(*) as total'))
        ->groupBy('book_author')
        ->get();

        dump($res);
        dump(DB::getQueryLog());
    }

    public function demo8(){
        DB::enableQueryLog();
        $book8 = DB::table('books')
            ->select('books.book_name','books.book_author','users.email as email_tac_gia')
            ->leftJoin('users','users.name','=','books.book_author')
            ->get();
        dump($book8);
        dump(DB::getQueryLog());
    }

    public function demo9(){
        DB::enableQueryLog();
        $book9 = DB::table('books')
            ->where('book_author','like','h%')
            ->get();
        dump($book9);
        dump(DB::getQueryLog());
    }

    public function demo10(){
        DB::enableQueryLog();
        $book10 = DB::table('books')
            ->where([
                ['book_author','like','h%'],
                ['book_status','=','2'],
            ])
            ->get();
        dump($book10);
        dump(DB::getQueryLog());
    }

    public function demo11(){
        DB::enableQueryLog();
        $book11 = DB::table('books')
            ->where('book_author','like','h%')
            ->orWhere('book_name','=','hoan')
            ->get();
        dump($book11);
        dump(DB::getQueryLog());
    }

    public function demo12(){
        DB::enableQueryLog();
        $book12 = DB::table('books')
            ->orderBy('book_slug','desc')
            ->get();
        dump($book12);
        dump(DB::getQueryLog());
    }

    public function demo13(){
        DB::enableQueryLog();
        $book13 = DB::table('books')
            ->select(DB::raw('book_name, count(*) as total'))
            ->groupBy('book_name')
            ->having('book_name','like','h%')
            ->get();
        dump($book13);
        dump(DB::getQueryLog());
    }

    public function demo14(){
        DB::enableQueryLog();
        $book14 = DB::table('users')
            ->insert([
            [ 'name' => 'trung', 'email' => 'trung@example.com', 'password' => '']
        ]);
        dump($book14);
        dump(DB::getQueryLog());
    }

    public function demo15(){
        DB::enableQueryLog();
        $book15 = DB::table('books')
            ->where('id','=','7')
            ->delete();
        dump($book15);
        dump(DB::getQueryLog());
    }

    public function demo16(){
        DB::enableQueryLog();
        $book15 = DB::table('books')
            ->where('book_name','=','sua_lan2')
            ->update(['book_name' => 'sua_lan3']);
        dump($book15);
        dump(DB::getQueryLog());
    }

    public function demo17(){

    }

}
