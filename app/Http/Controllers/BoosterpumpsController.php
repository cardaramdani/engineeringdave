<?php

namespace App\Http\Controllers;

use App\Boosterpump;
use Illuminate\Http\Request;
use App\User;
use App\http\Controllers\Controller;
class BoosterpumpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Boosterpump = Boosterpump::orderBy('created_at', 'desc')->Paginate(20);

        
        return view('/boosterpump.index', compact('Boosterpump'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/boosterpump.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->validate([
            'shift'=>'required',
            'teknisi'=>'required',
            'spv'=>'required',
            'valvehisappompa1'=>'required', 
            'valvehisappompa2'=>'required', 
            'valvesuplypompa1'=>'required', 
            'valvesuplypompa2'=>'required',
            'selektorpompa1'=>'required',
            'selektorpompa2'=>'required',
            'kondisi'=>'required'
        ]);

        Boosterpump::create([
           'shift'=>$request->shift,
            'teknisi'=>$request->teknisi,
            'spv'=>$request->spv,
            'valvehisappompa1'=>$request->valvehisappompa1, 
            'valvehisappompa2'=>$request->valvehisappompa2, 
            'valvesuplypompa1'=>$request->valvesuplypompa1, 
            'valvesuplypompa2'=>$request->valvesuplypompa2,
            'selektorpompa1'=>$request->selektorpompa1,
            'selektorpompa2'=>$request->selektorpompa2,
            'kondisi'=>$request->kondisi
        ]);
        return redirect('/boosterpump' )->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Amr  $amr
     * @return \Illuminate\Http\Response
     */
    public function show(Boosterpump $boosterpump)

{
       return view('/boosterpump.view',compact('boosterpump'));

}

public function search(Request $request)
{ 
    $request->validate([
            'startdate'=>'required',
            'todate'=>'required'
        ]);

    $tabel= Boosterpump::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Boosterpump = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
// $data = boosterpump::select(['boosterpumps.*','created_at'=>boosterpump::selectRaw('MAX(created_at)')->whereColumn('created_at','boosterpumps.created_at')])->groupBy($awal)->get();
   return view('/boosterpump.filter', compact('Boosterpump'));
}



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Amr  $amr
     * @return \Illuminate\Http\Response
     */
    public function edit(Boosterpump $boosterpump)

    {
         
        return view('/boosterpump.edit', compact('boosterpump'));    
    }
        

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Amr  $amr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Boosterpump $boosterpump)
    {
        $request->validate([
            'shift'=>'required',
            'teknisi'=>'required',
            'spv'=>'required',
            'valvehisappompa1'=>'required', 
            'valvehisappompa2'=>'required', 
            'valvesuplypompa1'=>'required', 
            'valvesuplypompa2'=>'required',
            'selektorpompa1'=>'required',
            'selektorpompa2'=>'required',
            'kondisi'=>'required']);

        Boosterpump::where ('id', $boosterpump->id)
        ->update([
                    'shift'=>$request->shift,
                    'teknisi'=>$request->teknisi,
                    'spv'=>$request->spv,
                    'valvehisappompa1'=>$request->valvehisappompa1, 
                    'valvehisappompa2'=>$request->valvehisappompa2, 
                    'valvesuplypompa1'=>$request->valvesuplypompa1, 
                    'valvesuplypompa2'=>$request->valvesuplypompa2,
                    'selektorpompa1'=>$request->selektorpompa1,
                    'selektorpompa2'=>$request->selektorpompa2,
                    'kondisi'=>$request->kondisi
                ]);
return redirect('/boosterpump' )->with('status', 'Data Berhasil Diedit!');

            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Amr  $amr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Boosterpump $boosterpump)
    {
        
    $boosterpump->delete();
    return redirect('/boosterpump' )->with('status', 'Data Berhasil Dihapus!');

    }
    
    public function export(Request $request)
    {  $tabel= Boosterpump::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Boosterpump = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
              // return $boosterpump;
          return view('/boosterpump.export', compact('Boosterpump'));    
    }

    public function teangan(Request $request)
  { 
    $cari = $request->get('#');
    $Boosterpump= Boosterpump::where('teknisi','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/boosterpump.index', compact('Boosterpump'));
 
  }
}
