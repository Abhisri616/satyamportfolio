<!DOCTYPE html>
<html>
<head>
	<title>SATYAM MISHRA | FULL STACK DEVELOPER</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/animate.css">
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Muli|Sen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js" integrity="sha256-+izcH23qgte+aiGZRxk63BxGUyoQrAQZVoH2zKU9usM=" crossorigin="anonymous"></script>


    <style type="text/css">
    
    /*Preloader css*/

    .loader_bg{
    	position: fixed;
    	z-index: 999999;
    	background:#fff;
    	width: 100%;
    	height: 100%;
    }
    .loader{
    	border:0 solid transparent;
    	border-radius: 50%;
    	width: 150px;
    	height: 150px;
    	position: absolute;
    	top: calc(50vh - 75px);
    	left: calc(50vw - 75px);
    }
    .loader:before, .loader:after{
        content: '';
        border:1em solid #ff5733;
        border-radius: 50%;
        width: inherit;
        height: inherit;
        position: absolute;
        top: 0;
        left: 0;
        animation: loader 2s linear infinite;
        opacity: 0;     
    }
    .loader:before{
    	animation-delay: .5s;
    }
    @keyframes loader{
    	0%{
    		transform: scale(0);
    		opacity: 0;
    	}
    	50%{
    		opacity: 1;
    	}
    	100%{
    		transform: scale(1);
    		opacity: 0;
    	}
    }


    /*end of Preloader*/

    /*Call Icon*/
         
        

    /*End of call icon*/
    	
    html{
        scroll-behavior: smooth;
     }
  	
  	*{
  		margin:0;
  		padding:0;
  		box-sizing: border-box;
        font-family: 'Muli', sans-serif;
        font-family: 'Sen', sans-serif;
  		
  	}
  	.nav-item{
  		font-weight: 500;
  		text-align: center;
  		font-size: 18px;
  		background: 100%;
  		
  	}
  	.active, ul li:hover{
        border-top: 1px solid #5dade2;
        border-bottom: 1px solid #5dade2;
  	}


  	.header{
  	    height: 100vh;
  	    width: 100%;
        /*background-image: linear-gradient( 138deg,  rgba(32,201,255,1) 36.7%, rgba(0,8,187,1) 84.4%, rgba(255,255,255,1) 119.7% );*/
        background-color: #0093E9;
        background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
  	    clip-path: polygon(100% 0%, 100% 85%, 50% 100%, 0% 85%, 0% 0%);
  	    position: relative;
        text-align: center;


  	}
  	.text{
  		    padding-top: 230px;
  		    color:#fff;
  	}
  	/*  Social media icon */

  	.social_icon{
  		width: 100%;
  	}

    .fa_icons .fa{
    	height: 38px;
    	width: 38px;
    	color:#fff;
    	margin:5px;
    	border-radius: 50px;
    	box-shadow: 1px 1px 2px 2px #dcdde1;
    	line-height: 40px;
    	font-weight: ;
    }
    #typed{
    	color:#fff;
        font-size:2em;
       /* font-weight: bold;*/
    }
    #typed:after{
    	content: '|';
    	display: inline;
    	-webkit-animation: blink 0.7s infinite;
    	-moz-animation: blink 0.7s infinite;
    	animation: blink 0.7s infinite;
    }
    /*CUSTOM CURSOR ANIMATION*/
    @keyframes blink{
    	0% {opacity: 1;}
    	50%{opacity: 0;}
    	100%{opacity: 1;}
    }
    @-webkit-keyframes blink{
    	0%{opacity: 1;}
    	50%{opacity: 0;}
    	100%{opacity: 1;}

    }
    @-moz-keyframes blink{
    	0%{opacity: 1;}
    	50%{opacity: 0;}
    	100%{opacity: 1;}

    }
    /*button*/
    .button{
    	padding-top:40px;
    }
    .arrow{
        position: absolute;
        margin-top: 80px;
        left: 50%;
        transform: translate(-50%,-50%);
        border:1px solid #fff;
        border-radius: 50%;
        width: 50px;
        height: 60px;
        text-align: center;
        line-height: 50px;
        overflow: hidden;



    }
    
    .arrow .fa{
        background:transparent;
    	animation: animate 2s linear infinite;
    }
    @keyframes animate{
    	0%{
    		transform: translateY(-80px);
    	}
    	
    	
    	100%{
    		transform: translateY(0px);
    	}
    	
    	
    }
    /*After Header*/
    .section_1{
       height: 100vh;
       width: 100%;      
       text-align: center;
   }
   .section_1 h2{
   	   padding-top: 100px;
   	   color: #7b7575;
   }
   h2{
    	font-family: sans-serif;
    	font-weight: bold;
    	letter-spacing: 1px;
    }
    h2:before, h2:after{
    	content: '';
    	background: #d43377;
    	display: block;
    	width: 150px;
    	height: 3px;
    	margin:10px auto;

    }
    .sub_section1{
    	height:50vh;
    	width: 100%;
    	
    }

    /*Services*/
    
    .services{
    	
    	height: 80vh;
    	width: 100%;
    	text-align: center;
        
    }
    .services h3{
        color: #d43377;
    }
    .services_col1 .card{
        height: 200px;
        border:1px solid #d43377;
    }
    .services_col1 .card:hover{
        padding-top:8px;
        border:2px solid #d43377;
    }
    .services_col2 .card{
    	height: 200px;
    	border:1px solid #d43377;
    }
    .services_col2 .card:hover{
        padding-top:8px;
        border:2px solid #d43377;
    }
    .services_col3 .card{
    	height: 200px;
    	border:1px solid #d43377;
    }
    .services_col3 .card:hover{
        padding-top:8px;
        border:2px solid #d43377;
    }
    .process{
    	height: 80vh;
    	width: 100%;
    }
    .process_col{
    	height: 250px;
    	width: 250px;
    	border-radius: 100%;
    	background:#585555;    	

    }
    .process_col h4{
        padding-top: 100px;
    }
    .process_col:hover{
    	padding-top:5px;
    	box-shadow: 10px 10px #ddd ;

    }
    .button2 .btn:hover{
        font-size:18px;
    }
    .jumbotron{
        height: 60vh;
        background:#fff;
    }


    /*End of Services*/

    .blog_button{

    }

    .footer{
    	  height: 80vh;
        background: #282828;
        clip-path: polygon(38% 0, 100% 11%, 100% 100%, 0 100%, 0 12%);



    }
    .footer_row{
        padding-top: 150px;
        list-style: none;
        text-align: center;
    }
    .footer_row a{
        text-decoration: none;
        color:#fff;
    }
    .footer_row p{
        font-size: 20px;
    }
    .footer_row li{
        padding:4px;
    }
    .menu_col2 li a:hover{
      color: yellow;
      font-style: italic;
    }
    .menu_col3 a:hover{
      color: yellow;
      font-style: italic;
    }
    .copy_content{

    }
    .copy_content:before{
      content: '';
      background: #d43377;
      display: block;
      width: 100px;
      height: 3px;
      margin:10px auto;
    }
    .whatsapp_icon{
      position: fixed;
      top:600px;
      left:1180px;
      
    }
    

    

    

   




    /*Media Query*/

     /* Medium devices (tablets, 768px and up) The navbar toggle appears at this breakpoint */
    @media (max-width: 768px) { 
           
        #typed{
    	  color:#fff;
          font-size:1.5em;
          font-weight:

        }
        .text{
        	font-size:35px;
          padding-top:170px;  	
        }
        .arrow{
        	margin-top: 80px;
        }
        .htmlcss .fa {
        	font-size: 50px;
        	padding: 50px;
        }
        .btn_1{
        	font-size: 15px;
        }
        .btn_1:hover{
        	font-size:14px;
        }
        .section1col2{
        	padding-top: 30px;
        }
        .section_1{
            height: 1050px;
            width: 100%;      
            text-align: center;
        }
        .services{
	    	height: 950px;
	    	width: 100%;
	    	margin-top: 25px;
	    	
	    }	
	    .services_col2{
    	    padding:35px 0;
            

        }
        .process{
        	background: 100vh;
        	width: 100%;
        }
        .jumbotron{
        	margin-top: 1320px;
          height:60vh;
        }
        .footer{
          height: 965px;
        }
        .footer_row{
          padding-top: 140px;
        }
        .menu_col2{
          padding-top: 30px;
        }
        .menu_col3{
          padding-top: 30px;
        }
        .whatsapp_icon .fa{
          position: fixed;
          top:540px;
          left:310px;      
        }

        
    }


    	
    </style>
