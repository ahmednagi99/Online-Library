<div class="header-top hidden-sm-down">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="header-top-left col-lg-6 col-md-9 d-flex justify-content-start align-items-center" >
                    <div class="detail-email d-flex align-items-center justify-content-center">
                    @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span style="font-size:20px">{{Auth::user()->name}}</span></a>   
                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="/profile"><i
                                    class="ft-user"></i><span style="font-size:14px" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"> تعديل الملف الشحصي </span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" href="{{ route('user.logout') }}"><i class="ft-power"></i> 
                            <span style="font-size:14px" > تسجيل  الخروج </span> </a>
                        </div>                 
                              
                              
                              
                              
                              @else
                        <a href="{{ route('login') }}" style="font-size:18px;margin:12px" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="font-size:18px;margin:12px" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                    </div>
                    <div class="detail-call d-flex align-items-center justify-content-center">
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex justify-content-end align-items-center header-top-right">
                    <div class="register-out">
                                           </div>

                    <!-- begin module:ps_currencyselector/ps_currencyselector.tpl -->
                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_currencyselector/ps_currencyselector.tpl --><div id="_desktop_currency_selector" class="currency-selector groups-selector hidden-sm-down currentcy-selector-dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="main">
                           
                        </div>
                        <div class="currency-list dropdown-menu">
                            <div class="currency-list-content text-left">
                                <div class="currency-item current flex-first">
                                </div>
                                <div class="currency-item">
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_currencyselector/ps_currencyselector.tpl -->
                    <!-- end module:ps_currencyselector/ps_currencyselector.tpl -->

                    <!-- begin module:ps_languageselector/ps_languageselector.tpl -->
                    <!-- begin /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_languageselector/ps_languageselector.tpl --><div id="_desktop_language_selector" class="language-selector groups-selector hidden-sm-down language-selector-dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="main">
                        </div>
                        <div class="language-list dropdown-menu">
                            <div class="language-list-content text-left">
                                <div class="language-item">
                                    <div  >
                                        <a href="http://demo.bestprestashoptheme.com/savemart/en/?home=home_3&SubmitCurrency=1&id_currency=1">
                                            <img class="img-fluid" src="/savemart/img/l/1.jpg" alt="English" width="16" height="11"/>
                                            <span>English</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="language-item">
                                    <div  >
                                        <a href="http://demo.bestprestashoptheme.com/savemart/fr/?home=home_3&SubmitCurrency=1&id_currency=1">
                                            <img class="img-fluid" src="/savemart/img/l/2.jpg" alt="Français" width="16" height="11"/>
                                            <span>Français</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="language-item">
                                    <div  >
                                        <a href="http://demo.bestprestashoptheme.com/savemart/es/?home=home_3&SubmitCurrency=1&id_currency=1">
                                            <img class="img-fluid" src="/savemart/img/l/3.jpg" alt="Español" width="16" height="11"/>
                                            <span>Español</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="language-item">
                                    <div  >
                                        <a href="http://demo.bestprestashoptheme.com/savemart/it/?home=home_3&SubmitCurrency=1&id_currency=1">
                                            <img class="img-fluid" src="/savemart/img/l/4.jpg" alt="Italiano" width="16" height="11"/>
                                            <span>Italiano</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="language-item">
                                    <div  >
                                        <a href="http://demo.bestprestashoptheme.com/savemart/pl/?home=home_3&SubmitCurrency=1&id_currency=1">
                                            <img class="img-fluid" src="/savemart/img/l/5.jpg" alt="Polski" width="16" height="11"/>
                                            <span>Polski</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="language-item current flex-first">
                                    <div  class="current"  >
                                        <a href="http://demo.bestprestashoptheme.com/savemart/ar/?home=home_3&SubmitCurrency=1&id_currency=1">
                                            <img class="img-fluid" src="/savemart/img/l/6.jpg" alt="اللغة العربية" width="16" height="11"/>
                                            <span>اللغة العربية</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /var/www/demo.bestprestashoptheme.com/public_html/savemart/themes/vinova_savemart/modules/ps_languageselector/ps_languageselector.tpl -->
                    <!-- end module:ps_languageselector/ps_languageselector.tpl -->

                </div>
            </div>
        </div>
    </div>
</div>