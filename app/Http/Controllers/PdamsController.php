<?php

namespace App\Http\Controllers;

use App\Pdam;
use Illuminate\Http\Request;
use App\User;
use App\http\Controllers\Controller;
class PdamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pdam = Pdam::orderBy('created_at', 'desc')->Paginate(20);
        
        return view('/pdam.index', compact('Pdam'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pdam.create');    
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $Pdam= Pdam::create([
            'nama'=> $request->nama, 
            'shift'=> $request->shift, 
            'stand'=> $request->stand
        ]);
        return redirect('/pdam' )->with('status', 'Data Berhasil Ditambahkan!');       }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pdam  $pdam
     * @return \Illuminate\Http\Response
     */
    public function show(Pdam $pdam)
    {
        //
    }
public function search(Request $request)
{ 
    $request->validate([
            'startdate'=>'required',
            'todate'=>'required'
        ]);

    $tabel= Pdam::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Pdam =  $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
// $data = Amr::select(['amrs.*','created_at'=>Amr::selectRaw('MAX(created_at)')->whereColumn('created_at','amrs.created_at')])->groupBy($awal)->get();
   return view('/pdam.filter', compact('Pdam'));
   
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pdam  $pdam
     * @return \Illuminate\Http\Response
     */
    public function edit(Pdam $pdam)
    {
        return view('/pdam.edit', compact('pdam'));                }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pdam  $pdam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pdam $pdam)
    {
        Pdam::where ('id', $pdam->id)
        ->update([
            'nama'=> $request->nama, 
            'shift'=> $request->shift, 
            'stand'=> $request->stand
                ]);
//        return $transferpump;
return redirect('/pdam' )->with('status', 'Data Berhasil Diedit!');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pdam  $pdam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pdam $pdam)
    {
    $pdam->delete();
    return redirect('/pdam' )->with('status', 'Data Berhasil Dihapus!');    
        }

public function export(Request $request)
    {  
        $tabel= Pdam::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Pdam = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
              // return $Amr;
          return view('/pdam.export', compact('Pdam'));    
    }
    public function teangan(Request $request)
  { 
    $cari = $request->get('#');
    $Pdam= Pdam::where('nama','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/pdam.index', compact('Pdam'));
 
  }
}
