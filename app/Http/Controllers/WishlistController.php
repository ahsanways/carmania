<?php

namespace App\Http\Controllers;
use Auth;
use App\Wishlist;
use Illuminate\Http\Request;
class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wishlists = Wishlist::where('user_id',Auth::id())->paginate(10);
        return view('pages.wishlist.index',compact('wishlists')); 
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
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wishlist $wishlist)
    {
        
        $check=$wishlist->delete();

        if($check){
            return back()->with('message', 'Ad Deleted successfuly');
        }else{
            return back()->with('message', 'Error Deleting Ad');
        } 
    }

    public function addProductWishlist(Request $request){
        if(Auth::check()){
            if($request->has('product_id')){
                $check = Wishlist::where('product_id',$request->product_id)->where('user_id',Auth::id())->get();
                if(count($check)==0){
                    $wishlist = Wishlist::create([
                    'user_id'=>  Auth::id(),
                    'product_id'=>$request->product_id]);
                }
                return response()->json(array('success' => true, 'status'=> 1));
            }
            return response()->json(array('success' => true, 'status'=> 1));
        }
        else{
            return response()->json(array('success' => true, 'status'=> 0));
        }
    }
}
