 <div class="col s12 card-panel z-depth-5" style="padding:5px;">
	<a class="btn btn-floating pulse">Multiple Choice Results</a>
</div>
 <div class="card-panel z-depth-5" style="padding:5px;">	
						 <table id="table1" class="bordered responsive-table" cellspacing="0" width="100%">
								<thead>
								  <tr>
									<th>Id</th>
									<th>Fullname</th>
									<th>Pc Name</th>
									<th>Location</th>
									<th>Time/Date</th>
									<th>Section</th>
									<th>Subject</th>
									
									<th>Score</th>
									<th>Ave</th>
									<th>View</th>
								  </tr>
								</thead>
								<tbody>
								<?php foreach($data1 as $d): ?>
									<tr>
										<td><?=$d['id']?></td>
										<td><?=$d['fullname']?></td>
										<td><?=$d['pc_name']?></td>
										<td><?=$d['location']?></td>
										<td><?=$d['date_time']?></td>
										<td><?=$d['section']?></td>
										<td><?=$d['subject']?></td>
										<td><?=$d['score']?></td>
										<td><?=($d['score']/10)*50+50?>% </td>
										<td><a target="_blank" class="btn waves-effect waves-light" href="multiple_choice_result.php?id=<?=base64_encode($d['id'])?>">View Details</a></td>
									</tr>
							    <?php endforeach; ?>
								</tbody>
							  </table>
					  
</div>



