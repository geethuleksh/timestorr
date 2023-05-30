<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\clientschedule;
use App\Models\meetno;
use App\Models\register;
use App\Models\meetedlist;
use Illuminate\Http\Request;

class adminController extends Controller
{
  public function admin()
  {
    return view('admin.login');
  }
  public function adminloginaction(Request $req)
  {
    $username = $req->input('username');
    $password = $req->input('password');
    $data = admin::where('username', $username)->where('password', $password)->first();
    if (isset($data)) {
      return redirect('/adminindex');
    } else {
      return redirect('/admin')->with('error', 'invalid  username or Password');
    }
  }
  public function adminindex()
  {
    return view('admin.adminindex');
  }
  public function viewusers()
  {
    $data['result'] = register::get();
    return view('admin.viewusers', $data);
  }

  public function clientschedule($id)
  {
    $data['result'] = register::where('id', $id)->get();
    $id = session('sess');
    return view('admin.clientschedule', $data);
  }

  public function clientscheduleaction(Request $req, $id)
  {
    $userid = session('sess');
    $url = $req->input('url');
    $ensure = $req->input('ensure');
    $date = $req->input('date');
    $timein = $req->input('timein');
   
    $venue = $req->input('venue');
    $clientcategory = $req->input('clientcategory');

    $data = [

      'userid' => $id,
      'url' => $url,
      'ensure' => $ensure,
      'date' => $date,
      'timein' => $timein,
    
      'venue' => $venue,
      'clientcategory' => $clientcategory

    ];

    clientschedule::insert($data);
    return redirect('viewusers');
  }


  public function meetno()
  {

    return view('admin.meetno');
  }
  public function codeaction(Request $req)
  {

    $clientcategory = $req->input('clientcategory');

    $data = [


      'clientcategory' => $clientcategory,


    ];
    meetno::insert($data);
    return redirect('/meetno');
  }
  public function viewclientschedule()
  {
    $data['rev'] = clientschedule::get();
    return view('admin.viewclientschedule', $data);
  }
  public function viewmeetedlist()
  {
    $data['ren'] = meetedlist::get();
    return view('admin.viewmeetedlist', $data);
  }
}
