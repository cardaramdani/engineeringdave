<?php

namespace App\Http\Controllers;

use App\Transferpump;
use Illuminate\Http\Request;
use App\User;
use App\http\Controllers\Controller;
class TransferpumpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Transferpump = Transferpump::orderBy('created_at', 'desc')->Paginate(20);
        
        return view('/transferpump.index', compact('Transferpump'));}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/transferpump.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        Transferpump::create([
            'valve_tfa'=> $request->valve_tfa, 
            'status_tfa'=> $request->status_tfa, 
            'valve_tfb'=> $request->valve_tfb, 
            'status_tfb'=> $request->status_tfb, 
            'valve_tfc'=> $request->valve_tfc, 
            'status_tfc'=> $request->status_tfc, 
            'valve_tfd'=> $request->valve_tfd, 
            'status_tfd'=> $request->status_tfd, 
            'kondisi'=> $request->kondisi, 
            'nama'=> $request->nama ,
            'namaspv'=> $request->namaspv ,
            'shift'=> $request->shift 
            
            
        ]);
        return redirect('/transferpump' )->with('status', 'Data Berhasil Ditambahkan!');   

         }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transferpump  $transferpump
     * @return \Illuminate\Http\Response
     */
    public function show(Transferpump $transferpump)
    {
        return view('/transferpump.view', compact('transferpump'));
        
    }
public function search(Request $request)
{ 
    $request->validate([
            'startdate'=>'required',
            'todate'=>'required'
        ]);

    $tabel= Transferpump::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Transferpump =  $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
// $data = Amr::select(['amrs.*','created_at'=>Amr::selectRaw('MAX(created_at)')->whereColumn('created_at','amrs.created_at')])->groupBy($awal)->get();
   return view('/transferpump.filter', compact('Transferpump'));
   
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transferpump  $transferpump
     * @return \Illuminate\Http\Response
     */
    public function edit(Transferpump $transferpump)
    {
          return view('/transferpump.edit', compact('transferpump'));            

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transferpump  $transferpump
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transferpump $transferpump)
    {
        transferpump::where ('id', $transferpump->id)
        ->update([
            'valve_tfa'=> $request->valve_tfa, 
            'status_tfa'=> $request->status_tfa, 
            'valve_tfb'=> $request->valve_tfb, 
            'status_tfb'=> $request->status_tfb, 
            'valve_tfc'=> $request->valve_tfc, 
            'status_tfc'=> $request->status_tfc, 
            'valve_tfd'=> $request->valve_tfd, 
            'status_tfd'=> $request->status_tfd, 
            'kondisi'=> $request->kondisi, 
            'nama'=> $request->nama ,
            'namaspv'=> $request->namaspv ,
            'shift'=> $request->shift 
                ]);
//        return $transferpump;
return redirect('/transferpump' )->with('status', 'Data Berhasil Diedit!');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transferpump  $transferpump
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transferpump $transferpump)
    {
        $transferpump->delete();
    return redirect('/transferpump' )->with('status', 'Data Berhasil Dihapus!');    }

    public function export(Request $request)
    {
                
        $tabel= transferpump::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Transferpump = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
              // return $Transferpump;
          return view('/transferpump.export', compact('Transferpump'));    
        
    }

    public function teangan(Request $request)
  { 
    $cari = $request->get('#');
    $Transferpump= Transferpump::where('nama','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/transferpump.index', compact('Transferpump'));
 
  }
}
