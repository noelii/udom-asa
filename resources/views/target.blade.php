<!DOCTYPE html>
  <head>
  	<!-- 
    	Gloss Template
    	http://www.templatemo.com/preview/templatemo_433_gloss
    -->
   	<title>Target</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1">
 	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'> 

   	<link rel="stylesheet" href="{{url('target/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('target/css/bootstrap.min.css')}}"> 
   	<link rel="stylesheet" href="{{url('target/css/templatemo_misc.css')}}">
	<link rel="stylesheet" href="{{url('target/css/templatemo_style.css')}}">

<link href="{{url('target/isudesc/css/templatemo_style.css')}}" rel="stylesheet">  
<!--issues design-->
<link rel="stylesheet" href="{{url('target/isu/css/templatemo-style.css')}}">
<script src="{{url('target/isu/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
<!--end of issues design-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
 

    <script src="{{url('target/isu/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script> 

    
   	<!-- JavaScripts -->   
    <script src="{{url('target/js/jquery-1.11.1.min.js')}}"></script>  <!-- lightbox -->
	<script src="{{url('target/js/templatemo_custom.js')}}"></script> <!-- lightbox -->
     

</head>
  <body>
  <!-- menu start -->
        <div class="menu">
        <div class="container">
    	<div class="row">
			<div class="templatemo_topwrapper shadow">
            	<div class="col-sm-4">
                	<div class="templatemo_webtitle"><a href="#" class="brand-link">
      <img src="{{ asset('assets/dist/img/talk.png' )}}" alt="semaLogo" class="brand-image img-circle elevation-1" style="opacity: 1;width:14%;height:14%; padding-right:1px" >
      <span class="brand-text font-weight-light">semaApp</span>
    </a></div>
                </div>
                <div class="col-sm-8">
                	<nav class="navbar navbar-default " role="navigation">
          <div class="container-fluid"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="top-menu">
              <div class="collapse navbar-collapse main_menu" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a class="show-1 templatemo_home" href="#"><span class="fa fa-home"></span>Home</a></li>
                  <li><a class="show-1 templatemo_page2" href="#"><span class="fa fa-question-circle"></span>All issues</a></li>
                  <li><a class="show-1 templatemo_page4" href="#"><span class="fa fa-group"></span>Groups</a></li>
             
            
              
                      
                      <li>
              
                     
                        <a class="dropdown-item" href="{{ route('logout') }}" title="logout"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     
                                        <span class="fa fa-sign-out fa-4x" style="font-size:50px"></span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
</li>
                                    </ul>
                                    </div>   
            </div>
            <!-- /.navbar-collapse --> 
          </div>
          <!-- /.container-fluid --> 
        </nav>
                </div>
                
                </div>

            </div>
   	  </div>
      </div>
     
        <!-- menu end -->

    <div id="menu-container"> 
        <!-- homepage -->
    
    <div class="content homepage" id="menu-3" style="margin-top:7%">  
  	<div class="container">
        <div class="row">
           		
            
       
        	<div class="templatemo_home_bot shadow"> 
          <b style="font-size:20px;color:white">Top issues</b>
    <div class="col-md-12 gradient padd-top20">
                <div class="col-md-2">
                <img src="{{url('target/images/templatemo_home_img1.jpg')}}" alt="templatemo home image">
                </div>
                <div class="col-md-4">
                <div class="templatemo_home_botheader"><a href="#">WORKGROUP 1</a></div>
                <div class="templatemo_home_botsubheader">Kitengo cha Mazingira</div>
          
                </div>
                <div class="col-md-12" > 
                 <h4><a href="#"><span class="fa fa-eye"></span>&nbsp; <b>view issues</b></a></h4>   
                </div>
                
				</div>
        </div>
        </div>
        </div>
        

