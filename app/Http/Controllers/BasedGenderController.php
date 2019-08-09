<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BasedGender;
use App\Dusun;
use App\RukunTetangga;
class BasedGenderController extends Controller
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
    public function dataPenduduk(){
        $data = Dusun::with('rukun_tetanggas.based_genders')->get();
        foreach($data as $k=>$v){
            foreach($v->rukun_tetanggas as $k2=>$v2){
                $data[$k]->rukun_tetanggas[$k2]->total=$v2->based_genders->sum('jumlah');
            }
            $data[$k]->total=$data[$k]->rukun_tetanggas->sum('total');
        }
        return $data;
    }
    public function dataPendudukByGender(){
        $data = Dusun::with('rukun_tetanggas.based_genders')->get();
        foreach($data as $k=>$v){
            $total=['L'=>0,'P'=>0]; 

            foreach($v->rukun_tetanggas as $k2=>$v2){
                    $total['L'] += $v2->based_genders[0]->jumlah;
                    $total['P'] += $v2->based_genders[1]->jumlah;
            }

            $data[$k]->total = $total;
        }
        return $data;
       // $pos = $data->
        // foreach($data as $k=>$v){
        //     $total = 0;
        //     foreach($v->based_genders as $k2=>$v2){
        //         $total += $v2->jumlah;
        //     }
        //     $data[$k]->total = $total;
        // }
        // return $data;
    }
}
