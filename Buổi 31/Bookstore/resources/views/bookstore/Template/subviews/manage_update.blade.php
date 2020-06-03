@extends("bookstore.Template.layout.index")
@section("title","Sửa")
@section("content")
    <div class="row">
        <h1>Sửa Danh Mục</h1>
        <div class="col-md-12">
            <a href="{{url('/Template/management')}}" class="btn btn-info">Quay về</a>
        </div>
        <div class="col-md-12">
            <form name="up_cat" action="{{url("/Template/manage_update/$category_1->category_id")}}"  method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>ID: </label>
                    <span>{{$category_1->category_id}}</span>
                </div>
                <div class="form-group">
                    <label>Tên Thể Loại</label>
                    <input type="text" value="{{$category_1->category_name}}" name="category_name" class="form-control">
                </div>
                @error('category_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label>Parent Name</label>
                    <div>
                        <select name="parent_id">
                            <option value="0" {{($category_1->parent_id == 0) ? "selected" : ""}}>None</option>
                            <?php viewupdate($category_all,$category_1); ?>
                        </select>
                    </div>
                </div>
                @if(session('status'))
                    <div class="alert alert-danger">
                        {{session('status')}}
                    </div>
                @endif
                <button type="submit" class="btn btn-danger">Sửa</button>
            </form>
        </div>
    </div>

    <?php
    function viewupdate($categories,$category,$parent_id=0,$char=""){
        foreach ($categories as $manage){
            if ($manage['parent_id']==$parent_id){
    ?>
                <option value="{{$manage->category_id}}" {{($manage->category_id == $category->category_id) ? "selected" : ""}}><?php echo $char.$manage['category_name'].' ['.$manage['category_id'].']'; ?></option>
    <?php
            viewupdate($categories,$category,$manage['category_id'],$manage['category_name'].' ['.$manage['category_id'].']'.' > ');
            }
        }
    }
    ?>
@endsection