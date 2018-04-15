<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>

#customerstengah {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  margin:auto;
    
}

#customerstengah td, #customerstengah th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

#customerstengah th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: blue;
    color: white;
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
    margin-top: 10px;
    
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: blue;
    color: white;
}













</style>
</head>
<body>
<br>
<br>
<H3 Align="center">Laporan Stock</h3>
<br>
<br>
<table id="customerstengah">
  <tr>
    <th>Id barang</th>
    <th>Nama barang</th>
    <th>Deskripsi barang</th>
    <th>Quantity</th>
    <th>Harga</th>
    <th>Terjual</th>
@if($trans->isEmpty())
<tr>
<td colspan=4>Anda belum memasukan barang</td>
</tr>
@else
@php
$totalstock=0;
$totalterjual=0;
$totalpenghasilan=0;
@endphp
    @foreach($trans as $key=>$item)
				<tr>
				
					<td>{!!$item->id!!}</td>
					<td>{!!$item->nama!!}</td>
					<td>{!!$item->description!!}</td>
          <td>{!!$item->quantity!!}
          @php
          $totalstock=$totalstock+$item->quantity
          @endphp
          
          </td>
          <td>{!!$item->harga!!}
        
          </td>
          <td>{!!$item->terjual!!}
          @php
          $totalterjual=$totalterjual+$item->terjual
          @endphp
        
          </td>
	
          @php
          $totalpenghasilan=$totalpenghasilan+($item->harga*$item->terjual)
          @endphp
          
         
                </tr>
                @endforeach
                </table>
                <br>
                <br>
  <table id="customerstengah">
    <tr>
    <th>Total Stock barang</th>
    <td>{{$totalstock}}</td>
    </tr>
    <tr>
    <th>Total barang terjual</th>
    <td>{{$totalterjual}}</td>
    </tr>
    <tr>
    <th>Total pendapatan</th>
    <td>Rp.{{$totalpenghasilan}}</td>
    </tr>
    </table>
@endif

</table>




</body>