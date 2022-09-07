<?php
if(isset($_POST['submit'])){
    // print_r($_POST);
    // exit;
    $sql = "select * from myapp_user where email = '".$_POST['email']."' and password = '".$_POST['password']."'";
    $q = mysql_query($sql) or die(mysql_error() . $sql);
    $r = mysql_fetch_assoc($q);
    if($r){
        $_SESSION["udata"] = $r;
		if($r['role'] == "Artist"){
			echo '<script>alert("Login Sucessfully"); window.location="index.php?p=profile";</script>';
		} else{
			echo '<script>alert("Login Sucessfully"); window.location="index.php";</script>';
		}
        
    } else{
        echo '<script>alert("Email & Password are wrong"); window.location="index.php";</script>';
    }
}
?>



			<section class="page_breadcrumbs cs gradient section_padding_top_25 section_padding_bottom_25 table_section table_section_md">
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-center text-md-left">
							<h2 class="small">Login</h2>
						</div>
						<div class="col-md-6 text-center text-md-right">
							<ol class="breadcrumb">
								<li> <a href="index.php">
							Home
						</a> </li>
								<li class="active">Login</li>
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
								<div class="form-group validate-required validate-email" id="email_field"> 
									<label for="email" class="control-label">
										<span class="grey">Email Address:</span>
										<span class="required">*</span>
									</label> 
									<input type="text" class="form-control " name="email" id="email" placeholder="" value=""> 
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
							<div class="col-sm-12"> 
								<input type="submit" class="theme_button wide_button color topmargin_40" name="submit" value="Submit">
							</div>
						</form>
					</div>
				</div>
			</section>
			