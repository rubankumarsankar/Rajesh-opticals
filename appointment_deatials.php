<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="UTF-8">
    <title><?php if (!empty($page_title))
           echo remove_junk($page_title);
            elseif(!empty($user))
           echo ucfirst($user['name']);
            else echo "RajeshOpticals|TPT";?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="libs/css/main.css" />
  </head>
  <body>
  
    <header id="header">
      <div class="logo pull-left"> Rajesh Opticals Inventory </div>
      <div class="header-content">
      <div class="header-date pull-left">
        
      </div>
      <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
          <li class="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <img src="uploads/users/<?php echo $user['image'];?>" alt="user-image" class="img-circle img-inline">
              
            </a>
            <ul class="dropdown-menu">
              <li>
                  <a href="profile.php?id=<?php echo (int)$user['id'];?>">
                      <i class="glyphicon glyphicon-user"></i>
                      Profile
                  </a>
              </li>
             <li>
                 <a href="edit_account.php" title="edit account">
                     <i class="glyphicon glyphicon-cog"></i>
                     Settings
                 </a>
             </li>
             <li class="last">
                 <a href="logout.php">
                     <i class="glyphicon glyphicon-off"></i>
                     Logout
                 </a>
             </li>
           </ul>
          </li>
        </ul>
      </div>
     </div>
    </header>
    <div class="sidebar">
    
        <!-- admin menu -->
      <?php include_once('layouts/admin_menu.php');?>

     
     
      
   </div>


<div class="page">
  <div class="container-fluid">

<div class="row">
  <div class="col-md-6">
  
  </div>
</div>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Appointment Details</Details></span>
          </strong>
          <div class="pull-right">
            <a href="appoi.php" class="btn btn-primary">Add Appointemnt</a>
          </div>
        </div>
          <?php   $conn=mysqli_connect("localhost","root","","rajeshopticals");
if(!$conn)
{
    die("Database not connected: " . mysqli_error());
}  
                $sql = "SELECT * FROM appointment"; //WHERE uname='$uname'";
               $result=mysqli_query($conn,$sql);
                //$row= mysqli_fetch_assoc($result);
                	
		?>
        </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">No</th>
                <th class="text-center" style="width: 20%;"> Name </th>
                <th class="text-center" style="width: 15%;"> Mobile No</th>
                <th class="text-center" style="width: 20%;"> Email </th>
                <th class="text-center" style="width: 15%;"> Appointemnt Date </th>
                <th class="text-center" style="width: 15%;"> Area </th>
                <th class="text-center" style="width: 15%;"> City </th>
                <th class="text-center" style="width: 15%;"> State </th>
                <th class="text-center" style="width: 15%;"> Pin Code </th>
                <th class="text-center" style="width: 100px;"> Actions </th>
                
                </tr>
             
            </thead>
           <tbody>
           
           <?php 
		while($row=mysqli_fetch_array($result))
{
?> 
    <tr><td> <?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['appointment_date'];?></td>
<td><?php echo $row['area'];?></td>
<td><?php echo $row['city'];?></td>
<td><?php echo $row['state'];?></td>
<td><?php echo $row['code'];?></td>
           <td class="text-center">
                <div class="btn-group">
                     <a href="#?id=<?php echo (int)$appointment['id'];?>" class="btn btn-warning btn-xs"  title="Yes" data-toggle="tooltip">
                       <span class="glyphicon glyphicon-ok"></span>
                     </a>
                     <a href="#?id=<?php echo (int)$appointment['id'];?>" class="btn btn-danger btn-xs"  title="No" data-toggle="tooltip">
                       <span class="glyphicon glyphicon-remove"></span>
                     </a>
                  </div>
</td>
</tr>         
<?php } ?>
<?php
mysqli_close($conn);
?>
         </table>
        </div>
      </div>
    </div>
  </div>
<?php include_once('layouts/footer.php'); ?>
