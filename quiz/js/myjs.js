$(document).ready(function(){
	//$('#table').dataTable();
	//window.onbeforeunload = function(){
		//console.log('test');
		//return 'no reload';
	//}
	//window.onload = function(e){
	//e.preventDefault();
	//	console.log('test');
	//	$('#myform').submit();
	//}
	

	
	//get timer
	function checkTime(i){
		if(i < 10){
			i = "0" + i;
		}
		return i;
	}
	setTimeout(function(){
	today = new Date();
	 var h = today.getHours();
	 var m = today.getMinutes();
	 var md = today.getMinutes()+90;
	
	var s = today.getSeconds();
	
	
	m = checkTime(m);
	s = checkTime(s);
    document.getElementById("starttime").innerHTML = h +":" + m + ":" + s;
	
	//var start = document.getElementById("stoptime").innerHTML = h +":" + md + ":" + s;
	//$(".stoptime").val(start);
	},500);
	
/*	setInterval(function(){
	today = new Date();
	var  h = today.getHours();
	var  m = today.getMinutes();
	var s = today.getSeconds();
	
	m = checkTime(m);
	s = checkTime(s);
	
	var end = h +":" + m + ":" + s;
	
	var s = today.getSeconds();
	 var first = $('#stoptime').val();
	  
	
	console.log(end + first);
	
	if (first <= end){
		//alert('yehey');
	}else{}
	
	},1000);
	
	
	*/
	
	
	//$('#counter').countdown();
	

	
	
	
});
// left navtabs

$(document).ready(function(){

	 document.getElementById("toggle").innerHTML = ' Problem 1 ';
		$('#btn-submit').css('display','none');
	$('#a2').hide();
	$('#a3').hide();
    $("#q1").click(function(){
		$('#a1').show();
		$('#a2').hide();
		$('#a3').hide();
		document.getElementById("toggle").innerHTML = 'Problem 1 ';
		$( "#toggle" ).effect( "shake" );
		$( ".t1" ).effect( "shake" );
		console.log('test');
		$('#btn-submit').css('display','none');
    });
	
	 $("#q2").click(function(){
		$('#a1').hide();
		$('#a3').hide();
		$('#a2').show();
		document.getElementById("toggle").innerHTML = 'Problem 2';
		$( "#toggle" ).effect( "shake" );
		$( ".t2" ).effect( "shake" );
		console.log('test');
		$('#btn-submit').css('display','none');
    });
	 $("#q3").click(function(){
		$('#a1').hide();
		$('#a2').hide();
		$('#a3').show();
		document.getElementById("toggle").innerHTML = 'Problem 3';
		$('#btn-submit').css('display','block');
		$( "#toggle" ).effect( "shake" );
		$( ".t3" ).effect( "shake" );
		console.log('test');
    });
	
	$( "#toggle" ).hover(function(){
		$( "#toggle" ).effect( "bounce" );
	});
	

	
	var $myGroup = $('#accordion');
	$myGroup.on('show.bs.collapse','.collapse', function() {
    $myGroup.find('.collapse.in').collapse('hide');
});
});
