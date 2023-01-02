<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\ProductController;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        // dd('wefgffr');
        $user= User::where(['email'=>$request->email])->first();
        if(!$user || !Hash::check($request->password, $user->password))
        {
            return 'Username or Email is not Matched';
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/');
        }
    }
}