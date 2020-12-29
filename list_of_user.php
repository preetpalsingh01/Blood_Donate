<?php include "header.php"; 
if($data_user["user_type"]!=3)
{
	?>
    <script>
	window.location.href = "home.php";
	</script>
    <?php
}
?>
<?php $data = list_of_user(); ?>
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
                <div class="table-responsive">
                	<table class="table">
                    	<thead>
                        	<tr>
                            	<th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
						<?php
						$i = 1;
                        $q = $data["query"];
                        while($row = mysqli_fetch_array($q))
                        {
                            ?>
                            <tr>
                                <td><?= $i++?></td>
                                <td class="bada_text"><?= $row["f_name"]?> <?= $row["l_name"]?></td>
                                <td class="bada_text"><?= $row["email"]?></td>
                                <td class="bada_text">
									<?php 
									if($row["user_type"]==1) 
									{ 
										echo "Donar" ?>
                                    (<?php 								
								$blood_group = get_blood_group($row["blood_group"]);
								echo $blood_group["group_name"]; ?>)
                                	<?php } 
									if($row["user_type"]==2) 
									{
										echo "User";
									}?>
                                </td>
                                <td>
                                <a href="add_user.php?id=<?= $row["id"]?>">
                                <img src="assets/img/edit-icon-16.png" width="15">
                                </a>
                                </td>
                                <td>
                                <form method="post" onSubmit="return confirm('Are you sure?')">
                                <input type="hidden" name="h_id" value="<?= $row["id"]?>" />
                                <button type="submit" name="delete" value="Delete" style="border:0px; background:none;"><img src="assets/img/delete1.png" width="15"></button>
                                </form>
                                </td>
                            </tr>
                            <?php
                        }
                        ?> 
                    	</tbody>
                   	</table>
                </div>
             <div class="col-md-12">
            <?= $data["sumbit_message"];?>
            </div>
            <div class="col-md-12">
            <?php echo $data["pagination"];?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>    