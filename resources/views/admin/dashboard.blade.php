@extends('layouts.admin')

@section('content')
<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div id="crypto-stats-3" class="row">
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1> <i class="fa-solid fa-book"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h3>جميع الكتب</h3>
                                            <h6 class="text-muted"></h6>
                                        </div>
                                        <div class="col-5 text-right">
                                          
                                            <h6 class="success darken-4"><span style="font-size:20px">{{\App\Models\Book::count()}}  كتب</span><i class="la la-arrow-up"></i></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="btc-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1> <i class="fa-solid fa-book"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>الكتب المقروءه</h4>
                                            <h6 class="text-muted"></h6>
                                        </div>
                                        <div class="col-5 text-right">
                                           
                                        <h6 class="success darken-4"><span style="font-size:20px">{{\App\Models\Book::where('read','1')->count()}}  كتب</span><i class="la la-arrow-up"></i></h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="eth-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1> <i class="fa-solid fa-book"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>الكتب المستعاره</h4>
                                            <h6 class="text-muted"></h6>
                                        </div>
                                        <div class="col-5 text-right">
                                            
                                        <h6 class="success darken-4"><span style="font-size:20px">{{\App\Models\Book::where('borrow','1')->count()}}  كتب</span><i class="la la-arrow-up"></i></h6>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="xrp-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Candlestick Multi Level Control Chart -->

                <!-- Sell Orders & Buy Order -->
                <div class="row match-height">
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            
                            <div class="card-content">
                            {!! $chartjs_bar->render() !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card">
                           
                            <div class="card-content">
                               
                                {!! $chartjs_pie->render() !!}
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Sell Orders & Buy Order -->
                <!-- Active Orders -->
              
                <!-- Active Orders -->
            </div>
        </div>
    </div>
@stop


