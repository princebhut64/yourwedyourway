<?php

if(isset($_POST['submit'])){
    $sql2 = "INSERT INTO myapp_bookartist (event_name, budget, address, city, event_date, description, user_id_id, artist_id_id, is_verified) VALUES ('".$_POST['event_name']."','".$_POST['budget']."','".$_POST['address']."','".$_POST['city']."','".$_POST['event_date']."','".$_POST['description']."', '" . $_SESSION['udata']['id'] . "', '" . $_GET['id'] . "', 0)";
    $q2 = mysql_query($sql2) or die(mysql_error() . $sql2);
    if($q2){
        echo '<script>alert("Artist Book Successfully."); window.location="index.php";</script>';
    }
}

$sql = "select * from myapp_artist where id='" . $_GET['id'] . "'";
$q = mysql_query($sql) or die(mysql_error() . $sql);
$r = mysql_fetch_assoc($q);

$sql1 = "select * from myapp_user where id = '" . $r['user_id_id'] . "'";
$q1 = mysql_query($sql1) or die(mysql_error() . $sql1);
$r1 = mysql_fetch_assoc($q1);

?>
			<section class="page_breadcrumbs cs gradient section_padding_top_25 section_padding_bottom_25 table_section table_section_md">
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-center text-md-left">
							<h2 class="small">Booking Adress</h2>
						</div>
						<div class="col-md-6 text-center text-md-right">
							<ol class="breadcrumb">
								<li> <a href="#">
							Home
						</a> </li>
								<li class="active">Artist</li>
								<li class="active">Booking Address</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div itemscope="" itemtype="http://schema.org/Product" class="product type-product row">
								<div class="col-sm-5">
									<div class="images text-center"> <a href="#" itemprop="image" class="woocommerce-main-image zoom prettyPhoto" data-gal="prettyPhoto[product-gallery]">
					            <img src="uploads/<?php echo $r['profile_pic'] ?>" class="attachment-shop_single wp-post-image" alt="" title="" style="width: 100%; height: 350px;">
					        </a> </div>
								
								</div>
								<div class="summary entry-summary col-sm-5">
									<div class="content-justify vertical-center content-margins">
										<!-- <div class="product-rating" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating"> -->
										<div class="star-rating" title="Rated 4.0 out of 5"> <span style="width:80%">
										<strong class="rating">4.0</strong> out of 5
									</span> </div>
										<!-- </div> --><span class="price">
								<span class="amount highlight2"><?php echo $r1['email'] ?></span> </span>
									</div>
									<h1 itemprop="name" class="product_title"><?php echo $r1['fname'] . " " . $r1['lname'] ?></h1>
									<div>
										<p><?php echo $r['description'] ?></p>
									</div>
									<br>
									<br>
									<span class="price">--- Extra Details ---</span>
									<br>
									<span class="product_title">Contact No : <span class="amount highlight2"><?php echo $r1['contactno'] ?></span></span><br>
									<span class="product_title" >Address : <span class="amount highlight2"><?php echo $r['address'] ?></span></span><br> 
									<span class="product_title">City : <span class="amount highlight2"><?php echo $r['city'] ?></span></span><br> 
									<span class="product_title">State : <span class="amount highlight2"><?php echo $r['State'] ?></span></span> <br>
									<span class="product_title">Postcode : <span class="amount highlight2"><?php echo $r['postcode'] ?></span></span> <br>
									<span class="product_title">Country : <span class="amount highlight2"><?php echo $r['country'] ?></span></span> <br>
									<span class="product_title">Fax : <span class="amount highlight2"><?php echo $r['fax'] ?></span> </span><br>
								</div>
							</div>
					</div>	
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<form method="post">
                            <div class="col-sm-6">
                                <div class="form-group validate-required" id="fname_field"> 
                                    <label for="fname" class="control-label">
                                        <span class="grey">First Name:</span>
                                        <span class="required">*</span>
                                    </label> 
                                    <input type="text" class="form-control " name="fname" id="fname" placeholder="" value="<?php echo $r1['fname'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group validate-required" id="lname_field">
                                    <label for="lname" class="control-label">
                                        <span class="grey">Last Name:</span>
                                        <span class="required">*</span>	
                                    </label>
                                    <input type="text" class="form-control " name="lname" id="lname" placeholder="" value="<?php echo $r1['lname'] ?>" readonly> 
                                </div>
                            </div>
						    <div class="col-sm-6">
								<div class="form-group validate-required validate-email" id="email_field"> 
									<label for="email" class="control-label">
										<span class="grey">Email Address:</span>
										<span class="required">*</span>
                                    </label>
									<input type="email" class="form-control " name="email" id="email" placeholder="" value="<?php echo $r1['email'] ?>" readonly> 
								</div>
							</div>
						    <div class="col-sm-6">
								<div class="form-group validate-required" id="budget_field">
									<label for="budget" class="control-label">
										<span class="grey">Budget:</span>
										<span class="required">*</span>	
                                    </label>
									<input type="text" class="form-control " name="budget" id="budget" placeholder=""> 
								</div>
						    </div>
							<div class="col-sm-6">
								<div class="form-group validate-required" id="event_name_field">
									<label for="event_name" class="control-label">
										<span class="grey">Event Name:</span>
										<span class="required">*</span>	
                                    </label>
									<input type="text" class="form-control " name="event_name" id="event_name" placeholder="" > 
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group validate-required" id="event_date_field">
									<label for="event_date" class="control-label">
										<span class="grey">Event Date:</span>
										<span class="required">*</span>	
                                    </label>
									<input type="date" class="form-control " name="event_date" id="event_date" placeholder="" > 
								</div>
							</div>
						    <div class="col-sm-12">
								<div class="form-group address-field validate-required" id="address_field"> 
									<label for="address" class="control-label">
										<span class="grey">Address:</span>
										<span class="required">*</span>
                                    </label> 
									<input type="text" class="form-control " name="address" id="address" placeholder="" value=""> 
                                </div>
						    </div>
							<div class="col-sm-6">
								<div class="form-group address-field validate-required" id="city_field"> 
                                    <label for="city" class="control-label">
                                        <span class="grey">Town / City:</span>
                                        <span class="required">*</span>
						            </label> 
                                    <input type="text" class="form-control " name="city" id="city" placeholder="" value=""> 
                                </div>
							</div>
							<div class="col-sm-6">		
						        <div class="form-group validate-required validate-phone" id="phone_field"> 
                                    <label for="phone" class="control-label">
                                        <span class="grey">Phone:</span>
                                        <span class="required">*</span>
						            </label> 
                                    <input type="text" class="form-control " name="phone" id="phone" placeholder="" value="<?php echo $r1['contactno'] ?>" readonly> 
                                </div>
					        </div>
						
							
							<div class="col-sm-12">
								<div class="form-group validate-required validate-email" id="billing_description_field"> 
									<label for="billing_description" class="control-label">
										<span class="grey">Description:</span>
										<span class="required">*</span>
                                    </label>
									<textarea type="text" class="form-control " rows=5 name="description" id="billing_description" placeholder="" value="" ></textarea> 
								</div>
							</div>

							<div class="col-sm-12"> 
                                <input type="submit" name="submit" class="theme_button wide_button color topmargin_40" value="Register Now">
                                <!-- <button type="submit" class="theme_button wide_button color topmargin_40">Register Now</button>  -->
                                <!-- <button type="reset" class="theme_button wide_button">Clear Form</button> -->
                            </div>
						</form>
					</div>
				</div>
			</section>
		

