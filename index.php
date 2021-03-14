
<?php
require_once'mysql.connect.php';
require_once 'statistics.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme - Multipurpose Bootstrap4 Admin Template</title>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  <!-- skins CSS-->
  <link href="assets/css/skins.css" rel="stylesheet"/>
 <style>
@charset "UTF-8";
:root {
  --star-size: 20px;
  --star-color:gray;
  --star-background: #fc0;
}

.Stars {
  --percent: calc(var(--rating) / 5 * 100%);
  display: inline-block;
  font-size: var(--star-size);
  font-family: Times;
  line-height: 1;
}
.Stars::before {
  content: "★★★★★";
  letter-spacing: 3px;
  background: linear-gradient(90deg, var(--star-background) var(--percent), var(--star-color) var(--percent));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

@import url("https://fonts.googleapis.com/css?family=Alatsi|Poppins&display=swap");
.date {
  background-color: #ffffff;
  border: 0 solid transparent;
  border-radius: 0.25rem;
  -webkit-box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1);
  box-shadow: 0 0.5rem 1rem 0 rgba(44, 51, 73, 0.1);
  color: #222b45;
  font-family: Open Sans, sans-serif;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.25rem;
  margin-bottom: 1.875rem;
  scrollbar-face-color: #e4e9f2;
  scrollbar-track-color: #f7f9fc;
  width: 19.25rem;
  border: none;
  margin: 0;
}
.date .result {
  padding: 1rem 1.25rem;
  border-bottom: 1px solid #edf1f7;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
  color: #222b45;
  font-family: Open Sans, sans-serif;
  font-size: 0.9375rem;
  font-weight: 600;
  line-height: 1.5rem;
}
.date .result .date-title {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  font-size: 1.125rem;
  font-weight: 700;
  line-height: 1.5rem;
}
.date .result .label {
  font-size: 1.125rem;
  font-weight: 400;
  line-height: 1.125rem;
}
.date .selector {
  display: flex;
  padding: 1rem 1.25rem;
  justify-content: space-between;
  align-items: center;
}
.date .selector .left, .date .selector .right {
  cursor: pointer;
  font-family: Open Sans, sans-serif;
  font-weight: 700;
  background-color: transparent;
  border-color: transparent;
  border-style: solid;
  border: none;
  text-transform: uppercase;
  border-radius: 0.25rem;
  font-size: 0.75rem;
  line-height: 1rem;
  transition-property: background-color, border-color, box-shadow, color, -webkit-box-shadow;
  -webkit-transition-timing-function: ease-in;
  transition-timing-function: ease-in;
}
.date .selector .left:focus, .date .selector .right:focus {
  box-shadow: 0 0 0 0.375rem rgba(143, 155, 179, 0.16), inset 0 0 0 100vmax rgba(143, 155, 179, 0.16);
  outline: none;
}
.date .selector .month {
  background-color: #6C5CEA;
  border-color: #6C5CEA;
  color: #ffffff;
  padding: 0.6875rem 1.125rem;
  border-style: solid;
  border-width: 0.0625rem;
  text-transform: uppercase;
  border-radius: 0.25rem;
  font-size: 0.875rem;
  line-height: 1rem;
  cursor: pointer;
  font-family: Open Sans, sans-serif;
  font-weight: 700;
}
.date .picker {
  width: 100%;
}
.date .picker .days {
  background: #f7f9fc;
  border-top: 1px solid #edf1f7;
  border-bottom: 1px solid #edf1f7;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 1rem 0;
}
.date .picker .days span {
  color: #8f9bb3;
  width: 2.625rem;
  color: #8f9bb3;
  font-size: 0.75rem;
  font-weight: 700;
  line-height: 1rem;
  text-align: center;
}
.date .picker .dates {
  padding: 1rem 0;
}
.date .picker .dates-row {
  display: flex;
}
.date .picker .dates span {
  cursor: pointer;
  width: 2.625rem;
  height: 2.625rem;
  font-family: Open Sans, sans-serif;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.25rem;
  border-radius: 0.25rem;
  color: #222b45;
  justify-content: center;
  margin: 1px;
  align-items: center;
  -webkit-box-pack: center;
  display: flex;
  -webkit-box-align: center;
}
.date .picker .dates span.active {
  background: #6C5CEA;
  color: #fff;
}
.date .picker .months {
  padding: 1rem 0;
  display: none;
}
.date .picker .months-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.date .picker .months span {
  cursor: pointer;
  width: 2.625rem;
  height: 2.625rem;
  color: #8f9bb3;
  width: 2.625rem;
  color: #8f9bb3;
  font-size: 0.75rem;
  font-weight: 700;
  line-height: 1rem;
  text-align: center;
  border-radius: 0.25rem;
  color: #222b45;
  justify-content: center;
  margin: 1px;
  align-items: center;
  -webkit-box-pack: center;
  display: flex;
  -webkit-box-align: center;
}
.date .picker .months span.active {
  background: #6C5CEA;
  color: #fff;
}




 </style>
