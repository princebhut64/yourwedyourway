

            <section class="ls section_padding_top_100 section_padding_bottom_75">
				<div class="container">
					<div class="row">	
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="table-responsive">
								<table class="table_template darklinks" id="timetable">
									<thead>
										<tr>
											<th style="color: white;">Id</th>
											<th style="color: white;">Email</th>
											<th style="color: white;">Name</th>
											<th style="color: white;">Event Name</th>
											<th style="color: white;">Event Date</th>
											<th style="color: white;">Budget</th>
											<th style="color: white;">Address</th>
											<th style="color: white;">Status</th>
											
										</tr>
									</thead>

									<tbody>
                                    <?php
                                        $sql = "select * from myapp_bookartist where artist_id_id = '". $_SESSION['udata']['id'] ."' order by id asc";
                                        $q = mysql_query($sql) or die(mysql_error() . $sql);
                                        $i = 1;
                                        while($r = mysql_fetch_assoc($q)) {
                                            $sql1 = "select * from myapp_user where id = '".$r['id']."'";
                                            $q1 = mysql_query($sql1) or die(mysql_error() . $sql1);
                                            $r1 = mysql_fetch_assoc($q1);

											$sql2 = "select * from myapp_user where id = '" . $r['user_id_id'] . "'";
											$q2 = mysql_query($sql2) or die(mysql_error() . $sql2);
											$r2 = mysql_fetch_assoc($q2);
                                    ?>
										<tr>
											<th><?php echo $i++; ?></th>
											<td><?php echo $r2['email']; ?></td>
											<td><?php echo ucwords($r2['fname']) . " " . ucwords($r2['lname']) ?></td>
											<td><?php echo $r['event_name'] ?></td>
											<td><?php echo $r['event_date']; ?></td>
											<td><?php echo $r['budget'] ?></td>
											<td><?php echo $r['address'] ?></td>
											<td>
												<?php
													if( $r['is_verified'] == 1 ){
														?>
														<a href="#" class="theme_button wide_button color topmargin_40">Approved Event</a>
														<?php
													} else {
														?>
														<a href="index.php?p=sent-mail&event_id=<?php echo $r['id']; ?>&user_id=<?php echo $r2['id']; ?>" class="theme_button wide_button color topmargin_40">Not aprove Event</a>
														<?php
													}
												?>
											</td>
										</tr>
                                    <?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</section>
		