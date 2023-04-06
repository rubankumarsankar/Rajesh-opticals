
    <!DOCTYPE html>  
<html>  
<head>  
<title> RajeshOpticals | TPT</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>  
<link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
<style>  
 body {  
  margin-top: 0;  
  text-align: center;  
  font-size: 14px;  
  font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;  
  }  
 #calendar {  
  width: 650px;  
  margin: 0 auto;  
  }  
</style>  
</head>  
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
<body> 
    <br><br><br><br>
<?php   $conn=mysqli_connect("localhost","root","","rajeshopticals");
if(!$conn)
{
    die("Database not connected: " . mysqli_error());
}  
                $sql = "SELECT name as title, DATE_FORMAT(appointment_date, '%Y-%m-%d') as start,  DATE_FORMAT(appointment_date, '%Y-%m-%d') as end FROM `appointment`;"; //WHERE uname='$uname'";
               $result=mysqli_query($conn,$sql);
                $events = array();
               while($row=mysqli_fetch_assoc($result))
               {
                   
                   $events = array_merge($events, [$row]);

               }

               $cal_events = json_encode($events);
                //$row= mysqli_fetch_assoc($result);
                	
		?>


 <h2> Calendar  </h2>  
 <br/>  
 <div id='calendar'></div>  
</body>  

<script>  
  
 $(document).ready(function() {  
  var date = new Date();  
  var d = date.getDate();  
  var m = date.getMonth();  
  var y = date.getFullYear();  
  
  var calendar = $('#calendar').fullCalendar({  
   editable: false,  
   header: {  
    left: 'prev,next today',  
    center: 'title',  
    right: 'month,agendaWeek,agendaDay'  
   },  
  
   events:<?= $cal_events ?>,  
  
   eventRender: function(event, element, view) {  
    if (event.allDay === 'true') {  
     event.allDay = true;  
    } else {  
     event.allDay = false;  
    }  
   },  
   selectable: true,  
   selectHelper: true,  
   select: function(start, end, allDay) { 
    var title = prompt('Event Title:');  
  
  
  $.ajax({  
      url: 'add_events.php',  
      data: 'title='+ title+'&start='+ start +'&end='+ end,  
      type: "POST",  
      success: function(json) {  
      alert('Added Successfully');  
      }  
  });  
  
 
  
 
   },  
  
   editable: false,  
   eventDrop: false,  
   eventClick: true,  
   eventResize: false  
     
  });  
    
 });  
 
</script>

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
</html>  


