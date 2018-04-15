<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
 


    </head>
    <body>
        <div  class="top-bar">
            <div style="color:white" class="top-bar-left">
                <h4 class="brand-title">
                <a href="{{url('/home')}}"> 
                        <i class="fa fa-home fa-lg" aria-hidden="true">
                        </i>
                      MyHobby
                    </a>
                </h4>
            </div>
            <div class="top-bar-right">
                <ol class="menu">
                    <li>
                        <a href="{{url('/product')}}">
                           PRODUCTS
                        </a>
                    </li>
                    <li>
                    <a href="{{url('/login')}}"> 
                            LOG-IN
                        </a>
                    </li>
                    <li>
                    <a href="{{url('/register')}}"> 
                            <i class="fa fa-address-book fa-2x" aria-hidden="true">
                            </i>
                            Register
                        </a>
                    </li>
                </ol>
            </div>
        </div>

@yield('content')
<footer class="footer">
  <div class="row full-width">
    <div class="small-12 medium-4 large-4 columns">
        <br>
        <br>
      <i class="fa fa-truck"></i>
      <h4>Easy Shipment</h4>
      <p>The products that transacted by MyHobby will have an insurance in shipment and Quality </p>
    </div>
    <div class="small-12 medium-4 large-4 columns">
    <br>
        <br>
        
      <i class="fa fa-balance-scale"></i>
      <h4>Genunity Assured</h4>
      <p>The Products which is shipped through myhobby is genuinely approved by ISO</p>
    </div>
   
        
        
     
    <div class="small-6 medium-4 large-4 columns">
    <br>
        <br>
    <i class="fa fa-phone"></i>
    <h4>Contact Us</h4>
    <p>Phone:+352-70890888</p>
    <p>Address:Brown Street 4A ,penang,Malaysia</p>
    </div>
  </div>
</footer>

    <script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
    <script src="{{asset('dist/js/app.js')}}"></script>
    
    </body>
</html>
