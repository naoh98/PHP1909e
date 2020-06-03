@extends("bookstore.Template.layout.index")
@section("title","Xóa")
@section("content")
    <div class="row">
        <h1>Xóa Danh Mục</h1>
        <div class="col-md-12">
            <a href="{{url('/Template/management')}}" class="btn btn-info">Quay về</a>
        </div>
        <div class="col-md-12">
            <form name="book_category" action="{{url("/Template/manage_delete/$category->category_id")}}"  method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>ID: </label><span> {{$category->category_id}}</span> <br>
                    <label>Tên Thể Loại: </label><span> {{$category->category_name}}</span>
                </div>
                <button type="submit" class="btn btn-danger">Xóa</button>
            </form>
        </div>
    </div>
    
@endsection