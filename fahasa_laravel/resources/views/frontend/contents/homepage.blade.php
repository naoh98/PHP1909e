@extends('frontend.layouts.main')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh mục sản phẩm</span>
                        </div>
                       <?php showcat($category);?>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Tất cả danh mục
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Bạn muốn tìm gì ?">
                                <button type="submit" class="site-btn">TÌM KIẾM</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>Hỗ trợ 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="https://cdn0.fahasa.com/media/magentothem/banner7/MCBooks-920x420.jpg">
                        <div class="hero__text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                 <?php slidecat($category2);?>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Sản phẩm nổi bật</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Tất cả</li>
                            <li data-filter=".oranges">Sách công nghệ</li>
                            <li data-filter=".fresh-meat">Sách văn học</li>
                            <li data-filter=".vegetables">Sách giáo dục</li>
                            <li data-filter=".fastfood">Quà tặng</li>
                        </ul>
                    </div>
                </div>
            </div>
           <div class="row featured__filter">
                @foreach($product as $books)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="https://salt.tikicdn.com/cache/280x280/ts/product/c1/6a/3e/537f7b9bb219be81e217e0c7b5b037e6.jpg">
                            <h6 class="item_detail">
                                <?php foreach($catdetail as $detail){
                                    if($detail){
                                        if($detail->category_id == $books->book_type){
                                            echo $detail->category_name;
                                        }
                                    }
                               } ?>
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
                {{ $product->links() }}
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="https://salt.tikicdn.com/cache/w885/ts/banner/68/f9/52/19e7394ceb192bb33d26c4a7099ae342.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="https://salt.tikicdn.com/cache/w885/ts/banner/68/f9/52/19e7394ceb192bb33d26c4a7099ae342.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sách mới</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sách bán chạy</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sách yêu thích</h4>
                        <div class="latest-product__slider owl-carousel">
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                            <div class="latest-prdouct__slider__item">
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                                <a href="#" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="https://salt.tikicdn.com/cache/w780/ts/product/8e/7a/61/47f4dfb634e076ff7c5418580ea8578c.jpg" style="width:auto" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>Tự học tiếng anh</h6>
                                        <span>$30.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>TIN TỨC CỦA CHÚNG TÔI</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-5-2020/Sach%20Le%20-%20TBOS%20-%20350x415.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Fahasa phát hành sách</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-5-2020/Sach%20Le%20-%20TBOS%20-%20350x415.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Fahasa phát hành sách</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="https://cdn0.fahasa.com/media/wysiwyg/Thang-5-2020/Sach%20Le%20-%20TBOS%20-%20350x415.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Fahasa phát hành sách</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

     <?php
         function showcat(&$categories,$parent_id = 0){
             $cat_child = [];
             foreach ($categories as $key => $item){
                 if($item['parent_id']==$parent_id){
                     $cat_child[] = $item;
                     unset($categories[$key]);
                 }
             }
             if ($cat_child){

                 echo '<ul>';
                     foreach ($cat_child as $key => $item){?>
                         <li><a href="{{url("/shop-category/".$item->category_id)}}"> {{$item['category_name']}}
                            <?php showcat($categories,$item['category_id']); ?>
                         </a></li>
             <?php }
                 echo '</ul>';

        }
     } ?>

     <?php
     function slidecat($categories){
     foreach ($categories as $key => $manage){
     ?>
     <div class="col-lg-3">
         <div class="categories__item set_bg" style="background-image: url('{{asset('storage/files/' .basename($manage->category_image))}}')">
             <h5><a href="#">{{$manage->category_name}}</a></h5>
         </div>
     </div>
     <?php
     }
     }
     ?>
 @endsection
