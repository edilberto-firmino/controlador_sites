<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Endpoint;

class EndpointController extends Controller
{
    public function index()
    {
        return Endpoint::all();
    }
}
