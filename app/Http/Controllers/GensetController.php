<?php

namespace App\Http\Controllers;
use App\Genset;
use App\Pmgenset;
use App\User;
use App\http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GensetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Genset = Genset::orderBy('created_at', 'desc')->Paginate(20);

        
        return view('/genset.index', compact('Genset'));        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('/genset.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $datacatatan = $request->catatan;
        if ($datacatatan==null){
            $catatan ="Nihil";
        }else{$catatan = $datacatatan;

        }
        $Genset= Genset::create([
            'teknisi'=> $request->teknisi, 
            'shift'=> $request->shift, 
            'spv'=> $request->spv,
            'leveloli'=> $request->leveloli, 
            'modemodulpkg'=> $request->modemodulpkg, 
            'levelradiator'=> $request->levelradiator, 
            'odometer'=> $request->odometer, 
            'airfilter'=> $request->airfilter,
            'pompasolar'=> $request->pompasolar, 
            'valvesolar'=> $request->valvesolar, 
            'voltagecharger'=> $request->voltagecharger, 
            'voltageaccu'=> $request->voltageaccu,
            'amf'=> $request->amf, 
            'emergencybutton'=> $request->emergencybutton,
            'bodygenset'=> $request->bodygenset,
            'catatan'=> $catatan
        ]);
        return redirect('/genset' )->with('status', 'Data Berhasil Ditambahkan!'); 
        


          }

    /**
     * Display the specified resource.
     *
     * @param  \App\Genset  $genset
     * @return \Illuminate\Http\Response
     */
    public function show(Genset $genset)
    {
       return view('/genset.view',compact('genset'));
    }

    public function search(Request $request)
    { 
        $request->validate([
                'startdate'=>'required',
                'todate'=>'required'
            ]);

        $tabel= Genset::all();
        $kaping1=$request->startdate;
        $kaping2=$request->todate;
        $menitawal="00:00:00";
        $menitakhir="23:59:59";
        $awalkaping= $kaping1.' '.$menitawal;
        $tungtungkaping=$kaping2.' '.$menitakhir;
        $Genset = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);

   return view('/genset.filter', compact('Genset'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Genset  $genset
     * @return \Illuminate\Http\Response
     */
    public function edit(Genset $genset)
    { 
        return view('/genset.edit', compact('genset'));        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Genset  $genset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genset $genset)
    { 
        
        Genset::where ('id', $genset->id)
        ->update([
                    'teknisi'=>$request->teknisi,
                    'shift'=>$request->shift,
                    'spv'=>$request->spv,
                    'leveloli'=>$request->leveloli,
                    'modemodulpkg'=>$request->modemodulpkg,
                    'levelradiator'=>$request->levelradiator,
                    'odometer'=>$request->odometer,
                    'airfilter'=>$request->airfilter,
                    'pompasolar'=>$request->pompasolar,
                    'valvesolar'=>$request->valvesolar,
                    'voltageaccu'=>$request->voltageaccu,
                    'voltagecharger'=>$request->voltagecharger,
                    'amf'=>$request->amf,
                    'emergencybutton'=>$request->emergencybutton,
                    'bodygenset'=>$request->bodygenset,
                    'catatan'=>$request->catatan
                ]);
return redirect('/genset' )->with('status', 'Data Berhasil Diedit!');
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Genset  $genset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genset $genset)
    {
        $genset->delete();
    return redirect('/genset' )->with('status', 'Data Berhasil Dihapus!');
    }

public function export(Request $request)
    {  $tabel= Genset::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $Genset = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
              // return $Genset;
          return view('/genset.export', compact('Genset'));    
    }

public function indexpm()
    {
        $pmGenset = Pmgenset::orderBy('created_at', 'desc')->Paginate(5);

        
        return view('/genset.indexpm', compact('pmGenset'));        
    }

public function showpm(Pmgenset $pmgenset)
    {
        return view('/genset.viewpm', compact('pmgenset'));          
    }

public function editpm(Pmgenset $pmgenset)
    { 
        return view('/genset.editpm', compact('pmgenset'));          
    }
public function exportpm(Request $request)
    { $pmgenset = $request;

        return view('/genset.exportpm', compact('pmgenset'));          
    }
    
public function createpm()
    {
       return view('/genset.createpm');
        
    }

public function storepm(Request $request)
     {  

        $request->validate([
            'nama'=> 'required',
            'jadwalpm'=> 'required', 
            'planpm'=> 'required', 
            'l1'=> 'required', 
            'l2'=> 'required', 
            'l3'=> 'required', 
            'l4'=> 'required', 
            'l5'=> 'required', 
            'l6'=> 'required', 
            'l7'=> 'required', 
            'l8'=> 'required', 
            'l9'=> 'required', 
            'l10'=> 'required', 
            'l11'=> 'required', 
            'l12'=> 'required', 
            'l13'=> 'required', 
            'l14'=> 'required', 
            'l15'=> 'required', 
            'vr'=>'required',
            'vs'=>'required', 
            'vt'=>'required',
            'ampr'=>'required', 
            'amps'=>'required', 
            'ampt'=>'required', 
            'l18'=> 'required', 
            'l19'=> 'required', 
            'l20'=> 'required', 
            'l21'=> 'required', 
            'l22'=> 'required', 
            'l23'=> 'required', 
            'l24'=> 'required', 
            'l25'=> 'required', 
            'l26'=> 'required',
        ]);

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
        $datal19k19 = $request->l19k19;if ($datal19k19==null){$l19k19 ="Nihil";}else{$l19k19 = $datal19k19;}
        $datal20k20 = $request->l20k20;if ($datal20k20==null){$l20k20 ="Nihil";}else{$l20k20 = $datal20k20;}
        $datal21k21 = $request->l21k21;if ($datal21k21==null){$l21k21 ="Nihil";}else{$l21k21 = $datal21k21;}
        $datal22k22 = $request->l22k22;if ($datal22k22==null){$l22k22 ="Nihil";}else{$l22k22 = $datal22k22;}
        $datal23k23 = $request->l23k23;if ($datal23k23==null){$l23k23 ="Nihil";}else{$l23k23 = $datal23k23;}
        $datal24k24 = $request->l24k24;if ($datal24k24==null){$l24k24 ="Nihil";}else{$l24k24 = $datal24k24;}
        $datal25k25 = $request->l25k25;if ($datal25k25==null){$l25k25 ="Nihil";}else{$l25k25 = $datal25k25;}
        $datal26k26 = $request->l26k26;if ($datal26k26==null){$l26k26 ="Nihil";}else{$l26k26 = $datal26k26;}
        $pmgenset= Pmgenset::create([
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
            'vr'=>$request->vr,
            'vs'=>$request->vs, 
            'vt'=>$request->vt,
            'ampr'=>$request->ampr, 
            'amps'=>$request->amps, 
            'ampt'=>$request->ampt, 
            'l18'=> $request->l18, 
            'l19'=> $request->l19, 
            'l20'=> $request->l20, 
            'l21'=> $request->l21, 
            'l22'=> $request->l22, 
            'l23'=> $request->l23, 
            'l24'=> $request->l24, 
            'l25'=> $request->l25, 
            'l26'=> $request->l26, 

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
            'l19k19'=> $l19k19, 
            'l20k20'=> $l20k20, 
            'l21k21'=> $l21k21, 
            'l22k22'=> $l22k22, 
            'l23k23'=> $l23k23, 
            'l24k24'=> $l24k24, 
            'l25k25'=> $l25k25, 
            'l26k26'=> $l26k26,  
        ]);
        return redirect('/pmgenset' )->with('status', 'Data Berhasil Ditambahkan!'); 
          }

public function updatepm(Request $request, Pmgenset $pmgenset)
    {
        Pmgenset::where ('id', $pmgenset->id)
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
                    'vr'=>$request->vr,
                    'vs'=>$request->vs, 
                    'vt'=>$request->vt,
                    'ampr'=>$request->ampr, 
                    'amps'=>$request->amps, 
                    'ampt'=>$request->ampt, 
                    'l18'=> $request->l18, 
                    'l19'=> $request->l19, 
                    'l20'=> $request->l20, 
                    'l21'=> $request->l21, 
                    'l22'=> $request->l22, 
                    'l23'=> $request->l23, 
                    'l24'=> $request->l24, 
                    'l25'=> $request->l25, 
                    'l26'=> $request->l26, 

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
                    'l19k19'=> $request->l19k19, 
                    'l20k20'=> $request->l20k20, 
                    'l21k21'=> $request->l21k21, 
                    'l22k22'=> $request->l22k22, 
                    'l23k23'=> $request->l23k23, 
                    'l24k24'=> $request->l24k24, 
                    'l25k25'=> $request->l25k25, 
                    'l26k26'=> $request->l26k26,
                ]);
            return redirect('/pmgenset' )->with('status', 'Data Berhasil Diupdate!');
         }

public function destroypm(Pmgenset $pmgenset)
    {
        
    $pmgenset->delete();
    return redirect('/pmgenset' )->with('status', 'Data Berhasil Dihapus!');

    }

public function cari(Request $request)
  { 
    $cari = $request->get('#');
    $pmGenset= Pmgenset::where('nama','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/genset.indexpm', compact('pmGenset'));
 
  }

  public function teangan(Request $request)
  { 
    $cari = $request->get('#');
    $Genset= Genset::where('teknisi','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/genset.index', compact('Genset'));
 
  }

}