</head>

<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Mariaggis</h5>
     </a>
   </div>
   <ul class="sidebar-menu">



    <li><a href="index.html" class="waves-effect active"><i class="zmdi zmdi-view-dashboard text-primary"></i> <span>Dashboard</span></a></li>
    <li><a href="room.html" class="waves-effect"><i class="fa fa-key text-primary"></i> <span>Rooms</span></a></li>
    <li><a href="review.html" class="waves-effect active"><i class="fa fa-comment text-primary"></i> <span>Review</span></a></li>
    <li><a href="guest.html" class="waves-effect"><i class="fa fa-user text-primary"></i> <span>Guest</span></a></li>



      <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

























   

<!--Start topbar header-->
<header class="topbar-nav">
 <nav id="header-setting" class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <h6>Admin Dashboard</h5>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i><span class="badge badge-primary badge-up">12</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 12 new messages
          <span class="badge badge-primary">12</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Dannish Josh</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>5/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 14 Notifications
          <span class="badge badge-info">14</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Received Orders</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Sarajhon Mccoy</h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
        <!-- End Breadcrumb-->
     
    <div class="main-content">

      <div class="row mt-3">
        <div class="col-sm-12 col-md-6 col-lg-3">

<!-- chart booking -->

<div class="card card-primary-l">
  <div class="card-body">

<div class="d-flex justify-content-between">
<div class="media-body ml-3 my-auto">
<h6 class="mb-0">New Booking</h6>
<span class="d-block pt-2">
<h5><?php echo $total['overAll']['booking'] ?></h5>
</span>  
</div>
<div>
<div class="chart easy-pie-chart-2" data-percent="55">
<span class="percent"></span>
</div>

</div>


</div>       
    </div>
  </div>


<!-- chart booking -->



        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">

       
<!-- chart booking -->

<div class="card card-secondary-l">
  <div class="card-body">

<div class="d-flex justify-content-between">
<div class="media-body ml-3 my-auto">
<h6 class="mb-0">Scheduled Room</h6>
<span class="d-block pt-2">
<h5>676</h5>
</span>  
</div>
<div>
<div class="chart easy-pie-chart-4" data-percent="55">
<span class="percent"></span>
</div>

</div>


</div>       
    </div>
  </div>


<!-- chart booking -->



        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">



<!-- chart booking -->

<div class="card card-success-l">
  <div class="card-body">

<div class="d-flex justify-content-between align-items-center" style="min-height: 150px;">
<div class="media-body ml-3 my-auto">
<h6 class="mb-0">Check In</h6>
<span class="d-block pt-2">
<h5>676</h5>
</span>  
</div>
<div>
<i aria-hidden="true" class="p-3 bg-success fa fa-sign-in text-white" style="font-size: 2.5rem;border-radius: 50%"></i> 
</div>


</div>       
    </div>
  </div>


<!-- chart booking -->



        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">



<!-- chart booking -->

