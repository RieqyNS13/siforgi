<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dusun;
use App\Umur;
use App\BasedUmur;
use Illuminate\Support\Facades\DB;

class BasedUmurController extends Controller
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
    public function dataPendudukByUmur(){
        //select a.rw_no,a.name,b.rt_no,d.name,sum(c.jumlah) as jumlah from dusuns a join rukun_tetanggas b on a.id=b.dusun_id join based_umurs c on c.rukun_tetangga_id=b.id join umurs d on d.id=c.umur_id group by a.name,d.name order by a.rw_no,d.id
       $data=DB::table('dusuns')->join('rukun_tetanggas','dusuns.id','=','rukun_tetanggas.dusun_id')->join('based_umurs','based_umurs.rukun_tetangga_id','=','rukun_tetanggas.id')->join('umurs','umurs.id','=','based_umurs.umur_id')->select('based_umurs.umur_id','dusuns.name as nama_dusun','umurs.name as umur', DB::raw('sum(based_umurs.jumlah) as jumlah_data'))->groupBy('dusuns.name','umurs.name')->orderBy('dusuns.rw_no')->orderBy('umurs.id')->get();
       $dusun = Dusun::get();
      
       foreach($dusun as $key=>$value)$dusun[$key]->data=collect([]);
       foreach($data as $key=>$value){
            $dusun_index = $dusun->search(function($item, $key)use($value){
                return $item->name==$value->nama_dusun;
            });
            $dusun[$dusun_index]->data->push($value);
       }
       return ['umur'=>Umur::orderBy('id')->get(), 'based_umur'=>$dusun];
    }
    public function piramidaPenduduk($dusun_id=null){
       //select b.umur_id,a.name as umur,b.gender as jenkel,sum(b.jumlah) as jumlah from umurs a inner join based_umurs b on a.id=b.umur_id group by a.name,b.gender order by a.id desc,b.id
        $dusuns = Dusun::get();
        $dusun_index = $dusuns->search(function($item, $key)use($dusun_id){
            return $item->id==$dusun_id;
        });

        $data = DB::table('umurs')->join('based_umurs','based_umurs.umur_id','=','umurs.id')->join('rukun_tetanggas','rukun_tetanggas.id','=','based_umurs.rukun_tetangga_id')->select('based_umurs.umur_id','umurs.name as umur', 'based_umurs.gender as jenkel', DB::raw('sum(based_umurs.jumlah) as jumlah_data'))->groupBy('umurs.name', 'based_umurs.gender')->orderBy('umurs.id','desc')->orderBy('based_umurs.id');

        if($dusun_index!==false){
            $data=$data->where('rukun_tetanggas.dusun_id','=',$dusuns[$dusun_index]->id);
        }
        $data = $data->get();
        //return $data;
        //dd($data);
        $umurs = Umur::orderBy('id','desc')->get();
        foreach($umurs as $key=>$umur)$umurs[$key]->data = collect(["L"=>collect([]),"P"=>collect([])]);
       
        foreach($data as $key=>$value){
            $umur_index = $umurs->search(function($item, $key)use($value){
                return $item->id==$value->umur_id;
            });
            $umurs[$umur_index]->data[$value->jenkel]=($value->jumlah_data);

        }
        return $umurs;
        //return ['a'=>$umur, 'b'=>BasedUmur::orderBy('id')->get()];
    }
    
}
