<?php

namespace App\Http\Controllers;



use App\User;
use App\http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Logbook;
use Validator;
class LogbooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Logbook = Logbook::orderBy('created_at', 'desc')->Paginate(20);

        
        return view('/logbook.index', compact('Logbook'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/logbook.create');    }

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
            'deskripsi'=>'required'
            ]);

        Logbook::create([
            'shift'=> $request->shift, 
            'teknisi'=> $request->teknisi, 
            'deskripsi'=> $request->deskripsi
        ]);
        return redirect('/logbook' )->with('status', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function show(Logbook $logbook)
    {
        return view('/logbook.view', compact('logbook'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
{ 
    $request->validate([
            'startdate'=>'required',
            'todate'=>'required'
        ]);

    $tabel= logbook::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Logbook = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
// $data = Logbook::select(['Logbooks.*','created_at'=>Logbook::selectRaw('MAX(created_at)')->whereColumn('created_at','Logbooks.created_at')])->groupBy($awal)->get();
   return view('/logbook.filter', compact('Logbook'));
}

    public function edit(Logbook $logbook)
    {
        return view('/logbook.edit', compact('logbook'));    
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logbook $logbook)
    { 
        
        

        Logbook::where ('id', $logbook->id)
        ->update([
                    'shift'=> $request->shift, 
                    'teknisi'=> $request->teknisi, 
                    'deskripsi'=> $request->deskripsi
                ]);
        return redirect('/logbook' )->with('status', 'Data Berhasil Diedit!');

            }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Logbook  $logbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Logbook $logbook)
    {
        $logbook->delete();
    return redirect('/logbook' )->with('status', 'Data Berhasil Dihapus!');    
    }


    public function export(Request $request)
    { 

     $tabel= logbook::all();
        $kaping1=$request->startdate;
        $kaping2=$request->todate;
        $menitawal="00:00:00";
        $menitakhir="23:59:59";
        $awalkaping= $kaping1.' '.$menitawal;
        $tungtungkaping=$kaping2.' '.$menitakhir;
        $Logbook = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
              // return $Amr;
          return view('/logbook.export', compact('Logbook'));    
    }

    public function teangan(Request $request)
  { 
    $cari = $request->get('#');
    $Logbook= Logbook::where('teknisi','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/logbook.index', compact('Logbook'));
 
  }
}