<div class="card card-danger-l">
  <div class="card-body my-auto">

<div class="d-flex justify-content-between align-items-center" style="min-height: 150px;">
<div class="media-body ml-3">
<h6 class="mb-0">Check Out</h6>
<span class="d-block pt-2">
<h5>676</h5>
</span>  
</div>
<div>
  <i aria-hidden="true" class="p-3 bg-danger fa fa-sign-out text-white" style="font-size: 2.5rem;border-radius: 50%"></i> 
</div>


</div>       
    </div>
  </div>


<!-- chart booking -->




        </div>
      </div><!--End Row-->


<!-- row  -->


<div class="row">
<div class="col-sm-12 col-md-9">

  <div class="row">


    <div class="col-md-12 col-lg-6">
      <div class="card">
    
    <div class="card-body">
    
      <div class="progress-wrapper">
        <h6 class="my-3">Available Rooms <span class="float-right">345</span></h6>
          <div class="progress" style="height: 4px;">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 90%"></div>
          </div>
      <small>total 1500 rooms</small>
    </div>
    
    </div>
      </div>
    
    
    </div>
    
    <div class="col-md-12 col-lg-6">
    
      <div class="card">
    
        <div class="card-body">
          <div class="progress-wrapper">
            <h6 class="my-3">Sold Out Rooms Today <span class="float-right">185</span></h6>
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 90%"></div>
              </div>
          <small>total 1500 rooms</small>
        </div>      
          
        </div>
        
        
          </div>
    
    </div>
    
    
    
    </div>
    
    <!-- end row -->
    
    
    
    <!-- row statist -->
    <div class="row">
      <div class="col">
    
        <div class="card">
          <div class="card-header d-flex justify-content-between px-2">
    
            <div class="media-body ml-3">
              <h6 class="mb-0">Reservation Statistic Out</h6>
              <small class="text-muted">lorem ipsum</small>
              </div>
          
              <div class="d-flex justify-content-around">
    
    <div>
      <i aria-hidden="true" class="p-2 bg-success fa fa-sign-in text-white" style="font-size: 1.5rem;border-radius: 50%"></i> 
    
      <span class="p-3">656 <small class="text-muted">Check in</small></span>
    
    </div> 
    
    <div>
      <i aria-hidden="true" class="p-2 bg-danger fa fa-sign-out text-white" style="font-size: 1.5rem;border-radius: 50%"></i> 
    
      <span class="p-3">449 <small class="text-muted">Check out</small></span>
    
    </div> 
    
             </div>
          
          </div>
            <div class="card-body">
    
    
    
    
              
            <div id="chart3"></div>
          
            
          </div>
          
          
          
          </div>
          
      </div>
    </div>
    
    <!-- row statists -->
    
    <!-- row total revenue -->
    <div class="row py-2">
    
    <div class="col-12 col-lg-9">
    
    <div class="card">
    <div class="card-body">
      <div class="card-title">
        <h6>Total Revenue</h6>
    
      </div>
    
    <div class="d-flex justify-content-between">
    <div><h5>12332</h5></div>
    <span class="text-muted">last month $ 1211</span>
    <div class="align-self-center" id="sparklinechart"></div>
    
    </div>
    
    
      <div id="chart2"></div>
    </div>
    
    </div>
    
    </div>
    
    <div class="col-12 col-lg-3">
         
    
      <div class="card card-primary rounded-0">
        <div class="card-body">
    
          <div class="text-center">
         <h6 class="mb-3 text-uppercase">Revenue</h6>
         <div id="data-chart-19"></div>
       </div>
      </div>
      <div class="card-footer border-0">
      <div class="row align-items-center text-center">
        <div class="col border-right border-light">
       <h5 class="mb-0">814</h5>
       <small class="extra-small-font">Last Week</small>
      </div>
        <div class="col">
       <h5 class="mb-0">975</h5>
       <small class="extra-small-font">Last Month</small>
      </div>
      </div>
    </div>
    
    </div>
    
    </div>
    
    </div>
    <!-- row statistic end -->
    
    
    
    
    <!-- row use review  -->
    
    <div class="container-fluid">
    
    
    
    <div class="card">
    <div class="card-body">
      <div class="card-title">
        <h6>latest Customer Review</h6>
      </div>
    
    
    
    
    
    
    
      <ul class="list-group list-group-flush">
        
        
        
    
    
    <!-- single review start -->
    <li class="list-group-item">
      <div class="media align-items-center">
        <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded-circle">
      <div class="media-body ml-3">
        <h6 class="mb-0">Sarah John <small class="ml-4 text-muted">posted : 02/06/2012</small></h6>
    
    
    
        <p class="mb-0 small-font"> : Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dicta a inventore at ipsa autem cumque ad doloribus eum ex. Optio deserunt, neque unde modi saepe id aperiam iste nulla.</p>
    
        <div class="Stars" style="--rating: 2.3;" aria-label="Rating of this product is 2.3 out of 5."></div>
    
    
      </div>
    
      <div>
        <button type="button" class="btn btn-round waves-effect waves-light btn-success">Aprove</button>
        <button type="button" class="btn btn-round waves-effect waves-light m-1 btn-danger">Reject</button>
      </div>
    
    
    </div>
    </li>
    
    <!-- single review end  -->
    
    
    <!-- single review start -->
    <li class="list-group-item">
      <div class="media align-items-center">
        <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded-circle">
      <div class="media-body ml-3">
        <h6 class="mb-0">John Doe <small class="ml-4 text-muted">posted : 02/06/2012</small></h6>
    
    
    
        <p class="mb-0 small-font">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum non rem fuga! Maxime cum ex atque illo error dicta expedita delectus tenetur in voluptatem laborum architecto aut magnam, dolorem voluptatum?</p>
    
        <div class="Stars" style="--rating: 2.3;" aria-label="Rating of this product is 2.3 out of 5."></div>
    
    
      </div>
    
      <div>
        <button type="button" class="btn btn-round waves-effect waves-light btn-success">Aprove</button>
        <button type="button" class="btn btn-round waves-effect waves-light m-1 btn-danger">Reject</button>
      </div>
    
    
    </div>
    </li>
    
    <!-- single review end  -->
    
    
    
    
    
    
    
    </ul>
    
    
    
    
    </div>
    
    
    </div>
    
    
    
    
    </div>
    
    <!-- row user review end -->
