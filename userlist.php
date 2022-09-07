

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
                                    ?>
										<tr>
											<th><?php echo $i++; ?></th>
											<td><?php echo $r1['email']; ?></td>
											<td><?php echo ucwords($r1['fname']) . " " . ucwords($r1['lname']) ?></td>
											<td><?php echo $r['event_name'] ?></td>
											<td><?php echo $r['event_date'] ?></td>
											<td><?php echo $r['budget'] ?></td>
											<td><?php echo $r['address'] ?></td>
											<td>
                                                <a href="#" class="theme_button wide_button color topmargin_40">Approve Event</a>
                                                <a href="#" class="theme_button wide_button color topmargin_40">Not aprove Event</a>
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
		