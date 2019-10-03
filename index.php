<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/all.css">
	<!-- Font Awesome Icon -->
  <script src="https://use.fontawesome.come/releases/v5.0.8/js/all.js"></script>
  <style>
    svg {
      position: absolute;
      width: 240px;
      height: 120px;
      top: 0; right: 0;
      bottom: 0; left: 0; 
      margin: auto;
    }
    .hedding{
        font-size:40px;
        font-family: 'Roboto', sans-serif;
        font-weight:800;
        letter-spacing:2px;
    }
  </style>
  
    <title>Your Event</title>
  </head>
  <body onload="myFunction()" style="margin:0;">
    <!--loader script-->
    <script>
      var myVar;
      
      function myFunction() {
        myVar = setTimeout(showPage,1000);
      }
      
      function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
      }
    </script>
    <div id="loader">
      <svg version="1.1" id="preloader" x="0px" y="0px" width="240px" height="120px" viewBox="0 0 240 120">

              <style type="text/css" >
                  <![CDATA[
              
                      #plug,
                      #socket { fill:rgb(255, 0, 0) }
              
                      #loop-normal { fill: none; stroke: rgb(0, 255,0); stroke-width: 12 }
                      #loop-offset { display: none }
              
                  ]]>
              </style>
              
              <path id="loop-normal" class="st1" d="M120.5,60.5L146.48,87.02c14.64,14.64,38.39,14.65,53.03,0s14.64-38.39,0-53.03s-38.39-14.65-53.03,0L120.5,60.5
              L94.52,87.02c-14.64,14.64-38.39,14.64-53.03,0c-14.64-14.64-14.64-38.39,0-53.03c14.65-14.64,38.39-14.65,53.03,0z">
                  <animate attributeName="stroke-dasharray" attributeType="XML"
                      from="500, 50"  to="450 50"
                      begin="0s" dur="2s"
                      repeatCount="indefinite"/>
                  <animate attributeName="stroke-dashoffset" attributeType="XML"
                      from="-40"  to="-540"
                      begin="0s" dur="2s"
                      repeatCount="indefinite"/>  
              </path>
                
              <path id="loop-offset" d="M146.48,87.02c14.64,14.64,38.39,14.65,53.03,0s14.64-38.39,0-53.03s-38.39-14.65-53.03,0L120.5,60.5
              L94.52,87.02c-14.64,14.64-38.39,14.64-53.03,0c-14.64-14.64-14.64-38.39,0-53.03c14.65-14.64,38.39-14.65,53.03,0L120.5,60.5
              L146.48,87.02z"/>
                
              <path id="socket" d="M7.5,0c0,8.28-6.72,15-15,15l0-30C0.78-15,7.5-8.28,7.5,0z"/>  
                
              <path id="plug" d="M0,9l15,0l0-5H0v-8.5l15,0l0-5H0V-15c-8.29,0-15,6.71-15,15c0,8.28,6.71,15,15,15V9z"/>
                
              <animateMotion
                  xlink:href="#plug"
                  dur="2s"
                  rotate="auto"
                  repeatCount="indefinite"
                  calcMode="linear"
                  keyTimes="0;1"    
                  keySplines="0.42, 0, 0.58, 1">
                  <mpath xlink:href="#loop-normal"/>
              </animateMotion>
                
              <animateMotion             
                  xlink:href="#socket"
                  dur="2s"
                  rotate="auto"
                  repeatCount="indefinite"
                  calcMode="linear"
                  keyTimes="0;1"
                  keySplines="0.42, 0, 0.58, 1">
                  <mpath xlink:href="#loop-offset"/>
              </animateMotion>  
              </svg>
          </div>
    <!--real body start-->
    <div style="display:none;" id="myDiv" class="animate-bottom">
    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          <source src="video/Promo Video _  Jaspers Event Management.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
          <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100">
              <h1 style="font-size:500%"><span style="color: white;font-weight: lighter;">We Organise</span> <span class="text-success" style="font-weight: bold;">Your Event</span></h1>
              <br><p class="lead mb-0 text-white" style="font-family: 'Chilanka', cursive;      letter-spacing: 5px;">Specialized in Event Managment!</p>
              <br>
              <?php     
              if(!(isset($_SESSION['login'])))
              {
                echo '<button class="btn btn-outline-success my-2 my-sm-0 mt-4" type="button" data-toggle="modal" data-target="#modalLRForm"><b style="letter-spacing: 2px;">Subscribe</b></button>';
              }
              ?>
            </div>
          </div>
        </div>
      </header>
