<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }}</title>
    <!--STYLESHEET-->
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/nifty.min.css')}}" rel="stylesheet">
    
    <link href="{{ asset('css/theme-navy.min.css') }}" rel="stylesheet">
    
    <link href="{{ asset('css/nifty-demo-icons.min.css') }}" rel="stylesheet">
    
    
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/nifty.min.js')}}"></script>
    
    <style>
        .form-error {
            color: red;
            font-style: italic;
        }
        .donot_show {
            display: none !important;
        }
        #showIMEI {
            display: none;
        }
        .bootstrap-select.btn-group .dropdown-menu {
            max-height: 250px !important;
        }
        .bootstrap-select.btn-group .dropdown-menu.inner {
            max-height: 220px !important;
        }
        #designation_fa {
            display: none;
        }
        .registration-form .mylabel {
            display: block;
            padding-bottom: 3px;
        }
</style>

</head>
<body>

    <div id="container" class="effect aside-float aside-bright mainnav-out slide">

    <header id="navbar">
            <div id="navbar-container" class="boxed">
                <!--Brand logo & name-->
                
                <div class="navbar-header">
                    <a href="" class="navbar-brand">
                        <img src="{{ asset('img/pitb.png') }}" class="brand-icon" alt="" class="">
                        <div class="brand-title">
                            <span class="brand-text pad-hor">{{ config('app.name') }} </span>
                        </div>
                    </a>
                </div>
                
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">


                    </ul>
                    
                </div>
                
                <!--End Navbar Dropdown-->

            </div>
        </header>

        <div class="boxed">
            
            <div id="content-container">            
                
                <div id="page-head"> 
    
                    <div id="page-title">
                        <h1 class="page-header text-overflow">Registration Type Selection</h1>
                    </div> <!-- page title  -->
                    
                </div> <!-- page head  -->

                <div id="page-content">
                    <div class="row">
                        <div class="col-lg-12">
                        
                        
                        @yield('content');
                        </div>
                    </div> <!-- row div  -->
                </div> <!-- page-content div  -->


                
            </div> <!-- content-container div  -->
            
        </div> <!-- End Boxed Div  --> 
        


    </div> <!-- end div ID container -->

</body>