<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
  public function index()
{
    $users = User::paginate(5);
    return view('admin.home.list', ['users' => $users]);

}


}
