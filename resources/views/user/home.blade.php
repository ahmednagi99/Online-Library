@extends('layouts.user')

@section('content')


    <div id="main">

        <div id="displayTop" class="displaytopthree">
      
        </div>
        @if(isset($scientific_books) && $scientific_books->count()>0 )
        <section id="content-science" class="page-home pagehome-three" style="margin-bottom:-100px" >
            <div class="container" >
                <div class="row " >
                    <div class="nov-row spacing-30 mt-15 col-lg-12 col-xs-12" ><div class="nov-row-wrap row">
                     
                        </div></div><div class="nov-row spacing-30 col-lg-12 col-xs-12" ><div class="nov-row-wrap row">
                           

                        </div></div><div class="nov-row  col-lg-12 col-xs-20" ><div class="nov-row-wrap row">

                            <div class="nov-productlist   productlist-slider      col-xl-12 col-lg-12 col-md-12 col-xs-12 col-md-12 col-lg-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                       الكتب العلميه
                                    </h2>
                                    <div class="block_content" >
                                        <div id="productlist381904327"  class="product_list grid owl-carousel owl-theme multi-row" data-autoplay="false" data-autoplayTimeout="6000" data-loop="false" data-margin="2" data-dots="false" data-nav="true" data-items="5" data-items_large="1" data-items_tablet="1" data-items_mobile="2" >
                                            @foreach($scientific_books as $key=>$scientific_book)
                                            
                                            <div class="item  text-center">
                                                
                                                <div class="product-miniature js-product-miniature item-one last_item" data-id-product="2" data-id-product-attribute="60" itemscope itemtype="http://schema.org/Product" >
                                                    <div class="thumbnail-container" style="height:200px">
                                                    @can('viewAny',$scientific_book)
                                                        <a href="{{route('book.show',[$scientific_book->file,$scientific_book->id])}}" class="thumbnail product-thumbnail two-image">
                                                            <img
                                                                class="img-fluid image-cover"
                                                                src = "{{asset('books/book_photos/'.$scientific_book->photo)}}"
                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                            <img
                                                                class="img-fluid image-secondary"
                                                                src = "{{asset('books/book_photos/'.$scientific_book->photo)}}"                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                        </a>
                                                    @else

                                                    <a href="{{route('file.show',$scientific_book->file)}}" class="thumbnail product-thumbnail two-image">
                                                            <img
                                                                class="img-fluid image-cover"
                                                                src = "{{asset('books/book_photos/'.$scientific_book->photo)}}"
                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                            <img
                                                                class="img-fluid image-secondary"
                                                                src = "{{asset('books/book_photos/'.$scientific_book->photo)}}"                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                        </a>

                                                    @endcan




                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-brown-bear-printed-sweater.html">Smartphone &amp; Tablet</a></div>


                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                                <span>0 review</span>
                                                            </div>
                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                            <p class="seller_name">
                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                <i class="fa-solid fa-book"></i>
                                                                    
                                                                    <span style="font-size:20px"><a href="https://www.google.com">{{$scientific_book->name}}</a></span>
                                                                   
                                                                   
                                                                </a>
                                                            </p>

                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->

                                                           
                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود"><span style="font-size:17px">   </span></a></div>

                                                            <div class="product-group-price">

                                                                <div class="product-price-and-shipping">
                                                                @can('viewAny',$scientific_book)
                                                                <a href="{{route('book.show',[$scientific_book->file,$scientific_book->id])}}" class='btn btn-info'> عرض الكتاب</a>
                                                           <a href="{{route('book.borrow',$scientific_book->id)}}" class='btn btn-success'>استعاره الكتاب</a>
                                                                    @else
                                                                    
                                                                <a href="{{route('file.show',$scientific_book->file)}}" class='btn btn-info' style="font-size:20px;margin-right:20px"> عرض الكتاب</a>
                                                           
                                                                    @endcan
                                                                </div>

                                                            </div>
                                                        </div>
                                                           
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                           

                        </div></div>
                          

                        </div></div>
                </div>

                <!--/////////////////////-->
                
            </div>
        </section>
        @endif
        @if(isset($religious_books) && $religious_books->count()>0 )
        <section id="content-religon" class="page-home pagehome-three" style="margin-bottom:-100px" >
            <div class="container">
                <div class="row">
                    <div class="nov-row spacing-30 mt-15 col-lg-12 col-xs-12" ><div class="nov-row-wrap row">
                     
                        </div></div><div class="nov-row spacing-30 col-lg-12 col-xs-12" ><div class="nov-row-wrap row">
                           

                        </div></div><div class="nov-row  col-lg-12 col-xs-20" ><div class="nov-row-wrap row">

                            <div class="nov-productlist   productlist-slider      col-xl-12 col-lg-12 col-md-12 col-xs-12 col-md-12 col-lg-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                       الكتب الدينيه
                                    </h2>
                                    <div class="block_content" >
                                        <div id="productlist381904327"  class="product_list grid owl-carousel owl-theme multi-row" data-autoplay="false" data-autoplayTimeout="6000" data-loop="false" data-margin="2" data-dots="false" data-nav="true" data-items="5" data-items_large="1" data-items_tablet="1" data-items_mobile="2" >
                                            @foreach($religious_books as $key=>$religious_book)
                                            <div class="item  text-center">
                                                
                                                <div class="product-miniature js-product-miniature item-one last_item" data-id-product="2" data-id-product-attribute="60" itemscope itemtype="http://schema.org/Product" >
                                                    <div class="thumbnail-container"style="height:200px">
                                                    @can('viewAny',$religious_book)
                                                        <a href="{{route('book.show',[$religious_book->file,$religious_book->id])}}" class="thumbnail product-thumbnail two-image">
                                                            <img
                                                                class="img-fluid image-cover"
                                                                src = "{{asset('books/book_photos/'.$religious_book->photo)}}"
                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                            <img
                                                                class="img-fluid image-secondary"
                                                                src = "{{asset('books/book_photos/'.$religious_book->photo)}}"                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                        </a>
                                                        @else
                                                        <a href="{{route('file.show',$religious_book->file)}}" class="thumbnail product-thumbnail two-image">
                                                            <img
                                                                class="img-fluid image-cover"
                                                                src = "{{asset('books/book_photos/'.$religious_book->photo)}}"
                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                            <img
                                                                class="img-fluid image-secondary"
                                                                src = "{{asset('books/book_photos/'.$religious_book->photo)}}"                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                        </a>


                                                        @endcan





                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-brown-bear-printed-sweater.html">Smartphone &amp; Tablet</a></div>


                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                                <span>0 review</span>
                                                            </div>
                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                            <p class="seller_name">
                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                <i class="fa-solid fa-book"></i>
                                                                    <span style="font-size:20px">{{$religious_book->name}}</span>
                                                                   
                                                                </a>
                                                            </p>

                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->


                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود"><span style="font-size:17px">   </span></a></div>

                                                            <div class="product-group-price">

                                                                <div class="product-price-and-shipping">

                                                                @can('viewAny',$religious_book)
                                                                <a href="{{route('book.show',[$religious_book->file,$religious_book->id])}}" class='btn btn-info'> عرض الكتاب</a>
                                                           <a href="{{route('book.borrow',$religious_book->id)}}" class='btn btn-success'>استعاره الكتاب</a>
                                                                    @else
                                                                    
                                                                <a href="{{route('file.show',$religious_book->file)}}" class='btn btn-info' style="font-size:20px;margin-right:20px"> عرض الكتاب</a>
                                                           
                                                                    @endcan

                                                                </div>

                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                           

                        </div></div>
                          

                        </div></div>
                </div>

                <!--/////////////////////-->
                
            </div>
        </section>
        @endif       
        @if(isset($sports_books) && $sports_books->count()>0 )                                                  
        <section id="content-sport" class="page-home pagehome-three" style="margin-bottom:-100px">
            <div class="container">
                <div class="row">
                    <div class="nov-row spacing-30 mt-15 col-lg-12 col-xs-12" ><div class="nov-row-wrap row">
                     
                        </div></div><div class="nov-row spacing-30 col-lg-12 col-xs-12" ><div class="nov-row-wrap row">
                           

                        </div></div><div class="nov-row  col-lg-12 col-xs-20" ><div class="nov-row-wrap row">

                            <div class="nov-productlist   productlist-slider      col-xl-12 col-lg-12 col-md-12 col-xs-12 col-md-12 col-lg-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                       الكتب الرياضيه
                                    </h2>
                                    <div class="block_content" >
                                        <div id="productlist381904327"  class="product_list grid owl-carousel owl-theme multi-row" data-autoplay="false" data-autoplayTimeout="6000" data-loop="false" data-margin="2" data-dots="false" data-nav="true" data-items="5" data-items_large="1" data-items_tablet="1" data-items_mobile="2" >
                                            @foreach($sports_books as $key=>$sports_book)
                                            <div class="item  text-center">
                                                
                                                <div class="product-miniature js-product-miniature item-one last_item" data-id-product="2" data-id-product-attribute="60" itemscope itemtype="http://schema.org/Product" >
                                                    <div class="thumbnail-container" style="height:200px">
                                                    @can('viewAny',$sports_book)
                                                        <a href="{{route('book.show',[$sports_book->file,$sports_book->id])}}" class="thumbnail product-thumbnail two-image">
                                                            <img
                                                                class="img-fluid image-cover"
                                                                src = "{{asset('books/book_photos/'.$sports_book->photo)}}"
                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                            <img
                                                                class="img-fluid image-secondary"
                                                                src = "{{asset('books/book_photos/'.$sports_book->photo)}}"                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                        </a>
                                                    @else
                                                    <a href="{{route('file.show',$sports_book->file)}}" class="thumbnail product-thumbnail two-image">
                                                            <img
                                                                class="img-fluid image-cover"
                                                                src = "{{asset('books/book_photos/'.$sports_book->photo)}}"
                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                            <img
                                                                class="img-fluid image-secondary"
                                                                src = "{{asset('books/book_photos/'.$sports_book->photo)}}"                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                        </a>

                                                    @endcan




                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-brown-bear-printed-sweater.html">Smartphone &amp; Tablet</a></div>


                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                                <span>0 review</span>
                                                            </div>
                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                            <p class="seller_name">
                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                <i class="fa-solid fa-book"></i>
                                                                    <span style="font-size:20px">{{$sports_book->name}}</span>
                                                                   
                                                                </a>
                                                            </p>

                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->


                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود"><span style="font-size:17px">   </span></a></div>

                                                            <div class="product-group-price">

                                                                <div class="product-price-and-shipping">

                                                                @can('viewAny',$sports_book)
                                                                <a href="{{route('book.show',[$sports_book->file,$sports_book->id])}}" class='btn btn-info'> عرض الكتاب</a>
                                                           <a href="{{route('book.borrow',$sports_book->id)}}" class='btn btn-success'>استعاره الكتاب</a>
                                                                    @else
                                                                    
                                                                <a href="{{route('file.show',$sports_book->file)}}" class='btn btn-info' style="font-size:20px;margin-right:20px"> عرض الكتاب</a>
                                                           
                                                                    @endcan

                                                                </div>

                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                           

                        </div></div>
                          

                        </div></div>
                </div>

                <!--/////////////////////-->
                
            </div>
        </section>
        @endif                                                         
        @if(isset($imaginary_books) && $imaginary_books->count()>0 )                                                        
        <section id="content-imagine" class="page-home pagehome-three" style="margin-bottom:-100px">
            <div class="container">
                <div class="row">
                    <div class="nov-row spacing-30 mt-15 col-lg-12 col-xs-12" ><div class="nov-row-wrap row">
                     
                        </div></div><div class="nov-row spacing-30 col-lg-12 col-xs-12" ><div class="nov-row-wrap row">
                           

                        </div></div><div class="nov-row  col-lg-12 col-xs-20" ><div class="nov-row-wrap row">

                            <div class="nov-productlist   productlist-slider      col-xl-12 col-lg-12 col-md-12 col-xs-12 col-md-12 col-lg-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                       الكتب الخياليه
                                    </h2>
                                    <div class="block_content" >
                                        <div id="productlist381904327"  class="product_list grid owl-carousel owl-theme multi-row" data-autoplay="false" data-autoplayTimeout="6000" data-loop="false" data-margin="2" data-dots="false" data-nav="true" data-items="5" data-items_large="1" data-items_tablet="1" data-items_mobile="2" >
                                            @foreach($imaginary_books as $key=>$imaginary_book)
                                            <div class="item  text-center">
                                                
                                                <div class="product-miniature js-product-miniature item-one last_item" data-id-product="2" data-id-product-attribute="60" itemscope itemtype="http://schema.org/Product" >
                                                    <div class="thumbnail-container" style="height:200px">
                                                    @can('viewAny',$imaginary_book)
                                                        <a href="{{route('book.show',[$imaginary_book->file,$imaginary_book->id])}}" class="thumbnail product-thumbnail two-image">
                                                            <img
                                                                class="img-fluid image-cover"
                                                                src = "{{asset('books/book_photos/'.$imaginary_book->photo)}}"
                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                            <img
                                                                class="img-fluid image-secondary"
                                                                src = "{{asset('books/book_photos/'.$imaginary_book->photo)}}"                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                        </a>
                                                        @else

                                                        <a href="{{route('file.show',$imaginary_book->file)}}" class="thumbnail product-thumbnail two-image">
                                                            <img
                                                                class="img-fluid image-cover"
                                                                src = "{{asset('books/book_photos/'.$imaginary_book->photo)}}"
                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                            <img
                                                                class="img-fluid image-secondary"
                                                                src = "{{asset('books/book_photos/'.$imaginary_book->photo)}}"                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                        </a>

                                                        @endcan





                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-brown-bear-printed-sweater.html">Smartphone &amp; Tablet</a></div>


                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                                <span>0 review</span>
                                                            </div>
                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                            <p class="seller_name">
                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                <i class="fa-solid fa-book"></i>
                                                                    <span style="font-size:20px">{{$imaginary_book->name}}</span>
                                                                   
                                                                </a>
                                                            </p>

                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->


                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود"><span style="font-size:17px">   </span></a></div>

                                                            <div class="product-group-price">

                                                                <div class="product-price-and-shipping">
                                                                @can('viewAny',$imaginary_book)
                                                                <a href="{{route('book.show',[$imaginary_book->file,$imaginary_book->id])}}" class='btn btn-info'> عرض الكتاب</a>
                                                           <a href="{{route('book.borrow',$imaginary_book->id)}}" class='btn btn-success'>استعاره الكتاب</a>
                                                                    @else
                                                                    
                                                                <a href="{{route('file.show',$imaginary_book->file)}}" class='btn btn-info' style="font-size:20px;margin-right:20px"> عرض الكتاب</a>
                                                           
                                                                    @endcan
                                                                </div>

                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                           

                        </div></div>
                          

                        </div></div>
                </div>

                <!--/////////////////////-->
                
            </div>
        </section>
        @endif                                                        

        <section id="content-imagine" class="page-home pagehome-three" style="margin-bottom:-100px">
            <div class="container">
                <div class="row">
                    <div class="nov-row spacing-30 mt-15 col-lg-12 col-xs-12" ><div class="nov-row-wrap row">
                     
                        </div></div><div class="nov-row spacing-30 col-lg-12 col-xs-12" ><div class="nov-row-wrap row">
                           

                        </div></div><div class="nov-row  col-lg-12 col-xs-20" ><div class="nov-row-wrap row">

                            <div class="nov-productlist   productlist-slider      col-xl-12 col-lg-12 col-md-12 col-xs-12 col-md-12 col-lg-12">
                                <div class="block block-product clearfix">
                                    <h2 class="title_block">
                                      الكتب المترجمه
                                    </h2>
                                    <div class="block_content" >
                                        <div id="productlist381904327"  class="product_list grid owl-carousel owl-theme multi-row" data-autoplay="false" data-autoplayTimeout="6000" data-loop="false" data-margin="2" data-dots="false" data-nav="true" data-items="5" data-items_large="1" data-items_tablet="1" data-items_mobile="2" >
                                            @foreach($books as $key=>$book)
                                            <div class="item  text-center">
                                                
                                                <div class="product-miniature js-product-miniature item-one last_item" data-id-product="2" data-id-product-attribute="60" itemscope itemtype="http://schema.org/Product" >
                                                    <div class="thumbnail-container" style="height:200px">
                                                    @can('viewAny',$book)
                                                        <a href="{{route('book.show',[$book->file,$book->id])}}" class="thumbnail product-thumbnail two-image">
                                                            <img
                                                                class="img-fluid image-cover"
                                                                src = "{{asset('books/book_photos/'.$book->photo)}}"
                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                            <img
                                                                class="img-fluid image-secondary"
                                                                src = "{{asset('books/book_photos/'.$book->photo)}}"                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                        </a>
                                                        @else
                                                        <a href="{{route('file.show',$book->file)}}" class="thumbnail product-thumbnail two-image">
                                                            <img
                                                                class="img-fluid image-cover"
                                                                src = "{{asset('books/book_photos/'.$book->photo)}}"
                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/29-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                            <img
                                                                class="img-fluid image-secondary"
                                                                src = "{{asset('books/book_photos/'.$book->photo)}}"                                                                alt = ""
                                                                data-full-size-image-url = "http://demo.bestprestashoptheme.com/savemart/30-large_default/brown-bear-printed-sweater.jpg"
                                                                width="400"
                                                                height="200"
                                                            >
                                                        </a>

                                                        @endcan




                                                    </div>

                                                    <div class="product-description">
                                                        <div class="product-groups">

                                                            <div class="category-title"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-brown-bear-printed-sweater.html">Smartphone &amp; Tablet</a></div>


                                                            <!-- begin modules/novproductcomments/novproductcomments_reviews.tpl -->
                                                            <div class="product-comments">
                                                                <div class="star_content">
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                    <div class="star"></div>
                                                                </div>
                                                                <span>0 review</span>
                                                            </div>
                                                            <!-- end modules/novproductcomments/novproductcomments_reviews.tpl -->

                                                            <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->
                                                            <p class="seller_name">
                                                                <a title="View seller profile" href="http://demo.bestprestashoptheme.com/savemart/ar/jmarketplace/1_david-james/">
                                                                <i class="fa-solid fa-book"></i>
                                                                    <span style="font-size:20px">{{$book->name}}</span>
                                                                   
                                                                </a>
                                                            </p>

                                                            <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/jmarketplace/views/templates/hook/product-list.tpl -->


                                                            <div class="product-title" itemprop="name"><a href="http://demo.bestprestashoptheme.com/savemart/ar/smartphone-tablet/2-60-brown-bear-printed-sweater.html#/1-الحجم-ص/11-اللون_-اسود"><span style="font-size:17px"> {{$book->language}} </span></a></div>

                                                            <div class="product-group-price">

                                                                <div class="product-price-and-shipping">


                                                                @can('viewAny',$book)
                                                                <a href="{{route('book.show',[$book->file,$book->id])}}" class='btn btn-info'> عرض الكتاب</a>
                                                           <a href="{{route('book.borrow',$book->id)}}" class='btn btn-success'>استعاره الكتاب</a>
                                                                    @else
                                                                    
                                                                <a href="{{route('file.show',$book->file)}}" class='btn btn-info' style="font-size:20px;margin-right:20px"> عرض الكتاب</a>
                                                           
                                                                    @endcan


                                                                </div>

                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                           

                        </div></div>
                          

                        </div></div>
                </div>

                <!--/////////////////////-->
                
            </div>
        </section>

    </div>

@endsection