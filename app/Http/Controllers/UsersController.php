<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;
use Former;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->back()->withSuccess("Profile Update.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function logout(Request $request)
    {
        Auth::logout(); 
        return redirect('/dashboard');
    }

    public function register()
    {
        return view('user.register');
    }



    public function post_register(Request $request)
    {
        //Rules for validation
        $rules=[
          'name' => 'required',
          'lname' => 'required',
          'email' => 'required|email|unique:users,email',
          'password' => 'required|confirmed',
          'password_confirmation' => 'required',
        ];
        // Messages for validation
        $messages=[
          'name.required' => 'Please enter first name.',
          'lname.required' => 'Please enter last name.',
          'email.required' => 'Please enter email.',
          'password.required' => 'Please enter Password.',
          'password_confirmation.required' => 'Please enter confirmation password.',
        ];
        // Make validator with rules and messages
        $validator = Validator::make($request->all(),$rules,$messages);
        // If validator fails than it will redirect back and gives error otherwise go to try catch section
        if ($validator->fails()) { 
          Former::withErrors($validator);
          return redirect()->back()->withErrors($validator)->withInput();
        }
        // If no error than go inside otherwise go to the catch section
        /*try
        {*/
          $user = New User;
          $user->role='customer';
          $user->name = $request->get('name');
          $user->lname = $request->get('lname');
          $user->email = $request->get('email');
          $user->password = Hash::make($request->get('password'));
          $user->active = 0; 
          $user->save();
          /*Mail::send('emails.teacher_details', ['data' => $teacher, 'password' => $string],function($message) use($request){
            $message->to($request->get('email'));
            $message->subject('Welcome to Adflul.');
          });*/
          return redirect()->route('dashboard')->withSuccess("Register successfully.");
        /*}
        catch(\Exception $e)
        {
          return redirect()->route('dashboard')->withError('Something went wrong, Please try after sometime.');
        }*/
    }

    public function setting()
    {
        $user = User::find(Auth::user()->id);
        return view('user.account-settings',compact('user'));
    }

    public function login()
    {
        return view('user.login');
    }    

    //Login check details
    public function post_login(Request $request){
        if (Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password'),'role' => "member",'active'=>1])) {
               return redirect()->route('users.setting');         
        }
        
        return redirect()->route('users.login')->with('message', 'enter valid details ');;
    }   
}
