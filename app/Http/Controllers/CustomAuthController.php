<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }
    public function registration()
    {
        return view("auth.registration");
    } 
    public function registerUser(Request $request)
    {
         $request->validate([
             'name'=>'required',
             'email'=>'required|email|unique:users',
             'password'=>'required|min:5|max:12'
         ]);
         $user = new User();
         $user->name = $request->name;
         $user->email = $request->email;
         $user->password = Hash::make($request->password);
         $res = $user->save();
         if($res){
             return back()->with('success','You have registered successfuly');
           }else{
             return back()->with('fail','Something wrong');
           }
         }
         public function loginUser(Request $request)
         {
    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:12'
    ]);
    $user = User::where('email','=',$request->email)->first();
    if ($user) {
        if (Hash::check($request->password,$user->password)) {
            $request->session()->put('loginId', $user->id);
            return redirect('dashboard');
        }else{
            return back()->with('fail','Password not matches.');
        }
        }else{
            return back()->with('fail','This email is not registered.');
        }
    }
    public function dashboard()
    {
        if(Session::has('loginId')){
        $datas = User::all();
        }
       return view('dashboard', compact('datas'));
    }
public function logout(){
    if (Session::has('loginId')) {
        Session::pull('loginId');
        return redirect('login');
    }
}
public function destroy($id)
{
 $user = User::find($id);
 $user->delete();
 return redirect()-> back()->with('Post has been deleted successfully!');
}

public function edit($id)
{
 $user = User::find($id);
 return view('edit' , compact('user'));    
}
public function update(Request $request,$id){
    $user = User::find($id);
   
    $user->name = $request->name; 
    $user->email = $request->email;
    $user->save(); 
    return redirect('dashboard')->with('status',"Data updated successfully!" );
}
}