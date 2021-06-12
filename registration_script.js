$('document').ready(function(){
 var email_state = false;
 var password_state = false;
 
  //Check if the email address entered exists in the database
  $('#email').on('blur', function(){
 	var email = $('#email').val();
 	if (email == '') {
 		email_state = false;
 		return;
 	}
 	$.ajax({
      url: 'registration.php',
      type: 'post',
      data: {
      	'email_check' : 1,
      	'email' : email,
      },
      success: function(response){
      	if (response == 'taken' ) {
          email_state = false;
          $('#email').parent().removeClass();
          $('#email').parent().addClass("form_error");
          $('#email').siblings("span").text('Email address already exists in our system');
      	}else if (response == 'not_taken') {
      	  email_state = true;
      	  $('#email').parent().removeClass();
      	  $('#email').parent().addClass("form_success");
      	  $('#email').siblings("span").text('');
      	}
      }
 	});
 });
 
 
 $('#cpassword').on('blur', function(){
  var cpassword = $('#cpassword').val();
  var password = $('#password').val();
  if (cpassword == '') {
  	password_state = false;
  	return;
  }
  
   //Check if confirm password and password matches
   
  if (cpassword != password ) {
      	password_state = false;
      	$('#cpassword').parent().removeClass();
      	$('#cpassword').parent().addClass("form_error");
      	$('#password').parent().removeClass();
      	$('#password').parent().addClass("form_error");
      	$('#cpassword').siblings("span").text('Password and Confirm password does not match');
      } else {
      	password_state = true;
      	$('#cpassword').parent().removeClass();
      	$('#cpassword').parent().addClass("form_success");
      	$('#password').parent().removeClass();
      	$('#password').parent().addClass("form_success");
      	$('#cpassword').siblings("span").text('');
      }
  
 });
 
  //When the register button is clicked
  
 $('#reg_btn').on('click', function(){
  var email = $('#email').val();
 	var fullname = $('#fullname').val();
 	var password = $('#password').val();
 	var phone = $('#contact_number').val();
 	
 	if (password_state == false || email_state == false) {
	  $('#error').removeAttr("hidden");
	}else{
	    
      $('#error').attr("hidden");
      $('#loading').show(0);
      
      $.ajax({
      	url: 'registration.php',
      	type: 'post',
      	data: {
      		'save' : 1,
      		'email' : email,
      		'fullname' : fullname,
      		'password' : password,
      		'phone' : phone,
      	},
      	success: function(response){
          //Show success message , it maybe on toast or anything, then refresh or redirect to the login page or dashboard if he/she is already logged in
      	}
 });
}
 
});

});
