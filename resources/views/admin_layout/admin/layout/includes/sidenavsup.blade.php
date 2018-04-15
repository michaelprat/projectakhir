{{-- Side Navigation --}}
<div class="col-md-2">
    <div class="sidebar content-box" style="display: block;">
        <ul class="nav">
            <!-- Main menu -->
            <li class="current"><a href="{{url('/homesupplier')}}"><i class="glyphicon glyphicon-home"></i>
                    Dashboard</a></li>
            <li class="submenu">
                <a href="#">
                    <i class="glyphicon glyphicon-list"></i> Products
                    <span class="caret pull-right"></span>
                </a>
                <!-- Sub menu -->
                <ul>
                    <li><a href="{{url('/addproduct')}}">Add Product</a></li>
                </ul>
                <ul>
                    <li><a href="{{url('/list')}}">View Product</a></li>
                </ul>
                <ul>
                    <li>   <a href="{{url('/addExcel')}}">Add Product by Excel files</a></li>
                </ul>
            </li>
            <li class="current"><a href="{{url('/overall')}}"><i class="glyphicon glyphicon-shopping-cart"></i>
                    View transaction</a></li>
            <li class="current"><a href="{{url('/logout')}}"><i class="glyphicon glyphicon-off"></i>
                    Logout</a></li>
        </ul>
    </div>
</div> 