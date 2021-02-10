<?php

namespace App\Http\Controllers;

use App\Sumpitpump;
use Illuminate\Http\Request;
use App\User;
use App\http\Controllers\Controller;
class SumpitpumpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $Sumpitpump = Sumpitpump::orderBy('created_at', 'DESC')->Paginate(20);
        
        return view('/sumpitpump.index', compact('Sumpitpump'));}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/sumpitpump.create');        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sumpitpump::create([
            'spv'=> $request->spv,
            'teknisi'=> $request->teknisi,
            'shift'=> $request->shift,
            'powerpit1'=> $request->powerpit1, 
            'selektorpit1'=> $request->selektorpit1, 
            'wlcpit1'=> $request->wlcpit1, 
            'kondisipit1'=> $request->kondisipit1, 
            'powerpit2'=> $request->powerpit2, 
            'selektorpit2'=> $request->selektorpit2, 
            'wlcpit2'=> $request->wlcpit2, 
            'kondisipit2'=> $request->kondisipit2, 
            'powerpit3'=> $request->powerpit3, 
            'selektorpit3'=> $request->selektorpit3, 
            'wlcpit3'=> $request->wlcpit3, 
            'kondisipit3'=> $request->kondisipit3, 
            'powerpit4'=> $request->powerpit4, 
            'selektorpit4'=> $request->selektorpit4, 
            'wlcpit4'=> $request->wlcpit4, 
            'kondisipit4'=> $request->kondisipit4, 
            'powerpit5'=> $request->powerpit5, 
            'selektorpit5'=> $request->selektorpit5, 
            'wlcpit5'=> $request->wlcpit5, 
            'kondisipit5'=> $request->kondisipit5,
            'powerpit6'=> $request->powerpit6, 
            'selektorpit6'=> $request->selektorpit6, 
            'wlcpit6'=> $request->wlcpit6, 
            'kondisipit6'=> $request->kondisipit6, 
            'powerpit7'=> $request->powerpit7, 
            'selektorpit7'=> $request->selektorpit7, 
            'wlcpit7'=> $request->wlcpit7, 
            'kondisipit7'=> $request->kondisipit7,  
            'powerpit8'=> $request->powerpit8, 
            'selektorpit8'=> $request->selektorpit8, 
            'wlcpit8'=> $request->wlcpit8, 
            'kondisipit8'=> $request->kondisipit8, 
            'powerpit9'=> $request->powerpit9, 
            'selektorpit9'=> $request->selektorpit9, 
            'wlcpit9'=> $request->wlcpit9, 
            'kondisipit9'=> $request->kondisipit9, 
            'powerpit10'=> $request->powerpit10, 
            'selektorpit10'=> $request->selektorpit10, 
            'wlcpit10'=> $request->wlcpit10, 
            'kondisipit10'=> $request->kondisipit10, 
            ]);
        return redirect('/sumpitpump' )->with('status', 'Data Berhasil Ditambahkan!');   
            }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sumpitpump  $sumpitpump
     * @return \Illuminate\Http\Response
     */
    public function show(Sumpitpump $sumpitpump)
    {
        return view('/sumpitpump.view', compact('sumpitpump'));
        
    }
    public function search(Request $request)
{ 
    $request->validate([
            'startdate'=>'required',
            'todate'=>'required'
        ]);

    $tabel= Sumpitpump::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Sumpitpump =  $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
// $data = Amr::select(['amrs.*','created_at'=>Amr::selectRaw('MAX(created_at)')->whereColumn('created_at','amrs.created_at')])->groupBy($awal)->get();
   return view('/sumpitpump.filter', compact('Sumpitpump'));
   
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sumpitpump  $sumpitpump
     * @return \Illuminate\Http\Response
     */
    public function edit(Sumpitpump $sumpitpump)
    {
        
        return view('/sumpitpump.edit', compact('sumpitpump'));            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sumpitpump  $sumpitpump
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sumpitpump $sumpitpump)
    {
        Sumpitpump::where ('id', $sumpitpump->id)
        ->update([
            'spv'=> $request->spv,
            'teknisi'=> $request->teknisi,
            'shift'=> $request->shift,
            'powerpit1'=> $request->powerpit1, 
            'selektorpit1'=> $request->selektorpit1, 
            'wlcpit1'=> $request->wlcpit1, 
            'kondisipit1'=> $request->kondisipit1, 
            'powerpit2'=> $request->powerpit2, 
            'selektorpit2'=> $request->selektorpit2, 
            'wlcpit2'=> $request->wlcpit2, 
            'kondisipit2'=> $request->kondisipit2, 
            'powerpit3'=> $request->powerpit3, 
            'selektorpit3'=> $request->selektorpit3, 
            'wlcpit3'=> $request->wlcpit3, 
            'kondisipit3'=> $request->kondisipit3, 
            'powerpit4'=> $request->powerpit4, 
            'selektorpit4'=> $request->selektorpit4, 
            'wlcpit4'=> $request->wlcpit4, 
            'kondisipit4'=> $request->kondisipit4, 
            'powerpit5'=> $request->powerpit5, 
            'selektorpit5'=> $request->selektorpit5, 
            'wlcpit5'=> $request->wlcpit5, 
            'kondisipit5'=> $request->kondisipit5,
            'powerpit6'=> $request->powerpit6, 
            'selektorpit6'=> $request->selektorpit6, 
            'wlcpit6'=> $request->wlcpit6, 
            'kondisipit6'=> $request->kondisipit6, 
            'powerpit7'=> $request->powerpit7, 
            'selektorpit7'=> $request->selektorpit7, 
            'wlcpit7'=> $request->wlcpit7, 
            'kondisipit7'=> $request->kondisipit7,  
            'powerpit8'=> $request->powerpit8, 
            'selektorpit8'=> $request->selektorpit8, 
            'wlcpit8'=> $request->wlcpit8, 
            'kondisipit8'=> $request->kondisipit8, 
            'powerpit9'=> $request->powerpit9, 
            'selektorpit9'=> $request->selektorpit9, 
            'wlcpit9'=> $request->wlcpit9, 
            'kondisipit9'=> $request->kondisipit9, 
            'powerpit10'=> $request->powerpit10, 
            'selektorpit10'=> $request->selektorpit10, 
            'wlcpit10'=> $request->wlcpit10, 
            'kondisipit10'=> $request->kondisipit10, 
                ]);
         return redirect('/sumpitpump' )->with('status', 'Data Berhasil DiUpdate!');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sumpitpump  $sumpitpump
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sumpitpump $sumpitpump)
    {
        $sumpitpump->delete();
    return redirect('/sumpitpump' )->with('status', 'Data Berhasil Dihapus!');    
    }

    public function export(Request $request)
    {
                
        $tabel= Sumpitpump::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Sumpitpump = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
              // return $Transferpump;
          return view('/sumpitpump.export', compact('Sumpitpump'));    
        
    }

    public function teangan(Request $request)
  { 
    $cari = $request->get('#');
    $Sumpitpump= Sumpitpump::where('teknisi','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/sumpitpump.index', compact('Sumpitpump'));
 
  }
}
