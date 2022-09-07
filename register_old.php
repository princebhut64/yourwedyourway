
<?php
if(isset($_POST['submit'])){
    $sql = "select COUNT(*) as cnt from myapp_user where email = '".$_POST['email']."'";
	$q = mysql_query($sql) or die(mysql_error() . $sql);
    $r = mysql_fetch_assoc($q);

    if($r['cnt'] > 0){
		echo '<script>alert("You have already registered with us."); window.location="register.php";</script>';
    } else{
		if($_POST['password'] == $_POST['cpassword']){
			$sql1 = "INSERT INTO myapp_user (fname, lname, email, password, contactno, role, status) VALUES ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['password']."','".$_POST['contactno']."','".$_POST['role']."', 'active')";
			$q1 = mysql_query($sql1) or die(mysql_error() . $sql1);
		
			if($q1){
				echo '<script>alert("Registration Sucessfully"); window.location="index.php";</script>';
			}
		} else{
				echo '<script>alert("Password & Confirm Password Not match."); window.location="register.php";</script>';
		}
        
    }
}

?>

			<section class="page_breadcrumbs cs gradient section_padding_top_25 section_padding_bottom_25 table_section table_section_md">
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-center text-md-left">
							<h2 class="small">Artist Registration</h2>
						</div>
						<div class="col-md-6 text-center text-md-right">
							<ol class="breadcrumb">
								<li> <a href="index.php">
							Home
						</a> </li>
								<li class="active">Artist</li>
								<li class="active">Artist Registration</li>
							</ol>
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
									<input type="text" class="form-control " name="fname" id="fname" placeholder="" value=""> 
								</div>
								<div class="form-group validate-required validate-email" id="email_field"> 
									<label for="email" class="control-label">
										<span class="grey">Email Address:</span>
										<span class="required">*</span>
									</label> 
									<input type="text" class="form-control " name="email" id="email" placeholder="" value=""> 
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group validate-required" id="lname_field"> 
									<label for="lname" class="control-label">
										<span class="grey">Last Name:</span>
										<span class="required">*</span>
									</label> 
									<input type="text" class="form-control " name="lname" id="lname" placeholder="" value=""> 
								</div>
								<div class="form-group" id="contactno_field"> 
									<label for="contactno" class="control-label">
										<span class="grey">Contact No:</span>
									</label> 
									<input type="text" class="form-control " name="contactno" id="contactno" placeholder="" value=""> 
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="form-group validate-required" id="password_field">
									 <label for="password" class="control-label">
										<span class="grey">Password:</span>
										<span class="required">*</span>
									</label> 
									<input type="password" class="form-control " name="password" id="password" placeholder="" value=""> 
								</div>
							</div>

							<div class="col-sm-6">
								<div class="form-group validate-required" id="cpassword_field"> 
									<label for="cpassword" class="control-label">
										<span class="grey">Confirm Password:</span>
										<span class="required">*</span>
									</label> 
									<input type="text" class="form-control" name="cpassword" id="cpassword" placeholder="" value=""> 
								</div>
							</div>
							
							<div class="col-sm-6">
								<div class="form-group"> 
									<label for="role" class="control-label">
										<span class="grey">Role:</span>
										<span class="required">*</span>
									</label> 
									<select name="role" id="role">
										<option>Select User Type</option>
										<option value="User">User</option>
										<option value="Artist">Artist</option>
									</select>
								</div>
							</div>
							<div class="col-sm-12"> 
								<input type="submit" class="theme_button wide_button color topmargin_40" name="submit" value="Register Now">
							</div>
						</form>
					</div>
				</div>
			</section>
			