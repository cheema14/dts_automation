<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TDS Automation | Log in Page</title>
    <!--STYLESHEET-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="{{ url('/css/nifty.min.css') }}" rel="stylesheet">
    <link href="{{ url('/css/theme-navy.min.css') }}" rel="stylesheet">
        
</head>



<body>
    <div id="container" class="cls-container">
        
		<!-- BACKGROUND IMAGE -->
		<div id="bg-overlay" class="bg-img" style='background-image: url("/img/7.jpg");'></div>
		
		
		<!-- LOGIN FORM -->
		<div class="cls-content">
        	
		    <div class="cls-content-sm panel">
            	
		        <div class="panel-body">
		            <div class="pad-btm text-center">
	                    <img src="{{ asset('img/pitb.png') }}" >

		                
		            </div>

                 @yield('content')   

		        </div>
		

		    </div>  <!--  end cls content-sm panel --> 
            
		</div> 
		
    </div>
    
    <!-- END OF CONTAINER -->


        
    
    <!--jQuery [ REQUIRED ]-->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="{{ asset('js/nifty.min.js') }}"></script>

</body>
</html>