<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> RajeshOpticals | TPT</title>
    
    

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
	
		<link rel="stylesheet" href="ass/css/ionicons.min.css">
		<link rel="stylesheet" href="ass/css/flaticon.css">
		<link rel="stylesheet" href="ass/css/style.css">

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

      <!-- Required meta tags -->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/datepicker.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>

    <body>

    <!-- ################# Header Starts Here#######################--->
    <header>
    
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 no-padding col-sm-12 nav-img">
                        <img src="assets/images/logo3.png" alt="">
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="cal.php">Calendar</a></li>
                            <li><a href="contact_us.php">Contact Us</a></li>
                            <li><a href="login.php">login</a></li>  
                        </ul>
                    </div>
                    
					<form action="appoi.php" class="col-sm-2 d-none d-lg-block appoint">
                    <div >
                        <button class="btn btn-info">Book an Appointment</button>
                    </div>
                </div>
				</form>
        </div>
    </header>
   
 
      <div class="inner-layer">
          <div class="container">
            <div class="row no-margin">
                <div class="col-sm-7">
                    <div class="content">
                        <h1>Rajesh Opticals Appointemnt Form</h1>
                        <p>New Technological Eye Checkup </p>
                        <h4>For Help Call : +91 9894336038</h4>
                    </div>
                </div>
               
                <div class="col-sm-5">
                    <div class="form-data">
                        <div class="form-head">
                        <form action="add.php" method="post">
                            <h2>Book Appointemnt</h2>
                        </div>
                        <div class="form-body">
                            <div class="row form-row">
                              <input type="text"name="name" placeholder="Enter Full name" class="form-control">
                            </div>
                            <div class="row form-row">
                              <input type="text" name="mobile" placeholder="Enter Mobile Number(+919999999999,09999999999)"  maxlength="13" pattern="^((\+91[0-9]{10})|(0[0-9]{10}))$"  required class="form-control">
                            </div>
                             <div class="row form-row">
                              <input type="text" name="email" placeholder="Enter Email Adreess(abc@gmai.com)" pattern="[^ @]*@[^ @]*" class="form-control" required>
                            </div>
                           <div class="row form-row">
                              <input id="appointment_date" type="date" name="appointment_date" placeholder="Appointment Date" class="form-control">
                            </div>
                            
                            <h6>Address Details</h6>

                             <div class="row form-row">
                                <div class="col-sm-6">
                                   <input type="text" name="area" placeholder="Enter Area" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                   <input type="text" name="city" placeholder="Enter City" class="form-control">
                                </div>
                            </div>
                             <div class="row form-row">
                                <div class="col-sm-6">
                                   <input type="text" name="state" placeholder="Enter State" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                   <input type="text" name="code" placeholder="Postal Code" class="form-control">
                                </div>
                            </div>
                           
                               <div class="row">
                              <div class="col-10">
                                  <input type="submit" name="submit" value="Submit" style="min-height: 50px;margin-bottom:auto;text-align: center;background-color: #10AADF; color:white; font-weight: bold;" class="btn btn-primary btn-lg px-2">
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
          </div>
      </div>
</form>
     
    
    
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   
    <footer>
    <div class="copy">
            <div class="container">
                <a >Rajesh Opticals-TPT | 2022 &copy; All Rights Reserved</a>
                
                <span>
                <a><i class="fab fa-whatsapp"></i></a>
                <a><i class="fab fa-instagram"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>
           
        </div>
</footer>
</body>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="asset/js/jquery-3.3.1.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/bootstrap-datepicker.js"></script>

    <script>
      $(document).ready(function(){
          $("#dat").datepicker();
      })
    </script>
    
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="ass/js/jquery.min.js"></script>
    <script src="ass/js/popper.js"></script>
    <script src="ass/js/bootstrap.min.js"></script>
    <script src="ass/js/main.js"></script>


</html>
