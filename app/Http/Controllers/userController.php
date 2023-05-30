<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\register;
use App\Models\meetedlist;
class userController extends Controller
{
  public function userindex()
  {

    return view('user.userindex');
  }
  public function register()
  {
    return view('user.register');
  }
  public function registeraction(Request $req)
  {
    $fullname = $req->input('fullname');
    $date = $req->input('date');
    $time = $req->input('time');
    $designation = $req->input('designation');
    $address = $req->input('address');
    $contact = $req->input('contact');
    $employmentstatus = $req->input('employmentstatus');
    $category = $req->input('category');
    $timestore = $req->input('timestore');
    $username = $req->input('username');
    $password = $req->input('password');
    $data = [
      'fullname' => $fullname,
      'date' => $date,
      'time' => $time,
      'designation' => $designation,
      'address' => $address,
      'contact' => $contact,
      'employmentstatus' => $employmentstatus,
      'category' => $category,
      'timestore' => $timestore,
      'username' => $username,
      'password' => $password
    ];
    register::insert($data);
    return view('user.register');
  }

  public function login()
  {
    return view('user.login');
  }
  public function userloginaction(Request $req)
  {
    $username = $req->input('username');
    $password = $req->input('password');
    $data = register::where('username', $username)->where('password', $password)->first();
    if (isset($data)) {
      $req->session()->put(array('sess' => $data->id));
      return redirect('/userhome');
    } else {
      return redirect('login')->with('error', 'invalid username id or Password');
    }
  }
  public function meetedlist()
  {

      return view('user.meetedlist');
  }
  public function codeaction(Request $req)
  {
      $urlid = $req->input('urlid');
      $multipleSelect = $req->input('multipleSelect');


      $data = [

          'urlid' => $urlid,
          'multipleSelect' => $multipleSelect,


      ];
      meetedlist::insert($data);
      return redirect('/userhome');
  }
}
