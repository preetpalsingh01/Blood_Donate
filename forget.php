<?php include "header1.php"; ?>
<?php 
$message = forget();
?>
	<title>Forget Password</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

        
         <div class="col-md-12">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  Forget Password</strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" placeholder="Your Username " name="email" required value="<?php echo $_POST["email"] ?>" />
                                        </div>
                                                                              
                                    
                                     	<input type="submit" class="btn btn-primary " name="submit" value="forget">
                                        <br>
                                        <?php echo $message ?>
                                    <hr />
                                    Login ? <a href="login.php" >click here </a> 
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
                
       


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
<?php include 'footer1.php'; ?>