</div>

<div class="col-sm-12 col-md-3">
  <!-- CALLENDER DATE PICKER -->

<div class="card">
  <div class="card-body">

    <div class="date">
      <div class="result">
        <span class="date-title">
          Dec 22,2019
        </span>
        <span class="label">
          Today
        </span>
      </div>
            <div class="selector">
          <button class="left">
            <i class="fa fa-chevron-left"></i>
          </button>		
          <div class="month">
            December	
          </div>
          <button class="right">
            <i class="fa fa-chevron-right"></i>
        </button>
      </div>
      <div class="picker">
        <div class="days">
          <span>Su</span>
          <span>Mo</span>
          <span>Tu</span>
          <span>We</span>
          <span>Thu</span>
          <span>Fr</span>
          <span>Sa</span>
        </div>	
        <div class="dates">
          <div class="dates-row">
          <span id="1">1</span>
          <span id="2">2</span>
          <span id="3">3</span>
          <span id="4">4</span>
          <span id="5">5</span>
          <span id="6">6</span>
          <span id="7">7</span>
          </div>
          <div class="dates-row">
            
          <span id="8">8</span>
          <span id="9">9</span>
          <span id="10">10</span>
          <span id="11">11</span>
          <span id="12">12</span>
          <span id="13">13</span>
          <span id="14">14</span>
          </div>
          
          <div class="dates-row">
            <span id="15">15</span>
          <span id="16">16</span>
          <span id="17">17</span>
          <span id="18">18</span>
          <span id="19">19</span>
          <span id="20">20</span>
          <span id="21">21</span>
          </div>
          
          <div class="dates-row">
            <span id="22">22</span>
          <span id="23">23</span>
          <span id="24">24</span>
          <span id="25">25</span>
          <span id="26">26</span>
          <span id="27">27</span>
          <span id="28">28</span>
          </div>
          
          <div class="dates-row">
            <span id="29">29</span>
          <span id="30">30</span>
          </div>
        </div>
        <div class="months">
          <div class="months-row">
            <span id="Jan">Jan</span>
            <span id="Feb">Feb</span>
            <span id="Mar">Mar</span>
            <span id="Apr">Apr</span>
          </div>
          <div class="months-row">
            <span id="May">May</span>
            <span id="Jun">Jun</span>
            <span id="Jul">Jul</span>
            <span id="Aug">Aug</span>
          </div>
          <div class="months-row">
            <span id="Sep">Sep</span>
            <span id="Oct">Oct</span>
            <span id="Nov">Nov</span>
            <span id="Dec">Dec</span>
          </div>
          
        </div>
      </div>
  </div>
    
  </div>
