<?php namespace App\Http\Controllers;

use App\Message;
use App\PublicUser;
use Illuminate\Http\Request;
use App\Mail\MessagePublic;


class PublicUserController extends Controller{
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required']);

        $publicUser= new PublicUser();
        $message= new Message();
        $message->message=$request['message'];
        $message->save();

        $publicUser->name=$request['name'];
        $publicUser->email=$request['email'];
        $publicUser->message_id=$message->id;
        $publicUser->save();

        \Mail::to('almas.den.sw@gmail.com')->send(new MessagePublic($request['message'],$publicUser));
//        session()->flash('message','We will contact you soon');
        $message='We will contact you soon. Check your email inbox for the reply';
        return redirect()->back()->with("message",$message );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PublicUser  $publicUser
     * @return \Illuminate\Http\Response
     */
    public function show(PublicUser $publicUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PublicUser  $publicUser
     * @return \Illuminate\Http\Response
     */
    public function edit(PublicUser $publicUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PublicUser  $publicUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PublicUser $publicUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PublicUser  $publicUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(PublicUser $publicUser)
    {
        //
    }
}
