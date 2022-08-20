<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    public function index(){
        return view('adminpanel.auth.login');
    }

    public function login(Request $request){
        if(Auth::check()){
            return Redirect::action('CompanyController@index');
        }

        $data=$request->all();
        $rules=array(        
        'email'=>'required|email',
        'password'=>'required|min:5',
        );
        
        $validation=Validator::make($data,$rules);
        if($validation->fails()){
            return Redirect::back()->withErrors($validation);
        }
        if(Auth::attempt(array('email'=>$data['email'],'password'=>$data['password']))){
             return Redirect::action('CompanyController@index');
        }
        else{
             // return view('adminpanel.dashboard');
            return Redirect::back()->withErrors("Your Email or Password is Incorrect.");
        }
    } 

    function logout()
    {
        if(Auth::check()){
        Auth::logout();
        return Redirect::action('Auth\loginController@index')->with('logout','Successfully Logged Out !');
        }
        return Redirect::back();
    }
}
