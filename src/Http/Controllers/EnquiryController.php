<?php

namespace Jyou\Enquiry\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Jyou\Enquiry\Models\Enquiry;
use Jyou\Enquiry\Mail\EnquiryMailable;
use Mail;

class EnquiryController extends Controller
{
    public function contact(){
		return view('enquiry::question');
	}
	
	public function send(Request $request){
		
		$request->validate([
				'name' => 'required|min:5',
				'email' => 'required|email',
				'question' => 'required|min:20'
		]);
		
		Mail::to(config('enquiry.send_email_to'))->send(new EnquiryMailable($request->name, $request->email, $request->question));
		Enquiry::create($request->all());
		
		return redirect()->back();
	}
}
