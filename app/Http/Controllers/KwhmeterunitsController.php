<?php

namespace App\Http\Controllers;

use App\Kwhmeterunit;
use App\Kwhcomersile;
use Illuminate\Http\Request;
use App\User;
use App\http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class KwhmeterunitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
    {
        $Kwhmeterunit = Kwhmeterunit::orderBy('Unit', 'desc')->Paginate(20);
        
        return view('/kwhmeterunit.index', compact('Kwhmeterunit'));    
    }

public function indexcomersile()
    {
        $Kwhcomersile = Kwhcomersile::orderBy('Unit', 'desc')->Paginate(20);
        
        return view('/kwhmeterunit.indexkwhcomersile', compact('Kwhcomersile'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
         return view('/kwhmeterunit.create');        
     }

public function createcomersile()
    {
         return view('/kwhmeterunit.createcomersile');        
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
            // 'Unit'=>'required',
            // 'NoSeri'=>'required',
            // 'Daya'=>'required',
            // 'StandAwal'=>'required',
            // 'StandAkhir'=>'required', 
            // 'TanggalBAST'=>'required' 
            'GambarAkhir' => 'required|file|image|mimes:jpeg,JPEG,png,jpg|max:2048'
        ]);
     // menyimpan data file yang diupload ke variabel $filegambar
        $filegambar = $request->file('GambarAkhir');
        $nama_file = time()."_".$filegambar->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dataIMG_kwhmeterunit';
        
                // upload file
        $filegambar->move($tujuan_upload,$nama_file);

        Kwhmeterunit::create([
            'Unit'=> $request->Unit, 
            'teknisi'=> $request->teknisi, 
            'NoSeri'=> $request->NoSeri, 
            'Daya'=> $request->Daya, 
            'StandAwal'=> $request->StandAwal, 
            'GambarAwal'=>$request->GambarAwal, 
            'StandAkhir'=>$request->StandAkhir, 
            'GambarAkhir'=>$nama_file, 
            'TotalPakai'=> $request->StandAkhir-$request->StandAwal, 
            'TanggalBAST'=> $request->TanggalBAST
        ]);
        return redirect('/kwhmeterunit' )->with('status', 'Data Berhasil Ditambahkan!');     
           }


public function storecomersile(Request $request)
    { 
        
          $request->validate([
            'Unit'=>'required',
            'Nama'=>'required',
            'NoSeri'=>'required',
            'Daya'=>'required',
            'Faktor_kali'=>'required',
            'StandAwal_lwbp'=>'required',
            'StandAkhir_lwbp'=>'required', 
            'StandAwal_wbp'=>'required',
            'StandAkhir_wbp'=>'required', 
            'TanggalBAST'=>'required' ,
            'GambarAkhir_lwbp' => 'required|file|image|mimes:jpeg,JPEG,png,jpg|max:2048',
            'GambarAkhir_wbp' => 'required|file|image|mimes:jpeg,JPEG,png,jpg|max:2048'
        ]);
          
     // menyimpan data file yang diupload ke variabel $filegambar
        $fileGambarAkhir_lwbp = $request->file('GambarAkhir_lwbp');
        $nama_fileGambarAkhir_lwbp = time()."_".$fileGambarAkhir_lwbp->getClientOriginalName();

        $fileGambarAkhir_wbp = $request->file('GambarAkhir_wbp');
        $nama_fileGambarAkhir_wbp = time()."_".$fileGambarAkhir_wbp->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dataIMG_kwhcomersile';
        
                // upload file
        $fileGambarAkhir_lwbp->move($tujuan_upload,$nama_fileGambarAkhir_lwbp);
        $fileGambarAkhir_wbp->move($tujuan_upload,$nama_fileGambarAkhir_wbp);

        Kwhcomersile::create([
            'Unit'=> $request->Unit, 
            'Nama'=> $request->Nama, 
            'NoSeri'=> $request->NoSeri, 
            'Daya'=> $request->Daya, 
            'Faktor_kali'=> $request->Faktor_kali,
            'StandAwal_lwbp'=> $request->StandAwal_lwbp, 
            'StandAkhir_lwbp'=>$request->StandAkhir_lwbp, 
            'StandAwal_wbp'=> $request->StandAwal_wbp, 
            'StandAkhir_wbp'=>$request->StandAkhir_wbp, 
            'total'=> ((($request->StandAkhir_lwbp - $request->StandAwal_lwbp)+($request->StandAkhir_wbp - $request->StandAwal_wbp)) * $request->Faktor_kali),
            'TanggalBAST'=> $request->TanggalBAST,
            'GambarAkhir_lwbp' => $nama_fileGambarAkhir_lwbp,
            'GambarAkhir_wbp' => $nama_fileGambarAkhir_wbp,
            'GambarAwal_lwbp' => $request->GambarAwal_lwbp,
            'GambarAwal_wbp' => $request->GambarAwal_wbp
        ]);
        return redirect('/kwhcomersile' )->with('status', 'Data Berhasil Ditambahkan!');     
           }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kwhmeterunit  $kwhmeterunit
     * @return \Illuminate\Http\Response
     */
