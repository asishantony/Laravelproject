<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Userss;

class SortingController extends Controller
{
    public function home(){
        return view('home');
    }
    public function user(){
        $users=Userss::all();
    
        return view('users',['users'=>$users]);
    }
    public function designation(){
        return view('designation');
    }
    public function department(){
        return view('department');
    }
    public function store(Request $request){
      $user =new Userss();
      $user->name=$request->post('title');
      $user->department_name=$request->post('depname');
      $user->designation_name=$request->post('desname');
      $user->phone=$request->post('phoneno');
      $user->create();
      return redirect('/home');

}
public function storedep(Request $request){
    $dep_name =new Department();
    $dep_name->name=$request->post('title');
    
   
    $dep_name->save();
    return redirect('/home');

}
}