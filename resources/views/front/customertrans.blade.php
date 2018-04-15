@extends('layout.indexuser')
@section('title') Anime Shop
@endsection

@section('content')
<br>
<br>
<br>
<div class="subheader text-center">
             <h2>
           Transaction History 
        </h2>
        </div>
<br>
<br>
<br>
<table id="customerstengah">
  <tr>
    <th>Transaction Date</th>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Price</th>

</tr>
@if($log->isEmpty())
<tr>
<td colspan=4>There is no transaction being made yet</td>
</tr>
@else
@php
$grandtotal=0;
$totalamount=0;
@endphp
  @foreach($log as $tampil)
  <tr>
   
    
    <td>{{$tampil->created_at->format('d/m/Y')}}</td>
    <td>
        @foreach($produk as $detail)
        @if($tampil->id_barang==$detail->id)
         {{$detail->nama}}
         @endif
        @endforeach
     </td>
    <td>
      {{$tampil->barang_keluar}}
      @php
      $totalamount=$totalamount+$tampil->barang_keluar
      @endphp
    </td>
    <td>
      @foreach($produk as $detail)
        @if($tampil->id_barang==$detail->id)
        Rp.{{$detail->harga}}
         @php
         $grandtotal=$grandtotal+$detail->harga
         @endphp
         @endif
        @endforeach
    </td>
   
 
  </tr>

  @endforeach
 
</table>
<table id="customerstengah">
<tr>
    @php
    $grandtotal=$grandtotal*$totalamount;
    @endphp
    <th>Total Money Spended</th>
    <td>Rp. {{$grandtotal}}</td>
</tr>
<tr>
    <th>Total Item Bought </th>
    <td> {{$totalamount}}</td>
</tr> 
@endif
</table>

<br>
<br><br>
<br>
<br><br>


@endsection