</head>
<body>

    <!--Preloader -->

        <!--<div class="loader_bg">
        	<div class="loader"></div>
        </div>-->

    <!--END of preloader-->

    <!--Call icon side of webpage-->
        
        

    <!--End of call icon page-->

  

<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white">
<div class="container">
  <a class="navbar-brand" href="#"><img src="img/logo2.png" style="height: 60px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">HOME</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="about.php">ABOUT</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="project.php">PROJECTS</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="article.php">ARTICLE</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="contact.php">CONTACT</a>
		      </li>
		      <li class="nav-item bg-warning">
		        <a class="nav-link" href="#"><b>RESUME</b></a>
		      </li>
	    </ul>
	</div>
</div>
</nav>
<div class="header">

   <div class="container">
       <h1 class="text wow zoomIn">Hello! This is 'Satyam Mishra'</h1>
       
    <div id="typed-strings">

       <p>Full Stack <span class="text-warning">Developer.</span></p>
       <p>Freelancing For <span class="text-warning"> Client.</span></p>
       <p>Youtuber  <span class="text-warning"></span></p>
       <p>Fitness <span class="text-warning">Enthusiast.</span></p>

   </div>
       <span id="typed"></span>



       <!--SOCIAL MEDIA ICON-->

       <div class="social_icon pt-3">
           <div class="fa_icons">
                <a href="https://www.facebook.com/Satyam1821389/?modal=admin_todo_tour">
                  <i class="fa fa-facebook" style="background-color: #3b5998;" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa  fa-instagram" style="background-color:#c13584; 
                  color:#fff; font-weight:bold;" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa  fa-twitter" style="background:#1DA1F2; color:#fff;"  aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa  fa-linkedin" style="background:#0077b5; color: #fff;" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa  fa-github" style="background-color:#6cc644; font-weight: bold;" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa  fa-youtube-play" style="background-color:#FF0000; font-weight: bold;" aria-hidden="true"></i>
                </a>
                

           </div>
       </div>
       <!--button-->
       <div class="button">
	       <a href="contact.php" class="btn bg-white text-danger font-weight-bold">
	            HIRE ME
	       </a>
	       
       </div>
       <div class="arrow pt-5">
          <a href="#Grow_your_buisness">
            <i class="fa fa-2x fa-angle-down font-weight-bold text-white" aria-hidden="true"></i>
          </a>
       </div>

   </div>  

