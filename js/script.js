$(document).ready(function(){
	$('#data').mask("00/00/0000");

	
	$('#hora').change(function(){
		if($(this).val() == 0){
			$(this).css({
				border:"1px solid red"
				
			});
			
		}else{
			$(this).css('border','');
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
			var hora = $('#hora').val();
			var dentistaNome = $('#nomeDen ').find('option:selected').text();
			var dentista = $('#nomeDen ').val();
			$('#adicionar tbody').append('<tr class="t"><td><input type="hidden" name="data[]" value="'+data+'">'+data+'</td>  <td><input type="hidden" name="hora[]" value="'+hora+'">'+hora+'</td><td><input type="hidden" name="dentista[]" value="'+dentista+'">'+dentistaNome+' </td></tr>');
		}
		

});













	