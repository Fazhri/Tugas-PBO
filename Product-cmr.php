<?php

namespace App\Http\Controllers;

use App\Produt;
use Illuminate\Http\Request;

class ProdutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ini tampilan index
        return view('product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produt  $produt
     * @return \Illuminate\Http\Response
     */
    public function show(Produt $produt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produt  $produt
     * @return \Illuminate\Http\Response
     */
    public function edit(Produt $produt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produt  $produt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produt $produt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produt  $produt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produt $produt)
    {
        //
    }
}
© 2020 GitHub, Inc.