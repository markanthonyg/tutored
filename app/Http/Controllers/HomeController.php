<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function showLanding() {
      return view('landing');
    }

    public function setupAppointment() {
      return view('landing');
    }
}
