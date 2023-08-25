<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
class DashboardController extends Controller
{
    public function index(){
        
        $bills=Book::count();
        $paidBill=Book::where("read",'1')->count();
        $partBill=Book::where("borrow",'1')->count();
        
        if ($bills>0){
            $paid=round(($paidBill/$bills)*100);
            $part=round(($partBill/$bills)*100);
            
        }else{
            $paid=0;
            $part=0;
           
        }




        $chartjs_bar = app()->chartjs
            ->name('barChartTest')
            ->type('bar')
            ->size(['width' => 600 , 'height' => 300])
            ->labels(['الكتب المستعاره ','الكتب  المقروئه'])
            ->datasets([
                [
                    "label" => ['الكتب  المقروئه'],
                    'backgroundColor' => ['rgba(0, 255, 0, 1)','rgba(255, 165, 0,1)','rgba(255,0,0,1)'],
                    'data' => [$paid,0,0]
                ],[
                    "label" => ['الكتب المستعاره '],
                    'backgroundColor' => ['rgba(255, 165, 0,1)','rgba(255, 165, 0,1)','rgba(255,0,0,1)'],
                    'data' => [0,$part,0]
                ],
               


            ])->optionsRaw([
                'legend' => [
                    'display' => true,
                    'labels' => [
                        'fontColor' => 'black',
                        'fontStyle'=>'bold',
                        'fontFamily'=>'cairo'
                    ]
                ]] );


        $chartjs_pie = app()->chartjs
            ->name('pieChartTest')
            ->type('pie')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['الكتب المقروئه ','الكتب المستعاره ',])
            ->datasets([
                [
                    'backgroundColor' => ['green','rgba(255, 165, 0,1)','red'],
                    'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                    'data' => [$paid, $part]
                ]
            ])
            ->optionsRaw([
                'legend' => [
                    'display' => true,
                    'labels' => [
                        'fontColor' => 'black',
                        'fontStyle'=>'bold',
                        'fontFamily'=>'cairo'
                    ]
                ]] );
        return view("admin.dashboard",compact("chartjs_bar",'chartjs_pie'));
    }
    public function showUsers(Request $request){
        $users=User::paginate(PAGINATION);
        return view('admin.users.index',compact('users'))->with('i',($request->input('page',1)-1)*PAGINATION);


    }
    public function search(Request $request){
        $id =$request->input('search');
        
        $user = User::where('id', $id)->first();
        return view('admin.users.search',compact('user'))->with('i',($request->input('page',1)-1)*PAGINATION);

    }

}
