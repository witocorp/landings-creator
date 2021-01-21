function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}
$(document).ready(function(){
	$('a').on('click', function(){
		if($(this).attr("href")=="#legalwarning"){
			event.preventDefault();
			$('#legalModal').modal('show');	
		}
	});

	$('#enviar_form').on('click', function(){
		var flag = 0;
		var options = "";	
		$("input[type=radio]:checked").each(function() {
			options = options+this.name+" : "+this.value+",";  
		});
		if(!$('#nombre_form').val()){
			$('#nombre_form').addClass('border-danger');
			flag = 1;
		}else{
			$('#nombre_form').removeClass('border-danger');	
		}
		if(!$('#apellido_form').val()){
			$('#apellido_form').addClass('border-danger');
			flag = 1;
		}else{
			$('#apellido_form').removeClass('border-danger');
		}
		if(!$('#telefono_form').val()){
			$('#telefono_form').addClass('border-danger');
			flag = 1;
		}else{
			$('#telefono_form').removeClass('border-danger');
		}
		if(!$('#email_form').val() || !validateEmail($('#email_form').val())){
			$('#email_form').addClass('border-danger');
			flag = 1;
		}else{
			$('#email_form').removeClass('border-danger');
		}
		if(!$('#direccion_form').val()){
			$('#direccion_form').addClass('border-danger');
			flag = 1;
		}else{
			$('#direccion_form').removeClass('border-danger');
		}
		if(flag === 0){
			$.ajax({
		      url: '../assets/emails.php',
		      type: 'POST',
		      data: { 
		      	nombre : $('#nombre_form').val(),
		      	apellido : $('#apellido_form').val(), 
		      	telefono : $('#telefono_form').val(), 
		      	email : $('#email_form').val(), 
		      	direccion : $('#direccion_form').val(), 
		      	idLanding: $("body").data("idLanding"),
		      	fnacimiento: $("#nacimiento_form").val(),
		      	opciones : options
		      },
		      success: function(output){
		      	console.log(output);
		      	$('#nombre_form').val('');
		      	$('#apellido_form').val(''); 
		      	$('#telefono_form').val(''); 
		      	$('#email_form').val(''); 
		      	$('#direccion_form').val('');
		      	$("#nacimiento_form").val('');
		      }
		    });
		}
	})
})