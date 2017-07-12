 <div class="col s12 card-panel z-depth-5" style="padding:5px;">
	<a class="btn btn-floating pulse">Tech Exam Results</a>
</div>
				 <div class="card-panel z-depth-5" style="padding:5px;">	
						 <table id="table2" class="responsive-table bordered">
								<thead>
								  <tr>
									<th>Id</th>
									<th>Fullname</th>
									<th>Location</th>
									<th>Pc Name</th>
									<th>Question ids</th>
									<th>A1</th>
									<th>A2</th>
									<th>A3</th>
									<th>Date/Time</th>
								  </tr>
								</thead>
								<tbody>
								<?php foreach($data2 as $d): ?>
									<tr>
										<td><?=$d['id']?></td>
										<td><?=$d['fullname']?></td>
										<td><?=$d['country']?></td>
										<td><?=$d['pcname']?></td>
										<td><?=$d['question1']?>, <?=$d['question2']?>, <?=$d['question3']?></td>
										<td><?=$d['q1']?></td>
										<td><?=$d['q2']?></td>
										<td><?=$d['q3']?></td>
										
										<td><?=$d['timestart']?></td>
									</tr>
							    <?php endforeach; ?>
								</tbody>
							  </table>
				</div>	 




