<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return Session::all();
    }

    public function show($id)
    {
        return Session::findOrFail($id);
    }
}