<form action="subscribe.php" method="GET">
      <div class="modal fade mt-auto mb-auto" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
          <div class="modal-content">
            <div class="modal-c-tabs"  >
              <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3 bg-success" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab" style=""><i class="fas fa-user mr-1"></i>
                    Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                    Register</a>
                </li>
              </ul>


              <div class="tab-content">
                <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                  <div class="modal-body mb-1">


                    <div class="md-form form-sm mb-5">
                      <div class="row">
                        <div class="col-1">
                            <i class="fas fa-envelope prefix" ></i>
                        </div>
                        <div class="col-9">
                            <input type="email" id="modalLRInput10" class="form-control form-control-sm validate" placeholder="Your email">
                        </div>
                      </div>
                    </div>

                    <div class="md-form form-sm mb-5">
                        <div class="row">
                          <div class="col-1">
                              <i class="fas fa-lock prefix" ></i>
                          </div>
                          <div class="col-9">
                              <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" placeholder="Your password">
                          </div>
                        </div>
                      </div>
                    

                      <div class="text-center mt-2">
                          <button class="btn btn-outline-success">Log in</button>
                      </div>
                  </div>

                  <div class="modal-footer">
                      <div class="options text-center text-md-right mt-1">
                          <p>Not a member? <a href="#" class="blue-text text-success">Sign Up</a></p>
                          <p>Forgot <a href="#" class="blue-text text-success">Password?</a></p>
                        </div>
                        <button type="button" class="btn btn-outline-success waves-effect ml-auto" data-dismiss="modal">Close</button>
                  </div>

                </div>

                <div class="tab-pane fade" id="panel8" role="tabpanel">

                    <!--Body-->
                    <div class="modal-body">
                      <div class="md-form form-sm mb-5">
                          <div class="row">
                              <div class="col-1">
                                  <i class="fas fa-envelope prefix" ></i>
                              </div>
                              <div class="col-9">
                                  <input type="email" name="semail" id="modalLRInput10" class="form-control form-control-sm validate" placeholder="Your email">
                              </div>
                            </div>
                      </div>
        
                      <div class="md-form form-sm mb-5">
                          <div class="row">
                              <div class="col-1">
                                  <i class="fas fa-lock prefix" ></i>
                              </div>
                              <div class="col-9">
                                  <input type="password" name="spassword" id="modalLRInput11" class="form-control form-control-sm validate" placeholder="Your password">
                              </div>
                            </div>
                      </div>
        
                      <div class="md-form form-sm mb-4">
                          <div class="row">
                              <div class="col-1">
                                  <i class="fas fa-lock prefix" ></i>
                              </div>
                              <div class="col-9">
                                  <input type="password" name="srpassword" id="modalLRInput11" class="form-control form-control-sm validate" placeholder="Repeat password">
                              </div>
                            </div>
                      </div>
        
                      <div class="text-center form-sm mt-2">
                        <button class="btn btn-outline-success">Sign up</button>
                      </div>
        
                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                      <div class="options text-right">
                        <p class="pt-1">Already have an account? <a href="#" class="blue-text text-success">Log In</a></p>
                      </div>
                      <button type="button" class="btn btn-outline-success waves-effect ml-auto" data-dismiss="modal">Close</button>
                    </div>
                  </div>
              </div>


            </div>
          </div>
        </div>
      </div>
      </form>

      <div  style="position: sticky;top:0;  z-index: 1030;">
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;padding: 0%;">
   
    <div>
    <a class="navbar-brand ml-2" href="#"><span class="brand">Your</span><span class="brand1 text-success">Event</span></a>
   </div>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
      <ul class="navbar-nav ml-auto">
       
        <ul class="navbar-nav ml-auto mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Categories.html">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
        </ul>
        <li class="nav-item dropdown active mr-auto ml-auto">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i> Profile </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <?php     
              if(!(isset($_SESSION['login'])))
              {
                echo '<a class="dropdown-item" href="#">My account</a>';
              }
              else
              {
                echo '<a class="dropdown-item" href="#">Sign In AS</a>';
                echo $_GET['semail'];
              }
              
              ?>
            <a class="dropdown-item" href="#">Log out</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div>
  
