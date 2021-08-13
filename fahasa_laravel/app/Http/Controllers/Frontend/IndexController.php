<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryProductModel;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //

    public function index() {
        $product = DB::table('book')->paginate(8);
        $category = CategoryProductModel::all();
        $category2 = CategoryProductModel::all();
        $detail=[];
        //Lấy ra bản ghi trong bảng category có category_id = book_type của bảng book và đưa vào mảng detail
        foreach ($product as $value){
            $detail[] = DB::table('category')->where('category_id',$value->book_type)->first();
        }
        //Lọc phần tử trùng nhau cho mảng detail
        $data3= array_unique($detail,SORT_REGULAR);
        return view('frontend.contents.homepage',['category'=>$category,'category2'=>$category2,'product'=>$product,'catdetail'=>$data3]);
    }
}
