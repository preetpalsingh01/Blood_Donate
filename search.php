<?php include "header.php"; ?>
<?php $data = search(); ?>
<?php $con = con(); ?>
    <div id="wrapper">
		<?php include "menu.php"; ?>
        <title><?php echo $data["title1"] ?></title>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                <div class="col-md-12">
                <h2><?php echo $data["title2"] ?></h2> 
           		<hr />
                </div>
                <form method="get">
                <div class="col-md-12 space_5">
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
                </div>
                
                <div class="col-md-12 space_5">
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
                    </form>
                    
                    <form method="get">
                    <input type="hidden" name="country_id" value="<?php echo $country_id ?>">
                    <input type="hidden" name="state_id" value="<?php echo $state_id ?>">
                    <input type="hidden" name="city_id" value="<?php echo $city_id ?>">
                    <input type="hidden" name="blood_group" value="<?php echo $blood_group ?>">
                    <div class="col-md-4">
                    	<input type="text" name="name" placeholder="Search Any Name" class="gol_text" value="<?php echo $data["postback_name"] ?>">
                    </div>
                    <div class="col-md-4">
                    <input type="submit" name="submit" value="Search" class="sumbit_edit">
                    </div>
           </form>     
                </div>
                
                <div class="col-md-12">
                <?php
				$q = $data["query"];
				while($row = mysqli_fetch_array($q))
				{
					?>
                    <div class="col-md-12 space_5">
                    	<div class="col-md-2">
                        	<img src="upload/<?php echo $row["photo"] ?>" class="img-responsive img-thumbnail">
                        </div>
                        <div class="col-md-7">
                        	<div class="col-md-12">
                        		Name: <?php echo $row["f_name"] ?> <?php echo $row["l_name"] ?>
                            </div>
                            <div class="col-md-12">
                            	Mobile: <?php echo $row["mobile_no"] ?>
                            </div>
                            <div class="col-md-12">
                            	Blood Group:
                                <?php 								
								$blood_group = get_blood_group($row["blood_group"]);
								echo $blood_group["group_name"]; ?>
                            </div>
                            <div class="col-md-12">
                            	Address: <?php echo $row["address"] ?>
                            </div>
                            <div class="col-md-12">
                            	Country: <?php $country_id =  get_country_id($row["country_id"]);
								echo $country_id["name"]  ?>
                            </div>
                            <div class="col-md-12">
                            	State: <?php $state_id = get_state_id($row["state_id"]); echo $state_id["name"]  ?>
                            </div>
                            <div class="col-md-12">
                            	City: <?php $city_id = get_city_id($row["city_id"]); echo $city_id["name"]  ?>
                            </div>
                        </div>
                        <div class="col-md-3">
                        <?php
						if($_SESSION["userid"] != $row["id"])
						{
							$req_done = get_request_done_check($row["id"]);
							if(!$req_done)
							{
								$req = get_request_check($row["id"]);
								if($req)
								{
								?>
							<form method="post" onsubmit="return confirm('Do you want to request?');">
								<input type="submit" name="donate_delete" value="Request Send">
								<input type="hidden" name="reciver" value="<?php echo $row["id"] ?>">
							</form>                        
							<?php
							}
							else
							{
							
							?>
							<form method="post" onsubmit="return confirm('Do you want to request?');">
								<input type="submit" name="donate" value="Request To Donate">
								<input type="hidden" name="reciver" value="<?php echo $row["id"] ?>">
							</form>                        
							<?php
							}
						}
					}
					?>
                    </div>
                    </div>
				<?php
					}
					?> 
            </div>
            
            	<div class="col-md-12">
             	<?php echo $data["pagination"];?>
                </div>
        </div>
    </div>
<?php include "footer.php"; ?>    