// JavaScript Document
$(function(){
	// Variables for Request an Estimate form:
	var form				=	$("#checkForm");
	var span				=	$(".form span");
	var firstName			=	$("#name");
	var phoneNumber			=	$("#phone");
	var email				=	$("#email");
	var emailReg 			= 	/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	var frequency			=	$("#frequency");
	var dogs				=	$("#dogs");
	var comments			=	$("#comments");
	var captcha				=	$("#captcha");
	var errorMessage		=	$("span.errorMessage");
	var successMessage		=	$("span.successMessage");
	
	function resetLabel(button) {
		//button.delay(500).animate({opacity:0}, 2000, function(){
				//button.text('')
		//})
	}
		
	// FOR CAPTCHA
	numOne = jQuery(".numOne");
	numTwo = jQuery(".numTwo");
	sum		= jQuery(".sumTotal")
	
	
	var minOne = 1;
	var maxTwo = 20;
	var sumOne = Math.floor(Math.random() * (maxTwo - minOne + 1) + minOne)
	
	var minThree = 1;
	var maxFour = 20;
	var sumTwo = Math.floor(Math.random() * (maxFour - minThree + 1) + minThree)
	
	numOne.text(sumOne)
	numTwo.text(sumTwo)
	
	sumTotal = sumOne + sumTwo
	
	sum.val(sumTotal)
	// END OF CAPTCHA
		
	form.submit(function(){
		span.text('');
		
		var isError = []
		
		//Remove Characters from phone number:
		phoneNumber.val(phoneNumber.val().replace(/-/g,'').replace('(','').replace(')','').replace(/ /g,''))
		
		if(isError.length>0) { isError.length = 0 }
		
		// Check for Empty Values
		if(firstName.val() === "" ) {
			//firstNameLabel.text("First Name is Required")
			isError.push('false')
		}
		
		if(phoneNumber.val() === "" ) {
			//phoneNumberLabel.text("Phone Number is Required")
			isError.push('false')
		}
		
		if(email.val() === "" ) {
			//emailLabel.text("Email is Required")
			isError.push('false')
		}
		
		if(captcha.val() != sumTotal ) {
			//captchaLabel.text("Captcha is incorrect")
			isError.push('false')
		}
		
		// Check Phone:
		if(isNaN(phoneNumber.val()) ) {
			//phoneNumberLabel.text("Phone Number is incorrect (ex:6318880000)")
			isError.push('false')
		}
		if(phoneNumber.val().length > 11 || phoneNumber.val().length < 7 ) {
			//phoneNumberLabel.text("Phone Number is Incorrect")
			isError.push('false')
		}
		
		// Check Email:
		if(!emailReg.test(email.val())) {
            //emailLabel.text("Email is incorrect")
			isError.push('false')
        }
		
		// Success Message
		if(/*span.text() === '' && */isError.length === 0) {
			successMessage.text("Message Sent, Thank You!")
			errorMessage.text('')
			$('#closeMe').text('Close')
		} else {
			errorMessage.text("* Please check for errors");
		}
		
		if( $('span.successMessage').text() != '') {
			$('span.successMessage').css({ opacity:0 }).animate({ opacity:1 }, function(){
				$(this).delay(2000).animate({ opacity:0})
			})
			
		}
		  
		return false;  
	})
	
	// SEND FORM IF NO ERRORS:
	$("#checkForm").validate({
		debug: false,
		submitHandler: function(form) {
			// do other stuff for a valid form
			$.post('send_form.php', $("#checkForm").serialize(), function(data) {
					//$('#results').html(data);
					if($('span.successMessage').text() != '') {
						firstName.val('')
						phoneNumber.val('')
						email.val('')
						comments.val('')
						captcha.val('')
						frequency.val('')
						dogs.val('')
					}
			});
		}
	});
	
	
	/******************************************************************************
	PRODUCT FORM
	******************************************************************************/
	
	// Variables for Request an Estimate form:
	var productForm			=	$("#checkProductForm");
	//var careersFormSpan		=   $('')
	var careersName			=	$("#productName");
	var careersPhoneNumber	=	$("#productPhone");
	var careersEmail		=	$("#productEmail");
	var careersEmailReg 	= 	/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

	var careersErrorMessage		=	$("span.productError");
	var careersSuccessMessage	=	$("span.productSuccess");
		
	productForm.submit(function(){
		careersErrorMessage.text('');
		careersSuccessMessage.text('');
		
		var isError = []
		
		//Remove Characters from phone number:
		careersPhoneNumber.val(careersPhoneNumber.val().replace(/-/g,'').replace('(','').replace(')','').replace(/ /g,''))
		
		if(isError.length>0) { isError.length = 0 }
		
		// Check for Empty Values
		if(careersName.val() === "" ) {
			isError.push('false')
		}
		
		if(careersPhoneNumber.val() === "" ) {
			isError.push('false')
		}
		
		if(careersEmail.val() === "" ) {
			isError.push('false')
		}
		
		// Check Phone:
		if(isNaN(careersPhoneNumber.val()) ) {
			isError.push('false')
		}
		if(careersPhoneNumber.val().length > 11 || careersPhoneNumber.val().length < 7 ) {
			isError.push('false')
		}
		
		// Check Email:
		if(!careersEmailReg.test(careersEmail.val())) {
			isError.push('false')
        }
		
		// Success Message
		if(isError.length === 0) {
			careersSuccessMessage.text("Message Sent. Thank You for contacting us!")
			careersErrorMessage.text('')
			//$('#closeMe').text('Close')
		} else {
			careersErrorMessage.text("* Please check for errors");
		}
		
		if( $('span.productSuccess').text() != '') {
			$('span.productSuccess').css({ opacity:0 }).animate({ opacity:1 }, function(){
				$(this).delay(2000).animate({ opacity:0})
				$('.submitProductFormWrap').delay(3000).animate({ height:'40px' })
			})
			
		}
		  
		return false;  
	})
	
	// SEND FORM IF NO ERRORS:
	$("#checkProductForm").validate({
		debug: false,
		submitHandler: function(productForm) {
			// do other stuff for a valid form
			$.post('send_product_form.php', $("#checkProductForm").serialize(), function(data) {
					//$('#results').html(data);
					if($('span.productSuccess').text() != '') {
						$('#productName').val('')
						$('#productEmail').val('')
						$('#productPhone').val('')
						$('#productComments').val('')
					}
			});
		}
	});
	
	
});