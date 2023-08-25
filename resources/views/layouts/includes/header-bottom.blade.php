<div class="header-bottom hidden-sm-down">
    <div class="container">
    @if(Illuminate\Support\Facades\Session::has('success'))
    <div class="row mr-2 ml-2">
            <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2"
                    id="type-error"><span style="font-size:22px">{{Illuminate\Support\Facades\Session::get('success')}}</span>
            </button>
    </div>
    <br>
@endif
        <div class="row d-flex align-items-center">
            <div class="contentsticky_verticalmenu verticalmenu-main col-lg-3 col-md-1 d-flex" data-textshowmore="Show More" data-textless="Hide" data-desktop_item="4">
                <div class="toggle-nav d-flex align-items-center justify-content-start">
                    <span class="btnov-lines"></span>
                    <span style="font-size:20px"> كتب اونلاين </span>
                </div>
                <div class="verticalmenu-content has-showmore show">

                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novverticalmenu/views/templates/hook/novverticalmenu.tpl -->
                    <div id="_desktop_verticalmenu" class="nov-verticalmenu block" data-count_showmore="6">
                        <div class="box-content block_content">
                            <div id="verticalmenu" class="verticalmenu" role="navigation">
                                <ul class="menu level1">
                                    <li class="item  parent" ><a href="#" title="Laptops &amp; Accessories"><i class="hasicon nov-icon" style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/laptop.png') no-repeat scroll center center;"></i><span style="font-size:18px">  انواع الكتب</span></a><span class="show-sub fa-active-sub"></span><span class="menu-sub-title">دينيه  وسياسيه  وعلميه  ورياضيه</span><div class="dropdown-menu" style="width:222px"><ul><li class="item " ><a href="#content-science" title="Macbook Pro"><span style="font-size:17px">الكتب العلميه</span></a></li>
                                                <li class="item  parent" ><a href="#content-sport" title="Laptop Thinkpad"><span style="font-size:17px">الكتب الرياضيه</span></a><div class="dropdown-menu" ><ul><li class="item " ></li>
                                                     
                                                        </ul></div></li>
                                                <li class="item " ><a href="#content-imagine" title="EliteBook"><span style="font-size:17px">الكتب الخياليه</span></a></li>
                                                <li class="item " ><a href="#content-religon" title="Lenovo Yoga"><span style="font-size:17px">الكتب الدينيه</span></a></li>
                                                <li cla
                                            </ul></div></li>





                                            <li class="item  parent" ><a href="#" title="Laptops &amp; Accessories"><i class="hasicon nov-icon" style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/laptop.png') no-repeat scroll center center;"></i><span style="font-size:18px">  لغات الكتب</span></a><span class="show-sub fa-active-sub"></span><span class="menu-sub-title">عربيه  انجليزيه  ايطاليه  وفرنسيه</span><div class="dropdown-menu" style="width:222px"><ul><li class="item " ><a href="#" title="Macbook Pro"><span style="font-size:17px">الكتب العربيه</span></a></li>
                                                <li class="item  parent" ><a href="#" title="Laptop Thinkpad"><span style="font-size:17px">الكتب الانجليزيه</span></a><div class="dropdown-menu" ><ul><li class="item " ></li>
                                                     
                                                        </ul></div></li>
                                                <li class="item " ><a href="#" title="EliteBook"><span style="font-size:17px">الكتب الايطاليه</span></a></li>
                                                <li class="item " ><a href="#" title="Lenovo Yoga"><span style="font-size:17px">الكتب الفرنسيه</span></a></li>
                                                <li cla
                                            </ul></div></li>



                                            @if(isset($book))
                                           
                                            @can('viewAny',$book)
                                            <li class="item  parent" ><a href="{{route('book.read.show')}}" title="Laptops &amp; Accessories"><i class="hasicon nov-icon" style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/laptop.png') no-repeat scroll center center;"></i><span style="font-size:18px"> الكتب المقروئه  </span></a><span class="show-sub fa-active-sub"></span><span class="menu-sub-title">الكتب الي تم قرائتها من قبل</span>
                                                
                                            </li>
                                            <li class="item  parent" ><a href="{{route('book.borrow.show')}}" title="Laptops &amp; Accessories"><i class="hasicon nov-icon" style="background:url('http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/img/modules/novverticalmenu/icon/laptop.png') no-repeat scroll center center;"></i><span style="font-size:18px"> الكتب المستعاره  </span></a><span class="show-sub fa-active-sub"></span><span class="menu-sub-title">الكتب الي تم استعارتها من قبل</span>
                                           </li>
                                           @endcan
                                            
                                            @endif       
                                                            
                                                            
                                                            
                                                        
                                                            
                                                           
                                                        
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/novverticalmenu/views/templates/hook/novverticalmenu.tpl -->

                </div>
            </div>

            <div class="col-lg-9 col-md-11 header-menu d-flex align-items-center justify-content-start">
                <div class="header-menu-search d-flex justify-content-between w-100 align-items-center">

                 

                
                            </div>
                            <!-- /Block search module TOP -->

                            <!-- end modules/novadvancedsearch/novadvancedsearch-top.tpl -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>