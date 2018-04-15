@extends('admin_layout.admin.layout.admin')
@section('content')
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Admin Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <br>
                <br>

                 <br>
                <br>
    <div class="row">
        @php 
        $totaluser=0;
        
        @endphp
       
          @foreach($user as $tampil)
           @php
           $totaluser=$totaluser+1
           @endphp
          @endforeach
         
         
          <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-address-card fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$totaluser}}</div>
                                        <div>Total user registered</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('/listuser')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @php 
        $totaltransaksi=0
        @endphp
          @foreach($transaksi as $detail)
          @php
            $totaltransaksi=$totaltransaksi+1
           
               @endphp

           @endforeach 
           <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-bag  fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$totaltransaksi}}</div>
                                        <div>Total transaksi</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('/listtransaksi')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
         
    </div>
</div>
@endsection