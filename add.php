

<?php
 session_start(); 
  $conn=mysqli_connect("localhost","root","","rajeshopticals");
  if(!$conn)
  {
      die("Database not connected:".mysqli_error());
  }
if(isset($_POST['submit']))
{ 
  
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$appointment_date=$_POST['appointment_date'];
$area=$_POST['area'];
$city=$_POST['city'];
$state=$_POST['state'];
$code=$_POST['code'];
$sql = "INSERT INTO appointment(name,mobile,email,appointment_date,area,city,state,code)
	VALUES ('$name','$mobile','$email','$appointment_date','$area','$city', '$state','$code')";
if(mysqli_query($conn,$sql))
{
    if(mysqli_affected_rows($conn)>0)
    {
        echo "<script>if(confirm('Appointment Successfully')){document.location.href='index.php'};</script>";
    }
    
}
else
{
echo "error " . mysqli_error($conn);
}
    
}
$headers='Info';
$subject='Auto-reply: Booking Appointment';
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">'.$name.'</h1>';
$message .= '<p style="color:#080;font-size:18px;">Thanks for you appointment booking. Your slot is booked</p>';
$message .= '</body></html>';
 
// Sending email
if(mail($email, $subject, $message, $headers)){
    echo 'Thanks.';
} else{
    echo 'oops..... Something went wrong...';
}

mysqli_close($conn);
?>