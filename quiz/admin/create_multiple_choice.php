<div class="col s12 card-panel z-depth-5" style="padding:5px;">
	<a class="btn btn-floating pulse">Add Questions</a> 
</div>
 <div class="col s12 card-panel z-depth-5" style="padding:5px;">
 
		<form action="" method="POST">
			<div class="col s6">
				<label>Question</label>
				<textarea name="question"></textarea>
				<label>Answer</label>
				<input type="text" name="answer">
			</div>
			<div class="col s6">
				<label>Choices</label><br>
			
			<div class="col s6">
			
				<div class="col s1"><span>a.</span></div><div class="col s11"><input type="text" name="choice[]"></div>
				<div class="col s1"><span>b.</span></div><div class="col s11"><input type="text" name="choice[]"></div>
			</div>
			<div class="col s6">
				<div class="col s1"><span>c.</span></div><div class="col s11"><input type="text" name="choice[]"></div>
				<div class="col s1"><span>d.</span></div><div class="col s11"><input type="text" name="choice[]"></div>
			
					
			</div>
			
			</div>
			<div class="col s12">
			  <button class="btn waves-effect waves-light" type="submit">Submit
				<i class="material-icons right">send</i>
			  </button>
			
			</div>
		</form>	
</div>								
	 <div class="col s12 card-panel z-depth-5" style="padding:5px;">					
			<?php
				if(isset($_POST['question'])){
					$result = $conn->mc_insert($_POST);
				}
			?>
							
							
										<table id="table" class="striped responsive-table" cellspacing="0" width="100%">
											 <thead>
												  <tr>
													<th>#</th>
													<th>Question</th>
													<th>Choices</th>
													<th>Answer</th>
													
												  </tr>
												</thead>
												<tbody>
												<?php foreach($data as $d):?>
												  <tr>
													<td><?=$d['id']?></td>
													<td><?=$d['question']?></td> 
													<td>
													<ol type="a">
													<?php $d2 = unserialize($d['choices']);
													
														 for($x=0;$x<=3;$x++){
															 if($x<=1){
																 
																 echo "<div class='col s5'><li>$d2[$x]</li></div>";
															 }else{
																 echo "<div class='col s5'><li>$d2[$x]</li></div>";
															 }
														}
													?>
													</ol>
													</td>
													<td><?=$d['answer']?></td>
												  </tr>
												 <?php endforeach;?>
												</tbody>
										</table>
									

</div>