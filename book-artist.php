
			<section class="page_breadcrumbs cs gradient section_padding_top_25 section_padding_bottom_25 table_section table_section_md">
				<div class="container">
					<div class="row">
						<div class="col-md-6 text-center text-md-left">
							<h2 class="small">Book Artist</h2>
						</div>
						<div class="col-md-6 text-center text-md-right">
							<ol class="breadcrumb">
								<li> <a href="index.php">
							Home
						</a> </li>
								<li> <a href="#">Artist</a> </li>
								<li class="active">Book Artist</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="shop-sorting">
								<form class="form-inline content-justify vertical-center content-margins">
									<div> Showing 1-6 of 36 results </div>
									<div class="form-group select-group"> 
										<select aria-required="true" id="category" name="category" class="choice empty form-control">
											<option value="" selected data-default>All</option>
											<?php 
												$sql = "select * from category order by id asc";
												$q = mysql_query($sql) or die(mysql_error() . $sql);
												while($r = mysql_fetch_assoc($q)) {
											?>
												<option value=".<?php echo $r['name'] ?>"><?php echo $r['name'] ?></option>
											<?php } ?>
		                    			</select> 
										<i class="fa fa-angle-down theme_button color1 no_bg_button" aria-hidden="true"></i> 
									</div>
								</form>
							</div>
							<div class="columns-2">
								<ul id="products" class="products list-unstyled">
									<?php 
										$sql = "select * from myapp_artist order by id asc";
										$q = mysql_query($sql) or die(mysql_error() . $sql);
										while($r = mysql_fetch_assoc($q)) {

											$sql1 = "select * from myapp_user where id = '" . $r['user_id_id'] . "'";
											$q1 = mysql_query($sql1) or die(mysql_error() . $sql1);
											$r1 = mysql_fetch_assoc($q1);

											$sql2 = "select * from myapp_artist where user_id_id = '" . $r['user_id_id'] . "'";
											$q2 = mysql_query($sql2) or die(mysql_error() . $sql2);
											$r2 = mysql_fetch_assoc($q2);

											$sql3 = "select * from category where id = '" . $r2['category'] . "'";
											$q3 = mysql_query($sql3) or die(mysql_error() . $sql3);
											$r3 = mysql_fetch_assoc($q3);

									?>
									<li class="product type-product <?php echo $r3['name'] ?>">
										<div class="vertical-item content-padding text-center">
											<div class="item-media with_background"> <img src="uploads/<?php echo $r['profile_pic'] ?>" alt="" style="width: 100%; height: 450px;"/>
												<div class="media-links no-overlay"> <a href="#0" class="abs-link"></a> </div>
											</div>
											<div class="item-content with_shadow">
												<div class="small-text item-meta content-justify vertical-center">
													<div class="price"> <ins>
												<span class="amount"><?php echo $r1['email'] ?></span>
											</ins> </div>
													<div class="star-rating right-align" title="Rated 4.0 out of 5"> <span style="width:80%">
												<strong class="rating">4.0</strong> out of 5
											</span> </div>
												</div>
												<h4 class="entry-title"> <a href="index.php?p=shop-product-right&id=<?php echo $r['id'] ?>"><?php echo $r1['fname'] ?> <br> <?php echo $r1['lname'] ?></a> </h4>
												<p class="content-3lines-ellipsis"><?php echo $r['description'] ?></p>
												<?php if($r1['status'] == 'active') { ?>
												<p class="topmargin_25"> 
													<a href="index.php?p=shop-product-right&id=<?php echo $r['id'] ?>" class="theme_button color min_width_button">
														Book Artist
													</a> 
												</p>
												<?php } ?>
											</div>
										</div>
									</li>
									<?php } ?>
								</ul>
							</div>
							<!-- eof .columns-* -->
							<!-- <div class="row">
								<div class="col-sm-12 text-center">
									<ul class="pagination">
										<li class="disabled"><a href="#"><span class="sr-only">Prev</span><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#"><span class="sr-only">Next</span><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div> -->
						</div>
						<!-- eof aside sidebar -->
					</div>
				</div>
			</section>
			