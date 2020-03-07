<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    // register
    public function getRegisterForm(){
        return view('auth.register');
    }
    public function register(Request $request){
        $data = Arr::except($request->all(), [
            '_token',
        ]);
        $data['password'] = bcrypt(($data['password']));
        $user = User::create($data);
        //
        return redirect()->route('users.index');
    }

    // login
    public function getLoginForm(){
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $data = Arr::except($request->all(), ['_token']);
        $result = Auth::attempt($data);

        return redirect()->route('admin');
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
