@extends('admin_layout.admin.layout.admin')
@section('content')
<h3>User list </h3>
    <br>
    <br>    
    <br>
<br>
<br>
<table id="customerstengah">
  <tr>
    <th>User Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Telephone</th>
    <th>User Role</th>
    <th>Edit</th>
    </tr>
@foreach($user as $tampil)
<tr>
<td>{{$tampil->id}}</td>
<td>{{$tampil->first_name}}</td>
<td>{{$tampil->last_name}}</td>
<td>{{$tampil->email}}</td>
<td>{{$tampil->address}}</td>
<td>{{$tampil->telephone}}</td>
<td>@if($tampil->role_id==2) 
User
@else
Supplier
@endif
</td>

<td>{!! link_to(route('homeadm.edit',$tampil->id),'Edit') !!}</td>     

</tr>
@endforeach
</table>
@endsection