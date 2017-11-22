$(document).ready(function() 
{	
	$('input[name=modal]').click(function(e) 
	{
		 e.preventDefault();
		      		
		var id = $(this).attr('href');
		      	
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
		      	
		$('#mask').css({'width':maskWidth,'height':maskHeight});

		$('#mask').fadeIn(1750);	
		$('#mask').fadeTo("slow",0.6);	
		      	
		var winH = $(window).height();
		var winW = $(window).width();
		                    
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
		      	
		$(id).fadeIn(1250); 
		      	
	});
		      	
	$('.window .window1').click(function (e) 
	{
		e.preventDefault();
		      		
		$('#mask').hide();
		$('.window').hide();
		$('.window1').hide();
	});		
		      	
	$('#mask').click(function () 
	{
		$(this).hide();
		$('.window').hide();
		$('.window1').hide();
	});				      	
});