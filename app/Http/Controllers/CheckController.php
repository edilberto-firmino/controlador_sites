<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Check;

class CheckController extends Controller
{
    public function index()
    {
        return Check::all();
    }
}
