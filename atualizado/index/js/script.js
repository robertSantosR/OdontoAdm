$(document).ready(function() {
 	carousel();  
	
	$('#data').mask('00/00/0000');
	  $('#telefone').mask('(00) 00000000');
	  $('#celular').mask('(00) 000000000');
	 $('a').click(function(){  
   $('html, body').animate({  
     scrollTop: $( $(this).attr('href') ).offset().top  
   }, 1500);  
   return false;  
  });   
	
	
	$('#email').blur(function(){
		if(!$(this).val()){
			$(this).css('border','1px solid red');
		
		}else if($(this).val()){
			$(this).css('border','');
			
		}
	});
	$('#nome').blur(function(){
		if(!$(this).val()){
			$(this).css('border','1px solid red');
			
		}else if($(this).val()){
			$(this).css('border','');
			
		}
	});
	$('#data').blur(function(){
		if(!$(this).val() || $(this).val().length < 10){
			$(this).css('border','1px solid red');
			
		}else{
			$(this).css('border','');
			
		}
	});
	$('#celular').blur(function(){
		if(!$(this).val() || $(this).val().length < 14){
			$(this).css('border','1px solid red');
		
		}else{
			$(this).css('border','');
			
		}
	});
	
	$('button:eq(5)').click(function(){
		
		
		var cont = 0;
		if(!$('#email').val()){
			$('#email').css('border','1px solid red');	
			cont++
		}
	

		if(!$('#nome').val()){
			$('#nome').css('border','1px solid red');
			cont++
		}
	
		if(!$('#data').val() || $('#data').val().length < 10){
			$('#data').css('border','1px solid red');
			cont++
		}
	
	
		if(!$('#celular').val() || $('#celular').val().length < 14){
			$('#celular').css('border','1px solid red');
			cont++
		}
		if(cont > 0){
			alert('campos obrigatorio! mudo');
			return false
		}
	
	});
	
	
});
//carousel
	
	function carousel(){
		var rodaFoto = setInterval(disp,4000);
	}
	
	$('.img1 img:eq(0)').mouseover(function(){
		$('#imgPrincipal').css('display','none');	
		$('#imgPrincipal').attr('src',$(this).attr('src')).fadeIn(1000);
		
		
	});
	
	
	$('.img1 img:eq(1)').mouseover(function(){
		$('#imgPrincipal').css('display','none');	
		$('#imgPrincipal').attr('src',$(this).attr('src')).fadeIn(1000);
		
		
	});
	
	$('.img1 img:eq(2)').mouseover(function(){
		$('#imgPrincipal').css('display','none');	
		$('#imgPrincipal').attr('src',$(this).attr('src')).fadeIn(1000);
		
	});
	
	$('.img1 img:eq(3)').mouseover(function(){
		$('#imgPrincipal').css('display','none');	
		$('#imgPrincipal').attr('src',$(this).attr('src')).fadeIn(1000);
		
	});
	
	$('.img1 img:eq(4)').mouseover(function(){
		$('#imgPrincipal').css('display','none');	
		$('#imgPrincipal').attr('src',$(this).attr('src')).fadeIn(1000);
		
	});

	//incrementador
	var incrementador = (function (){
		var cont = 1;
		return function(){
			if(cont == $('.img1 img').length ){
				cont = 0;
			}
			return cont++;
		}
	})();
	
	
	function disp(){
		
		
		var qtdImg = $('.img1 img').length ;
		var caminhoImg = $('.img1 img').eq(incrementador());
		$('#imgPrincipal').css('display','none');	
		$('#imgPrincipal').attr({
			src : caminhoImg.attr('src')
		}).fadeIn(500);
	}

	


