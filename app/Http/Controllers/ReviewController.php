<?php namespace App\Http\Controllers;

use App\review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReviewController extends Controller{
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
        $reviews=Review::all();

        return view('review', ['reviews' => $reviews]);
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
            'review' => 'required|max:70']);


        $review= new Review();
        $review->review=$request['review'];
        $review->user_id=Auth::user()->id;
        $review->save();


        $message='Thank you for your feedback!';
        return redirect()->back()->with('message',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $review = Review::find($request->id);
        $review->state=$request['state'];

        $review->save();


        $message='Updated successfully';
        return redirect()->back()->with('message',$message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(review $review)
    {
        //
    }
}
