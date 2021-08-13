<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryProductModel;

class ProductController extends Controller
{
    //
    public function index() {

        $product = DB::table('book')
            ->join('category', 'book.book_type', '=', 'category.category_id')
            ->select('book.*','category.category_id','category.category_name')
            ->paginate(10);

        return view("backend.contents.products.index",['product'=>$product]);
    }

    //hiển thị xóa
    public function delpage($book_id){
        $book1 = DB::table('book')->where('book_id',$book_id)->first();

        //Lấy ra 1 bản ghi trong bảng category có category_id = book_type của bảng book
        $detail = DB::table('category')->where('category_id',$book1->book_type)->first();

        return view("backend.contents.products.delete",['product'=>$book1,'catdetail'=>$detail]);
    }

    //code xóa
    public function delete($book_id){
        DB::table('book')->where('book_id',$book_id)->delete();
        return redirect('/admin/product')->with('status', 'Xóa sách thành công');
    }

    //hiển thị trang edit
    public function editpage($book_id){
        //trả về toàn bộ csdl để đệ quy option category theo dạng object - dùng " product-> "
        $category = DB::table('category')->get();
        //trả về toàn bộ csdl để đệ quy option category theo dạng array (mảng) - dùng " product[''] "
        //$category = CategoryProductModel::all();

        //trả về 1 bản ghi cần chỉnh sửa
        $book = DB::table('book')->where('book_id',$book_id)->first();

        return view("backend.contents.products.edit",['category'=>$category,'product'=>$book]);
    }

    //code edit
    public function edit(Request $request,$book_id){

        $validate_pro =[
            'book_title' => 'required'
        ];
        $error_messages = [
            'required' => ':attribute không được để trống'
        ];
        $this->validate($request,$validate_pro,$error_messages);
        $arr=[];
            if ($request->hasFile('book_main_image')) {
                $file_name1 = $request->book_main_image->getClientOriginalName();
                $path1 = $request->book_main_image->storeAs('public/files', $file_name1);
                $arr['book_main_image'] = $path1;
            }
            if ($request->hasFile('book_images')) {
                foreach ($request->file('book_images') as $mul_file){
                    $file_name2 = $mul_file->getClientOriginalName();
                    $path2 = $mul_file->storeAs('public/files',$file_name2);
                    $data2[] = $path2;
                    $arr['book_images'] = json_encode($data2);
                }
            }
        $arr['book_title'] = $request->book_title;
        $arr['book_desc'] = $request->book_desc;
        $arr['book_author'] = $request->book_author;
        $arr['book_price_core'] = $request->book_price_core;
        $arr['book_tax'] = $request->book_tax;
        $arr['book_price_sell'] = $request->book_price_core + ($request->book_price_core*$request->book_tax)/100;
        $arr['book_type'] = $request->book_type;
        DB::table('book')->where('book_id', $book_id)->update($arr);

        return redirect('/admin/product')->with('status','Sửa sách thành công');
    }

    //hiển thị trang thêm thể loại
    public function createpage(){
        //trả về toàn bộ csdl để đệ quy option category theo dạng object - dùng " product-> "
        $category = DB::table('category')->get();
        return view("backend.contents.products.create",['category'=>$category]);
    }

    //code thêm thể loại
    public function create(Request $request){
        $validate_pro =[
            'book_title' => 'required'
        ];
        $error_messages = [
            'required' => ':attribute không được để trống'
        ];
        $this->validate($request,$validate_pro,$error_messages);
        $arr=[];
        if ($request->hasFile('book_main_image')) {
            $file_name1 = $request->book_main_image->getClientOriginalName();
            $path1 = $request->book_main_image->storeAs('public/files', $file_name1);
            $arr['book_main_image'] = $path1;
        }
        if ($request->hasFile('book_images')) {
            foreach ($request->file('book_images') as $mul_file){
                $file_name2 = $mul_file->getClientOriginalName();
                $path2 = $mul_file->storeAs('public/files',$file_name2);
                $data2[] = $path2;
                $arr['book_images'] = json_encode($data2);
            }
        }
        $arr['book_title'] = $request->book_title;
        $arr['book_desc'] = $request->book_desc;
        $arr['book_author'] = $request->book_author;
        $arr['book_price_core'] = $request->book_price_core;
        $arr['book_tax'] = $request->book_tax;
        $arr['book_price_sell'] = $request->book_price_core + ($request->book_price_core*$request->book_tax)/100;
        $arr['book_type'] = $request->book_type;
        DB::table('book')->insert($arr);

        return redirect('/admin/product')->with('status','Thêm sách thành công');
    }

}