</div>

    <div class="content groups" id="menu-1" style="margin-top:7%"> 
    
  	<div class="container ">
        <!-- home start -->
        <div class="templatemo_home_bot shadow gradient"> 
        <div class="row">
        
      
          <div class="col-md-5 gradient padd-top20">
       
                    <div class="row" >
                    <div class="col-sm-12">
                    <button type="button" id="grp" class="btn btn-primary" ><span class="fa fa-plus-circle"></span>New group</button>
                    </div>
                    </div> 


                    <div class="row" style="margin-top:2%;border:solid .5px #bcc;border-radius:7px;box-shadow:12px #ccc">
                        <div class="col-md-3">
                        <img src="{{url('target/images/templatemo_home_img1.jpg')}}" alt="group logo" style="width:40%;height:100%;padding:0px">
                        </div>
                        <div class="col-md-9" >
                        <a href="#">WORKGROUP 1</a>
                        </div>  
				               </div>

                       <div class="row" style="margin-top:2%">
                        <div class="col-md-3" >
                        <img src="{{url('target/images/templatemo_home_img1.jpg')}}" alt="group logo" style="width:40%;height:100%;padding:0px">
                        </div>

                        <div class="col-md-9" >
                        <a href="#">WORKGROUP 1</a>
                        </div>  
				               </div>

                       <div class="row" style="margin-top:2%">
                        <div class="col-md-3" >
                        <img src="{{url('target/images/templatemo_home_img1.jpg')}}" alt="group logo" style="width:40%;height:100%;padding:0px">
                        </div>
                        <div class="col-md-9" >
                        <a href="#">WORKGROUP 1</a>
                        </div>  
				               </div>

                       <div class="row" style="margin-top:2%">
                        <div class="col-md-3" >
                        <img src="{{url('target/images/templatemo_home_img1.jpg')}}" alt="group logo" style="width:40%;height:100%;padding:0px">
                        </div>
                        <div class="col-md-9" >
                        <a href="#">WORKGROUP 1</a>
                        </div>  
				               </div>

                       <div class="row" style="margin-top:2%">
                        <div class="col-md-3" >
                        <img src="{{url('target/images/templatemo_home_img1.jpg')}}" alt="group logo" style="width:40%;height:100%;padding:0px">
                        </div>
                        <div class="col-md-9" >
                        <a href="#">WORKGROUP 1</a>
                        </div>  
				               </div>

                       <div class="row" style="margin-top:2%">
                        <div class="col-md-3" >
                        <img src="{{url('target/images/templatemo_home_img1.jpg')}}" alt="group logo" style="width:40%;height:100%;padding:0px">
                        </div>
                        <div class="col-md-9" >
                        <a href="#">WORKGROUP 1</a>
                        </div>  
				               </div>

                       <div class="row" style="margin-top:2%">
                        <div class="col-md-3" >
                        <img src="{{url('target/images/templatemo_home_img1.jpg')}}" alt="group logo" style="width:40%;height:100%;padding:0px">
                        </div>
                        <div class="col-md-9" >
                        <a href="#">WORKGROUP 1</a>
                        </div>  
				               </div>
                    
                       
                   
                   

