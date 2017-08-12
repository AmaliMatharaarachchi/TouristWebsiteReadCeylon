<?php namespace App\Http\Controllers;

use App\Mail\UserMessage;
use App\SendMessage;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendMessageController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //

        return view('messages');
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

        $sendMessage= new SendMessage();
        $message= new Message();
        $message->message=$request['message'];
        $message->save();

        $sendMessage->user_id=Auth::user()->id;
        $sendMessage->message_id=$message->id;
        $sendMessage->save();

        \Mail::to('almas.den.sw@gmail.com')->send(new UserMessage($request['message'],Auth::user()));
//        session()->flash('message','We will contact you soon');
        $message='We will contact you soon. Check your email inbox for the reply';
        return redirect()->back()->with('message',$message);
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
