<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item active"><a href="{{route('admin.dashboard')}}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">الرئيسية </span></a>
            </li>

            <li class="nav-item  open ">
                <a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">جميع الكتب</span>
                    <span
                        class="badge badge badge-info badge-pill float-right mr-2">{{\App\Models\Book::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('books.index')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض جميع الكتب </a>
                    </li>
                    <li><a class="menu-item" href="{{route('books.create')}}" data-i18n="nav.dash.crypto">أضافة
                            كتاب جديد </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> الكتب المستعاره </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{\App\Models\Book::borrowed()->count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('borrowed-books.index')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكتب المستعاره </a>
                    </li>
                    
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-group"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">الكتب المقروءه   </span>
                    <span
                        class="badge badge badge-danger badge-pill float-right mr-2">{{\App\Models\Book::readed()->count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('borrowed-books.create')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض الكتب المقروءه </a>
                    </li>
                    
                </ul>
            </li>

            <li class="nav-item"><a href=""><i class="la la-male"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">المستخدمين  </span>
                    <span
                        class="badge badge badge-success badge-pill float-right mr-2">{{\App\Models\User::count()}}</span>
                </a>
                <ul class="menu-content">
                    <li class="active"><a class="menu-item" href="{{route('admin.user.show')}}"
                                          data-i18n="nav.dash.ecommerce"> عرض المستخدمين </a>
                    </li>
                   
                </ul>
            </li>


  




          
          
         
        
           
        </ul>
    </div>
</div>