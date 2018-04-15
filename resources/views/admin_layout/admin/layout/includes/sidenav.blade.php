{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{url('/homeadmin')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Manage
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('/listuser')}}">List User</a></li>
                    <li><a href="{{url('/listtransaksi')}}">List Transaksi</a></li>
                </ul>
                   
            
            </li>
            <li class="current"><a href="{{route('logout')}}"><i class="glyphicon glyphicon-off"></i>
                 Log-out</a></li>
        </ul>
    </div>
</div> <!-- ADMIN SIDE NAV-->