</div>

<!--Section_1 -->
<div class="section_1 bg-white" id="Grow_your_buisness">

    <div class="container">
        <h2 class="text-danger wow swing">Let Me Help You To Grow Your Buisness</h2>
        <div class="sub_section1 mt-5 ">

            <div class="row pt-4">
                <div class="col-lg-6 col-md-6 col-12 bg-" style="height: 360px;">
                    <h3 class="pt-4" style="font-size: 25px; font-weight: bold">Creative Web Designer and Developer in Prayagraj, India</h3>
                    <p style="font-size: 24px;">I Create Responsive and Dynamic Websites for Buisness, and Promote it.</p>
                   
                   <div class="">
	                   <a href="about.php" class="btn btn-danger text-white">
	                       <b>ABOUT ME</b>
	                   </a><br><br>
	                   <a href="#" class="btn btn-danger text-white">
	                       <b>REQUEST PROPOSAL</b>
	                   </a>
                  </div>
                   
                </div>
               <div class="col-lg-6 col-md-6 col-12 section1col2">
                <img src="img/headerimg.jpg" class="img-fluid" style="height: 360px;">
               </div>
            </div>

        </div>
    </div>

</div>
<!--End of Section_1-->

<!--Services Section-->
<div class="services">
    <h2 class="pt-5 text-danger wow swing">Services</h2>
    <div class="container">
    <div class="row text-center pt-5">
        <div class="col-lg-4 col-md-4 col-12 services_col1 col d-flex justify-content-center">
          <div class="card wow fadeInUp" style="width: 18rem;">
            <div class="card-body">
		         <h3 class="card-title">Web Design</h3>    
		          <p class="card-text">Responsive Design, Web Layout Design, UI & UX Design, Prototype Design, Mobile Site Design.</p>
	        </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 services_col2 col d-flex justify-content-center">
          <div class="card wow fadeInUp" style="width: 18rem;">
            <div class="card-body">
		          <h3 class="card-title">Web Development</h3>    
		          <p class="card-text">Website Development, Web Applications, Open Source Solutions, PHP Development.</p>
	        </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12 services_col3 col d-flex justify-content-center">
          <div class="card wow fadeInUp" style="width: 18rem;">
            <div class="card-body">
		         <h3 class="card-title">Maintainance</h3>    
		        <p class="card-text">Content Updates, Product Updates, Data Entries Files & Data Backup, Yearly Maintainance.</p>
	        </div>
          </div>
        </div>
    </div>
    <div class="button2 pt-5">
      <a href="#" class="btn btn-danger">VIEW PROJECT</a>
    </div>
    </div>
</div>
<!-- End of Services Section-->

