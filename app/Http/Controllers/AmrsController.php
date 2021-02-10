<?php

namespace App\Http\Controllers;

use App\Amr;
use Illuminate\Http\Request;
use App\User;
use App\http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AmrsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $Amr = Amr::orderBy('created_at', 'desc')->Paginate(20);

        
        return view('/amr.index', compact('Amr'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/amr.create');
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
            'namateknisi'=>'required',
            'cosp'=>'required',
            'lwbp'=>'required', 
            'wbp'=>'required', 
            'kvarh'=>'required', 
            'penalty'=>'required'
        ]);

        Amr::create([
            'shift'=> $request->shift, 
            'namateknisi'=> $request->namateknisi, 
            'cosp'=> $request->cosp, 
            'lwbp'=>$request->lwbp, 
            'total'=> $request->lwbp+$request->wbp, 
            'wbp'=> $request->wbp, 
            'kvarh'=> $request->kvarh, 
            'penalty'=> $request->penalty
        ]);
        return redirect('/amr' )->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Amr  $amr
     * @return \Illuminate\Http\Response
     */
    public function show(Amr $amr)

{

}

public function search(Request $request)
{ 
    $request->validate([
            'startdate'=>'required',
            'todate'=>'required'
        ]);

    $tabel= Amr::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Amr = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
    
// $data = Amr::select(['amrs.*','created_at'=>Amr::selectRaw('MAX(created_at)')->whereColumn('created_at','amrs.created_at')])->groupBy($awal)->get();
   return view('/amr.filter', compact('Amr'));
}



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Amr  $amr
     * @return \Illuminate\Http\Response
     */
    public function edit(Amr $amr)

    { 
         
        return view('/amr.edit', compact('amr'));    
    }
        

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Amr  $amr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amr $amr)
    { 
        $request->validate([
            'shift'=>'required',
            'namateknisi'=>'required',
            'cosp'=>'required',
            'lwbp'=>'required', 
            'wbp'=>'required', 
            'kvarh'=>'required', 
            'penalty'=>'required']);

        Amr::where ('id', $amr->id)
        ->update([
                    'shift'=>$request->shift,
                    'namateknisi'=>$request->namateknisi,
                    'cosp'=>$request->cosp,
                    'lwbp'=>$request->lwbp,
                    'wbp'=>$request->wbp,
                    'total'=>$request->wbp+$request->lwbp,
                    'kvarh'=>$request->kvarh,
                    'penalty'=>$request->penalty
                ]);
return redirect('/amr' )->with('status', 'Data Berhasil Diedit!');

            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Amr  $amr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Amr $amr)
    {
        
    $amr->delete();
    return redirect('/amr' )->with('status', 'Data Berhasil Dihapus!');

    }
    
    public function export(Request $request)
    {  
        $tabel= Amr::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Amr = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
               
          return view('/amr.export', compact('Amr'));    
    }

    public function teangan(Request $request)
  { 
    $cari = $request->get('#');
    $Amr= Amr::where('namateknisi','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/amr.index', compact('Amr'));
 
  }
}
