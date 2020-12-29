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
<?php $data = add_blood_group(); ?>
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
            	<form method="post">
                    <div class="col-md-12 space_5">
                        <div class="col-md-3">
                        <?php
                        if($_REQUEST["id"])
						{
                        	echo "Edit";
						}
						else
						{
							echo "Add";
						}
                        ?>
                        Blood Group:
                        </div>
                        <div class="col-md-9">
                        <input type="text" name="group_name" placeholder="Blood Group" required class="gol_text bada_text" value="<?php echo $data["group_name"]; ?>">
                        </div>
                    </div>
                    <div class="col-md-12 space_5">
                        <div class="col-md-3">
                        	<?php echo $data["sumbit_message"]; ?>
                        </div>
                        <div class="col-md-9">
                        <input type="submit" name="submit" value="Submit" class="sumbit_edit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>    