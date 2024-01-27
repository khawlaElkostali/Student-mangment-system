<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Auth;

class AdminController extends Controller
{
    public function dashboared(){

        return view('admin.dashboared');
    }

    public function login(){

        return view('admin.login');
    }

    public function adminLogin(Request $request){


        $check = $request->all();


        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])){
            return to_route('home');
        }

        return to_route('admin.login');
    }

    public function register(){

        return view('admin.register');
    }

    public function adminRegister(AdminRequest $request){

        $formfields = $request->validated();

        Admin::create($formfields);

        return to_route('admin.login');

    }

    public function logout(){

        Auth::guard('admin')->logout();

        return to_route('admin.login');

    }
}
