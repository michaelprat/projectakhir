@extends('admin_layout.admin.layout.admin')
@section('content')
<h3>Overall Transaction Log </h3>
<br>
<br>
<br>
<h3>Store Deposit</h3>
<br>
<br>
<br>
<br>
<br>
<table id="customerstengah">
  <tr>
    <th>Transaction Date</th>
    <th>Detail</th>
    

</tr>
@if($stock->isEmpty())
<tr>
<td colspan=2>No Stock transaction being made </td>
</tr>
@else
@php
$grandtotal=0;
$tampungdata=0;
@endphp

  @foreach($stock as $tampil)
 
 
    @php
    $tampungdata=$tampil->id_barang
    @endphp
 
  <tr>
   
   
    <td>{{$tampil->created_at->format('d/m/Y')}}</td>
    <td>
        @foreach($produk as $detail)
        @if($tampungdata==$detail->id)
        Pemasukan barang {{$detail->nama}} sebanyak  {{$tampil->barang_masuk}}
        @endif
        @endforeach
     </td>

 
  </tr>
  
  @endforeach
@endif
</table>

   <div class="pagination pagination-centered">
						
   {{$stock->appends(['stock' => $stock->currentPage()])->links()}}    
                      
    </div>
    <br>
    <br>
    <br>
<br>
<h3>Sales report </h3>
<br>
<br>
<br>
<br>
<br>
<table id="customerstengah">
  <tr>
    <th>Transaction Date</th>
    <th>Detail</th>
    

</tr>
@if($sales->isEmpty())
<tr>
<td colspan=2>No Sales transaction being made </td>
</tr>
@else
@php
$grandtotal=0;
$tampungdata=0;
@endphp

  @foreach($sales as $tampil)
 
 
    @php
    $tampungdata=$tampil->id_barang
    @endphp
 
  <tr>
   
   
    <td>{{$tampil->created_at->format('d/m/Y')}}</td>
    <td>
        @foreach($produk as $detail)
        @if($tampungdata==$detail->id)
        Penjualan barang  {{$detail->nama}} sebanyak  {{$tampil->barang_keluar}}
        @endif
        @endforeach
     </td>

 
  </tr>
  
  @endforeach
@endif
</table>

   <div class="pagination pagination-centered">
						
   {{$sales->appends(['stock' => $stock->currentPage()])->links()}}    
                        </div>   
    </div>


@endsection