</div>
<div class="col-md-7">
<div id="content">kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</div>
</div>
</div>
               </div>
                </div>
                </div>
                
             
           
        <!-- home end -->
   
  
             <!-- Modal group content-->
             <div class="modal fade" id="groupmodal" role="dialog">
       <div class="modal-dialog">
    
      <!-- Modal  content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><p class="bg-info" >create group</p></h4>
        </div>
        <div class="modal-body">
          <form>
              <div class="form-group">
                <label for="text">Workgroup:</label>
                <input type="text" class="form-control" id="t" placeholder="workgroup 1" required>
              </div>

              <div class="form-group">
                <label for="text">Group Name:</label>
                <input type="text" class="form-control" id="te" placeholder="idara ya kilimo" required>
              </div>

              <div class="form-group">
                <label for="text">group description:</label>
                <input type="text" class="form-control" id="tex" placeholder="utambulisho wa group" required>
              </div>
              <button type="submit" class="btn btn-primary">create</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>


            <!-- issues start -->
        <div class="content gallery" id="menu-2">
         <div class="container">
          <section class="events" id="events-section">
                    <div class="content-wrapper">
                        <div class="inner-container container-fluid">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="section-heading">
                                        <div class="filter-categories">
                                            <ul class="project-filter">
                                                <li class="filter" data-filter="all"><span>All issues</span></li>
                                                <li class="filter" data-filter="design"><span>Top issues</span></li>
                                                <li class="filter" data-filter="web"><span>feedbacked Issues</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-12 col-md-offset-1">
                                    <div class="projects-holder">
                                        <div class="event-list">
                                            <ul>
                                                <li class="project-item first-child mix web">
                                                    <ul class="event-item web">
                                                        <li>
                                                            <div class="date">
                                                                <span>12<br>May</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>Ubora wa Maji</h4>
                                                            <div class="web">
                                                                <span>mabomba yamekatika</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <span>8:00 AM <br>Saturday</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="white-button">
                                                        <a href="#templatemo_page4">view</a>
                                                                
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="project-item second-child mix design">
                                                    <ul class="event-item design">
                                                        <li>
                                                            <div class="date">
                                                                <span>24<br>April</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>Mauaji ya Wanyama</h4>
                                                            <div class="design">
                                                                <span>mbeya kijijini</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <span>03:00 PM <br>Tuesday</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="white-button">
                                                                <a href="#">view</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="project-item third-child mix start design">
                                                    <ul class="event-item start">
                                                        <li>
                                                            <div class="date">
                                                                <span>30<br>Mar</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>Mafuriko ya maji</h4>
                                                            <div class="app">
                                                                <span>mabomba kukatika</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <span>03:30 PM <br>Friday</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="white-button">
                                                                <a href="#">view</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="project-item fourth-child mix web">
                                                    <ul class="event-item web">
                                                        <li>
                                                            <div class="date">
                                                                <span>22<br>Mar</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>Shule hazina viti</h4>
                                                            <div class="web">
                                                                <span>watoto hawasomi</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <span>10:00 AM <br>Thursday</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="white-button">
                                                                <a href="#">view</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="project-item fivth-child mix start web">
                                                    <ul class="event-item start">
                                                        <li>
                                                            <div class="date">
                                                                <span>16<br>Mar</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <h4>Mitihani migumu</h4>
                                                            <div class="app">
                                                                <span>form iv wamefeli mno</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="time">
                                                                <span>11:30 AM<br>Friday</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="white-button">
                                                                <a href="#">view</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </section>   
            </div>
            </div>
            <!-- issues end -->
           
            <!-- issues start -->
            <div class="content contact" id="menu-5">
    <div id="templatemo_blog" class="container_wapper">
                    <div class="container">
        <div class="templatemo_homewrapper shadow">       		

                        <div class="row">
                            <div class="col-sm-4 ">
                                <img src="{{url('target/isudesc/./images/templatemo_blog_01.jpg')}}" alt="Blog Post 1" class="img-responsive" />
                            </div>
                            <div class="col-sm-8 blog_text event_animate_right">
                                <h1>ukosefu wa pesa kwa ma programmers</h1>
                                <p>
                                    <span class="fa fa-user"></span> posted by <b>Ona Nixon</b>  &nbsp;&nbsp;
                                    <span class="fa fa-calendar"></span> 5<sup>th</sup> September 2084 &nbsp;&nbsp;
                                </p>
                                <p> Huku mtaani kwetu hakuna ela ina fika mahali mtu anashindia maandazi tuu alafu ni coder,
                                    Huku mtaani kwetu hakuna ela ina fika mahali mtu anashindia maandazi tuu alafu ni coder,
                                    Huku mtaani kwetu hakuna ela ina fika mahali mtu anashindia maandazi tuu alafu ni coder,
                                    Huku mtaani kwetu hakuna ela ina fika mahali mtu anashindia maandazi tuu alafu ni coder,
                                    Huku mtaani kwetu hakuna ela ina fika mahali mtu anashindia maandazi tuu alafu ni coder,
                                    Huku mtaani kwetu hakuna ela ina fika mahali mtu anashindia maandazi tuu alafu ni coder,
                                    Huku mtaani kwetu hakuna ela ina fika mahali mtu anashindia maandazi tuu alafu ni coder.
                                </p></br>
                                <div class="row">
                                    <div class="col-sm-10">
                                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">reply</button>
                                    </div>
                                    <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary btn-lg">foward</button>
                                    </div>
                                    </div>
                            </div>
                            <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">
                              
                                <!-- Modal reply content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><p class="bg-info" >reply issue</p></h4>
                                  </div>
                                  <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                          <label for="text">Answer:</label>
                                          <input type="text" class="form-control" id="text" placeholder="type here" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send</button>
                                      </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>  
        
   
   
                      

                        </div>
                    </div>
            
                  </div>
    
                </div>





            </div>
            </div>
            <!-- issues end -->
		</div>   
                     
        <!-- footer start -->
        <div class="clear"></div>
            
		<div class="container">
        	<div class="row">
            	<div class="templatemo_footer">
                
            		<div class="col-md-9">Copyright &copy; 2021 Sema Group, All rights reserved</div>
                    <div class="col-md-3">
                    	signed in as    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span style="color:yellow">  {{ Auth::user()->firstName }}</span>
                    </div>
                    <div class="clear"></div>
                    
                </div>
            </div>
		</div>
        <!-- footer end -->

        <!--issues design-->
        <script src="{{url('target/js/Ona.js')}}"></script>
      
        <script src="{{url('target/isu/js/datepicker.js')}}"></script>
        <script src="{{url('target/isu/js/plugins.js')}}"></script>
        <script>window.jQuery || document.write('<script src="target/isu/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="{{url('target/isu/js/main.js')}}"></script> 
        <script src="{{url('target/isudesc/js/bootstrap.min.js')}}"></script>

<!--end of issues design-->
  </body>
</html>