</div>
  <!-- CALLENDER DATE PICKER -->


<!-- newest booking -->

<div class="card">

  <div class="card-body">

<div class="card-title">
Newest Booking
<span class="float-right"> <a href="#" class="small">more</a>
</span>

</div>

<ul class="list-group list-group-flush">
<!-- single new booking -->
  <li class="list-group-item">
    <div class="media align-items-center">
      <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded-circle">
    <div class="media-body ml-3">

<div>      <h6 class="mb-0"> <a href="#" class="small"> #GS-234</a> </h6>
</div>  

<div>      <h6 class="mb-0">Sarah John </h6>
</div>
  
  
    </div>
  
 
  
  </div>
  </li>
  
  <!-- single review end  -->


<!-- single new booking -->
<li class="list-group-item">
  <div class="media align-items-center">
    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded-circle">
  <div class="media-body ml-3">

<div>      <h6 class="mb-0"> <a href="#" class="small"> #GS-234</a> </h6>
</div>  

<div>      <h6 class="mb-0">Sarah John </h6>
</div>


  </div>



</div>
</li>

<!-- single review end  -->


<!-- single new booking -->
<li class="list-group-item">
  <div class="media align-items-center">
    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded-circle">
  <div class="media-body ml-3">

<div>      <h6 class="mb-0"> <a href="#" class="small"> #GS-234</a> </h6>
</div>  

<div>      <h6 class="mb-0">Sarah John </h6>
</div>


  </div>



</div>
</li>

<!-- single review end  -->



<!-- single new booking -->
<li class="list-group-item">
  <div class="media align-items-center">
    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded-circle">
  <div class="media-body ml-3">

<div>      <h6 class="mb-0"> <a href="#" class="small"> #GS-234</a> </h6>
</div>  

<div>      <h6 class="mb-0">Sarah John </h6>
</div>


  </div>



</div>
</li>

<!-- single review end  -->



</ul>



  </div>
</div>

<!-- newest booking end -->








<!-- newest booking -->

<div class="card">

  <div class="card-body">

<div class="card-title">
Newest Booking
<span class="float-right"> <a href="#" class="small">more</a>
</span>

</div>

<ul class="list-group list-group-flush">
<!-- single new booking -->
  <li class="list-group-item">
    <div class="media align-items-center">
      <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded-circle">
    <div class="media-body ml-3">

<div>      <h6 class="mb-0"> <a href="#" class="small"> #GS-234</a> </h6>
</div>  

<div>      <h6 class="mb-0">Sarah John </h6>
</div>
  
  
    </div>
  
 
  
  </div>
  </li>
  
  <!-- single review end  -->


<!-- single new booking -->
<li class="list-group-item">
  <div class="media align-items-center">
    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded-circle">
  <div class="media-body ml-3">

