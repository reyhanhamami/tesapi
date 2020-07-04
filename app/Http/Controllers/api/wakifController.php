<?php

namespace App\Http\Controllers\api;

use App\wakif;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;

class wakifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $databaru = wakif::get();
        $data = [
            'message' => 'TRUE',
            'data' => $databaru
        ];
        return response($data);
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
        $title = $request->title;
        $alias = $request->alias;
        $content = $request->content;

        $simpan = New wakif();
        $simpan->title = $title;
        $simpan->alias = $alias;
        $simpan->content = $content;

        if ($simpan->save()) {
            $data = [
                'message' => 'TRUE',
                'data' => $simpan
            ];
            return response($data);
        } else 
        {
            $data = [
                'message' => 'false'
            ];
            return response($data);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\wakif  $wakif
     * @return \Illuminate\Http\Response
     */
    public function show(wakif $wakif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\wakif  $wakif
     * @return \Illuminate\Http\Response
     */
    public function edit(wakif $wakif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\wakif  $wakif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, wakif $wakif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\wakif  $wakif
     * @return \Illuminate\Http\Response
     */
    public function destroy(wakif $wakif)
    {
        //
    }
}
