<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'], 
            'password' => ['required'],
    ]);

    //check login adlh valid
    //check user status = active
            if (Auth::attempt($credentials)) {

                //check user status = active
                    if(Auth::user()->status != 'active'){
                    Auth::logout();
                    $request->session()->invalidate();
                    $request->session()->regenerateToken();
                    Session()->flash('status','failed');
                    Session()->flash('message','Your account is not active yet. Please call admin for activation!');
                    return redirect('/login');
                        

                    }

                   $request->session()->regenerate();
                   if(Auth::user()->role_id == 1){
                        return redirect('dashboard');
                    }

                    if(Auth::user()->role_id == 2){
                        return redirect('profile');
                    }   
                   
                 }

                 Session()->flash('status','failed');
                 Session()->flash('message','Log in Invalid');    
                 return redirect('/login');

                }

                public function logout(Request $request)
                {
                    Auth::logout();
                    $request->session()->invalidate();
                    $request->session()->regenerateToken();
                    return redirect('login');
                }

                public function registerProcess(Request $request)
                {
                    $validated = $request->validate([
                        'username' => 'required|unique:users|max:255',
                        'password' => 'required|max:255',
                        'phone' => 'max:255',
                        'address' => 'required',

                    ]);

                  
                   $request['password'] = Hash::make($request['password']);
                   $user = User::create($request->all());
                   
                   Session()->flash('status','succes');
                   Session()->flash('message','Register success. Wait admin for approval');    
                   return redirect('/register');

                }
                     


                

    }
