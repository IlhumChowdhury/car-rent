<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Quick Cars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico')}}"> -->
    <script src="{{ URL::asset('resources/js/app.js')}}"></script>
    @livewireStyles

    @include('layouts.head-scripts')

    @livewireScripts
    
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
    
    <style>

/*!
 * Start Bootstrap - Simple Sidebar (https://startbootstrap.com/template-overviews/simple-sidebar)
 * Copyright 2013-2017 Start Bootstrap
 * Licensed under MIT 

(https://github.com/BlackrockDigital/startbootstrap-simple-sidebar/blob/master/LICENSE)
 */

#menu-toggle{
color:white;
position: absolute;
top: 46px;
left: -45.75px;
transform: rotate(90deg);
background: black;
}



#wrapper {
  padding-left: 250px;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#wrapper.toggled {
  padding-left: 0px;
}


#sidebar-wrapper {
  
  
		    position: absolute;
  
                    left: 250px;
  
                    width: 250px;
  
                    height: 86.5%;
  
                    margin-left: -250px;
  
                    overflow-y: scroll;

  		    overflow-x: hidden;
                    background: #000;
  
		    -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
		
}


#wrapper.toggled #sidebar-wrapper {width: 0px;
}


#page-content-wrapper {
  width: auto;
  position: absolute;
  padding: 50px;
}


#wrapper.toggled #page-content-wrapper {
  position: absolute;
  margin-right: -250px;
  width:100%;
}




/* Sidebar Styles */


.sidebar-nav {
  position: absolute;
  top: 0;
  width: 250px;
  margin: 0;
  padding: 0;
  list-style: none;
}


.sidebar-nav li {
  text-indent: 20px;
  line-height: 40px;
}


.sidebar-nav li a {
  display: block;
  text-decoration: none;
  color: #999999;
}


.sidebar-nav li a:hover {
  text-decoration: none;
  color: #fff;
  background: rgba(255, 255, 255, 0.2);
}


.sidebar-nav li a:active, .sidebar-nav li a:focus {
  text-decoration: none;
}


.sidebar-nav>.sidebar-brand {
  height: 65px;
  font-size: 18px;
  line-height: 60px;
}

.sidebar-nav>.sidebar-brand a {
  color: #999999;
}


.sidebar-nav>.sidebar-brand a:hover {
  color: #fff;
  background: none;
}


*

@media(min-width:768px) {
  
#wrapper {
    padding-left: 0;
  }
  
#wrapper.toggled {
    padding-left: 0px;
  }
  
#sidebar-wrapper {
    width: 250px;
  }
  
#wrapper.toggled 
#sidebar-wrapper {
    width: 250px;
  }
  
#page-content-wrapper {
    padding-left: 50px;
    position: relative;
  }
  
#wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0;
 padding-left: 35px; }

}

*


.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: white;
    text-align: center;
}

.row {
    margin-right: 0px;
    margin-left: 0px;
}
    </style>
</head>

<body data-sidebar="dark">

    <div id="layout-wrapper">
        @include('layouts.topbar')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    {{$slot}}
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            @include('layouts.footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @include('layouts.right-sidebar')
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    @include('layouts.footer-scripts')
</body>
</html>