<!--<div class="container-fluid" style="background-color: black;padding: 0%;" >
  <nav class="navbar navbar-expand-lg navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Categories.html">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user"></i> Profile </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <?php     
              if(!(isset($_SESSION['login'])))
              {
                echo '<a class="dropdown-item" href="#">My account</a>';
              }
              else
              {
                echo '<a class="dropdown-item" href="#">Sign In AS</a>';
                echo $_GET['semail'];
              }
              
              ?>
            <a class="dropdown-item" href="#">Log out</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</div-->





<section style="background-color: white;height:550px;">
  
  <div class="text-center container" style="margin-top: 30px;margin-bottom:30px;">
    <h1 class="display-3" >
      <Span class="text-success" style="font-size: 40px;
      font-weight: bold;">CATEGORIES</Span>
    </h1>
  </div>
  

  <div class="container mt-4">
    <div class="row">
      <div class="col-lg-3 col-ml-4">
        <div class="card bg-dark text-white border-0" >
          <div class="hovereffect">
            <img style=" filter: brightness(30%);" class="img-responsive card-img" src="image/carpet-couple-dress-1589216.jpg" alt="">
            <div class="overlay">
               <h2 class="text-light" style="font-family: 'Acme', sans-serif;">Family Events</h2>
               <a class="info" href="family.php">Wedding<br>
                engagement<br>
                Birthday<br>
                anniversary<br> 
                Etc.
               </a>
               
            </div>
        </div>
        </div>
    </div>
      <div class="col-lg-3 col-ml-4">
        <div class="card bg-dark text-white">
          <div class="hovereffect">
            <img style=" filter: brightness(30%);" class="img-responsive card-img" src="image/chairs-conference-room-digital-nomad-1181395.jpg" alt="">
            <div class="overlay">
               <h2 class="text-light" style="font-family: 'Acme', sans-serif;">Business Events</h2>
               <a class="info" style="font-size: 12px;" href="Business.php">Business Dinner<br>
                Conference<br>
                Meeting<br>
                Seminars<br> 
                Etc.
               </a>
               
            </div>
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-ml-4">
          <div class="card bg-dark text-white">
            <div class="hovereffect">
              <img style=" filter: brightness(30%);" class="img-responsive card-img" src="image/banking-business-communication-2432221.jpg" alt="">
              <div class="overlay">
                 <h2 class="text-light" style="font-family: 'Acme', sans-serif;">Start Up</h2>
                 <a class="info" href="startup.php">Opening<br class="mb-4">
                  product <br> lanching<br class="mb-4">
                  Etc.
                 </a>
                 
              </div>
          </div>
            </div>
      </div>
      <div class="col-lg-3 col-ml-4 ">
          <div class="card bg-dark text-white">
            <div class="hovereffect">
              <img style=" filter: brightness(30%);" class="img-responsive card-img" src="image/audience-band-celebration-2263436.jpg" alt="">
              <div class="overlay">
                 <h2 class="text-light" style="font-family: 'Acme', sans-serif;">Public Event</h2>
                 <a class="info" href="#">festival <br>
                  celebration<br>
                  Dj night<br>
                  <br> 
                  Etc.
                 </a>
              </div>
          </div>
            </div>
      </div>
    </div>
  </div>   
</section>


