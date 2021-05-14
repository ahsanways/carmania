<?php

namespace App\Http\Controllers;

use App\Buyer_request;
use App\City;
use Auth;
use Illuminate\Http\Request;

class BuyerRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = Buyer_request::paginate(4);
        return view('pages.buyerrequest.index',compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('pages.buyerrequest.create-request',compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = Buyer_request::create([
                'user_id' => Auth::user()->id,
                'type' => $request->type,
                'name' => $request->name,
                'city'=> $request->city,
                'condition'=> $request->condition,
                'budget'=>$request->budget,
                'description'=> $request->description,
            ]);
        if($request){
            return back()->with('message', 'Request created successfuly');
        }else{
            return back()->with('message', 'Error Inserting request');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Buyer_request  $buyer_request
     * @return \Illuminate\Http\Response
     */
    public function show(Buyer_request $buyer_request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Buyer_request  $buyer_request
     * @return \Illuminate\Http\Response
     */
    public function edit(Buyer_request $buyer_request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Buyer_request  $buyer_request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buyer_request $buyer_request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Buyer_request  $buyer_request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buyer_request $buyer_request)
    {
        //
    }
}
