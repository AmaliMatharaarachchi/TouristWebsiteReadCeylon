<?php namespace App\Http\Controllers;

use App\SendMessage;
use Illuminate\Http\Request;

class SendMessageController extends Controller{
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
        Alert::success('We will contact you soon');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SendMessage  $sendMessage
     * @return \Illuminate\Http\Response
     */
    public function show(SendMessage $sendMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SendMessage  $sendMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(SendMessage $sendMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SendMessage  $sendMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SendMessage $sendMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SendMessage  $sendMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(SendMessage $sendMessage)
    {
        //
    }
}
