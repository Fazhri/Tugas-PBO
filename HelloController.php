<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
        public function index()
        {
            echo "<h1>HelloWorld, Dari Controller!!</h1>";
        }
}
