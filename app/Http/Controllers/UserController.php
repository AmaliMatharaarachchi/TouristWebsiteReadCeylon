<?php

namespace App\Http\Controllers;

use App\Mail\AdminMessage;
use App\Message;
use App\SendMessage;
use App\User;
use Illuminate\Http\Request;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //this is the admin register form
    public function index()
    {
        return view('register');
    }

    public function registerAdmin(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = new User();

        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->type = 'A';
        $user->save();

        $message='Successfully created a new admin';
        return redirect('/')->with("message",$message);

    }
    public function message(Request $request)
    {
        $this->validate($request, [
            'message' => 'required']);

        $sendMessage= new SendMessage();
        $message= new Message();
        $message->message=$request['message'];
        $message->save();

        $users=User::all();
        foreach($users as $user) {
            $sendMessage->user_id = $user->id;
            $sendMessage->message_id = $message->id;
            $sendMessage->save();

            \Mail::to($user->email)->send(new AdminMessage($request['message'], $user));
        }

        $message='Email sent!';
        return redirect()->back()->with('message',$message);

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
