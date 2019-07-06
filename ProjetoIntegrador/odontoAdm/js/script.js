$(document).ready(function(){
	
	$('#cpf').mask('000.000.000-00');
	$('#cep').mask('00000-000');

	$('#hora').change(function(){
		if($(this).val() == 0){
			$(this).css({
				border:"1px solid red"
				
			});
			
		}else{
			$(this).css('border','');
		}
	});

		$('#cep').blur(function(){
		var cep = $(this).val();
		$('#bairro').val('');
		$('#endereco').val('');
		$('#cidade').val('');
		$('#estados').val('');
		if (cep) {
			$(this).css('border','');
			$.getJSON('https://viacep.com.br/ws/'+ cep +'/json/',function(json){
				if (!('erro' in json)) {
					$('#bairro').val(json.bairro);
					$('#endereco').val(json.logradouro);
					$('#cidade').val(json.localidade);
					$('#estados').val(json.uf);
					$('#bairro').prop( "disabled", true );
					$('#endereco').prop( "disabled", true );
					$('#cidade').prop( "disabled", true );
					$('#estados').prop( "disabled", true );
					
				}else{
					
					$('#bairro').prop( "disabled", false );
					$('#endereco').prop( "disabled", false );
					$('#cidade').prop( "disabled", false );
					$('#estados').prop( "disabled", false );

				}
			})
			.fail(function() {
   		 		$('.validaBairro').fadeIn(1000);
   		 	    $('#bairro').prop( "disabled", true );
				$('#endereco').prop( "disabled", true );
				$('#cidade').prop( "disabled", true );
				$('#estados').prop( "disabled", true );
	  		});
  		}else{
  			$(this).css('border','1px solid red');
  		} 
	});

	
	$('#data').blur(function(){
		
		
		if(!$(this).val()){
			$(this).css({
				border:"1px solid red"
		
			});
			
		}else{
			$(this).css('border','');
		}
	});
	
	$('#nomeDen').change(function(){
		if($(this).val() == 0){
			$(this).css({
				border:"1px solid red"
				
			});
			
		}else{
			$(this).css('border','');
		}
	})
	
	
$('#cadastraCliente').click(function(){
    if (!$('#email').val()){
    	$('#email').css({
				border:"1px solid red"
			});
    	return false;
    }else{
    	$('#email').css({
				border:""
			});
    }
    $('#bairro').prop( "disabled", false );
	$('#endereco').prop( "disabled", false );
	$('#cidade').prop( "disabled", false );
	$('#estados').prop( "disabled", false );
	
    

});

	


	
	
});


$('#enviar').click(function(){
		var cont = 0; 

		
		if(!$('#data').val()){
			$('#data').css({
				border:"1px solid red"
			});
			cont++
		}
			
		if($('#hora').val() == 0){
			$('#hora').css({
				border:"1px solid red"
				
			});
			cont++
		}
		nomeDen
		if($('#hora').val() == 0){
			$('#hora').css({
				border:"1px solid red"
				
			});
			cont++
		}
		if($('#nomeDen').val() == 0){
			$('#nomeDen').css({
				border:"1px solid red"
				
			});
			cont++
		}
		if(cont > 0){
			return false;
		}else{
			var data = $('#data').val();

            var dataMostra =  data.split("-").reverse().join("/");

			var hora = $('#hora').val();

			var dentistaNome = $('#nomeDen ').find('option:selected').text();
			var dentista = $('#nomeDen ').val();
			$('#adicionar tbody').append('<tr class="t"><td><input type="hidden" name="data[]" value="'+data+'">'+dataMostra+'</td>  <td><input type="hidden" name="hora[]" value="'+hora+'">'+hora+'</td><td><input type="hidden" name="dentista[]" value="'+dentista+'">'+dentistaNome+' </td></tr>');
		}


});













	