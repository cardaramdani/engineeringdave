<?php

namespace App\Http\Controllers;

use App\Pmclean_water_tank;
use Illuminate\Http\Request;
use App\http\Controllers\Controller;
use App\User;
class PmcleanWaterTankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexpm()
    {$Pmcwt = Pmclean_water_tank::orderBy('created_at', 'desc')->Paginate(20);

        
        return view('/cwt.indexpm', compact('Pmcwt'));
        
         }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function createpm()
    {
        return view('/cwt.createpm');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $Pmcwt= Pmclean_water_tank::create([
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
            
        ]);
        return redirect('/cwt' )->with('status', 'Data Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Firealarm  $firealarm
     * @return \Illuminate\Http\Response
     */
    public function show(Pmclean_water_tank $cwt)
    {
        //
    }

    public function showpm(Pmclean_water_tank $cwt)
    {
        return view('/cwt.viewpm', compact('cwt'));          
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pmclean_water_tank  $Pmclean_water_tank
     * @return \Illuminate\Http\Response
     */
    public function edit(Pmclean_water_tank $cwt)
    {
        //
    }

    public function editpm(Pmclean_water_tank $cwt)
    { 
        return view('/cwt.editpm', compact('cwt'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pmclean_water_tank  $Pmclean_water_tank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pmclean_water_tank $cwt)
    {
        //
    }

    public function updatepm(Request $request, Pmclean_water_tank $cwt)
    {
        Pmclean_water_tank::where ('id', $cwt->id)
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
                    
                ]);
            return redirect('/cwt' )->with('status', 'Data Berhasil Diupdate!');
         }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pmclean_water_tank  $Pmclean_water_tank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pmclean_water_tank $cwt)
    {
        //
    }

    public function destroypm(Pmclean_water_tank $cwt)
    {
        
    $cwt->delete();
    return redirect('/cwt' )->with('status', 'Data Berhasil Dihapus!');

    }

    public function exportpm(Request $request){
        
        $cwt = $request;
        return view('/cwt.exportpm', compact('cwt'));          
    }

    public function cari(Request $request)
  { 
    $cari = $request->get('#');
    $Pmcwt= Pmclean_water_tank::where('nama','like','%'.$cari.'%')
    ->orWhere('created_at','like','%'.$cari.'%')
    ->orderBy('created_at', 'desc')->Paginate();
   return view('/cwt.indexpm', compact('Pmcwt'));
 
  }
}