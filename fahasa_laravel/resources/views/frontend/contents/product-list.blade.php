@extends('frontend.layouts.main')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row catname">
        <h3>Thể Loại: {{$catname->category_name}}</h3>
    </div>
    <div class="row featured__filter">
        @foreach($category as $books)
            <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="https://salt.tikicdn.com/cache/280x280/ts/product/c1/6a/3e/537f7b9bb219be81e217e0c7b5b037e6.jpg">
                        <h6 class="item_detail">
                            <?php foreach($catdetail as $detail){
                                if ($detail){
                                if($detail->category_id == $books->book_type){
                                    echo $detail->category_name;
                                }
                                }
                           }?>
                        </h6>
                        <ul class="featured__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="featured__item__text">
                        <h6><a href="#">{{$books->book_title}}</a></h6>
                        <h5>{{$books->book_price_sell}}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row pages">
        {{ $category->links() }}
    </div>
</div>
@endsection