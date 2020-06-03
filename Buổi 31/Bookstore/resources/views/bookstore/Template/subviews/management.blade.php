@extends("bookstore.Template.layout.index")
@section("title","Quản lý")
@section("content")

<div class="container-fluid">
    <div>
        <a href="{{url('/Template/manage_create')}}" class="btn btn-success">Thêm Thể Loại</a>
    </div>
    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <br>
    <table class="table">
        <thead class=" thead-dark">
            <tr>
                <th>Thể Loại</th>
                <th>Category ID</th>
                <th>Parent ID</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php viewmenu($category); ?>
        </tbody>
    </table>
</div>
<?php
function viewmenu($categories,$parent_id=0,$char=''){
    foreach ($categories as $manage){
        if ($manage['parent_id']==$parent_id){
?>
            <tr>
                <td>
                    <?php echo $char.$manage['category_name']; ?>
                </td>
                <td>
                    <?php echo $manage['category_id']; ?>
                </td>
                <td>
                    <?php echo $manage['parent_id']; ?>
                </td>
                <td class="text-right">
                    <a href="{{url("/Template/manage_update/$manage->category_id")}}" class="btn btn-warning">Sửa</a>
                    <a href="{{url("/Template/manage_delete/$manage->category_id")}}" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
<?php
            viewmenu($categories,$manage['category_id'],$manage['category_name'].' > ');
        }
    }
}
?>
@endsection