<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\clientschedule;
use App\Models\register;

class userhomeController extends Controller
{
  public function userhome()
  {

    return view('userhome.userhome');
  }

  public function viewmyprofile()
  {
    $id = session('sess');
    $data['result'] = register::where('id', $id)->get();
    return view('userhome.viewmyprofile', $data);
  }
  public function myprofileaction(Request $req, $id)
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
    register::where('id', $id)->update($data);
    return redirect('/viewmyprofile');
  }
  public function userscheduleview()
  {
    $id = session('sess');
    $data['result'] = clientschedule::where('userid', $id)->get();
    return view('userhome.userscheduleview', $data);
  }
}
