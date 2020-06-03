<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\CategoryModel;
use App\User;
use App\View\view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class TemplateController extends Controller
{
    public function index(){
        return view("bookstore.Template.subviews.index");
    }

    public function login(){
        return view("bookstore.Template.subviews.login");
    }

    public function register(){
        return view("bookstore.Template.subviews.register");
    }

    public function management(){
        $category1 = CategoryModel::all();

        /*echo "<pre>";
        print_r($category1);
        echo "</pre>";*/

        $data = [];
        $data["category"] = $category1;
        return view("bookstore.Template.subviews.management",$data);
    }

    public function delpage($category_id){

        $category1 = DB::table('category')->where('category_id',$category_id)->first();
        $data = [];
        $data["category"] = $category1;
        return view("bookstore.Template.subviews.manage_delete",$data);
    }
    public function delete($category_id){
            DB::table('category')->where('category_id',$category_id)->delete();
            $data = DB::table('category')->where('parent_id',$category_id)->get();
            //$data1=gettype($data);
            //dump($data);die;
            foreach ($data as $value){
                if (is_object($value)){
                    $arr = $value->category_id;
                    $this->delete($arr);
                }
            }

        return redirect('/Template/management')->with('status', 'Xóa danh mục thành công');

        //Xóa phần tử cha thì phần tử con sẽ lên làm phần tử cha
        /*$data = DB::table('category')->where('category_id',$category_id)->first();
        $arr = ['parent_id'=>$data->parent_id];
        DB::table('category')->where('parent_id',$category_id)->update($arr);
        DB::table('category')->where('category_id',$category_id)->delete();*/
    }

    public function updpage($category_id){
        //trả về toàn bộ csdl để đệ quy option
        $category_all = CategoryModel::all();
        $data_all = [];
        $data_all["category_all"] = $category_all;

        //trả về 1 bản ghi cần chỉnh sửa
        $category_1 = DB::table('category')->where('category_id',$category_id)->first();
        $data_1 = [];
        $data_1["category_1"] = $category_1;

        return view("bookstore.Template.subviews.manage_update",$data_all,$data_1);
    }
    public function update(Request $request,$category_id){
        $validate_cat =[
            'category_name' => 'required',
            'parent_id' => 'required'

        ];
        $error_messages = [
            'required' => ':attribute không được để trống'
        ];
        $this->validate($request,$validate_cat,$error_messages);

        if ($request->parent_id == $category_id){
            $arr = [
                'category_name'=>$request->category_name
            ];
            DB::table('category')->where('category_id',$category_id)->update($arr);
        }
        elseif ($request->parent_id == 'none'){
            $arr = [
                'category_name'=>$request->category_name,
                'parent_id'=>0
            ];
            DB::table('category')->where('category_id',$category_id)->update($arr);
        }else{
            $arr = [
                'category_name'=>$request->category_name,
                'parent_id'=>$request->parent_id
            ];
            DB::table('category')->where('category_id',$category_id)->update($arr);
        }

        return redirect('/Template/management')->with('status','Sửa thành công');
    }

    public function crepage(){
        $category1 = CategoryModel::all();
        $data = [];
        $data["category"] = $category1;
        return view("bookstore.Template.subviews.manage_create",$data);
    }
    public function create(Request $request){
        $validate_cat =[
            'category_name' => 'required',
            'parent_id' => 'required'

        ];
        $error_messages = [
            'required' => ':attribute không được để trống'
        ];
        $this->validate($request,$validate_cat,$error_messages);

        DB::table('category')->insert([
            ['category_name' => $request->category_name, 'parent_id' => $request->parent_id]
        ]);

        return redirect('/Template/management')->with('status','Thêm danh mục thành công');
    }

    public function logintask(Request $request){
        $username = $request->input("username");
        $password = $request->input("password");

        $user = DB::table('users')->where('email',$username)->first();

        if (Hash::check($password,$user->password)){
            session(['sblogin' => [
                'username' => 'admin',
                'password' => '123'
            ]]);
            return redirect ('/Template/index')->with('status','Đăng nhập thành công');
        }
        return redirect('/Template/login')->with('status','Đăng nhập thất bại');
    }

    public function logout(Request $request){
        $request->session()->forget('sblogin');
        $request->session()->flush();
        return redirect('/Template/login')->with('status','Đăng xuất thành công');
    }

    public function registertask(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $password = Hash::make($password);

        $user = new User();

        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        return redirect('/Template/login')->with('status','Dang ky thanh cong');
    }

    public function __construct()
    {
        $this->middleware('sblogin')->except(['login','register','logintask','registertask']);
    }

}
