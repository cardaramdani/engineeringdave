<?php

namespace App\Http\Controllers;

use App\Firepump;
use App\pmFirepumps;
use Illuminate\Http\Request;
use App\User;
use App\http\Controllers\Controller;
class FirepumpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $Firepump = Firepump::orderBy('created_at', 'desc')->Paginate(20);
        return view('/firepump.index', compact('Firepump'));       
    }

    public function indexpm()
    {$pmFirepumps = pmFirepumps::orderBy('created_at', 'desc')->Paginate(6);
        
        return view('/firepump.indexpm', compact('pmFirepumps'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/firepump.create');        
    }

    public function createpm()
    {
        return view('/firepump.createpm');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{ $datatemuan = $request->temuan;
    if($datatemuan==null){
        $temuan="Nihil";
    }else{
        $temuan = $datatemuan;

    }
    
     Firepump::create([
        'spv'=>$request->spv, 
        'shift'=>$request->shift,
        'teknisi'=>$request->teknisi,
       'statusjockey'=>$request->statusjockey, 
        'selectorjockey'=>$request->selectorjockey,
         'valvejockey'=>$request->valvejockey,
       'onpressurejockey'=>$request->onpressurejockey,
        'ofpressurejockey'=>$request->ofpressurejockey,
         'bodyjockey'=>$request->bodyjockey,

         'statuselectric'=>$request->statuselectric,
          'selectorelectric'=>$request->selectorelectric,
           'valveelectric'=>$request->valveelectric,
            'onpressureelectric'=>$request->onpressureelectric,
             'ofpressureelectric'=>$request->ofpressureelectric,
              'bodyelectric'=>$request->bodyelectric,

     'statusdiesel'=>$request->statusdiesel,
      'selectordiesel'=>$request->selectordiesel,
       'valvediesel'=>$request->valvediesel,
        'onpressurediesel'=>$request->onpressurediesel,
         'ofpressurediesel'=>$request->ofpressurediesel,
          'batterycharger'=>$request->batterycharger,
           'leveloli'=>$request->leveloli,
           'levelsolar'=>$request->levelsolar,
            'levelradiator'=>$request->levelradiator,
             'aktualpressureheader'=>$request->aktualpressureheader,
             'temuan'=>$temuan
                        ]);
    return redirect('/firepump' )->with('status', 'Data Berhasil Ditambahkan!');
     }

     public function storepm(Request $request)
    {
        $datal1k1 = $request->l1k1;if ($datal1k1==null){$l1k1 ="Nihil";}else{$l1k1 = $datal1k1;}
        $datal2k2 = $request->l2k2;if ($datal2k2==null){$l2k2 ="Nihil";}else{$l2k2 = $datal2k2;}
        $datal3k3 = $request->l3k3;if ($datal3k3==null){$l3k3 ="Nihil";}else{$l3k3 = $datal3k3;}
        $datal4k4 = $request->l4k4;if ($datal4k4==null){$l4k4 ="Nihil";}else{$l4k4 = $datal4k4;}
        $datal5k5 = $request->l5k5;if ($datal5k5==null){$l5k5 ="Nihil";}else{$l5k5 = $datal5k5;}
        $datal6k6 = $request->l6k6;if ($datal6k6==null){$l6k6 ="Nihil";}else{$l6k6 = $datal6k6;}
        $datal7k7 = $request->l7k7;if ($datal7k7==null){$l7k7 ="Nihil";}else{$l7k7 = $datal7k7;}
        $datal8k8 = $request->l8k8;if ($datal8k8==null){$l8k8 ="Nihil";}else{$l8k8 = $datal8k8;}
        $datal9k9 = $request->l9k9;if ($datal9k9==null){$l9k9 ="Nihil";}else{$l9k9 = $datal9k9;}
        $datal10k10 = $request->l10k10;if ($datal10k10==null){$l10k10 ="Nihil";}else{$l10k10 = $datal10k10;}
        $datal11k11 = $request->l11k11;if ($datal11k11==null){$l11k11 ="Nihil";}else{$l11k11 = $datal11k11;}
        $datal12k12 = $request->l12k12;if ($datal12k12==null){$l12k12 ="Nihil";}else{$l12k12 = $datal12k12;}
        $datal13k13 = $request->l13k13;if ($datal13k13==null){$l13k13 ="Nihil";}else{$l13k13 = $datal13k13;}
        
        
        $pmFirepumps= pmFirepumps::create([
            'nama'=> $request->nama, 
            'jadwalpm'=> $request->jadwalpm, 
            'planpm'=> $request->planpm, 
            'l1'=> $request->l1, 
            'l2'=> $request->l2, 
            'l3'=> $request->l3, 
            'l4'=> $request->l4, 
            'l5'=> $request->l5, 
            'l6'=> $request->l6, 
            'l7'=> $request->l7, 
            'l8'=> $request->l8, 
            'l9'=> $request->l9, 
            'l10'=> $request->l10, 
            'l11'=> $request->l11, 
            'l12'=> $request->l12, 
            'l13'=> $request->l13, 
                        
            'l1k1'=> $l1k1,
            'l2k2'=> $l2k2, 
            'l3k3'=> $l3k3,
            'l4k4'=> $l4k4, 
            'l5k5'=> $l5k5,
            'l6k6'=> $l6k6, 
            'l7k7'=> $l7k7,
            'l8k8'=> $l8k8,
            'l9k9'=> $l9k9,
            'l10k10'=> $l10k10, 
            'l11k11'=> $l11k11, 
            'l12k12'=> $l12k12, 
            'l13k13'=> $l13k13, 
                         
        ]);
        return redirect('/pmfirepump' )->with('status', 'Data Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Firepump  $firepump
     * @return \Illuminate\Http\Response
     */
    public function show(Firepump $firepump)
    {
        return view('/firepump.view', compact('firepump'));
        
    }

    public function showpm(pmFirepumps $pmfirepumps)
    {
        return view('/firepump.viewpm', compact('pmfirepumps'));          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Firepump  $firepump
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
{ 
    $request->validate([
            'startdate'=>'required',
            'todate'=>'required'
        ]);

    $tabel= Firepump::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $firepump = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
// $data = firepump::select(['firepumps.*','created_at'=>firepump::selectRaw('MAX(created_at)')->whereColumn('created_at','firepumps.created_at')])->groupBy($awal)->get();
   return view('/firepump.filter', compact('firepump'));
}

    public function edit(Firepump $firepump)
    {
        
         return view('/firepump.edit', compact('firepump'));    
     }

      public function editpm(pmFirepumps $pmfirepumps)
    {
        return view('/firepump.editpm', compact('pmfirepumps'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Firepump  $firepump
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Firepump $firepump)
    {   $datatemuan = $request->temuan;
    if($datatemuan==null){
        $temuan="Nihil";
    }else{
        $temuan = $datatemuan;

    }

        Firepump::where ('id', $firepump->id)
        ->update([
                    'spv'=>$request->spv, 
        'shift'=>$request->shift,
        'teknisi'=>$request->teknisi,
       'statusjockey'=>$request->statusjockey, 
        'selectorjockey'=>$request->selectorjockey,
         'valvejockey'=>$request->valvejockey,
       'onpressurejockey'=>$request->onpressurejockey,
        'ofpressurejockey'=>$request->ofpressurejockey,
         'bodyjockey'=>$request->bodyjockey,

         'statuselectric'=>$request->statuselectric,
          'selectorelectric'=>$request->selectorelectric,
           'valveelectric'=>$request->valveelectric,
            'onpressureelectric'=>$request->onpressureelectric,
             'ofpressureelectric'=>$request->ofpressureelectric,
              'bodyelectric'=>$request->bodyelectric,

     'statusdiesel'=>$request->statusdiesel,
      'selectordiesel'=>$request->selectordiesel,
       'valvediesel'=>$request->valvediesel,
        'onpressurediesel'=>$request->onpressurediesel,
         'ofpressurediesel'=>$request->ofpressurediesel,
          'batterycharger'=>$request->batterycharger,
           'leveloli'=>$request->leveloli,
           'levelsolar'=>$request->levelsolar,
            'levelradiator'=>$request->levelradiator,
             'aktualpressureheader'=>$request->aktualpressureheader,
             'temuan'=>$temuan
                ]);
return redirect('/firepump' )->with('status', 'Data Berhasil Diedit!');

        
    }

    public function updatepm(Request $request, pmFirepumps $pmfirepumps)
    { 
        pmFirepumps::where ('id', $pmfirepumps->id)
        ->update([
                    'nama'=> $request->nama, 
                    'jadwalpm'=> $request->jadwalpm, 
                    'planpm'=> $request->planpm, 
                    'l1'=> $request->l1, 
                    'l2'=> $request->l2, 
                    'l3'=> $request->l3, 
                    'l4'=> $request->l4, 
                    'l5'=> $request->l5, 
                    'l6'=> $request->l6, 
                    'l7'=> $request->l7, 
                    'l8'=> $request->l8, 
                    'l9'=> $request->l9, 
                    'l10'=> $request->l10, 
                    'l11'=> $request->l11, 
                    'l12'=> $request->l12, 
                    'l13'=> $request->l13, 
                    
                    'l1k1'=> $request->l1k1,
                    'l2k2'=> $request->l2k2, 
                    'l3k3'=> $request->l3k3,
                    'l4k4'=> $request->l4k4, 
                    'l5k5'=> $request->l5k5,
                    'l6k6'=> $request->l6k6, 
                    'l7k7'=> $request->l7k7,
                    'l8k8'=> $request->l8k8,
                    'l9k9'=> $request->l9k9,
                    'l10k10'=> $request->l10k10, 
                    'l11k11'=> $request->l11k11, 
                    'l12k12'=> $request->l12k12, 
                    'l13k13'=> $request->l13k13 
                    
                ]);

            return redirect('/pmfirepump' )->with('status', 'Data Berhasil Diupdate!');
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Firepump  $firepump
     * @return \Illuminate\Http\Response
     */
    public function destroy(Firepump $firepump)
    {
        $firepump->delete();
    return redirect('/firepump' )->with('status', 'Data Berhasil Dihapus!');
    }

    public function destroypm(pmFirepumps $pmfirepumps)
    {
        
    $pmfirepumps->delete();
    return redirect('/pmfirepump' )->with('status', 'Data Berhasil Dihapus!');

    }

    public function export(Request $request)
    {  $tabel= Firepump::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $firepump = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
              // return $firepump;
          return view('/firepump.export', compact('firepump'));    
    }
    public function exportpm(Request $request){
        $pmfirepumps = $request;
        return view('/firepump.exportpm', compact('pmfirepumps'));          
    }

    public function cari(Request $request)
  { 
    $cari = $request->get('#');
    $pmFirepumps= pmFirepumps::where('nama','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/firepump.indexpm', compact('pmFirepumps'));
 
  }
   public function teangan(Request $request)
  { 
    $cari = $request->get('#');
    $Firepump= Firepump::where('teknisi','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/firepump.index', compact('Firepump'));
 
  }
}
