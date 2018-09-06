<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;

class ContactUSController extends Controller
{
   public function contactUS()
{
return view('contactUS');
}
   /** * Show the application dashboard. * * @return \Illuminate\Http\Response */
   public function contactUSPost(Request $request)
   {
    $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required','phone' => 'nullable|string', 'subject' => 'nullable|string' ]);
    ContactUS::create($request->all());

    return back()->with('success', 'Thanks for contacting us!');
   }
}