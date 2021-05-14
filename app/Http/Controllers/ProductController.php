<?php

namespace App\Http\Controllers;

use App\Product;
use App\Ad;
use App\City;
use App\Search;
use Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all()->latest();
        $cities = City::all();
        return view('pages.products.search',compact('products','cities'));
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
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $ad = Ad::where('product_id',$product->id)->first();
        $count = $ad->product->reviews->count();
        $ad->views++;
        $ad->save();
        if(Auth::check()){
            $search = Search::create([
            'user_id'=>  Auth::id(),
            'product_id'=> $ad->product->id
        ]);
        }
        return view('pages.product-detail',compact('ad','count'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }


    public function search($name){
        $cities = City::all();
        $str = strtolower($name);
        if($str == "car" || $str == "bike" || $str == "autopart"){
            $products = Product::with('ads')->where('type',$name)
            ->whereHas('ads', function($query)
                {   
                    $query->where('approved',1);
                })
            ->join('ads', 'ads.product_id', '=', 'products.id')
            ->select('products.*') // Avoid selecting everything from the stocks table
            ->orderBy('ads.featured', 'DESC')->get();
        }
        else if($str == 'all' || $str == ''){
            $products = Product::with('ads')->whereHas('ads', function($query)
                {   
                    $query->where('approved',1);
                })
            ->join('ads', 'ads.product_id', '=', 'products.id')
            ->select('products.*') // Avoid selecting everything from the stocks table
            ->orderBy('ads.featured', 'DESC')->get();
        }
        else{
            $products = Product::with('ads')->whereHas('ads', function($query)
                {   
                    $query->where('approved',1);
                })->where('name', 'like', '%'.$str.'%')
            ->orWhere('transmission', 'like', '%'.$str.'%')
            ->join('ads', 'ads.product_id', '=', 'products.id')
            ->select('products.*') // Avoid selecting everything from the stocks table
            ->orderBy('ads.featured', 'DESC')->get();;
        }
        return view('pages.products.search',compact('products','name','cities'));
    }

    public function sortby(Request $request){
       
        $str = $request->type;
        if($str == "car" || $str == "bike" || $str == "autopart"){
            $products = Product::with('ads')->whereHas('ads', function($query)
                {   
                    $query->where('approved',1);
                })->where('type',$request->type)->orderBy($request->filter)->get();
        }
        else{
            $products = Product::with('ads')->whereHas('ads', function($query)
                {   
                    $query->where('approved',1);
                })->orderBy($request->filter)->get();
        }
        $price=[];
        if($products){
            foreach ($products as $product) {
                foreach($product->ads as $ad)
                $price[] = $ad->price;
            }
        }
         
        return response()->json(array('success' => true, 'products'=>$products, 'price'=>$price));
    }

    public function filter(Request $request){
        
        if($request->has('type')){
            $str = $request->type;
        }
        if($str == "car" || $str == "bike" || $str == "autopart"){
            $data = Product::with('ads')->whereHas('ads', function($query)
                {   
                    $query->where('approved',1);
                })->where('type',$request->type);
        }
        else{
            $data = Product::with('ads')->whereHas('ads', function($query)
                {   
                    $query->where('approved',1);
                })->where('id','>',0);
        }
        

        if ($request->has('transmission')) {
            if($request->transmission != 'any'){
                $data->where('transmission',$request->transmission);
            }
        }

        if ($request->has('condition')) {
            if($request->condition != 'any'){
                $data->where('condition',$request->condition);
            }
        }

        if ($request->has('year')) {
            if($request->year != ''){
                $data->where('year',$request->year);
            }
        }

        if ($request->has('city')) {
            if($request->city != ''){
                $data->where('city',$request->city);
            }
        }
        if ($request->has('price')) {
            $max_price = $request->price;
            $min_price = $request->price - 1000000;
            if($request->price != ''){
                $data->whereHas('ads', function($query) use ($max_price,$min_price)
                {   

                    // Now querying on tableB
                    $query->where('price','>=', $min_price)->where('price','<=', $max_price);
                });

            }
        }

        $products = $data->latest()->get();
        $price = [];
        foreach ($products as $product) {
            foreach($product->ads as $ad)
            $price[] = $ad->price;
        }
         
        return response()->json(array('success' => true, 'products'=>$products, 'price'=>$price));
    }

    public function compare(){
        $products = Product::whereHas('ads', function($query)
                {   
                    $query->where('approved',1);
                })->orderBy('name')->get();
        return view('pages.products.compare',compact('products'));
    }

    public function product_compare(Request $request){
        $product = Product::where('id',$request->id)->whereHas('ads', function($query)
                {   
                    $query->where('approved',1);
                })->first();
        $ad = Ad::where('product_id',$product->id)->first();
        return response()->json(array('success' => true, 'product'=>$product, 'ad'=>$ad));
    }
}
