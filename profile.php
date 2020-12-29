<?php include "header.php"; ?>
<?php $data = profile(); ?>
<?php $con = con(); ?>
    <div id="wrapper">
		<?php include "menu.php"; ?>
        <title><?php echo $data["title1"] ?></title>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                <div class="col-md-12">
                <h2><?php echo $data["title2"] ?></h2> 
           		<hr />
                </div>
                <form method="post">
                <div class="col-md-12 space_5">
                	<div class="col-md-4">
                    	country
                    </div>                    
                    <div class="col-md-4">
                    	<?php $country_id = $data["postback_country_id"]; ?>
                    	<select name="country_id" onchange="this.form.submit()" class="gol_text">
                        	<option value="">Select Country</option>
                            <?php
							$q = mysqli_query($con,"select * from countries");
							while($row = mysqli_fetch_array($q))
							{
								?>
                                <option value="<?php echo $row["id"] ?>"
                                <?php if($country_id==$row["id"]) { ?>
                                selected
                                <?php } ?>>
								<?php echo $row["name"] ?></option>
                                <?php
							}
							?>                            
                        </select>
                    </div>                    
                    <div class="col-md-4 myred_font">
                    	<?php echo $data["country_id_message"]; ?>
                    </div>
                </div>
                <div class="col-md-12 space_5">
                	<div class="col-md-4">
                    	State
                    </div>                    
                    <div class="col-md-4"> 
                    	<?php $state_id = $data["postback_state_id"];?>
                        <select name="state_id" onchange="this.form.submit()" class="gol_text">
                        	<option value="">Select State</option>
                            <?php
							$q = mysqli_query($con,"select * from states where country_id='$country_id'");
							while($row = mysqli_fetch_array($q))
							{
								?>
                                <option value="<?php echo $row["id"] ?>"
                                <?php if($state_id==$row["id"]) { ?>
                                selected
                                <?php } ?>>
								<?php echo $row["name"] ?>
                                </option>
                                <?php
							}
							?>                            
                        </select>
                    </div>                    
                    <div class="col-md-4 myred_font">
                    	<?php echo $data["state_id_message"]; ?>
                    </div>
                </div>
                <div class="col-md-12 space_5">
                	<div class="col-md-4">
                    	City
                    </div>                    
                    <div class="col-md-4"> 
                    	<?php $city_id = $data["postback_city_id"];?>
                        <select name="city_id" onchange="this.form.submit()" class="gol_text">
                        	<option value="">Select City</option>
                            <?php
							$q = mysqli_query($con,"select * from cities where state_id='$state_id'");
							while($row = mysqli_fetch_array($q))
							{
								?>
                                <option value="<?php echo $row["id"] ?>"
                                <?php if($city_id==$row["id"]) { ?>
                                selected
                                <?php } ?>>
								<?php echo $row["name"] ?>
                                </option>
                                <?php
							}
							?>                            
                        </select>
                    </div>                    
                    <div class="col-md-4 myred_font">
                    	<?php echo $data["city_id_message"]; ?>
                    </div>
                </div>
                <?php
				if($data["postback_user_type"]!=3)
				{
				?>
                <div class="col-md-12 space_5">
                	<div class="col-md-4">
                    	User Type
                    </div>                    
                    <div class="col-md-4">  
                    	<?php $user_type = $data["postback_user_type"]; ?>
                        <select name="user_type" onchange="this.form.submit()" class="gol_text">
                        	<option value="">Select User Type</option>
                            <option value="1"
                            <?php if($user_type=="1") { ?>
                            selected
                            <?php } ?>>
                            Donar
                            </option>
                            <option value="2"
                            <?php if($user_type=="2") { ?>
                            selected
                            <?php } ?>>
                            User
                            </option>
                        </select>
                    </div>                    
                    <div class="col-md-4 myred_font">
                    	<?php echo $data["user_type_message"]; ?>
                    </div>
                </div>
                <?php
				}
				?>
                <?php 
				if($user_type==1) {
				?>
                <div class="col-md-12 space_5">
                	<div class="col-md-4">
                    	Blood Group
                    </div>                    
                    <div class="col-md-4"> 
                    	<?php $blood_group = $data["postback_blood_group"];?>
                        <select name="blood_group" onchange="this.form.submit()" class="gol_text">
                        	<option value="">Select Blood Group</option>
                            <?php
							$q = mysqli_query($con,"select * from blood_group_tbl ");
							while($row = mysqli_fetch_array($q))
							{
								?>
                                <option value="<?php echo $row["id"] ?>"
                                <?php if($blood_group==$row["id"]) { ?>
                                selected
                                <?php } ?>>
								<?php echo $row["group_name"] ?>
                                </option>
                                <?php
							}
							?>                            
                        </select>
                    </div>                    
                    <div class="col-md-4 myred_font">
                    	<?php echo $data["blood_group_message"]; ?>
                    </div>
                </div>
                <?php } ?>
                </form>
                <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="h_country_id" value="<?php echo $country_id ?>">
                <input type="hidden" name="h_state_id" value="<?php echo $state_id ?>">
                <input type="hidden" name="h_city_id" value="<?php echo $city_id ?>">
                <input type="hidden" name="h_user_type" value="<?php echo $user_type ?>">
                <input type="hidden" name="h_blood_group" value="<?php echo $blood_group ?>">
                <input type="hidden" name="old_password" value="<?php echo $data["postback_password"]; ?>">
                <input type="hidden" name="old_photo" value="<?php echo $data["postback_photo"]; ?>">
                <div class="col-md-12 space_5">
                	<div class="col-md-4">
                    	First Name
                    </div>                    
                    <div class="col-md-4">
                    	<input type="text" name="f_name" placeholder="First Name" class="gol_text" value="<?php echo $data["postback_f_name"]; ?>" />
                    </div>                    
                    <div class="col-md-4 myred_font">
                    	<?php echo $data["f_name_message"]; ?>
                    </div>
                </div>
                <div class="col-md-12 space_5">
                	<div class="col-md-4">
                    	Last Name
                    </div>                    
                    <div class="col-md-4">
                    	<input type="text" name="l_name" placeholder="Last Name" class="gol_text" value="<?php echo $data["postback_l_name"]; ?>" />
                    </div>                    
                    <div class="col-md-4 myred_font">
                    	<?php echo $data["l_name_message"]; ?>
                    </div>
                </div>
                <div class="col-md-12 space_5">
                	<div class="col-md-4">
                    	Email
                    </div>                    
                    <div class="col-md-4">
                    	<input type="text" name="email" placeholder="Email" class="gol_text" value="<?php echo $data["postback_email"]; ?>" />
                    </div>                    
                    <div class="col-md-4 myred_font">
                    	<?php echo $data["email_message"]; ?>
                    </div>
                </div>
                <div class="col-md-12 space_5">
                	<div class="col-md-4">
                    	Password
                    </div>                    
                    <div class="col-md-4">
                    	<input type="text" name="password" placeholder="Password" class="gol_text" />
                    </div>                    
                    <div class="col-md-4 myred_font">
                    	<?php echo $data["password_message"]; ?>
                    </div>
                </div>
                <div class="col-md-12 space_5">
                	<div class="col-md-4">
                    	Mobile
                    </div>                    
                    <div class="col-md-4">
                    	<input type="text" name="mobile_no" placeholder="Mobile" class="gol_text" value="<?php echo $data["postback_mobile_no"]; ?>" />
                    </div>                    
                    <div class="col-md-4myred_font">
                    	<?php echo $data["mobile_no_message"]; ?>
                    </div>
                </div>
                
                <div class="col-md-12 space_5">
                	<div class="col-md-4">
                    	Address
                    </div>                    
                    <div class="col-md-4">
                    	<textarea name="address" placeholder="Address" class="gol_text"><?php echo $data["postback_address"]; ?></textarea>
                    </div>                    
                    <div class="col-md-4 myred_font">
                    	<?php echo $data["address_message"]; ?>
                    </div>
                </div>
                
                <div class="col-md-12 space_5">
                	<div class="col-md-4">
                    	User Photo
                    </div>                    
                    <div class="col-md-4">  
                    	<?php $photo = $data["postback_photo"]; ?>
                        <input type="file" name="photo">
                        <?php if($photo!="") { ?>
                        <img src="upload/<?php echo $photo ?>" width="100">
                        <?php } ?>
                    </div>                    
                    <div class="col-md-4 myred_font">
                    	<?php echo $data["user_photo"]; ?>
                    </div>
                </div>
                <div class="col-md-12 space_5">
                    <div class="col-md-6 myred_font">
                    	<?php echo $data["sumbit_message"]; ?>
                    </div>
                	<div class="col-md-6 text-right">
                	<input type="submit" name="submit" value="Edit" class="sumbit_edit">
                    </div>
                </div>
                </form>
            </div>   
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>    