<div>      <h6 class="mb-0"> <a href="#" class="small"> #GS-234</a> </h6>
</div>  

<div>      <h6 class="mb-0">Sarah John </h6>
</div>


  </div>



</div>
</li>

<!-- single review end  -->


<!-- single new booking -->
<li class="list-group-item">
  <div class="media align-items-center">
    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded-circle">
  <div class="media-body ml-3">

<div>      <h6 class="mb-0"> <a href="#" class="small"> #GS-234</a> </h6>
</div>  

<div>      <h6 class="mb-0">Sarah John </h6>
</div>


  </div>



</div>
</li>

<!-- single review end  -->



<!-- single new booking -->
<li class="list-group-item">
  <div class="media align-items-center">
    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded-circle">
  <div class="media-body ml-3">

<div>      <h6 class="mb-0"> <a href="#" class="small"> #GS-234</a> </h6>
</div>  

<div>      <h6 class="mb-0">Sarah John </h6>
</div>


  </div>



</div>
</li>

<!-- single review end  -->



</ul>



  </div>
</div>

<!-- newest booking end -->














</div>
</div>

<!-- row  -->



    </div>
    <!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->
    </div>
    <!-- End container-fluid-->

   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2019 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">
	
	
	 <p class="mb-0">Header Colors</p>
      <hr>
	  
	  <div class="mb-3">
	    <button type="button" id="default-header" class="btn btn-outline-primary">Default Header</button>
	  </div>
      
      <ul class="switcher">
        <li id="header1"></li>
        <li id="header2"></li>
        <li id="header3"></li>
        <li id="header4"></li>
        <li id="header5"></li>
        <li id="header6"></li>
      </ul>

      <p class="mb-0">Sidebar Colors</p>
      <hr>
	  
      <div class="mb-3">
	    <button type="button" id="default-sidebar" class="btn btn-outline-primary">Default Header</button>
	  </div>
	  
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
	
  </div><!--End wrapper-->
  

  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>

   <!-- Easy Pie Chart JS -->
   <script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
   <script src="assets/plugins/jquery.easy-pie-chart/easy-pie-chart.init.js"></script>
 <!-- Apex Chart JS -->
 <script src="assets/plugins/apexcharts/apexcharts.js"></script>
 <!-- Sparkline JS -->
 <script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>

   <script>

// chart 3

var options = {
            chart: {
                height: 350,
                type: 'bar',
                foreColor: '#4e4e4e',
                toolbar: {
                      show: false
                    }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'  
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 1,
                colors: ['transparent']
            },
            grid:{
                show: true,
                borderColor: 'rgba(255, 255, 255, 0.00)',
            },
            series: [{
                name: 'Check Ins',
                data: [5144, 4255, 3457, 4356, 6261, 8358, 8263, 9345, 11005, 9900,8200, 8000]
            }, {
                name: 'Check Out',
                data: [4144, 7255, 8457, 9356, 3261, 6758, 8263, 9345, 10005, 8800,7600, 8200]

            },],
            xaxis: {
                categories: ['01', '02', '03', '04', '05', '06', '07', '08', '09','10','11','12','13','14','15'],
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: [ '#00c8ff', '#08a50e', '#7f00ff'],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100, 100, 100]
                },
            },
            colors: ["#0072ff", "#cddc35", "#e100ff"],
            tooltip: {
                theme: 'dark',
                y: {
                    formatter: function (val) {
                        return  + val + " thousands"
                    }
                }
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#chart3"),
            options
        );

        chart.render();


// chart 2

