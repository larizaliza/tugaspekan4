<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

  
    public function register()
   {
    return view('register');

   }

   public function welcome(Request $request){
    {
        $nama = $request["nama"];
        return view('welcome', ['nama' => $nama]);
    }
}
}