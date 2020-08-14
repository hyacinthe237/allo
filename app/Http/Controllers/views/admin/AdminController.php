<?php

namespace App\Http\Controllers\views\admin;

use Auth;
use PDF;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function dashboard (Request $request)
    {
        return view('admin.all.dashboard');
    }
}
