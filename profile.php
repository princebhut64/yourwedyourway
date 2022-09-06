<?php
if(isset($_POST['submit'])){
	$sql = "select * from  myapp_artist where user_id_id = '".$_SESSION['udata']['id']."'";
    $q = mysql_query($sql) or die(mysql_error() . $sql);
    $r = mysql_fetch_assoc($q);
	if($r){
		$filename = $_FILES["profile_pic"]["name"];
		$tempname = $_FILES["profile_pic"]["tmp_name"];
		$folder = "uploads/" . $filename;
		move_uploaded_file($tempname, $folder);
		$sql1 = "update myapp_artist set address='" . $_POST['address'] ."', postcode='" . $_POST['postcode'] ."', city='" . $_POST['city'] ."', State='" . $_POST['state'] ."', profile_pic='" . $filename ."', description='" . $_POST['description'] ."', country='" . $_POST['country'] ."', category='" . $_POST['category'] ."', subcategory='" . $_POST['subcategory'] ."' where user_id_id = '".$_SESSION['udata']['id']."'";
		$q1 = mysql_query($sql1) or die(mysql_error() . $sql1);
		if($q1){
			echo '<script>alert("Profile Update Successfully"); window.location="index.php";</script>';
		}
	} else {
		$filename = $_FILES["profile_pic"]["name"];
		$tempname = $_FILES["profile_pic"]["tmp_name"];
		$folder = "uploads/" . $filename;
		move_uploaded_file($tempname, $folder);
		$sql1 = "insert into myapp_artist (address, postcode, city, State, profile_pic, description, country, category, subcategory, user_id_id) values ('" . $_POST['address'] ."','" . $_POST['postcode'] ."','" . $_POST['city'] ."','" . $_POST['state'] ."','" . $_POST['profile_pic'] ."','" . $_POST['description'] ."','" . $_POST['country'] ."','" . $_POST['category'] ."','" . $_POST['subcategory'] ."','".$_SESSION['udata']['id']."')";
		$q1 = mysql_query($sql1) or die(mysql_error() . $sql1);
		if($q1){
			echo '<script>alert("Profile Update Successfully"); window.location="index.php";</script>';
		}
	}
}

$sql = "select * from  myapp_artist where user_id_id = '".$_SESSION['udata']['id']."'";
$q = mysql_query($sql) or die(mysql_error() . $sql);
$r = mysql_fetch_assoc($q);
// print_r($r);
?>

			<section class="page_breadcrumbs cs gradient section_padding_top_25 section_padding_bottom_25 table_section table_section_md">
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-center text-md-left">
							<h2 class="small">Profile</h2>
						</div>
						<div class="col-md-6 text-center text-md-right">
							<ol class="breadcrumb">
								<li> <a href="index.php">
							Home
						</a> </li>
								<li class="active">Profile</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<form method="post" class="col-sm-6" enctype="multipart/form-data">
							<div>
								<div class="form-group validate-required validate-email" id="address_field"> 
									<label for="email" class="control-label">
										<span class="grey">Address:</span>
										<span class="required">*</span>
									</label>
									<?php if($r['address']) { ?>
										<textarea name="address" class="form-control"><?php echo $r['address']; ?></textarea>
									<?php } else { ?> 
										<textarea name="address" class="form-control"></textarea>
									<?php } ?>
								</div>
							</div>
							
							<div>
								<div class="form-group validate-required" id="postcode_field">
									 <label for="postcode" class="control-label">
										<span class="grey">Post Code:</span>
										<span class="required">*</span>
									</label>
									<?php if($r['postcode']) { ?>
										<input type="text" class="form-control " name="postcode" id="postcode" value="<?php echo $r['postcode'] ?>"> 
									<?php } else { ?>  
										<input type="text" class="form-control " name="postcode" id="postcode" value=""> 
									<?php } ?>
								</div>
							</div>

                            <div>
								<div class="form-group validate-required" id="city_field">
									 <label for="city" class="control-label">
										<span class="grey">City:</span>
										<span class="required">*</span>
									</label> 
									<?php if($r['city']) { ?>
										<input type="text" class="form-control " name="city" id="city" value="<?php echo $r['city'] ?>"> 
									<?php } else { ?>	
										<input type="text" class="form-control " name="city" id="city" value=""> 
									<?php } ?>
								</div>
							</div>

                            <div>
								<div class="form-group validate-required" id="country_field">
									 <label for="country" class="control-label">
										<span class="grey">Country:</span>
										<span class="required">*</span>
									</label> 
									<?php if($r['country']) { ?>
										<input type="text" class="form-control " name="country" id="country" value="<?php echo $r['country'] ?>"> 
									<?php } else { ?>
										<input type="text" class="form-control " name="country" id="country" value=""> 
									<?php } ?>
								</div>
							</div>

                            <div>
								<div class="form-group validate-required" id="state_field">
									 <label for="state" class="control-label">
										<span class="grey">State:</span>
										<span class="required">*</span>
									</label> 
									<?php if($r['State']) { ?>
										<input type="text" class="form-control " name="state" id="state" value="<?php echo $r['State'] ?>"> 
									<?php } else { ?>
										<input type="text" class="form-control " name="state" id="state" value="">
									<?php } ?> 
								</div>
							</div>

                            <div>
								<div class="form-group validate-required" id="category_field">
									 <label for="category" class="control-label">
										<span class="grey">Category:</span>
										<span class="required">*</span>
									</label> 
                                    <select class="form-control" name="category" id="category-dropdown" onchange="getsubcategory(this.value);">
                                        <option>None</option>
                                        <?php
                                            $sql = "select * from category";
                                            $q = mysql_query($sql) or die(mysql_error() . $sql);
                                            while($rdata = mysql_fetch_assoc($q)) { ?>
                                                <option value="<?php echo $rdata['id'] ?>"><?php echo $rdata['name'] ?></option>
                                            <?php }
                                        ?>
                                    </select>
								</div>
							</div>

                            <div>
								<div class="form-group validate-required" id="subcategory_field">
									 <label for="subcategory" class="control-label">
										<span class="grey">Sub Category:</span>
										<span class="required">*</span>
									</label> 
                                    <select class="form-control" name="subcategory" id="sub-category-dropdown">>
                                                                            
                                    </select>
								</div>
							</div>

                            <div>
								<div class="form-group validate-required" id="description_field">
									 <label for="state" class="control-label">
										<span class="grey">Description:</span>
										<span class="required">*</span>
									</label> 
									<?php if($r['description']) { ?>
										<textarea name="description" class="form-control"><?php echo $r['description'] ?></textarea>
									<?php } else { ?>
                                    	<textarea name="description" class="form-control"></textarea>
									<?php } ?>
								</div>
							</div>

                            <div>
								<div class="form-group validate-required" id="profile_field">
									 <label for="profile" class="control-label">
										<span class="grey">Profile:</span>
										<span class="required">*</span>
									</label> 
                                    <input type="file" class="form-control" name="profile_pic" id="profile_pic">
								</div>
							</div>


							<div class="col-sm-12"> 
								<input type="submit" class="theme_button wide_button color topmargin_40" name="submit" value="Submit">
							</div>
						</form>
					</div>
				</div>
			</section>


<script>
    function getsubcategory(d){
        var category_id = d;
        $.ajax({
            url: "ajax/getsubcategory.php",
            type: "POST",
            data: {
                category_id: category_id
            },
            cache: false,
            success: function(result){
                $("#sub-category-dropdown").html(result);
            }
        });  
    }
</script>
			