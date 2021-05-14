<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Product;
use App\City;
use App\Reward;
use Auth;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Redirect;
use Session;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::where('user_id',Auth::id())->where('approved',1)->paginate(5);
        return view('pages.ads.myads', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.ads.create-ad");
    }

    public function create_car(){
        $cities = City::all();
        return view("pages.ads.create-car-ad", compact('cities'));
    }

    public function create_bike(){
        $cities = City::all();
        return view("pages.ads.create-bike-ad", compact('cities'));
    }
    public function create_autopart(){
        $cities = City::all();
        return view("pages.ads.create-autopart-ad", compact('cities'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $image       = $request->file('img');
        $filename    = time().'.'.$image->getClientOriginalExtension();

        $image_resize = Image::make($image->getRealPath());              
        $image_resize->fit(1200, 1486);
        $image_resize->save(public_path('/images/products/' .$filename));
        
        // $image = $request->file('img');
        // $name = time().'.'.$image->getClientOriginalExtension();
        // $destinationPath = public_path('/images/products');
        // $image->move($destinationPath, $name);
        

        if($request->has('color') && $request->has('mileage') && $request->has('transmission')){
            $product = Product::create([
                'type' => "Car",
                'name' => $request->name,
                'year' => $request->year,
                'mileage' => $request->mileage,
                'color'=> $request->color,
                'city'=> $request->city,
                'condition'=> $request->condition,
                'transmission'=> $request->transmission,
                'image'=> 'images/products/'.$filename,
                'description'=> $request->description,
            ]);
        }
        else if($request->has('mileage')){
                $product = Product::create([
                'type' => "Bike",
                'name' => $request->name,
                'year' => $request->year,
                'mileage' => $request->mileage,
                'city'=> $request->city,
                'condition'=> $request->condition,
                'transmission'=> "Manual",
                'image'=> 'images/products/'.$filename,
                'description'=> $request->description,
            ]);
            }
        else{
                $product = Product::create([
                'type' => "Autopart",
                'name' => $request->name,
                'year' => $request->year,
                'city'=> $request->city,
                'condition'=> $request->condition,
                'image'=> 'images/products/'.$filename,
                'description'=> $request->description,
            ]);
        }

        $ad = Ad::create([
                'user_id' => Auth::user()->id,
                'product_id' => $product->id,
                'featured' => $request->featured,
                'price' => $request->price,
        ]);

        if($ad->featured == 1){
            $user = Auth::user();
            if($user->reward){
                if($user->reward->free_ads > 0){
                    $user->reward->free_ads = $user->reward->free_ads - 1;
                    $user->reward->reward_points = 0;
                    $user->reward->save();
                    return back()->with('message', 'Free-Ad Utilized & Ad inserted successfully');
                }
            }
            else{
                $reward = Reward::create([
                    'user_id' => Auth::id(),
                    'reward_points' => 0,
                    'free_ads'=> 0
                ]);
            }
            return redirect()->route('payment.form');
        }else{
            return back()->with('message', 'Ad inserted successfuly');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show(Ad $ad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        $cities = City::all();
        if($ad->product->type=="Car"){
            return view("pages.ads.edit-car-ad", compact('ad','cities'));
        }
        elseif ($ad->product->type=="Bike") {
            return view("pages.ads.edit-bike-ad", compact('ad','cities'));
        }
        elseif($ad->product->type=="Autopart"){
            return view("pages.ads.edit-autopart-ad", compact('ad','cities'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        $ad->featured = $request->featured;
        $ad->price = $request->price;

        $product = Product::find($ad->product_id);
        $ad->save();

        if ($request->hasFile('img')) {
            $image       = $request->file('img');
            $filename    = time().'.'.$image->getClientOriginalExtension();

            $image_resize = Image::make($image->getRealPath());              
            $image_resize->fit(1200, 1486);
            $image_resize->save(public_path('/images/products/' .$filename)); 
            $product->image= 'images/products/'.$filename;  
        }

        if($request->has('color') && $request->has('mileage') && $request->has('transmission')){
            $product->name = $request->name;
            $product->year = $request->year;
            $product->mileage = $request->mileage;
            $product->color = $request->color;
            $product->city = $request->city;
            $product->condition = $request->condition;
            $product->transmission = $request->transmission;
            $product->description= $request->description;
        }
        else if($request->has('mileage')){
            $product->name = $request->name;
            $product->year = $request->year;
            $product->mileage = $request->mileage;
            $product->city = $request->city;
            $product->condition = $request->condition;
            $product->description= $request->description;
            }
        else{
            $product->name = $request->name;
            $product->year = $request->year;
            $product->city = $request->city;
            $product->condition = $request->condition;
            $product->description= $request->description;
        }

        $product->save();
        return redirect()->back()->with('message', 'Ad Updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        $product = Product::find($ad->product_id);
        $product->delete();
        $check = $ad->delete();

        if($check){
            return back()->with('message', 'Ad Deleted successfuly');
        }else{
            return back()->with('message', 'Error Deleting Ad');
        } 
    }

    public function payment_form()
    {   
        return view('pages.payment');
    }


    public function payment(Request $request)
    {
        \Stripe\Stripe::setApiKey ( 'sk_test_THwXqtAkUFV59vTJsRBX2smI005Nq4uMtI' );
        try {
            \Stripe\Charge::create ( array (
                    "amount" => $request->input('total'),
                    "currency" => "usd",
                    "source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
                    "description" => "Test payment." 
            ) );
            $user = Auth::user();
            if($user->reward){
                $user->reward->reward_points = $user->reward->reward_points + 500;
                $user->reward->save();
                if($user->reward->reward_points == 1000){
                    $user->reward->free_ads = $user->reward->free_ads + 1;
                    $user->reward->save();
                }
            }
            Session::flash ( 'success-message', 'Featured Ad Added Successfully !' );
            return back();
        } 
        catch ( \Exception $e ) {
            Session::flash ( 'fail-message', "Error! Please Try again." );
            return back();
        }
        
    }

    public function all_ads(){
        $ads = Ad::latest()->get();
        return view('admin.pages.Ads.show-ads',compact('ads'));
    }

    public function approve($id){
        $ad = Ad::find($id);
        $ad->approved = 1;
        $ad->save();
        return redirect()->back()->with('message', 'Ad Approved Successfully');

    }
}