<section style="background-color: white;height:600px;">
  <div class="text-center container-fluid" style="margin-top: 0px;margin-bottom:30px;">
    <h1 class="display-3" >
      <Span class="text-success" style="font-size: 40px;
      font-weight: bold;text-transform: uppercase;">services</Span> <span style="color: black;opacity: 0.7;transform: ;font-size: 30px;text-transform: uppercase;font-weight:lighter;;
      ;">provide by us</span> 
    </h1>
  </div>



  <div class="container">
  <div class="row bg-light text-dark">
      <div class="col-6">
        <div class="row">
          <div class="col-2 bg-light mr-2" >
            <a class="nav-link service"  id="navbarDropdownMenuLink-4" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img src="image/wedding.svg" height="45px" width="43px"></img>  </a>
            </div>
            <div class="col-9 text-dark bg-light mt-2 mb-4">
              We are here for your in every step of the way to make your Wedding dream come true.
            </div>
          </div>

          <div class="row bg-light">
            <div class="col-2 bg-light">
              <a class="nav-link service" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <img src="image/birthday.svg" height="45px" width="43px"></img>  </a>
              </div>
              <div class="col-9 bg-light mt-2 mb-4">
                Celebrating Birthday parties for your kids is an ultimate fun as parents,family and friends enjoy togrther and have a lovely time.
              </div>            
            </div>


            <div class="row bg-light">
              <div class="col-2 bg-light">
                <a class="nav-link service"  id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img src="image/camera.svg" height="45px" width="43px"></img>  </a>
                </div>
                <div class="col-9 bg-light mt-2 mb-4">
                  Photography provide a record of past events use in future event promotion and capture your special moments.
                </div>
              </div>
               
                <div class="row bg-light">
                  <div class="col-2 bg-light">
                    <a class="nav-link service"  id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="image/waiter.svg" height="45px" width="47px"></img>  </a>
                    </div>
                    <div class="col-9 bg-light mt-2 mb-4">
                      Waiters take orders and serve food and beverages to patrons at tables in dining esthblishment.
                    </div>
                  </div>

                <div class="row bg-light">
                  <div class="col-2 bg-light">
                    <a class="nav-link service" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <img src="image/orchestra.svg" height="45px" width="43px"></img>  </a>
                    </div>
                    <div class="col-9 mt-2 mb-4">
                    Orchestra will play a music what would you like!
                    </div>                 
                  </div>
        </div>
      
        <div class="col-6">
          <div class="row bg-light">
            <div class="col-2 bg-light" >
              <a class="nav-link service"  id="navbarDropdownMenuLink-4" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <img src="image/baby1.svg" height="22px" width="42px"><img src="image/baby2.svg" height="21px" width="42px"></img></img>  </a>
              </div>
              <div class="col-9 mt-2 mb-4">
                Setting the registry,choosing fun games,Baby Shower planning can get a bit overwhelming. 
              </div>
            </div>
  
            <div class="row bg-light">
              <div class="col-2 bg-light">
                <a class="nav-link service" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img src="image/glass.svg" height="45px" width="43px"></img>  </a>
                </div>
                <div class="col-9 mt-2 mb-4">
                 Party will typically feature food beverages and often music and dancing or other forms of entertainment. 
                </div>            
              </div>
  
  
              <div class="row bg-light">
                <div class="col-2 bg-light">
                  <a class="nav-link service"  id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <img src="image/hotel.svg" height="45px" width="43px"></img>  </a>
                  </div>
                  <div class="col-9 mt-2 mb-4">
                  In Hotel's events spaces including dining rooms,conference rooms and sometimes even concert venues. 
                  </div>
                </div>
  
              <div class="row bg-light">
                <div class="col-2 bg-light">
                  <a class="nav-link service" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <img src="image/design.svg" height="45px" width="43px"></img>  </a>
                  </div>
                  <div class="col-9 mt-2 mb-4">
                   Dercoration at an event are necessary for setting the mood,framing the emotion and underscoring the importance of the event. 
                  </div>                 
                </div>
                  
                  <div class="row bg-light">
                    <div class="col-2 bg-light">
                      <a class="nav-link service"  id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <img src="image/conciergebell.svg" height="45px" width="43px"></img>  </a>
                      </div>
                      <div class="col-9 mt-2 mb-4">
                        We sreve food and drink as per your choice.
                      </div>
                    </div>
  
                  
  
          </div>
    </div>
  
