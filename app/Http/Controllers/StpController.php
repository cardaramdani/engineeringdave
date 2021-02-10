<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stp;
use App\User;
use App\http\Controllers\Controller;
use App\pmSTP;
class StpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $Stp = Stp::orderBy('created_at', 'desc')->Paginate(20);

        
        return view('/stp.index', compact('Stp'));        
    }

    public function indexpm()
    {$pmSTP = pmSTP::orderBy('created_at', 'desc')->Paginate(6);
        
        return view('/stp.indexpm', compact('pmSTP'));
        
    }
       

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('/stp.create');
        
   }

   public function createpm()
    {
        return view('/stp.createpm');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $datacatatan = $request->temuan;
        if ($datacatatan==null){
            $catatan ="Nihil";
        }else{$catatan = $datacatatan;

        }
        $Genset= Stp::create([
            'teknisi'=> $request->teknisi, 
            'shift'=> $request->shift, 
            'spv'=> $request->spv,
            'basketscreen'=>$request->basketscreen,
            'selektorblower'=>$request->selektorblower,
            'statusblower1'=>$request->statusblower1,
            'pressureblower1'=>$request->pressureblower1,
            'statusblower2'=>$request->statusblower2, 
            'pressureblower2'=>$request->pressureblower2,
            'kondisiblower1'=>$request->kondisiblower1,
            'kondisiblower2'=>$request->kondisiblower2,
            'selektorequalizing'=>$request->selektorequalizing,
            'statusequalizing1'=>$request->statusequalizing1,
            'statusequalizing2'=>$request->statusequalizing2,
            'levelequalizing'=>$request->levelequalizing,
            'kondisiequalizing'=>$request->kondisiequalizing,
            'selektoreffluent'=>$request->selektoreffluent,
            'statuseffluent1'=>$request->statuseffluent1,
            'statuseffluent2'=>$request->statuseffluent2,
            'leveleffluent'=>$request->leveleffluent,
            'kondisieffluent'=>$request->kondisieffluent,
            'selektorfilter'=>$request->selektorfilter,
            'statusfilter1'=>$request->statusfilter1,
            'statusfilter2'=>$request->statusfilter2,
            'intakefan'=>$request->intakefan,
            'exhaustfan'=>$request->exhaustfan,
            'standmeter'=>$request->standmeter,
            'temuan'=> $catatan
        ]);
        return redirect('/stp' )->with('status', 'Data Berhasil Ditambahkan!'); 
        
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
        $datal14k14 = $request->l14k14;if ($datal14k14==null){$l14k14 ="Nihil";}else{$l14k14 = $datal14k14;}
        $datal15k15 = $request->l15k15;if ($datal15k15==null){$l15k15 ="Nihil";}else{$l15k15 = $datal15k15;}
        $datal16k16 = $request->l16k16;if ($datal16k16==null){$l16k16 ="Nihil";}else{$l16k16 = $datal16k16;}
        $datal17k17 = $request->l17k17;if ($datal17k17==null){$l17k17 ="Nihil";}else{$l17k17 = $datal17k17;}
        $datal18k18 = $request->l18k18;if ($datal18k18==null){$l18k18 ="Nihil";}else{$l18k18 = $datal18k18;}
        
        $pmSTP= pmSTP::create([
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
            'l14'=> $request->l14, 
            'l15'=> $request->l15, 
            'l16'=>$request->l16,
            'l17'=>$request->l17, 
            'l18'=> $request->l18, 
                        
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
            'l14k14'=> $l14k14, 
            'l15k15'=> $l15k15, 
            'l16k16'=> $l16k16, 
            'l17k17'=> $l17k17, 
            'l18k18'=> $l18k18, 
                         
        ]);
        return redirect('/pmstp' )->with('status', 'Data Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Stp $stp)
    {
        return view('/stp.view', compact('stp'));        
        
    }

    public function showpm(pmSTP $pmstp)
    {
        return view('/stp.viewpm', compact('pmstp'));          
    }

    public function search(Request $request)
{ 
    $request->validate([
            'startdate'=>'required',
            'todate'=>'required'
        ]);

    $tabel= Stp::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Stp = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);

   return view('/stp.filter', compact('Stp'));
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Stp $stp)
    { 
        return view('/stp.edit', compact('stp'));        
    }

    public function editpm(pmSTP $pmstp)
    { 
        return view('/stp.editpm', compact('pmstp'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stp $stp)
    {
        Stp::where ('id', $stp->id)
        ->update([
                    'teknisi'=> $request->teknisi, 
                    'shift'=> $request->shift, 
                    'spv'=> $request->spv,
                    'basketscreen'=>$request->basketscreen,
                    'selektorblower'=>$request->selektorblower,
                    'statusblower1'=>$request->statusblower1,
                    'pressureblower1'=>$request->pressureblower1,
                    'statusblower2'=>$request->statusblower2, 
                    'pressureblower2'=>$request->pressureblower2,
                    'kondisiblower1'=>$request->kondisiblower1,
                    'kondisiblower2'=>$request->kondisiblower2,
                    'selektorequalizing'=>$request->selektorequalizing,
                    'statusequalizing1'=>$request->statusequalizing1,
                    'statusequalizing2'=>$request->statusequalizing2,
                    'levelequalizing'=>$request->levelequalizing,
                    'kondisiequalizing'=>$request->kondisiequalizing,
                    'selektoreffluent'=>$request->selektoreffluent,
                    'statuseffluent1'=>$request->statuseffluent1,
                    'statuseffluent2'=>$request->statuseffluent2,
                    'leveleffluent'=>$request->leveleffluent,
                    'kondisieffluent'=>$request->kondisieffluent,
                    'selektorfilter'=>$request->selektorfilter,
                    'statusfilter1'=>$request->statusfilter1,
                    'statusfilter2'=>$request->statusfilter2,
                    'intakefan'=>$request->intakefan,
                    'exhaustfan'=>$request->exhaustfan,
                    'standmeter'=>$request->standmeter,
                    'temuan'=> $request->temuan
                ]);
return redirect('/stp' )->with('status', 'Data Berhasil Diedit!');
}

public function updatepm(Request $request, pmSTP $pmstp)
    {
        pmSTP::where ('id', $pmstp->id)
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
                    'l14'=> $request->l14, 
                    'l15'=> $request->l15, 
                    'l16'=>$request->l16,
                    'l17'=>$request->l17, 
                    'l18'=> $request->l18, 
                    
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
                    'l13k13'=> $request->l13k13, 
                    'l14k14'=> $request->l14k14, 
                    'l15k15'=> $request->l15k15, 
                    'l16k16'=> $request->l16k16, 
                    'l17k17'=> $request->l17k17, 
                    'l18k18'=> $request->l18k18, 
                    
                ]);
            return redirect('/pmstp' )->with('status', 'Data Berhasil Diupdate!');
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stp $stp)
    {
        $stp->delete();
    return redirect('/stp' )->with('status', 'Data Berhasil Dihapus!');
    }

    public function destroypm(pmSTP $pmstp)
    {
        
    $pmstp->delete();
    return redirect('/pmstp' )->with('status', 'Data Berhasil Dihapus!');

    }

    public function export(Request $request)
    {  $tabel= Stp::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Stp = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
              // return $Amr;
          return view('/stp.export', compact('Stp'));    
    }

    public function exportpm(Request $request){
        $pmstp = $request;
        return view('/stp.exportpm', compact('pmstp'));          
    }

    public function cari(Request $request)
  { 
    $cari = $request->get('#');
    $pmSTP= pmSTP::where('nama','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/stp.indexpm', compact('pmSTP'));
 
  }
  public function teangan(Request $request)
  { 
    $cari = $request->get('#');
    $Stp= Stp::where('teknisi','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/stp.index', compact('Stp'));
 
  }
}
