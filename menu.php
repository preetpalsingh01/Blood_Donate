<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Blood Bank</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
<?php 
$t = time();
$d = date("d",$t);
$m = date("M",$t);
$y = date("Y",$t);
?>
Today Date : <?php echo $d ?> <?php echo $m ?> <?php echo $y ?> &nbsp; 
<form method="post">
<input type="submit" name="logout" value="Logout" class="btn btn-danger square-btn-adjust">
</form>
</div>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <?php
				if($data_user["user_type"]!=3)
				{
				?>
				<li class="text-center">                	
                    <img src="upload/<?php echo $data_user["photo"] ?>" class="user-image img-responsive"/>
					</li>	
                     
                     <li>
                        <a href="request.php"><i class="fa fa-laptop fa-3x"></i> Request (<?php echo get_request_count(); ?>)</a>
                    </li>
                    
                    <li>
                        <a href="request_done.php"><i class="fa fa-laptop fa-3x"></i> Request Done (<?php echo get_request_done_count(); ?>)</a>
                    </li>
                    
                     <li>
                        <a href="donate_done.php"><i class="fa fa-laptop fa-3x"></i> Donate Done (<?php echo get_donate_done_count(); ?>)</a>
                    </li>
                     
                     <li>
                        <a href="search.php"><i class="fa fa-laptop fa-3x"></i> Search</a>
                    </li>	
					                   
                      
                  	<li>
                        <a href="profile.php"><i class="fa fa-square-o fa-3x"></i>Edit Profile</a>
                    </li>
                    <?php 
				}
				else
				{
					?>
                    	
					
                    <li>
                        <a class="active-menu"  href="home.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
					<li>
                        <a href="add_blood_group.php"><i class="fa fa-laptop fa-3x"></i> Add Blood Group</a>
                    </li>	
					<li>
                        <a href="view_blood_group.php"><i class="fa fa-laptop fa-3x"></i> List of Blood Group</a>
                    </li>
                    
                    <li>
                        <a href="add_user.php"><i class="fa fa-laptop fa-3x"></i> Add User </a>
                    </li>	
					<li>
                        <a href="list_of_user.php"><i class="fa fa-laptop fa-3x"></i> List of User</a>
                    </li>               
                      
                  	<li>
                        <a href="profile.php"><i class="fa fa-square-o fa-3x"></i>Edit Profile</a>
                    </li>
                    <?php
				}
				?>
                </ul>
               
            </div>
            
        </nav>