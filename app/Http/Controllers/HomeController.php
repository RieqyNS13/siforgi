<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dusun;
use App\Jenis;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data=['dusun' => Dusun::get(), 'jenisLokasi'=>Jenis::get()];
        $data['dusun']->prepend(['id'=>-1,'name'=>'Semua dusun', 'Latitude'=>'-7.226762', 'Longitude'=>'110.3935235']);
        // $a[] =
        // foreach(Dusun::get() as $asu)$a[] = $asu;
        // $data['dusun'] = $a;
       // dd($data);
        //array_unshift($data['dusun'], );
        return view('home', $data);
    }
}
