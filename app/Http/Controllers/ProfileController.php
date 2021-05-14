<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Mail\ForgotPasswordEmail;
use Illuminate\Support\Facades\Mail;
class ProfileController extends Controller
{
    public function profileUpdate(Request $request){
    	$validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'address' =>['required', 'max:255'],
            'password' => ['string', 'min:6'],
        ])->validate();

    	$user = Auth::user();
    	$user->name = $request->name;
    	$user->phone_number = $request->phone_number; 
    	$user->address = $request->address;
    	if (!empty($request->input('password'))) {
    		$user->password = Hash::make($request->password);
    	}
    	$user->save();
    	if($user){
            return back()->with('message', 'User updated successfuly');
        }else{
            return back()->with('message', 'Error Updating User');
        }
    }

    public function forgotPassword(Request $request){
    	$user = User::where('email',$request->email)->first();
    	$permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $request['password'] = substr(str_shuffle($permitted_chars), 0, 8);
        // $request['password'] = "hellohello";
    	if($user){
    		$user->password = Hash::make($request->password);
			$user->save();
    		Mail::to($request->email)->send(new ForgotPasswordEmail($request));
    		return redirect()->back()->with('message', 'Password Reset email has been sent to you successfully!');
    	}
    	else{
    		return redirect()->back()->with('message', 'Email does not exist');
    	}
    }
}
