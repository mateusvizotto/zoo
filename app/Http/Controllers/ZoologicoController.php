<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Zoologico;

class ZoologicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Zoologico::all();
    }

    // // /**
    // //  * Show the form for creating a new resource.
    // //  *
    // //  * @return \Illuminate\Http\Response
    // //  */
    // // public function create()
    // // {
    // //     //
    // // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cidade' => 'required',
            'pais' => 'required',
        ]);

        return Zoologico::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Zoologico::findOrFail($id);
    }

    // // /**
    // //  * Show the form for editing the specified resource.
    // //  *
    // //  * @param  int  $id
    // //  * @return \Illuminate\Http\Response
    // //  */
    // // public function edit($id)
    // // {
    // //     //
    // // }

    // // /**
    // //  * Update the specified resource in storage.
    // //  *
    // //  * @param  \Illuminate\Http\Request  $request
    // //  * @param  int  $id
    // //  * @return \Illuminate\Http\Response
    // //  */
    // // public function update(Request $request, $id)
    // // {
    // //     //
    // // }

    // // /**
    // //  * Remove the specified resource from storage.
    // //  *
    // //  * @param  int  $id
    // //  * @return \Illuminate\Http\Response
    // //  */
    // // public function destroy($id)
    // // {
    // //     //
    // // }
}
