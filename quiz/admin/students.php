 <div class="col s12 card-panel z-depth-5" style="padding:5px;">
	<a class="btn btn-floating pulse">Students</a>
</div>
 <div class="card-panel z-depth-5" style="padding:5px;">	
						 <table id="table1" class="bordered responsive-table" cellspacing="0" width="100%">
								<thead>
								  <tr>
									<th>Id</th>
									<th>Fullname</th>
									<th>Email</th>
									<th>Section</th>
									<th>Course</th>
									<th>Status</th>
									<th>Action</th>
								  </tr>
								</thead>
								<tbody>
								<?php foreach($data3 as $d): ?>
									<tr>
										<td><?=$d['id']?></td>
										<td><?=$d['firstname'].' '.$d['middlename'].' '.$d['lastname']?></td>
										<td><?=$d['email']?></td>
										<td><?=$d['section']?></td>
										
										<td><?=$d['course']?></td>
										<td><?=$d['status']?></td>
										
										<td>
											<button class="btn">Delete</button>
											<?php if ($d['status']=='Active'):?>
												<button class="btn">Deactivate</button>
											<?php else:?>
												<button class="btn">Activate</button>
											<?php endif;?>
										</td>
									</tr>
							    <?php endforeach; ?>
								</tbody>
							  </table>
					  
</div>



