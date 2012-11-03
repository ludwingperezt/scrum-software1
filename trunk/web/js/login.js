// Additional JS functions here  
window.fbAsyncInit = function() {
	FB.init({
	  appId		 : '370375396370398', // App ID
	  channelUrl : 'http://scrum.260mb.org/channel.html', // Channel File
	  status	 : true, // check login status
	  cookie	 : true, // enable cookies to allow the server to access the session
	  xfbml		 : true	 // parse XFBML
	});
	
	/* All the events registered */
    FB.Event.subscribe('auth.login', function(response) {
         // do something with response
         login();
    });
	
    FB.Event.subscribe('auth.logout', function(response) {
        // do something with response
        logout();
    });
	
	// Additional init code here
	FB.getLoginStatus(function(response){
	alert("inicio");
	if (response.status === 'connected'){
		FB.api('/me', function(response){
			alert("Nombre: " + response.first_name+" apellido: "+response.last_name + " uid: "+ response.id+ " email: "+response.email + " FNac: " + response.birthday);
		});
	}
	else if (response.status === 'not_authorized') {
		alert("no autorizado");
		login();
	}
	else {
		alert("no logueado");
		login();
	}
	});

	function login() {
		FB.login(function(response) {
			if (response.authResponse) {
			// connected
				conectarAFB();
			} else {
			// cancelled
				alert("Para poder acceder al sistema debe loguearse!");
			}
		});
	}

	function conectarAFB() {
		console.log('!Bienvenido! Obteniendo su informacion... ');
		FB.api('/me', function(response) {
		alert('Hola, ' + response.name + '.');
		});
	}
};

  // Load the SDK Asynchronously
(function(d){
	 var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
	 if (d.getElementById(id)) {return;}
	 js = d.createElement('script'); js.id = id; js.async = true;
	 js.src = "//connect.facebook.net/en_US/all.js";
	 ref.parentNode.insertBefore(js, ref);
}
(document));