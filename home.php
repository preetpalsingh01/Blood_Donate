<?php include "header.php"; 
if($data_user["user_type"]!=3)
{
	?>
    <script>
	window.location.href = "search.php";
	</script>
    <?php
}
?>

    <div id="wrapper">
           <?php include "menu.php"; ?>
           <!-- /. NAV TOP  -->
                  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome Admin</h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">       <a class="navbar-brand" href="request.php">    
			<div class="panel panel-back noti-box">
                <span class="">
                  	<img src="images/ico-1.png" width="100"  />
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo get_total_request_count() ?></p>
                    <p class="text-muted">Total Request</p>
                </div>
             </div>
             </a>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">     
                    <a class="navbar-brand" href="donate_done.php">      
			<div class="panel panel-back noti-box">
                <span class="">
                  	<img src="images/ico-2.png" width="100"  />
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo get_total_request_done_count() ?></p>
                    <p class="text-muted">Total Done Request</p>
                </div>
             </div>
             </a>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">     
                    <a class="navbar-brand" href="list_of_user.php?type=user">       
			<div class="panel panel-back noti-box">
                <span class="">
                  	<img src="images/ico-3.png" width="100"  />
                </span>
                <div class="text-box" >
                     <p class="main-text"><?php echo get_total_user_count() ?></p>
                    <p class="text-muted">Total User</p>
                </div>
             </div>
             </a>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">   
                    <a class="navbar-brand" href="list_of_user.php?type=donar">        
			<div class="panel panel-back noti-box">
                <span class="">
                  	<img src="images/ico-4.png" width="100"  />
                </span>
                <div class="text-box" >
                     <p class="main-text"><?php echo get_total_donar_count() ?></p>
                    <p class="text-muted">Total Donar</p>
                </div>
             </div>
             </a>
		     </div>
			</div>
                 <!-- /. ROW  -->
                <hr />                
                
                 <!-- /. ROW  -->
                
                 <!-- /. ROW  -->
                
                 <!-- /. ROW  -->
                     
                 <!-- /. ROW  -->           
    		</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
<?php include "footer.php"; ?>    