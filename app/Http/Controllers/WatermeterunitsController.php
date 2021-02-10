<?php

namespace App\Http\Controllers;

use App\watermeterunit;
use Illuminate\Http\Request;
use App\User;
use App\http\Controllers\Controller;
class WatermeterunitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Watermeterunit = watermeterunit::orderBy('Unit', 'asc')->Paginate(20);
        
        return view('/watermeterunit.index', compact('Watermeterunit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/watermeterunit.create');    
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
        //     'Unit'=>'required',
        //     'NoSeri'=>'required',
        //     'StandAwal'=>'required',
        //     'StandAkhir'=>'required',
             'GambarAkhir' => 'required|file|image|mimes:jpeg,png,jpg|max:2080'
             
        //     'TanggalBAST'=>'required' 
        ]);
                // menyimpan data file yang diupload ke variabel $filegambar
        $filegambar = $request->file('GambarAkhir');

        $nama_file = time()."_".$filegambar->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dataIMG_watermeterunit';
 
                // upload file
        $filegambar->move($tujuan_upload,$nama_file);

        watermeterunit::create([
            'Unit'=> $request->Unit, 
            'teknisi'=> $request->teknisi, 
            'NoSeri'=> $request->NoSeri, 
            'StandAwal'=> $request->StandAwal, 
            'GambarAwal'=>$request->GambarAwal, 
            'StandAkhir'=>$request->StandAkhir, 
            'GambarAkhir'=>$nama_file, 
            'TotalPakai'=> $request->StandAkhir-$request->StandAwal, 
            'TanggalBAST'=> $request->TanggalBAST
        ]);
        return redirect('/watermeterunit' )->with('status', 'Data Berhasil Ditambahkan!');    
        

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\watermeterunit  $watermeterunit
     * @return \Illuminate\Http\Response
     */
    public function show(watermeterunit $watermeterunit)
    {
        return view('/watermeterunit.createlama', compact('watermeterunit'));        
    }
public function search(Request $request)
{ 
    $request->validate([
            'startdate'=>'required',
            'todate'=>'required'
        ]);

    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    //$tabel= watermeterunit::all();
    $Watermeterunit= watermeterunit::whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('Unit','asc')->get();

    //$Watermeterunit =  $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
// $data = Amr::select(['amrs.*','created_at'=>Amr::selectRaw('MAX(created_at)')->whereColumn('created_at','amrs.created_at')])->groupBy($awal)->get();
   return view('/watermeterunit.filter', compact('Watermeterunit'));
   
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\watermeterunit  $watermeterunit
     * @return \Illuminate\Http\Response
     */
    public function edit(watermeterunit $watermeterunit)
    {
         return view('/watermeterunit.edit', compact('watermeterunit'));        
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\watermeterunit  $watermeterunit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, watermeterunit $watermeterunit)
    { 
        $request->validate([
            // 'Unit'=>'required',
            // 'NoSeri'=>'required',
            // 'StandAwal'=>'required',
            // 'StandAkhir'=>'required',
            'GambarAkhir' => '|file|image|mimes:jpeg,png,jpg|max:2080'
            //'TanggalBAST'=>'required' 
        ]);
        $Gambarlama1=$request->Gambarlama1;
        $Gambarlama2=$request->Gambarlama2;
        $tmp = $request->file('GambarAkhir');
        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dataIMG_watermeterunit';
         if ($tmp==0) {
             $nama_file= $Gambarlama2;
             
        }else{
            $nama_file = time()."_".$tmp->getClientOriginalName(); 
                    // upload file
         $tmp->move($tujuan_upload,$nama_file);  
        }
       
        watermeterunit::where ('id', $watermeterunit->id)
        ->update([
            'Unit'=> $request->Unit, 
            'teknisi'=> $request->teknisi, 
            'NoSeri'=> $request->NoSeri, 
            'StandAwal'=> $request->StandAwal, 
            'GambarAwal'=>$request->Gambarlama1, 
            'StandAkhir'=>$request->StandAkhir, 
            'GambarAkhir'=>$nama_file, 
            'TotalPakai'=> $request->StandAkhir-$request->StandAwal, 
            'TanggalBAST'=> $request->TanggalBAST
                ]);
return redirect('/watermeterunit' )->with('status', 'Data Berhasil Diedit!');    
        
        
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\watermeterunit  $watermeterunit
     * @return \Illuminate\Http\Response
     */
    public function destroy(watermeterunit $watermeterunit)
    {
                
        
 $watermeterunit->delete();
    return redirect('/watermeterunit' )->with('status', 'Data Berhasil Dihapus!');
    }


    public function export(Request $request)
    {
                
        $tabel= watermeterunit::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Watermeterunit = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
              // return $watermeterunit;
          return view('/watermeterunit.export', compact('Watermeterunit'));    
        
    }

    public function cari(Request $request)
  {
    $cari = $request->get('#');
    $Watermeterunit = watermeterunit::where('Unit','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/watermeterunit.index', compact('Watermeterunit'));
 
  }
}
