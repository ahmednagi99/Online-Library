<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Requests\Admin\ProfileRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class ProfileController extends Controller
{
   public function edit(){
    return view("admin.profile.edit");
   }

   public function update(ProfileRequest $request){
      $profile=Admin::find($request->id)->update($request->except("_token"));
      return $profile?redirect()->route("admin.profile.edit")->with(['success'=>"تم تحديث البينات الرئيسيه بنجاح"]):redirect()->route("admin.profile.edit")->with(['error'=>"تعذر تحديث البينات الرئيسيه "]);
   }
   public function logout(){
    Auth::guard('admin')->logout();
    Session::flush();
    return redirect()->route('admin.getlogin');
   }

  public function destroy(Request $request)
  {
   $request->validateWithBag('deletion',[
      'password'=>"required|min:8"
   ],[
      'password.required'=>'يجب ادخال الرقم السري',
      'password.min'=>'يجب ان يكون الرقم السري اكثر من 7 حروف'
   ]);
   Auth::guard('admin')->logout();
   Admin::destroy($request->id);
   $request->session()->invalidate();
   $request->session()->regenerateToken();
   return redirect()->route('admin.getlogin');
   
   

       
  }
}
