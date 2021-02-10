



<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=pm_AC.xls");
?>
        
<h1 align="center" class="my-5" >Form Preventive AC</h1>
<table border="1" cellpadding="5">    
<tbody>
    <thead class="thead-dark" align="center">
<tr>
            <th scope="col" class="align-middle" colspan="5" style="background-color: gray">
            logo
            </th>
            <th scope="col" align="center" class="align-middle" colspan="9" style="background-color: gray">PM SCHEDULE : {{$pmac->jadwalpm}}
            </th>
            <th scope="col" align="center"  class="align-middle" colspan="4" style="background-color: gray">Halaman 1-1</th>
</tr>

<tr>
            <th scope="col" align="left"  class="align-middle" colspan="5" rowspan="2" style="background-color: gray">EQUIPMENT : Air Conditioner<br>
            Lokasi Unit : {{$pmac->lokasi_unit}} <br>
            Item No  : {{$pmac->item_no}}
            </th>

            <th scope="col" align="left" class="align-middle" style="background-color: gray">PLAN SCHEDULE :</th>
            <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray"> {{$pmac->planpm}}</th>
            <th scope="col" align="center"  class="align-middle" rowspan="2" style="background-color: gray">PM STATUS :</th>
            <th scope="col" align="left"  class="align-middle" colspan="4" rowspan="2" style="background-color: gray">C-Complate <br> B-Baik <br> R-Rusak <br> X-Belum waktunya cek</th>
</tr>

<tr>
          <th scope="col" align="left" class="align-middle" style="background-color: gray">AKTUAL CHECK :</th>
          <th scope="col" align="center" class="align-middle" colspan="7" style="background-color: gray">{{$pmac->aktualcek}}</th>

</tr>

</thead>

<tr>
    <td scope="col" align="center" colspan="6" class="font-weight-bold">CHECK LIST</td>
    <td scope="col" align="center" colspan="7" class="font-weight-bold">STATUS</td>
    <td scope="col" align="center" colspan="5" class="font-weight-bold">KETERANGAN</td>
        
</tr>

<tr>
        <th scope="col" align="left" colspan="18" class="font-weight-bold">3 Bulanan</th>
        
</tr>

<tr>
        <td scope="col" colspan="6" class="font-weight-bold align-middle">Cleaning air filter indoor unit</td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="7">
            {{$pmac->l1}}
        </td>
        
        <td scope="col" align="center" colspan="5" class="font-weight-bold align-middle">
         {{$pmac->l1k1}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Bersihkan fan blower indoor unit</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l2}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l2k2}}

        </td>
</tr>
<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Suara tidak kasar</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l3}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l3k3}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Periksa kekencangan skrew koneksi kabel indoor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l4}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l4k4}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Remote berfungsi baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l5}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l5k5}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Bersihkan PCB indoor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l6}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l6k6}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning cover indoor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l7}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l7k7}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cover indoor terpasang baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l8}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l8k8}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning/vakum drain</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l9}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l9k9}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Drain tidak bocor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l10}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l10k10}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning coil evap indoor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l11}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l11k11}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Coil evap tidak berkarat</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l12}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l12k12}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Fin coil evap tidak rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l13}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l13k13}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Pipe refrigerant Tidak bocor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l14}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l14k14}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Kedudukan Unit indoor terpasang baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l15}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l15k15}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Compresor Suara tidak kasar</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l16}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l16k16}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Ampere outdoor sesuai spesifikasi</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l17}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l17k17}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Fin outdoor tidak rusak</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l18}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l18k18}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning evap kondensor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l19}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l19k19}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Coil kondendor Tidak bocor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l20}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l20k20}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning motor fan outdoor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">
            {{$pmac->l21}}
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l21k21}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Periksa kekencangan skrew koneksi kabel outdoor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">

            {{$pmac->l22}}
  
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l22k22}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Pipe refrigerant Tidak bocor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">

            {{$pmac->l23}}
  
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l23k23}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Cleaning body unit outdoor</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">

            {{$pmac->l24}}
  
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l24k24}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Pondasi unit outdoor terpasang baik</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">

            {{$pmac->l25}}
  
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l25k25}}

        </td>
</tr>

<tr>
        <td scope="col"  colspan="6" class="font-weight-bold align-middle">Kabel power tidak panas</td>
        <td scope="col"  class="font-weight-bold align-middle" colspan="7" align="center">

            {{$pmac->l26}}
  
        </td>
        
        <td scope="col"  colspan="5" align="center" class="font-weight-bold align-middle">
         {{$pmac->l26k26}}

        </td>
</tr>

<tr>
  
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
         Dikerjakan Oleh :
         {{$pmac->nama}}

        </td>
        <td scope="col" align="center" class="font-weight-bold align-middle" colspan="9">
         Diperiksa Supervisor : {{$pmac->spv}}</td>
</tr>

</tbody>

  </table>
