<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request): View
    {
        return view('pages.admin.home');
    }

    public function select(Request $request): View
    {
        return view('pages.admin.formelements.select');
    }
}
