<?php
use Illuminate\Http\Request;

define('PAGINATION',5);

if(! function_exists('upload')){
    function upload(Request $request,$local_folder,$type){
        $file_name=$request->file($type)->getClientOriginalName();
        $request->file($type)->storeAs($local_folder,$file_name,"books");
        return $file_name;
    }
   
}
   
