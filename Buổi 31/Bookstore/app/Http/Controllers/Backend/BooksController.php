<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\BooksModel;
use App\View\view;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    //
    public function create(){
        return view("bookstore.backend.subviews.create");
    }

    public function index(){
        $books1 = BooksModel::all();

        /*echo "<pre>";
        print_r($books1);
        echo "</pre>";*/

        $data = [];
        $data["books"] = $books1;
        return view("bookstore.backend.subviews.index",$data);
    }

    public function delete($id){

        $book = BooksModel::find($id);
        $data = [];
        $data["book"] = $book;
        return view("bookstore.backend.subviews.delete",$data);
    }

    public function edit($id){
        var_dump($id);

        $book = BooksModel::find($id);
        $data = [];
        $data["book"] = $book;

        return view("bookstore.backend.subviews.edit",$data);
    }

    public function store(Request $request){
        /*echo "<pre>";
        print_r($_POST);
        echo "</pre>";*/

        $validate_book =[
            'book_name' => 'required|min:6',
            'book_slug' => 'required',
            'book_intro' => 'required',
            'book_desc' => 'required',
            'book_main_image' => 'required',
            'book_images' => 'required',
            'book_author' => 'required',
            'book_price_core' => 'required|numeric',
            'book_price_sell' => 'required|numeric',
            'book_status' => 'required',
        ];
        $error_messages = [
            'required' => ':attribute không được để trống',
            'min:6' => ':attribute không dưới 6 ký tự',
            'numeric' => ':attribute phải là số',
            'date' => ':attribute phải là ngày',
        ];
        $this->validate($request,$validate_book,$error_messages);


        $book = new BooksModel();
        $book->book_name = $request->book_name;
        $book->book_slug = $request->book_slug;
        $book->book_intro = $request->book_intro;
        $book->book_desc = $request->book_desc;
        if ($request->file('book_main_image')->isValid()) {
            $book->book_main_image = $request->book_main_image->store('public/files');
        } else {
            $book->book_main_image = '';
        }

        if ($request->file('book_images')->isValid()) {
            $book->book_images = $request->book_images->store('public/files');
        } else {
            $book->book_images = '';
        }
        $book->book_author = $request->book_author;
        $book->book_price_core = $request->book_price_core;
        $book->book_price_sell = $request->book_price_sell;
        $book->book_status = $request->book_status;
        $book->created_at = $request->created_at;
        $book->updated_at = $request->updated_at;
        $book->save();

        return redirect('/backend/index')->with('status', 'Thêm sách thành công');
    }

    public function destroy(Request $request,$id){
        $book= BooksModel::find($id);
        $book->delete();
        return redirect('/backend/index')->with('status', 'Xóa sách thành công');
    }

    public function update(Request $request, $id){


        $book = BooksModel::find($id);
        $book->book_name = $request->book_name;
        $book->book_slug = $request->book_slug;
        $book->book_intro = $request->book_intro;
        $book->book_desc = $request->book_desc;

       if ($request->hasFile('book_main_image')) {
            $file_name1 = $request->book_main_image->getClientOriginalName();
            $path1 = $request->book_main_image->storeAs('public/files',$file_name1);
            $book->book_main_image = $path1;
        }




     /*   if ($request->hasFile('book_images')) {
            $file_name2 = $request->book_main_image->getClientOriginalName();
            $path2 = $request->book_images->storeAs('public/files',$file_name2);
            $book->book_images = $path2;
        }*/
        if ($request->hasFile('book_images')) {
            foreach ($request->file('book_images') as $mul_file2){
                $file_name2 = $mul_file2->getClientOriginalName();
                $path2 = $mul_file2->storeAs('public/files',$file_name2);
                $data2[] = $path2;
                $book->book_images = json_encode($data2);
            }
        }


        $book->book_author = $request->book_author;
        $book->book_price_core = $request->book_price_core;
        $book->book_price_sell = $request->book_price_sell;
        $book->book_status = $request->book_status;
        $book->created_at = $request->created_at;
        $book->updated_at = $request->updated_at;
        $book->save();

        return redirect('/backend/index')->with('status', 'Đã cập nhật sách thành công');
    }
}
