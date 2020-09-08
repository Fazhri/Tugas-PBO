<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
        public function index()
        {
            // echo "<h1>HelloWorld, Dari Controller!!</h1>";
            $nama = "Mochammad Fazhri Akbari";
            $Peljaran = ["PWPB","Algoritma","PemDas","Basis Data","PBO"];
            return view('hello.index', compact('nama', 'pelajaran'));
            
        }
}
