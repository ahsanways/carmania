<?php

namespace App\Http\Controllers;
use App\Ad;
use App\Product;
use App\Search;
use App\User;
use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    public function index(){

    	$ads = Ad::where('featured',1)->where('approved',1)->get();
        if(Auth::check()){
            $searches = Search::where('user_id',Auth::id())->latest()->take(7)->get();
            return view('index',compact('ads','searches'));
        }
    	return view('index',compact('ads'));
    }
    public function admin(){ 
        $users = User::all();
        return view('admin.pages.index',compact('users')); 
    }
    public function about(){ 
        return view('pages.about'); 
    }
    public function contact(){ 
        return view('pages.contact'); 
    }
    public function profileUpdate(){
        $user = Auth::user(); 
        // return $user;
        return view('auth.update',compact('user')); 
    }
}
