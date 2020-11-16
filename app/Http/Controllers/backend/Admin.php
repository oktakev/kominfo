<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use App\Admins;
use Validator;

class Admin extends Controller
{

    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('backend.login');
        }
    }

    function login()
    {
        return view('backend.login');
    }


    public function loginPost(Request $request){


         $email = $request->email;
         $password = md5($request->password);

        $cek = Admins::where("email",$email)->where("password",$password)->get();
        if(empty($cek[0]->id_admin)){
            return redirect('admin')->with('alert','Password atau Email, Salah !');
        }
        else{
            $data["admin"] = array(
                'id_admin' => $cek[0]->id_admin,
                'firstname' => $cek[0]->firstname
            );
            $request->session()->put($data);
            return redirect('admin/dashboard');
        }

    }

    function dashboard()
    {
       
        return view('backend.index');
    }

    function logout(){
        Session::forget('admin');
        return redirect('admin')->with('alert','Kamu sudah logout');
    }
}
