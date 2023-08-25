<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Requests\Admin\Auth\loginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    public function getLogin(){
        return view('admin.auth.login');
    }
    public function login(loginRequest $request){
        $remember_me=$request->has('remember_me')? true:false;
        $session=Auth::guard('admin')->attempt(['email'=>$request->input('email'),'password'=>$request->input('password')],$remember_me);
    return  $session ?redirect()-> route('admin.dashboard'): back()->with(['error'=>'تعذر دخول الادمن']) ;
    }
    
}
