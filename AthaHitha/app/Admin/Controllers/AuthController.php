<?php

namespace App\Admin\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use OpenAdmin\Admin\Controllers\AuthController as BaseAuthController;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Session;

class AuthController extends BaseAuthController
{
    public function guest(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('guest');
    }

    public function register(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('register');
    }

    public function home(){
        return view('home');
    }

    public function userLogin(){
        if(Auth::check()){
            return redirect(route('home'));
        }
        return view('userLogin');
    }

    public function postRegister(\Illuminate\Http\Request $request){
        //dd($request->all());
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:users',
            'contact'=>'required',
            'address'=>'required',
            'postal_code'=>'required',
            'organization' => '',
            'password'=>'required|min:6|confirmed', // Add 'confirmed' rule
            'agree'=>'accepted',
        ]);

        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email'] = $request->email;
        $data['contact'] = $request->contact;
        $data['address'] = $request->address;
        $data['postal_code'] = $request->postal_code;
        $data['organization'] = $request->organization;
        $data['password'] = $request->password;
        $data['agree'] = $request->has('agree');


        $user = User::create($data);

        if(!$user){
            return redirect(route('userRegistration'))->with('fail','Registration failed!');
        }
        return redirect(route('userLogin'))->with('success','Registered Successfully!');
    }

    public function postLogin(\Illuminate\Http\Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('userLogin'))->with('fail', 'Check email or password again to login.');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('userLogin'));
    }

    public function isAdmin()
    {
        return Auth::check() && Auth::user()->role === 1;
    }
}
