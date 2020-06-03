@extends("bookstore.Template.layout.index")
@section("title","Thêm")
@section("content")
    <div class="row">
        <h1>Thêm Danh Mục</h1>
        <div class="col-md-12">
            <a href="{{url('/Template/management')}}" class="btn btn-info">Quay về</a>
        </div>
        <div class="col-md-12">
            <form name="up_cat" action="{{url("/Template/manage_create")}}"  method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Tên Thể Loại</label>
                    <input type="text" value="" name="category_name" class="form-control">
                </div>
                @error('category_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label>Parent Name</label>
                    <div>
                        <select name="parent_id">
                            <option value="0">None</option>
                            <?php viewcreate($category); ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-danger">Thêm</button>
            </form>
        </div>
    </div>

    <?php
    function viewcreate($categories,$parent_id=0,$char=""){
    foreach ($categories as $manage){
    if ($manage['parent_id']==$parent_id){
    ?>
    <option value="{{$manage->category_id}}"}}><?php echo $char.$manage['category_name']; ?></option>
    <?php
    viewcreate($categories,$manage['category_id'],$manage['category_name'].' > ');
    }
    }
    }
    ?>
@endsection