</section>


<section>
    <div class="text-center container-fluid" style="margin-top: 20px;margin-bottom:10px;">
        <h1 class="display-3" >
          <Span class="text-success" style="font-size: 50px;font-weight: bold;text-transform: uppercase;">Business</Span> 
          <span style="color: black;opacity: 0.7;transform: ;font-size: 40px;text-transform: uppercase;font-weight:100;"> With Us</span>
        </h1>
        <p style="font-size: 20px;" class="text-dark">
                 It's Your Time
        </p>
      </div>
    <div class="" style="padding-left:90px;padding-right:90px;padding-bottom:90px">
        <div class="card bg-dark text-white border-0" style="">
            <img style="filter: brightness(30%);border-radius: 8px;" style="height: 50%"  src="image/bwu1.jpg" class="card-img" alt="Wedding.jpg">
            <div class="card-img-overlay" style="padding:80px">
                <h5 class="card-title text-white hedding" style="">Build Your Shop Online With <span class="text-success">Your Event</span></h5>
                <br><h5 class="card-text">5 reasons to do business with us</h5>
                <span class="card-text">Our team and way of working</span><br>
                <span class="card-text">Our Credentials</span><br>
                <span class="card-text">Our knowledge of your business and your problems</span><br>
                <span class="card-text">Our undertaking to add value</span><br>
                <span class="card-text">Our international focus</span><br><br><br>

            
                <a href="form.php"><button class="btn btn-lg btn-outline-success my-2 my-sm-0 mt-4" type="button" data-toggle="modal" data-target="#darkModalForm"><b style="letter-spacing: 1.5px;">Register Your Shop Now</b></button> </a> 
              </div>
            </div>
        </div>
    
</section>

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

    <div class="bg-success">
      <div class="container">
  
        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">
  
          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0 text-white">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-white text-md-right">
  
            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-4" > </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text"> </i>
            </a>
  
          </div>
          <!-- Grid column -->
  
        </div>
        <!-- Grid row-->
  
      </div>
    </div>
  
    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">
  
      <!-- Grid row -->
      <div class="row mt-3">
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
  
          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold"> 
            <div>
              <a class="" href="#"><span class="text-dark" style="font-size: 30px;font-weight: 100;">Your</span><span class="brand1 text-success">Event</span></a>
            </div>
          </h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 100px;border: 0.5px solid green;">
          <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
            consectetur
            adipisicing elit.</p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase text-dark">Sponsers</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;border: 0.5px solid green;">
          <p>
            <a href="#!">Amazon</a>
          </p>
          <p>
            <a href="#!">Google</a>
          </p>
          <p>
            <a href="#!">Facebook</a>
          </p>
          <p>
            <a href="#!">Microsoft</a>
          </p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase text-dark font-weight-bold">Useful links</h6>
          <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;border: 0.5px solid green;">
          <p>
            <a href="#!">Your Account</a>
          </p>
          <p>
            <a href="#!">Terms & Condition</a>
          </p>
          <p>
            <a href="#!">FaQ</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
  
          <!-- Links -->
          <h6 class="text-uppercase text-dark font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;border: 0.5px solid green;">
          <p>
            <i class="fas fa-home mr-3"></i>Gujarat, India </p>
          <p>
            <i class="fas fa-envelope mr-3"></i> yourevent@help.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> +91 12345678</p>
          <p>
            <i class="fas fa-print mr-3"></i> +91 123456478</p>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 bg-dark text-white">© 2019 Copyright:
      <a href="" class="text-success"> www.yourevent.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->

  </body>
  </html>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>