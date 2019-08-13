<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dusun;
use App\Agama;
use App\Goldar;
class BasedGoldarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function dataPendudukByGoldar(){
        $data = Goldar::with('based_goldars')->get();
        foreach($data as $key=>$value){
            $total = ['L'=>0,'P'=>0];
            foreach ($value->based_goldars as $key2 => $value2) {
                if($value2->gender=="L")$total['L'] += $value2->jumlah;
                else $total['P'] += $value2->jumlah;
            }
            $data[$key]->jumlah = $total;
        }
        return $data;
    }
}