<!-- Process Section-->
<div class="process text-center mt-5">

	<h2 class="text-danger wow swing">Process</h2>
	<div class="container">
	<div class="row pt-5 text-white">
       <div class="col-lg-2 col-md-2 col-12 process_col text-white">
            <h4 class="">PROJECT DEFINITION</h4><br>
            
            
       </div>
       <div class="col-lg-2 col-md-2 col-12 process_col">
            <h4 class="">SITE STRUCTURE</h4>
            
           
       </div>
       <div class="col-lg-2 col-md-2 col-12 process_col">
            <h4 class="">VISUAL DESIGN</h4>
       </div>
       <div class="col-lg-2 col-md-2 col-12 process_col">
            <h4 class="">CODING</h4>
       </div>
       <div class="col-lg-2 col-md-2 col-12 process_col">
            <h4 class="">TESTING</h4>
       </div>
       <div class="col-lg-2 col-md-2 col-12 process_col">
            <h4 class="">LAUNCH</h4>
       </div>
	</div>
	<div class="button2 pt-5">
        <a href="#" class="btn btn-danger">START YOUR PROJECT</a>
	</div>
    </div>

</div>
<!-- End of Process Section-->
<!-- Blog Section-->
<div class="blog text-center">
    <div class="jumbotron">
        <div class="container">
            <h2 class="text-danger wow swing">Here is Something For You, For Your Health</h2>
            <p class="text-danger font-weight-bold">Technical/Fitness Tips/Quotes</p>
            <div class="blog_btn pt-5">
			  <a class="btn btn-danger text-white btn-circle btn-lg blog_button">VISIT BLOG</a> 
			</div>
        </div>
    </div>
</div>
<!-- End of Blog Section-->

<!--Footer-->
<div class="footer">

	<div class="container-fluid">
		<div class="container">
      <div class="row footer_row text-white">
        <div class="col-lg-4 col-md-4 col-12 text-center">
        
          <div class="fb-page" data-href="https://www.facebook.com/Satyam1821389/?modal=admin_todo_tour" data-tabs="timeline" data-width="300" data-height="100" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Satyam1821389/?modal=admin_todo_tour" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Satyam1821389/?modal=admin_todo_tour">Satyam Mishra</a></blockquote></div>
          
          <h4 class="pt-4">Keep in touch</h4>
          <div class="fa_icons pt-2">
                <a href="#">
                  <i class="fa fa-facebook" style="background-color: #3b5998;" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa  fa-instagram" style="background-color:#c13584; 
                  color:#fff; font-weight:bold;" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa  fa-twitter" style="background:#1DA1F2; color:#fff;"  aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa  fa-linkedin" style="background:#0077b5; color: #fff;" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa  fa-github" style="background-color:#6cc644; font-weight: bold;" aria-hidden="true"></i>
                </a>
                <a href="#">
                  <i class="fa  fa-youtube-play" style="background-color:#FF0000; font-weight: bold;" aria-hidden="true"></i>
                </a>
                

           </div>
 
        </div>
        <div class="col-lg-4 col-md-4 col-12 menu_col2">
          <p><u>MENU</u></p>
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT</a></li>
          <li><a href="project.php">PROJECT</a></li>
          <li><a href="blog.php">BLOG</a></li>
          <li><a href="contact.php">CONTACT</a></li>
          <li><a href="contact.php">HIRE ME</a></li>
          <li><a href="proposal.php">PROPOSAL</a></li> 
        </div>
        <div class="col-lg-4 col-md-4 col-12 menu_col3">
          <p><u>CONTACT</u></p>
          <div class="">
          <i class="fa fa-envelope" style=" color: #fff;" aria-hidden="true"></i>
          <a href="mailto:satyammishra1821389@gmail.com">satyammishra1821389@gmail.com</a>
          </div>
          <div class="pt-3">
          <i class="fa fa-phone" style=" color: #fff;" aria-hidden="true"></i>
           <a href="tel:9794045637">+91 9794045637 </a>
          </div>
        </div>
      </div>
      <div class="pt-5 copy_content text-center">

          <p style="font-size:16px; color: #fff;">Copyright © 2020 Satyam Mishra | 🌐 Web Developer | </p>
           
      </div>
    </div>
	</div>

</div>





    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>

    <!--Facebook plugin-->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v6.0"></script> 

    <!--type.js script--> 
    <script>
       	var type = new Typed('#typed',{
            stringsElement: '#typed-strings',
            typeSpeed:150,
            /*Time before typing Start*/
            startDelay:1200,
            /*backspacing time speed*/
            backSpeed:20,
            /*Time before backspacing*/
            backDelay:500,
            //loop
            loop:true,
            //flase=infinite
            loopCount:50,
            //show cursor
            showCursor:false,
            //character for cursor
            cursorChar:'|',
            //attribute to type (null==text)
            attr:null,
            //either html or text
            contentType:'html',
            //call when done callback function
            callback:function() {},


        });
    </script>
    <!--Prloader script-->

    <script type="text/javascript">
    	
         setTimeout(function(){
         	$('.loader_bg').fadeToggle();
         }, 1500);

    </script>


    <!-- end of preloader script-->


    <!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<!--Waypoints-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>  
</body>
</html>