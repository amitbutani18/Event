<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
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
* {
  box-sizing: border-box;
}

body{
    background: linear-gradient(144deg, #6bd24d, #bf52d7, #52d7d2);
background-size: 600% 600%;

-webkit-animation: AnimationName 23s ease infinite;
-moz-animation: AnimationName 23s ease infinite;
animation: AnimationName 23s ease infinite;
}

@-webkit-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 51%}
    100%{background-position:0% 50%}
}
@-moz-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 51%}
    100%{background-position:0% 50%}
}
@keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 51%}
    100%{background-position:0% 50%}
}


#regForm {
  background-color: #ffffff;
  margin: 50px auto;
  font-family: Raleway;
  padding: 50px;
  width: 50%;
  height: 50%;
  min-width: 200px;
}

h1 {
  text-align: center;  
  margin-bottom: 15px;
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #BAFF91;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
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

<form id="regForm" action="/action_page.php">
  <h1><span class="text-dark" style="font-size: 40px;font-weight: 100;">Your</span><span class="brand1 text-success" style="font-size: 40px;">Event</span></h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
               
                  
                <a class="" href="#"></a>
                </h2>
                <div class="form-group"><input class="form-control" type="text" placeholder="Full Name"></div>
                <div class="form-group"><select class="form-control">
                  <optgroup label="Select Registration">
                    <option value="12" selected="">Registration of Shops and Establishments</option>
                    <option value="13">Renewal Application for Shop &amp; Establishment</option>
                    <option value="14">Notice of Change Application for Shop &amp; Establishment</option></optgroup></select></div><input class="form-control mb-2"
                    type="tel" placeholder="Mobile Number">
                <div class="form-group"><input class="form-control mb-2" type="email" name="email" placeholder="Email"><input class="form-control" type="date"></div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-2">
                        <div class="form-check"><input class="form-check-input" name="gender" type="radio" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Male</label></div>
                    </div>
                    <div class="col-2">
                        <div class="form-check"><input class="form-check-input" name="gender" type="radio" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Female</label></div>
    
                    </div>
                  </div>
                </div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
               
                <div class="mb-4"> <a href="#" class="already ">You already have an account? Login here.</a></div>
  </div>
  <div class="tab">  
        <h2 class="text-center"><strong>Details </strong> of Organization / Business / Enterprise
        </h2>
        <div class="form-group"><input class="form-control" type="text" placeholder="Full Name"></div>
        <div class="form-group"><input class="form-control" type="date"></div>
        <div class="form-group"><input class="form-control" type="text" placeholder="Enter GSTIN"></div>
        <div class="form-group"><select class="form-control">
          <optgroup label="Please Select">
            <option value="12" selected="">Proprietorship</option>
            <option value="13">Partnership</option>
            <option value="14">Private Limited Company</option>
            <option value="13">Public Limited Company</option>
            <option value="13">Trust</option>
            <option value="13">Co-operative Society</option>
          </optgroup>
        </select>
        </div>
        <div class="form-group"><select class="form-control">
          <optgroup label="Please Select">
            <option value="12" selected="">Rented</option><option value="13">Other</option></optgroup></select></div>
        <div class="form-group"><input class="form-control" type="text" placeholder="Address"></div>
        <div class="form-group"><input class="form-control" type="text" placeholder="Village / Town / City"></div>
        <div class="form-group"><input class="form-control" type="text" placeholder="Taluka"></div>
        <div class="form-group"><select class="form-control"><optgroup label="Please Select Your Satate">
            <option value="ANDAMAN &amp; NICOBAR ISLANDS">ANDAMAN &amp; NICOBAR ISLANDS</option>
            <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
            <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
            <option value="ASSAM">ASSAM</option>
            <option value="BIHAR">BIHAR</option>
            <option value="CHANDIGARH">CHANDIGARH</option>
            <option value="CHHATTISGARH">CHHATTISGARH</option>
            <option value="DADRA AND NAGAR HAVELI">DADRA AND NAGAR HAVELI</option>
            <option value="DAMAN AND DIU">DAMAN AND DIU</option>
            <option value="DELHI">DELHI</option>
            <option value="GOA">GOA</option>
            <option value="GUJARAT">GUJARAT</option>
            <option value="HARYANA">HARYANA</option>
            <option value="HARYANA">HIMACHAL PRADESH</option>
            <option value="JAMMU AND KASHMIR">JAMMU AND KASHMIR</option>
            <option value="JHARKHAND">JHARKHAND</option>
            <option value="KARNATAKA">KARNATAKA</option>
            <option value="KERALA">KERALA</option>
            <option value="LAKHSWADEEP">LAKHSWADEEP</option>
            <option value="MADHYA PRADESH">MADHYA PRADESH</option>
            <option value="MAHARASHTRA">MAHARASHTRA</option>
            <option value="MANIPUR">MANIPUR</option>
            <option value="MEGHALAYA">MEGHALAYA</option>
            <option value="MIZORAM">MIZORAM</option>
            <option value="NAGALAND">NAGALAND</option>
            <option value="ODISHA">ODISHA</option>
            <option value="PUDUCHERRY">PUDUCHERRY </option>
            <option value="PUNJAB">PUNJAB</option>
            <option value="RAJASTHAN">RAJASTHAN</option>
            <option value="SIKKIM">SIKKIM</option>
            <option value="TAMIL NADU">TAMIL NADU</option>
            <option value="TELANGANA">TELANGANA</option>
            <option value="TRIPURA">TRIPURA</option>
            <option value="UTTAR PRADESH">UTTAR PRADESH</option>
            <option value="UTTRAKHAND">UTTRAKHAND</option>
            <option value="WEST BENGAL">WEST BENGAL</option>
        </optgroup></select></div>
        <div class="form-group"><input class="form-control" type="number" placeholder="Pin Code"></div>
        <div class="form-group"><textarea class="form-control" placeholder="Nature of Business (Short Description of Business Activity)"></textarea></div>

  </div>
  <div class="tab">
     
                <h2 class="text-center"><strong>Create</strong> an account.</h2>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Full name (on the card)">
                  </div>

                  <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                      </div>
                      <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Card number">
                    </div>
<div class="row">
  <div class="col-5">
      <div class="input-group mb-3">
          <div class="input-group-prepend mr-2">
            <span class="input-group-text" id="inputGroup-sizing-default">Expiration</span>
          </div>
          <div class="row">
              <div class="col-sm-8"> 
                    <div class="form-inline">
                      <select class="form-control" style="width:45%">
                    <option>MM</option>
                    <option>01 - Janiary</option>
                    <option>02 - February</option>
                    <option>03 - February</option>
                  </select>
                        <span style="width:10%; text-align: center"> / </span>
                        <select class="form-control" style="width:45%">
                    <option>YY</option>
                    <option>2018</option>
                    <option>2019</option>
                  </select>
                    </div>
                  
              </div>
          </div>
        </div>
  </div>
  <div class="col">
      <div class="form-group"><input class="form-control" type="number" placeholder="CVV"></div>

  </div>
</div>
                   
                
          
  </div>
  <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
 <footer class="page-footer font-small unique-color-dark bg-light">

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
</body>
</html>
