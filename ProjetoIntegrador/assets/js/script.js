$(document).ready(function() {
 	carousel();  
	
	$('#data').mask('00/00/0000');
	  $('#telefone').mask('(00) 00000000');
	  $('#celular').mask('(00) 000000000');
	  $('#cpf').mask('000.000.000-00');
	 $('a').click(function(){  
   $('html, body').animate({  
     scrollTop: $( $(this).attr('href') ).offset().top  
   }, 1500);  
   return false;  
  });   
	$('#cpf').blur(function(){
		if(!$(this).val()){
			$(this).css('border','1px solid red');
		
		}else if($(this).val()){
			$(this).css('border','');
			
		}
	});
	
	$('#senha').blur(function(){
			if(!$(this).val()){
				$(this).css('border','1px solid red');
			
			}else if($(this).val()){
				$(this).css('border','');
				
			}
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
	
	$('#cadastra').click(function(){
		
		
		var cont = 0;
		if(!$('#email').val()){
			$('#email').css('border','1px solid red');	
			cont++
		}

		if(!$('#cpf').val()){
			$('#cpf').css('border','1px solid red');	
			cont++
		}

		if(!$('#senha').val()){
			$('#senha').css('border','1px solid red');	
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
	
	$('#senha').keyup(function (e){
      var senha = $(this).val();        
      if(senha == ''){
        $('#senhaBarra').hide();
      }else{
        var fSenha = forcaSenha(senha);
        var texto = "";
        $('#senhaForca').css('width', fSenha+'%');
        $('#senhaForca').removeClass();
        $('#senhaForca').addClass('progress-bar');
        if(fSenha <= 40){
            texto = 'Fraca';
            $('#senhaForca').addClass('progress-bar bg-danger');
        }
        
        if(fSenha > 40 && fSenha <= 70){
            texto = 'Media';
            $('#senhaForca').addClass('progress-bar bg-warning');
        }
        
        if(fSenha > 70 && fSenha <= 90){
            texto = 'Boa';
            $('#senhaForca').addClass('progress-bar bg-success');
        }
        
        if(fSenha > 90){
            texto = 'Muito boa';
            $('#senhaForca').addClass('progress-bar bg-success');
        }
        
        $('#senhaForca').text(texto);
        
        $('#senhaBarra').show();
      }
    });

	function forcaSenha(senha){
    var forca = 0;
    
    var regLetrasMa     = /[A-Z]/;
    var regLetrasMi     = /[a-z]/;
    var regNumero       = /[0-9]/;
    var regEspecial     = /[!@#$%&*?]/;
    
    var tam         = false;
    var tamM        = false;
    var letrasMa    = false;
    var letrasMi    = false;
    var numero      = false;
    var especial    = false;

//    console.clear();
//    console.log('senha: '+senha);

    if(senha.length >= 6) tam = true;
    if(senha.length >= 10) tamM = true;
    if(regLetrasMa.exec(senha)) letrasMa = true;
    if(regLetrasMi.exec(senha)) letrasMi = true;
    if(regNumero.exec(senha)) numero = true;
    if(regEspecial.exec(senha)) especial = true;
    
    if(tam) forca += 10;
    if(tamM) forca += 10;
    if(letrasMa) forca += 10;
    if(letrasMi) forca += 10;
    if(letrasMa && letrasMi) forca += 20;
    if(numero) forca += 20;
    if(especial) forca += 20;
        
//    console.log('força: '+forca);
    
    return forca;
}

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

	


