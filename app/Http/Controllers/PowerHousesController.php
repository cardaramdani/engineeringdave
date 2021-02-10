<?php

namespace App\Http\Controllers;

use App\PowerHouse;
use App\Pmpanel;
use Illuminate\Http\Request;
use App\User;
use App\http\Controllers\Controller;
class PowerHousesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {$PowerHouse = PowerHouse::orderBy('created_at', 'desc')->Paginate(20);

        
        return view('/powerhouse.index', compact('PowerHouse'));
        
         }
    public function indexpm()
    {$Pmpanel = Pmpanel::orderBy('created_at', 'desc')->Paginate(20);

        
        return view('/powerhouse.indexpm', compact('Pmpanel'));
        
         }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/powerhouse.create');    
            }

    public function createpm()
    {
        return view('/powerhouse.createpm');    
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
            $temuan ="Nihil";
        }else{$temuan = $datacatatan;

        }
        $Genset= PowerHouse::create([
            'teknisi'=> $request->teknisi, 
            'shift'=> $request->shift, 
            'spv'=> $request->spv,
            'kwh1'=>$request->kwh1,'kwh2'=>$request->kwh2,
            'kva1'=>$request->kva1,'kva2'=>$request->kva2,
            'kvarh1'=>$request->kvarh1,'kvarh2'=>$request->kvarh2,
            'ampere1r'=>$request->ampere1r,'ampere2r'=>$request->ampere2r,'ampere1s'=>$request->ampere1s,'ampere2s'=>$request->ampere2s,'ampere1t'=>$request->ampere1t,'ampere2t'=>$request->ampere2t,'v1rs'=>$request->v1rs,'v2rs'=>$request->v2rs,'v1st'=>$request->v1st,'v2st'=>$request->v2st,'v1tr'=>$request->v1tr,'v2tr'=>$request->v2tr,'v1rn'=>$request->v1rn,'v2rn'=>$request->v2rn,'v1sn'=>$request->v1sn,'v2sn'=>$request->v2sn,'v1tn'=>$request->v1tn,'v2tn'=>$request->v2tn,'freq1'=>$request->freq1,'freq2'=>$request->freq2,'selektor1'=>$request->selektor1,'selektor2'=>$request->selektor2,'fan1'=>$request->fan1,'fan2'=>$request->fan2,'pf1'=>$request->pf1,'pf2'=>$request->pf2,'cap1'=>$request->cap1,'cap2'=>$request->cap2,'fancap1'=>$request->fancap1,'fancap2'=>$request->fancap2,'tempcap1'=>$request->tempcap1,'tempcap2'=>$request->tempcap2,'levelolitrafo1'=>$request->levelolitrafo1,'levelolitrafo2'=>$request->levelolitrafo2,'temptrafo1'=>$request->temptrafo1,'temptrafo2'=>$request->temptrafo2,
            'temuan'=> $temuan
        ]);
        return redirect('/PowerHouse' )->with('status', 'Data Berhasil Ditambahkan!');    
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
        $datal19k19 = $request->l19k19;if ($datal19k19==null){$l19k19 ="Nihil";}else{$l19k19 = $datal19k19;}
        $datal20k20 = $request->l20k20;if ($datal20k20==null){$l20k20 ="Nihil";}else{$l20k20 = $datal20k20;}
        $pmgenset= Pmpanel::create([
            'nama'=> $request->nama, 
            'jadwalpm'=> $request->jadwalpm, 
            'planpm'=> $request->planpm, 
            'lokasi'=> $request->lokasi, 
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
            'l19'=> $request->l19, 
            'l20'=> $request->l20, 
            
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
              
        ]);
        return redirect('/pmpanel' )->with('status', 'Data Berhasil Ditambahkan!');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\PowerHouse  $powerHouse
     * @return \Illuminate\Http\Response
     */
    public function show(PowerHouse $powerHouse)
    {
        return view('/powerhouse.view', compact('powerHouse'));          
        //
    }

    public function showpm(Pmpanel $pmpanel)
    {
        return view('/powerhouse.viewpm', compact('pmpanel'));          
    }

    public function search(Request $request)
    { 
    $request->validate([
            'startdate'=>'required',
            'todate'=>'required'
        ]);

    $tabel= PowerHouse::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $PowerHouse =  $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);

   return view('/powerhouse.filter', compact('PowerHouse'));
   
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PowerHouse  $powerHouse
     * @return \Illuminate\Http\Response
     */
    public function edit(PowerHouse $powerHouse)
    { 
        return view('/powerhouse.edit', compact('powerHouse'));        
         }

    public function editpm(Pmpanel $pmpanel)
    { 
        return view('/powerhouse.editpm', compact('pmpanel'));        
         }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PowerHouse  $powerHouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PowerHouse $powerHouse)
    {
        
        PowerHouse::where ('id', $powerHouse->id)
        ->update([
                    'teknisi'=> $request->teknisi, 
                    'shift'=> $request->shift, 
                    'spv'=> $request->spv,
                    'kwh1'=>$request->kwh1,'kwh2'=>$request->kwh2,
                    'kva1'=>$request->kva1,'kva2'=>$request->kva2,
                    'kvarh1'=>$request->kvarh1,'kvarh2'=>$request->kvarh2,
                    'ampere1r'=>$request->ampere1r,'ampere2r'=>$request->ampere2r,'ampere1s'=>$request->ampere1s,'ampere2s'=>$request->ampere2s,'ampere1t'=>$request->ampere1t,'ampere2t'=>$request->ampere2t,'v1rs'=>$request->v1rs,'v2rs'=>$request->v2rs,'v1st'=>$request->v1st,'v2st'=>$request->v2st,'v1tr'=>$request->v1tr,'v2tr'=>$request->v2tr,'v1rn'=>$request->v1rn,'v2rn'=>$request->v2rn,'v1sn'=>$request->v1sn,'v2sn'=>$request->v2sn,'v1tn'=>$request->v1tn,'v2tn'=>$request->v2tn,'freq1'=>$request->freq1,'freq2'=>$request->freq2,'selektor1'=>$request->selektor1,'selektor2'=>$request->selektor2,'fan1'=>$request->fan1,'fan2'=>$request->fan2,'pf1'=>$request->pf1,'pf2'=>$request->pf2,'cap1'=>$request->cap1,'cap2'=>$request->cap2,'fancap1'=>$request->fancap1,'fancap2'=>$request->fancap2,'tempcap1'=>$request->tempcap1,'tempcap2'=>$request->tempcap2,'levelolitrafo1'=>$request->levelolitrafo1,'levelolitrafo2'=>$request->levelolitrafo2,'temptrafo1'=>$request->temptrafo1,'temptrafo2'=>$request->temptrafo2,
            'temuan'=> $request->temuan
                ]);
        return redirect('/PowerHouse' )->with('status', 'Data Berhasil Diedit!');    
    }

    public function updatepm(Request $request, Pmpanel $pmpanel)
    {
        Pmpanel::where ('id', $pmpanel->id)
        ->update([
                    'nama'=> $request->nama, 
                    'jadwalpm'=> $request->jadwalpm, 
                    'planpm'=> $request->planpm, 
                    'lokasi'=> $request->lokasi, 
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
                    'l19'=> $request->l19, 
                    'l20'=> $request->l20, 
    
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
                    
                ]);
            return redirect('/pmpanel' )->with('status', 'Data Berhasil Diupdate!');
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PowerHouse  $powerHouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(PowerHouse $powerHouse)
    {
        $powerHouse->delete();
    return redirect('/PowerHouse' )->with('status', 'Data Berhasil Dihapus!');
    }

    public function destroypm(Pmpanel $pmpanel)
    {
        
    $pmpanel->delete();
    return redirect('/pmpanel' )->with('status', 'Data Berhasil Dihapus!');

    }

    public function export(Request $request)
    {  
        $tabel= PowerHouse::all();
    $kaping1=$request->startdate;
    $kaping2=$request->todate;
    $menitawal="00:00:00";
    $menitakhir="23:59:59";
    $awalkaping= $kaping1.' '.$menitawal;
    $tungtungkaping=$kaping2.' '.$menitakhir;
    $PowerHouse = $tabel->whereBetween('created_at', [$awalkaping,$tungtungkaping]);
             
          return view('/powerhouse.export', compact('PowerHouse'));    
    }
    public function exportpm(Request $request){
        $pmpanel = $request;
        return view('/powerhouse.exportpm', compact('pmpanel'));          
    }
    
    public function cari(Request $request)
  { 
    $cari = $request->get('#');
    $Pmpanel= Pmpanel::where('nama','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orWhere('lokasi','like','%'.$cari.'%')->Paginate();
   return view('/powerhouse.indexpm', compact('Pmpanel'));
 
  }

  public function teangan(Request $request)
  { 
    $cari = $request->get('#');
    $PowerHouse= PowerHouse::where('teknisi','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/PowerHouse.index', compact('PowerHouse'));
 
  }
}
