@extends('admin_layout.admin.layout.supplier')
@section('content')

  <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Supplier Dashboard</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <br>
                <br>
    <div class="row">
        @php 
        $totalsale=0;
        
        @endphp
       
          @foreach($transaksi as $tampil)
          
            @php
          $idtampung=$tampil->id_barang
          @endphp
           @foreach($produk as $detail)
             @if(Sentinel::getUser()->id==$detail->id_distributor && $idtampung==$detail->id)
               @php
             
            $totalsale=$totalsale+1
           
               @endphp
             @endif
           @endforeach 
          @endforeach
         
         
         
         
          
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$totalsale}}</div>
                                        <div>Transaction Success</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('/overall')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
        @php 
        $totalbarang=0
        @endphp
          @foreach($produk as $detail)
             @if(Sentinel::getUser()->id==$detail->id_distributor)
               @php
             
            $totalbarang=$totalbarang+1
           
               @endphp
             @endif
           @endforeach 
           <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-bag  fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$totalbarang}}</div>
                                        <div>Products uploaded</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
      @php 
        $totalqty=0
        @endphp
          @foreach($produk as $detail)
             @if(Sentinel::getUser()->id==$detail->id_distributor)
               @php
             
            $totalqty=$totalqty+$detail->quantity
           
               @endphp
             @endif
           @endforeach 
           <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-cubes  fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$totalqty}}</div>
                                        <div>Total quantity</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('/list')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
    @php 
        $totalzeroqty=0
        @endphp
          @foreach($produk as $detail)
             @if(Sentinel::getUser()->id==$detail->id_distributor && $detail->quantity==0)
               @php
             
            $totalzeroqty=$totalzeroqty+1
           
               @endphp
             @endif
           @endforeach 
           <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-cubes  fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">{{$totalzeroqty}}</div>
                                        <div>Produt sold out</div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{url('/list0')}}">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
         </div>
         <div class="row">

         <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-bar-chart-o fa-fw"></i> Top 5 best seller product
                                <div class="pull-right">
                                    <div class="btn-group">
                                     
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                        <table id="customers">
                                            <tr>
   
                                                    <th>Product Name</th>
                                                    <th>Price</th>
                                                    <th>Total Sold</th>
                                                    <th>quantity left</th>
                                            </tr>
                                            @if($sortedproduct->isEmpty())
                                            <tr>
                                            <td colspan=4>There is No product sold yet</td>
                                            </tr>
                                            @else
                                                @foreach($sortedproduct as $detail)
                                           
                                                <tr>
                                                    <td>{{$detail->nama}}</td>
                                                    <td>{{$detail->harga}}</td>
                                                    <td>{{$detail->terjual}}</td>
                                                    <td>{{$detail->quantity}}</td>
                                                </tr>
                                                
                                                @endforeach
                                            @endif
                                          </table>
                                        </div>
                                        <!-- /.table-responsive -->
                                    </div>
                                
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.panel-body -->
         

</div>

@endsection