var options = {
            chart: {
                height: 220,
                type: 'bar',
                foreColor: '#4e4e4e',
                toolbar: {
                      show: false
                    }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'  
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            grid:{
                show: false,
                borderColor: 'rgba(255, 255, 255, 0.00)',
            },
            series: [{
                name: 'Check Ins',
                data: [5144, 4255, 3457, 4356, 6261, 8358, 8263, 9345, 11005, 9900,8200, 8000]
            },],
            xaxis: {
                categories: ['01', '02', '03', '04', '05', '06', '07', '08', '09','10','11','12'],
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: [ '#00c8ff', '#08a50e', '#7f00ff'],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 100, 100, 100]
                },
            },
            colors: ["#0072ff", "#cddc35", "#e100ff"],
            tooltip: {
                theme: 'dark',
                y: {
                    formatter: function (val) {
                        return  + val + " thousands"
                    }
                }
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#chart2"),
            options
        );

        chart.render();



        // chart 11



  var options1 = {
      chart: {
        type: 'area',
        height: 50,
        width: 150,
        sparkline: {
          enabled: true
        }
      },
      dataLabels: {
          enabled: false
      },
      fill: {
        type: 'gradient',
          gradient: {
              shade: 'light',
             // gradientToColors: [ '#08a50e'],
              shadeIntensity: 1,
              //type: 'vertical',
              opacityFrom: 0.7,
              opacityTo: 0.2,
              stops: [0, 100, 100, 100]
          },
      },
      colors: ["#08a50e"],
      series: [{
        data: [15, 75, 47, 65, 14, 32, 19, 54, 44, 61]
      }],
      stroke: {
                width: 2.5, 
                curve: 'smooth',
                dashArray: [0]
         },
      tooltip: {
        theme: 'dark',
        fixed: {
          enabled: false
        },
        x: {
          show: false
        },
        y: {
          title: {
            formatter: function (seriesName) {
              return ''
            }
          }
        },
        marker: {
          show: false
        }
      }
    }

    new ApexCharts(document.querySelector("#sparklinechart"), options1).render();





 
    var options = {
      chart: {
        height: 250,
        type: 'radialBar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        radialBar: {
         // startAngle: -135,
          //endAngle: 225,
           hollow: {
            margin: 0,
            size: '70%',
            background: 'transparent',
            image: undefined,
            imageOffsetX: 0,
            imageOffsetY: 0,
            position: 'front',
            dropShadow: {
              enabled: true,
              top: 3,
              left: 0,
              blur: 4,
              opacity: 0.24
            }
          },
          track: {
            background: '#fff',
            strokeWidth: '67%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: true,
              top: -3,
              left: 0,
              blur: 4,
			  color: 'rgba(0, 128, 0, 0.56)',
              opacity: 0.35
            }
          },

          dataLabels: { 
            showOn: 'always',
            name: {
              offsetY: -5,
              show: true,
              color: '#000',
              fontSize: '14px'
            },
            value: {
              formatter: function (val) {
						return val + "%";
					},
              color: '#000',
              fontSize: '20px',
              show: true,
			  offsetY: 10,
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'light',
          type: 'horizontal',
          shadeIntensity: 0.5,
          gradientToColors: ['#08a50e'],
          inverseColors: false,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      colors: ["#cddc35"],
      series: [75],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Total'],

    }

    var chart = new ApexCharts(
      document.querySelector("#data-chart-19"),
      options
    );

    chart.render();
	
//callender datepicker


var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var month = String(today.getMonth()).padStart(3, '0');

$('.dates-row span#' + dd).addClass('active');
$('.dates-row span').on('click' , function()
	{
		$('.dates-row span').removeClass('active');
		$(this).toggleClass('active');
		var date = $(this).text();
		var year = '2019';
		$('.result span.date-title').text(month + ' ' + date + ',' + year);
	});

$('.selector .month').on('click' , function(){
		if($('.picker .dates').css("display") == "none")
		{
			$(".picker .days , .picker .dates").css("display","");
			$(".picker .months").css("display","none");		
		
		}else{
			
			$(".picker .days , .picker .dates").css("display","none");
			$(".picker .months").css("display","block");		
		}
});

$('.months-row span').on('click' , function(){
		$('.months-row span').removeClass('active');
		$(this).toggleClass('active');
		$('.selector .month').text($(this).text());
		month = $(this).text();
})




</script>
    </script>

</body>
</html>
<?php
$conn->close();
?>