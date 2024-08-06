<?php
include("auth.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>OFFICE STAFF INFO SYSTEM</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="style.css"> 
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
</head>

<body style="background-color:black">
	<nav class="navbar navbar-expand-md bg-dark navbar-dark">
		<div class="container-fluid">
  <a class="navbar-brand" href="home.php"><i class="fa fa-laptop" aria-hidden="true"></i> OFFICE STAFF INFO SYSTEM</a>

  <a href="generate-section-pdf.php" class=" btn btn-success" style="background:white; color:black"><i class="fa fa-download" aria-hidden="true"></i> Download Section Details</a>
  <a href="generate-staff-pdf.php" class=" btn btn-success" style="background:white; color:black"><i class="fa fa-download" aria-hidden="true"></i> Download Staff Details</a>
  <a href="generate-client-pdf.php" class=" btn btn-success" style="background:white; color:black"><i class="fa fa-download" aria-hidden="true"></i> Download Client Details</a>

  <a href="logout.php" class=" btn btn-success" style="background:white; color:black"> LOG OUT</a>
</div>
</nav>

<div class="row mt-3">
  <div class="col-2">
    <div id="accordion">
    <div class="list-group">
      <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapseTwo">
        <i class="fas fa-user-alt"></i>  SECTION</a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=add_section" class="text-light"> ADD SECTION</a>
          </div>
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=manage_section" class="text-light"> VIEW SECTIONS</a></div>
        </div>
      <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapseThree">
          <i class="fas fa-user-graduate"></i>   PAYMENTS AREA
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="list-group-item" style="background-color: #303030;">
          <a href="home.php?info=add_payment" class="text-light">ADD PAYMENT MADE</a>
        </div>
        <div class="list-group-item" style="background-color: #303030;">
          <a href="home.php?info=manage_payment" class="text-light"> VIEW PAYMENT AMOUNTS</a>
        </div>
      </div>
         <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapsefive">
        <i class="fas fa-book"></i> REVENUE CLIENTS</a>
      </div>
      <div id="collapsefive" class="collapse" data-parent="#accordion">
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=add_client" class="text-light"> ADD CLIENT</a></div>
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=manage_client" class="text-light"> VIEW CLIENTS</a></div>
        </div>
         <div class="list-group-item bg-dark">
        <a class="collapsed nav-link text-light" data-toggle="collapse" href="#collapsesix">
        <i class="fas fa-users"></i> STAFF</a>
      </div>
      <div id="collapsesix" class="collapse" data-parent="#accordion">
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=add_staff" class="text-light">  ADD STAFF</a></div>
          <div class="list-group-item" style="background-color: #303030;"><a href="home.php?info=manage_staff" class="text-light"> VIEW STAFFS</a></div>
        </div>
    </div>
</div>
  </div>
  <div class="col-10">
   
<?php
@$info=$_GET['info'];
if ($info!=="") {
             if ($info=="add_section") {
             include('./includes/add_section.php');
                }
             else if($info=="add_payment")
             {
             include('./includes/add_payment.php');
             }
             elseif ($info=="manage_payment") {
               include ('./includes/manage_payment.php');
             }elseif ($info=="add_client") {
               include ('./includes/add_client.php');
             }elseif ($info=="manage_client") {
               include ('./includes/manage_client.php');
             }elseif ($info=="add_staff") {
               include ('./includes/add_staff.php');
             }elseif ($info=="manage_staff") {
               include ('./includes/manage_staff.php');
             }elseif ($info=="manage_section") {
               include ('./includes/manage_section.php');
             }elseif ($info=="update_payment") {
               include ('./includes/update_payment.php');
             }elseif ($info=="delete_payment") {
               include ('./includes/delete_payment.php');
             }elseif ($info=="update_section") {
               include ('./includes/update_section.php');
             }elseif ($info=="delete_section") {
               include ('./includes/delete_section.php');
             }elseif ($info=="update_client") {
               include ('./includes/update_client.php');
             }elseif ($info=="delete_client") {
               include ('./includes/delete_client.php');
             }elseif ($info=="update_staff") {
               include ('./includes/update_staff.php');
             }elseif ($info=="delete_staff") {
               include ('./includes/delete_staff.php');
             }elseif ($info=="change_password") {
               include ('./includes/change_password.php');
             }elseif ($info=="section_search") {
               include ('./includes/section_search.php');
             }elseif ($info=="client_search") {
               include ('./includes/client_search.php');
             }elseif ($info=="payment_search") {
               include ('./includes/payment_search.php');
             }elseif ($info=="staff_search") {
               include ('./includes/staff_search.php');
             }
             }
?>

</div>
</div>

</body>
</html>