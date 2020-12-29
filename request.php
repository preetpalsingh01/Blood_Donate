<?php include "header.php"; ?>
<?php $data = request(); ?>
<?php $con = con(); ?>
    <div id="wrapper">
		<?php include "menu.php"; ?>
        <title><?php echo $data["title1"] ?></title>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                	<div class="col-md-12">
                	<h2>
						<?php echo $data["title2"] ?>
                   	</h2> 
           			<hr />
                	</div>
                </div>
                <div class="col-md-12">
                <?php
				if($data_user["user_type"]!=3)
				{
					$q = $data["query"];
				}
				else{
					$value = "where status='0'";
					$tbl_name = "request_tbl"; 
					$targetpage = "request.php";
					$limit = 4;		
					$where = " $value order by id desc";
					include 'contant/admin/pageinastion.php';
					$q = $result; 
				}
				while($row1 = mysqli_fetch_array($q))
				{
					$sender = $row1["sender"];
					
					$row = mysqli_fetch_array(mysqli_query($con,"select * from user_tbl where id='$sender'"));
					?>
                    <div class="col-md-12 space_5">
                    	<div class="col-md-2">
                        	<img src="upload/<?php echo $row["photo"] ?>" class="img-responsive img-thumbnail">
                        </div>
                        <div class="col-md-4">
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
                            <div class="col-md-12">
                            	Date: <?php echo $row1["date"]; ?>
                            </div>
                            <div class="col-md-12">
                            	Time: <?php echo get_my_time($row1["time"]); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <?php
						if($data_user["user_type"]!=3)
				{
						if($_SESSION["userid"] != $row["id"])
						{
							?>
							<form method="post" onsubmit="return confirm('Do you want to request?');">
								<input type="hidden" name="sender" value="<?php echo $row1["sender"] ?>">	
                                <input type="submit" name="request_accept" value="Request Accept" style="float:left !important;">
                                &nbsp;
                                <input type="submit" name="request_remove" value="Request Remove" style="float:left !important; margin-left:10px;">
							</form>
							<?php
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