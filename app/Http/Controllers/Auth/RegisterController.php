<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'date_of_birth' => 'required|max:255',
            'address' => 'required|max:255',
            'postal_code' => 'required|numeric|',
            'city' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'state' => 'required|regex:/^[\pL\s\-]+$/u|max:255',
            'phone_number' => 'required|max:255',
            'email' => 'required|email|max:255',
            'username' => 'required|alpha_dash|min:2|max:50',
            'password' => 'required|confirmed|min:6|max:10',
            'gender' => 'required',
            'avatar' => 'sometimes|image|mimes:jpg,jpeg,bmp,svg,png|max:5000',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if (request()->has('avatar')){
            $avataruploaded = request()->file('avatar');//request()->file('avatar');
            $avatarname = time() . '.' . $avataruploaded->getClientOriginalExtension();
            $avatarpath = public_path('storage/avatar');
            $avataruploaded->move($avatarpath, $avatarname);

        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'date_of_birth' => $data['date_of_birth'],
            'address' => $data['address'],
            'postal_code' => $data['postal_code'],
            'city' => $data['city'],
            'state' => $data['state'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],
            'avatar' => 'storage/avatar/' . $avatarname,

        ]);
        }
        return User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'date_of_birth' => $data['date_of_birth'],
            'address' => $data['address'],
            'postal_code' => $data['postal_code'],
            'city' => $data['city'],
            'state' => $data['state'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'gender' => $data['gender'],

        ]);

    }
}
