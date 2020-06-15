	//**login***//	
	var myspan = document.querySelectorAll('li'),
	logBtn = myspan[0],
	signBtn = myspan[1];

	logBtn.onclick = function(){
		$('.signup-container').hide();
		removeClasses(myspan,'active');
		logBtn.classList.add('active');
		$('.login-container').fadeIn(1000);
	}

	signBtn.onclick = function(){
		$('.login-container').hide();
		removeClasses(myspan,'active');
		signBtn.classList.add('active');
		$('.signup-container').fadeIn(1000);
	}

	function removeClasses(anyArray,className){
		for(var i=0 ; i<anyArray.length ; ++i)
			anyArray[i].classList.remove(className);
	}

	   $('.register-container form').submit(function(e) {
          e.preventDefault();
      });

	function loginAjax(){
		var user_name = $('#log_user_name').val();
		var pass = $('#log_pass').val();
		 $.ajax({
              url: 'http://localhost/commerce/matjri/app/views/login/server.php',
              type: 'POST',
              data: {
        		user_name:user_name,
        		password:pass
              },
              success: function(data) {
                 if(data == 1){
             		window.location = 'index.php';  
                  }else if(data == 0){
                 	$('.login-container').find('.error').html('Cheack Your Username Or Password.');
                 }
              }
          });
	}

	function signupAjax(){
		var user_name = $('#sign_user_name').val();
		var email = $('#sign_email').val();
		var pass = $('#sign_pass').val();
		var con_pass = $('#sign_con_pass').val();
		 $.ajax({
              url: 'http://localhost/commerce/matjri/app/views/login/server1.php',
              type: 'POST',
              data: {
        		user_name:user_name,
        		pass:pass,
        		con_pass:con_pass,
        		email:email
              },
              success: function(data) {
                 if(data == 1){
                 	window.location = 'index.php';
                  }else if(data == 0){
                  	$('.signup-container').find('.error').html('');
                  	$('#sign_user_name').parent().parent().find('.error').css("color","red");
                 	$('#sign_user_name').parent().parent().find('.error').html('username used before');
                 	$('.signup-container').find('.alert').html('');
                 	$('.signup-container').find('.alert').removeClass('alert-danger');
                  }else if(data == -1){
                  	$('.signup-container').find('.error').html('');
                  	$('#sign_email').parent().parent().find('.error').html('email used before');             
              	  }else if(data == -2){
              	  	$('.signup-container').find('.error').html('');
              	  	$('#sign_con_pass').parent().parent().find('.error').html('password not optical');
              	  }else if(data == -3){
              	  	$('.signup-container').find('.alert').removeClass('alert-success');
              	  	$('.signup-container').find('.alert').addClass('alert-danger');
           			$('.signup-container').find('.alert').html('fill require inputs!');
              	  }
              }
          });
	}

	function uservalidation(){
		var user_name = $('#sign_user_name').val();
		 $.ajax({
              url: 'http://localhost/commerce/matjri/app/views/login/userval.php',
              type: 'POST',
              data: {
        		user_name:user_name,
              },
              success: function(data) {
                console.log('00');
                  if(data == 0){
                  	$('#sign_user_name').parent().parent().find('.error').css("color","red");
             		$('#sign_user_name').parent().parent().find('.error').html('username used before');
                  }else if(data == 1){
                  	$('#sign_user_name').parent().parent().find('.error').css("color","green");
                 	$('#sign_user_name').parent().parent().find('.error').html('username valid');
                 }else if(data == -1){
                 	$('#sign_user_name').parent().parent().find('.error').css("color","red");
                 	$('#sign_user_name').parent().parent().find('.error').html('username length must be more than 5 letters');
                 }
              }
          });
	}

  //***login***/