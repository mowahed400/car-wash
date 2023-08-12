<?php

namespace App\Http\Controllers;

use App\Models\GoodReview;
use App\Models\Review;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews=Review::all();
        return view('dashboard.feedback.index',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->image == "") {
            $imgPath = "";
        } else {
            $imgPath = $this->uploadImage($request,'review');
        }

        Review::create([
            'name'=>$request->name,
            'feedback'=>$request->feedback,
            'image'=>$imgPath
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $reviews = Review::find($id);


        GoodReview::create([
            'name'=>$reviews->name,
            'feedback'=>$reviews->feedback,
            'image'=>$reviews->image
        ]);
        $reviews->delete();

        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $points = Review::findOrFail($request->id)->delete();
        return redirect()->back();
    }


}
