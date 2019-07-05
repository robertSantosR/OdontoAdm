$(document).ready(function(){
	$('#cep').mask('00000-000');
	$('#cep').blur(function(){
		var cep = $(this).val();
		$('#bairro').val('');
		$('#endereco').val('');
		$('#cidade').val('');
		$('#estado').val('');
		if (cep) {
		$(this).css('border','');
		$.getJSON('https://viacep.com.br/ws/'+ cep +'/json/',function(json){
			if (!('erro' in json)) {
				$('#bairro').val(json.bairro);
				$('#endereco').val(json.logradouro);
				$('#cidade').val(json.localidade);
				$('#estado').val(json.uf);

				$('.validaBairro').fadeIn(1000);

				$('#bairro').prop( "disabled", true );
				$('#endereco').prop( "disabled", true );
				$('#cidade').prop( "disabled", true );
				$('#estado').prop( "disabled", true );
				$('.validaBairro').fadeOut(1000);
			}else {
  				$('.validaBairro').fadeIn(1000);
				$('#bairro').prop( "disabled", false );
				$('#endereco').prop( "disabled", false );
				$('#cidade').prop( "disabled", false );
				$('#estado').prop( "disabled", false );
			}
		})
		.fail(function(){
			$('.validaBairro').fadeIn(1000);
			$('#bairro').prop( "disabled", true );
			$('#endereco').prop( "disabled", true );
			$('#cidade').prop( "disabled", true );
			$('#estado').prop( "disabled", true );
		});
		}else{
			$(this).css('border','1px solid red');
		}
	});
	$(':submit:eq(0)').click(function(){

		if (!$('#nome').val()) {
			$(this).css('border','1px solid red');
			return false;
		}else{
			$(this).css('border','');
			$('#bairro').prop( "disabled", false );
			$('#endereco').prop( "disabled", false );
			$('#cidade').prop( "disabled", false );
			$('#estado').prop( "disabled", false );
		}
	});
});