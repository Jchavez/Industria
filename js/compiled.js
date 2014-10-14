// JavaScript Document
$(document).ready(function() {
  clean();
	$('#menu').hover(function () {
		$('#btnMenu').addClass("active");
		$('#menu ul').slideDown();
	}, function () {
		$('#btnMenu').removeClass("active");
		$('#menu ul').slideUp();
	});

	$('.collapse').on('shown.bs.collapse', function(){
		$(this).parent().find(".tog").addClass("activeAccordion");
		$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
	}).on('hidden.bs.collapse', function(){
		$(this).parent().find(".tog").removeClass("activeAccordion");
		$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
	});

	
});



/*==Clen Form==*/
function clean(){
	jQuery(".clean").focusin(function() {
		var textareaTxt = this.value;
		if(textareaTxt == 'Nombre' || textareaTxt == 'Email' || textareaTxt == 'Mensaje'){
		this.value = '';
		jQuery(this).css({'color':'#000'});
		}
	});
}

/*== Email Validator==*/
function validateEmail(email){
   var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
   isValid = emailPattern.test(email);
	if(isValid){
		return true;
	}else{
		return false;
	}
}

/*== FORM VALIDATOR ==*/
function checkRequired(){
	//Check if required fields are filled
	var counter = 0;
	jQuery("input.required, select.required").each(function(index) {
		contentField = jQuery(this).val();
		//Check if empty
		if(contentField == '' || contentField == null || contentField == '0'){
			//Change BG style
			jQuery(this).css({'background-color':'#8a8a8a'});
			//Take the cursor to the first field
			if(counter == 0){
				jQuery(this).focus();
			}
			counter++;
		}else{
			//Reset style
			jQuery(this).css({'background-color':'#FFFFFF'});
		}
	});

	//If any field is "not valid"
	if(counter > 0){
		//Set this message
		alert('Los campos de Email y Nombre no pueden estar vacios');
		return false;
	}else{
		//Reset the error message
		return true;
	}
}

function checkForm(theForm){
	one = checkRequired();
	jQuery("input.validEmail").each(function(index) {
		contentField = jQuery(this).val();
		two = validateEmail(contentField);
		if(!two){
			//jQuery('.errMsg').html('Inserte un Email V&aacute;lido');
			alert('Inserte un email valido');
		}
	});
if(one && two){
	//alert("todo bien"); 
var name = $('#name').val();
var email = $('#email').val();
var message = $('#message').val();
			$('#right').html('<div id="response_div"><img src="/images/ajax-loader.gif" /></div>');
			$.ajax({
			   type: "POST", 
			   url: "http://schaller.com.gt/elaboracionPaginasWeb/proyecto1/sendform.php",
			   data: 'pname='+name+'&pemail='+email+'&pmessage='+message,
			   success: function(msg){
				   if(msg){
					   //alert('¡Gracias!, su mensaje ha sido enviado.');
   					   clean();
						 $('.form').html('<div id="response_div">&iexcl;Gracias!, su mensaje ha sido enviado.<br /></div>');
				   }else{
						 $('.form').html('<div id="response_div">Su mensaje NO a sido enviado, por favor intente mas tarde.</div>');
						 //alert('Su mensaje NO a sido enviado, por favor intente mas tarde.');
 
				   }
			   }
			 });
		return true; 
	}else{
		return false;
	}
}