public function show(Kwhmeterunit $kwhmeterunit)
    {
         return view('/kwhmeterunit.createlama', compact('kwhmeterunit'));        

    }

public function showcomersile(Kwhcomersile $kwhcomersile)
    {
         return view('/kwhmeterunit.createlamacomersile', compact('kwhcomersile'));        

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
    $Kwhmeterunit= Kwhmeterunit::whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('Unit','asc')->get();

    //$Kwhmeterunit =  $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping];

   return view('/kwhmeterunit.filter', compact('Kwhmeterunit'));
    }

public function searchcomersile(Request $request)
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
    $Kwhcomersile= Kwhcomersile::whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('Unit','asc')->get();

    //$Kwhmeterunit =  $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping];

   return view('/kwhmeterunit.filtercomersile', compact('Kwhcomersile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kwhmeterunit  $kwhmeterunit
     * @return \Illuminate\Http\Response
     */
public function edit(Kwhmeterunit $kwhmeterunit)
    {
            return view('/kwhmeterunit.edit', compact('kwhmeterunit'));        
    }

public function editcomersile(Kwhcomersile $kwhcomersile)
    {
            return view('/kwhmeterunit.editcomersile', compact('kwhcomersile'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kwhmeterunit  $kwhmeterunit
     * @return \Illuminate\Http\Response
     */
public function update(Request $request, Kwhmeterunit $kwhmeterunit)
    {
         $request->validate([
        //     'Unit'=>'required',
        //     'NoSeri'=>'required',
        //     'Daya'=>'required',
        //     'StandAwal'=>'required',
        //     'StandAkhir'=>'required', 
        //     'TanggalBAST'=>'required'
            'GambarAkhir' => '|file|image|mimes:jpeg,png,jpg|max:2048'

        ]);
        $Gambarlama1=$request->Gambarlama1;
        $Gambarlama2=$request->Gambarlama2;
        $tmp = $request->file('GambarAkhir');
        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dataIMG_kwhmeterunit';
         if ($tmp==0) {
             $nama_file= $Gambarlama2;
             
        }else{
            $nama_file = time()."_".$tmp->getClientOriginalName(); 
                    // upload file
         $tmp->move($tujuan_upload,$nama_file);  
        }
       

        Kwhmeterunit::where ('id', $kwhmeterunit->id)
        ->update([
            'Unit'=> $request->Unit, 
            'teknisi'=> $request->teknisi, 
            'NoSeri'=> $request->NoSeri, 
            'Daya'=> $request->Daya, 
            'StandAwal'=> $request->StandAwal, 
            'GambarAwal'=>$request->Gambarlama1, 
            'StandAkhir'=>$request->StandAkhir, 
            'GambarAkhir'=>$nama_file, 
            'TotalPakai'=> $request->StandAkhir-$request->StandAwal, 
            'TanggalBAST'=> $request->TanggalBAST
                ]);
        return redirect('/kwhmeterunit' )->with('status', 'Data Berhasil Diedit!');        }

public function updatecomersile(Request $request, Kwhcomersile $kwhcomersile)
    { 
         $request->validate([
            'Unit'=>'required',
            'NoSeri'=>'required',
            'Daya'=>'required',
            'Faktor_kali'=>'required',
            'StandAwal_lwbp'=>'required',
            'StandAwal_wbp'=>'required',
            'StandAkhir_lwbp'=>'required', 
            'StandAkhir_lwbp'=>'required', 
            'TanggalBAST'=>'required',
            'GambarAwal_lwbp' => '|file|image|mimes:jpeg,png,jpg|max:2048',
            'GambarAwal_wbp' => '|file|image|mimes:jpeg,png,jpg|max:2048',
            'GambarAkhir_lwbp' => '|file|image|mimes:jpeg,png,jpg|max:2048',
            'GambarAkhir_wbp' => '|file|image|mimes:jpeg,png,jpg|max:2048'


        ]);
        $totallwbp = $request->StandAkhir_lwbp - $request->StandAwal_lwbp;
        $totalwbp = $request->StandAkhir_wbp - $request->StandAwal_wbp;
        $total =  (($totallwbp + $totalwbp) * $request->Faktor_kali);
        $tmp1 = $request->file('GambarAwal_lwbp');
        $tmp2 = $request->file('GambarAkhir_lwbp');
        $tmp3 = $request->file('GambarAwal_wbp');
        $tmp4 = $request->file('GambarAkhir_wbp');
        
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dataIMG_kwhcomersile';
         if ($tmp1==0) {$GambarAwal_lwbp= $request->Gambarlama_GambarAwal_lwbp;}
         else{$GambarAwal_lwbp = time()."_".$tmp1->getClientOriginalName(); 
                    // upload file
               $tmp1->move($tujuan_upload,$GambarAwal_lwbp);  
              }
         if ($tmp2==0) {$GambarAkhir_lwbp= $request->Gambarlama_GambarAkhir_lwbp;}
         else{$GambarAkhir_lwbp = time()."_".$tmp2->getClientOriginalName(); 
                    // upload file
               $tmp2->move($tujuan_upload,$GambarAkhir_lwbp);  
              }
          if ($tmp3==0) {$GambarAwal_wbp= $request->Gambarlama_GambarAwal_wbp;}
         else{$GambarAwal_wbp = time()."_".$tmp3->getClientOriginalName(); 
                    // upload file
               $tmp3->move($tujuan_upload,$GambarAwal_wbp);  
              }
         if ($tmp4==0) {$GambarAkhir_wbp= $request->Gambarlama_GambarAkhir_wbp;}
         else{$GambarAkhir_wbp = time()."_".$tmp4->getClientOriginalName(); 
                    // upload file
               $tmp4->move($tujuan_upload,$GambarAkhir_wbp);  
              }
       

        Kwhcomersile::where ('id', $kwhcomersile->id)
        ->update([
            'Unit'=> $request->Unit, 
            'Nama'=> $request->Nama, 
            'NoSeri'=> $request->NoSeri, 
            'Daya'=> $request->Daya, 
            'Faktor_kali'=> $request->Faktor_kali, 
            'StandAwal_lwbp'=> $request->StandAwal_lwbp, 
            'StandAkhir_lwbp'=> $request->StandAkhir_lwbp, 
            'StandAwal_wbp'=> $request->StandAwal_wbp, 
            'StandAkhir_wbp'=> $request->StandAkhir_wbp, 
            'GambarAwal_lwbp'=>$GambarAwal_lwbp,
            'GambarAkhir_lwbp'=>$GambarAkhir_lwbp,
            'GambarAwal_wbp'=>$GambarAwal_wbp,
            'GambarAkhir_wbp'=>$GambarAkhir_wbp, 
            'total'=> $total, 
            'TanggalBAST'=> $request->TanggalBAST
                ]);
        return redirect('/kwhcomersile' )->with('status', 'Data Berhasil Diedit!');        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kwhmeterunit  $kwhmeterunit
     * @return \Illuminate\Http\Response
     */
public function destroy(Kwhmeterunit $kwhmeterunit)
    {
        $kwhmeterunit->delete();
    return redirect('/kwhmeterunit' )->with('status', 'Data Berhasil Dihapus!');    
    }

public function destroycomersile(Kwhcomersile $kwhcomersile)
    {
        $kwhcomersile->delete();
    return redirect('/kwhcomersile' )->with('status', 'Data Berhasil Dihapus!');    
    }

public function export(Request $request)
    {
         $tabel= Kwhmeterunit::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Kwhmeterunit= Kwhmeterunit::whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('Unit','desc')->get();
    
          return view('/kwhmeterunit.export', compact('Kwhmeterunit'));    
    }

public function exportcomersile(Request $request)
    { 
         $tabel= Kwhcomersile::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Kwhcomersile= Kwhcomersile::whereBetween('created_at', [$awalkaping,$tungtungkaping])->orderBy('Unit','desc')->get();
    
          return view('/kwhmeterunit.exportcomersile', compact('Kwhcomersile'));    
    }




function insert(Request $request)
    {
     if($request->ajax()) {
                          $rules = array(
                           'Unit.*'  => 'required',
                           'NoSeri.*'  => 'required',
                           'Daya.*'=>'required',
                           'StandAwal.*'  => 'required',
                           'GambarAwal.*'  => 'required',
                           'StandAkhir.*'=>'required',
                           'GambarAkhir.*'  => 'required',
                           'TotalPakai.*'  => 'required',
                           'TanggalBAST.*'=>'required',
                          );

      $error = Validator::make($request->all(), $rules);
          if($error->fails())
      {
           return response()->json([
            'error'  => $error->errors()->all()
           ]);
      }

      $Unit = $request->Unit;
      $NoSeri  = $request->NoSeri;
       $Daya=$request->Daya;
       $StandAwal  = $request->StandAwal;
       $GambarAwal  = $request->GambarAwal;
       $StandAkhir=$request->StandAkhir;
       $GambarAkhir  = $request->GambarAkhir;
       $TotalPakai  = $request->TotalPakai;
       $TanggalBAST=$request->TanggalBAST;
      for($count = 0; $count < count($Unit); $count++)
      {
                   $data = array(
                    'Unit'  => 'required',
                   'NoSeri'  => 'required',
                   'Daya'=>'required',
                   'StandAwal'  => 'required',
                   'GambarAwal'  => 'required',
                   'StandAkhir'=>'required',
                   'GambarAkhir'  => 'required',
                   'TotalPakai'  => 'required',
                   'TanggalBAST'=>'required',
                   );

                   $insert_data[] = $data; 
      }

      Kwhmeterunit::insert($insert_data);
      
      return response()->json([
       'success'  => 'Data Berhasil Ditambahkan!!!.'
      ]);
     }
    }

public function cari(Request $request)
  {
    $cari = $request->get('#');
    $Kwhmeterunit = Kwhmeterunit::where('Unit','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
    
   return view('/kwhmeterunit.index', compact('Kwhmeterunit'));
 
  }


}
