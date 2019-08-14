<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dusun;
use App\Pendidikan;
use Illuminate\Support\Facades\DB;

class BasedPendidikanController extends Controller
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
    public function dataPendudukByPendidikan(){
        //select a.rw_no,a.name,b.rt_no,d.name,sum(c.jumlah) as jumlah from dusuns a join rukun_tetanggas b on a.id=b.dusun_id join based_pendidikans c on c.rukun_tetangga_id=b.id join pendidikans d on d.id=c.pendidikan_id group by a.name,d.name order by a.rw_no,d.id
       $data=DB::table('dusuns')->join('rukun_tetanggas','dusuns.id','=','rukun_tetanggas.dusun_id')->join('based_pendidikans','based_pendidikans.rukun_tetangga_id','=','rukun_tetanggas.id')->join('pendidikans','pendidikans.id','=','based_pendidikans.pendidikan_id')->select('based_pendidikans.pendidikan_id','dusuns.name as nama_dusun','pendidikans.name as pendidikan', DB::raw('sum(based_pendidikans.jumlah) as jumlah_data'))->groupBy('dusuns.name','pendidikans.name')->orderBy('dusuns.rw_no')->orderBy('pendidikans.id')->get();
       $dusun = Dusun::get();
      
       foreach($dusun as $key=>$value)$dusun[$key]->data=collect([]);
       foreach($data as $key=>$value){
            $dusun_index = $dusun->search(function($item, $key)use($value){
                return $item->name==$value->nama_dusun;
            });
            $dusun[$dusun_index]->data->push($value);
       }
       return ['pendidikan'=>Pendidikan::orderBy('id')->get(), 'based_pendidikan'=>$dusun];
    }
}
