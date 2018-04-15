@extends('layout.indexuser')
@section('title') Anime Shop
@endsection

@section('content')
<br>
<br>
<br>
<div class="subheader text-center">
             <h2>
           Shopping Cart
        </h2>
        </div>
<br>
<br>
<table id="customerstengah">
  <tr>
    <th>Products Name</th>
    <th>Price </th>
    <th>Quantity</th>
    <th>Change Quantity</th>
    <th>Remove Products</th>
</tr>
@if(Cart::count()==0)
<tr>
    <td colspan=5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No item in the cart</td>
<tr>
@else
  @foreach($cartitem as $cartItem)
  <tr>
    <td>{{$cartItem->name}}</td>
    <td>Rp.{{$cartItem->price}}</td>
    <td>
       @foreach($produk as $tampil)
       @if($cartItem->id==$tampil->id)
       @php 
       $batas=$tampil->quantity
       @endphp
       @endif
       @endforeach
         {!! Form::open(['route'=>['cart.update',$cartItem->rowId],'method'=>'PUT']) !!}
        {!! Form::number('qty',$cartItem->qty, ['min' => '1', 'max' => $batas]) !!}
    </td>
    <td>
    {!! Form::submit('Change Quantity', array('class' => 'btn btn-lg btn-success btn-block')) !!}
    {!! Form::close() !!}
    </td>
    <td>
    {!! Form::open(['route'=>['cart.destroy',$cartItem->rowId],'method'=>'PUT']) !!}
    {!! Form::submit('remove    ', array('class' => 'btn btn-lg btn-success btn-block')) !!}
    {!! Form::close() !!}
  </tr>
  @endforeach
 @endif
</table>
<table id="customerstengah">
<tr>
    <th>Total Price </th>
    <td>Rp.{{ Cart::total() }}</td>
</tr>
<tr>
    <th>Total Item</th>
    <td>{{ Cart::count() }} </td>
</tr> 
</table>
<br>
<br><br>

<div class="subheader text-center">
         <a href="{{url('/checkout')}}" class="button">Checkout</a>
        </div>
<br><br>
<br>


@endsection