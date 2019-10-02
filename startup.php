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
    .hedding{
        font-size:40px;
        font-family: 'Roboto', sans-serif;
        font-weight:800;
        letter-spacing:2px;
    }
    
    </style>
    <title>Your Event</title>
  </head>
  <body>

      
  <div  style="position: sticky;top:0;  z-index: 1030;">
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;padding: 0%;">
   
    <div>
    <a class="navbar-brand ml-2" href="index.php"><span class="brand">Your</span><span class="brand1 text-success">Event</span></a>
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
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <li class="nav-item dropdown active ml-auto mr-auto">
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

<div class="text-center container-fluid" style="margin-top: 20px;margin-bottom:20px;">
    <h1 class="display-3" >
      <span style="color: black;opacity: 0.7;transform: ;font-size: 50px;text-transform: uppercase;font-weight:lighter;;
      ;">Your Business </span>
       <Span class="text-success" style="font-size: 70px;font-weight: bold;text-transform: uppercase;">Startup</Span> 
    </h1>
    <p style="font-size: 20px;" class="text-dark">
              Book <Span class="text-success" style="text-transform: capitlize;">Your Event</Span> Date  Now
    </p>
  </div>

<div class="" style="padding:60px">
    <div class="card bg-dark text-white border-0" style="">
    <img style="filter: brightness(30%);border-radius: 8px;"  src="image/o1.jpg" class="card-img" alt="Wedding.jpg">
    <div class="card-img-overlay" style="padding:80px">
        <h5 class="card-title text-white hedding" style="">Opening</h5>
        <p class="card-text">We Can Organize Opening Ceremany For Your Shop Or Other business. All Types Of Sevices We Provide For Your Wedding Like A "Waiters take orders and serve food and beverages to patrons at tables in dining esthblishment.","Shop Dercoration","We sreve food and drink as per your choice.",etc. </p>
        <p class="card-text">Booking <span style="">Your</span>
       <Span class="text-success" style="">Event</Span> Date Now</p>
       <a href="Wselect.html"><button class="btn btn-outline-success my-2 my-sm-0 mt-4" type="button" data-toggle="modal" data-target="#darkModalForm"><b style="letter-spacing: 1.5px;">Book Now</b></button></a>  </div>
    </div>
    </div>
            </div>    

<div class="" style="padding:60px">
    <div class="card bg-dark text-white border-0" style="">
        <img style="filter: brightness(40%);border-radius: 8px;"  src="image/o2.jpg" class="card-img" alt="Wedding.jpg">
        <div class="card-img-overlay" style="padding:80px">
            <h5 class="card-title text-white hedding" style="">Product Lanching</h5>
            <p class="card-text">We Can Organize Your Product launching Event. All Types Of Sevices We Provide For Your Product Lanching Event Like A "Make A Templete For Your Product Advertisement","Benqute Hall","Dercoration","We sreve food and drink as per your choice.",etc. </p>
            <p class="card-text">Booking <span style="">Your</span>
            <Span class="text-success" style="">Product Launching</Span> Date Now</p>
            <button class="btn btn-outline-success my-2 my-sm-0 mt-4" type="button" data-toggle="modal" data-target="#darkModalForm"><b style="letter-spacing: 1.5px;">Book Now</b></button>  </div>
        </div>
    </div>
</div>



<div class="" style="padding:60px">
    <div class="card bg-dark text-white border-0" style="">
        <img style="filter: brightness(30%);border-radius: 8px;"  src="image/4.jpg" class="card-img" alt="Wedding.jpg">
        <div class="card-img-overlay" style="padding:80px">
            <h5 class="card-title text-white hedding" style="">If You Want To We Organize Your Other Start Up Event Then Tell Us Here 
            <a href="Wrform.html"><button class="btn btn-outline-success my-2 my-sm-0 mt-4" type="button" data-toggle="modal" data-target="#darkModalForm"><b style="letter-spacing: 1.5px;">Click Here</b></button></a> </h5>
            <p class="card-text">We Definatly Organize Your Event. </p>
            <p class="card-text">Thank <span style="">You</span>
            </p>
        </div>
    </div>
</div>



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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>