<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
      $user_count = User::all()->count();
      return view('admin.home.index',[
        'user_count' => $user_count
      ]);
    }
}
