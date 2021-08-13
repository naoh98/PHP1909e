<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\View\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryProductController extends Controller
{
    //lấy ra toàn bộ phần tử con của phần tử đang chọn
    public function cat(&$arr,$category_id){

        $data = DB::table('category')->where('parent_id',$category_id)->get();
        $arr[]=$category_id;
        foreach ($data as $key=> $value){
            if (isset($data)){
                $id =  $value->category_id;
                $arr[]= $id;
                $this->cat($arr,$id);
            }
        }
        return $arr;
    }

    //
    public function index(Request $request, $category_id) {
        $arr =[];
        $this->cat($arr,$category_id);
        //Lọc phần tử trùng nhau cho mảng arr
        $arr2 = array_unique($arr);
        //Lấy ra toàn bộ bản ghi trong bảng book có book_type nằm trong mảng arr2 và phân trang
        $data = DB::table('book')->whereIn('book_type',$arr2)->paginate(4);
        //Lấy ra 1 bản ghi trong bảng category có category_id trùng với id trên trình duyệt
        $data2 = DB::table('category')->where('category_id', $category_id)->first();
        $detail=[];
        //Lấy ra bản ghi trong bảng category có category_id = book_type của bảng book và đưa vào mảng detail
        foreach ($data as $value){
            $detail[] = DB::table('category')->where('category_id',$value->book_type)->first();
        }
        //Lọc phần tử trùng nhau cho mảng detail
        $data3= array_unique($detail,SORT_REGULAR);

        //dump($data);
        //dump($data3);
        //dump($arr2);
        return view("frontend.contents.product-list",['category'=>$data,'catname'=>$data2,'catdetail'=>$data3]);
    }
}
