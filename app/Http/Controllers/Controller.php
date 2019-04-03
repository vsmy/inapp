<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

   public function contact_us(Request $request) {

       Mail::send('mails.send_mail', ['req' => $request], function ($r) use ($request){
           $mail = "info@intobi.com";

           $r->to($mail)->subject($request->message);

       });

       return back();
    }
    public  function in_app () {
       return view('products.instaApp');
    }
    public  function home () {
        return view('pages.home');
    }
}
