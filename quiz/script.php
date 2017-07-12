	<?php foreach($data as $d): ?>
		
		<script>
		
			//console.log(i);
		
			$(document).on('change','.mc_<?php echo $d['id'] ?>', function(){
				
				//console.log('text');
					console.log($(this).attr('data-id'));
					
					var mcid = $('input[name=mc_<?php echo $d['id']?>]:checked').val();
					if($(this).attr('data-id') ==1){
						$('#mc<?php echo $d['id']?> ').val('a');
					}else if($(this).attr('data-id') == 2){
						$('#mc<?php echo $d['id']?> ').val('b');
					}else if($(this).attr('data-id') == 3){
						$('#mc<?php echo $d['id']?> ').val('c');
					}else if($(this).attr('data-id') == 4){
						$('#mc<?php echo $d['id']?> ').val('d');
					}
					
				  console.log(mcid);
				
				//console.log(mc_1);
				//console.log('test');
			});
			
		</script>
		
	<?php endforeach; ?>