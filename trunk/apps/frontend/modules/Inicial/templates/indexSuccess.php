<html>
<body>
<div id="fb-root">Login

<script>
  // Additional JS functions here  
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '370375396370398', // App ID
      channelUrl : 'http://scrum.260mb.org/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
    // Additional init code here
FB.getLoginStatus(function(response){alert("inicio");if (response.status === 'connected'){FB.api('/me', function(response){alert("Nombre: " + response.first_name+" apellido: "+response.last_name + " uid: "+ response.id+ " email: "+response.email + " FNac: " + response.birthday);});
} else if (response.status === 'not_authorized') {
alert("no autorizado");
login();
} else {
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
alert("¡Para poder acceder al sistema debe loguearse!");
}
});
}

function conectarAFB() {
console.log('!Bienvenido! Obteniendo su informacion... ');
FB.api('/me', function(response) {
alert('Hola, ' + response.name + '.');
});
}  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>
</div>
	<a href="<?php echo url_for('@default?module=rol')?>">Roles</a><br>
	<a href="<?php echo url_for('@default?module=persona')?>">Personas</a><br>
	<a href="<?php echo url_for('@default?module=proyecto')?>">Proyectos</a><br>
	<a href="<?php echo url_for('@default?module=reunion')?>">Reuniones</a><br>
	<a href="<?php echo url_for('@default?module=equipo')?>">Equipos</a><br>
	<a href="<?php echo url_for('@default?module=estado')?>">Estados</a><br>
	<a href="<?php echo url_for('@default?module=historialchat')?>">Chat</a><br>
	<a href="<?php echo url_for('@default?module=link')?>">Links</a><br>
	<a href="<?php echo url_for('@default?module=productbacklog')?>">Product Backlog</a><br>
	<a href="<?php echo url_for('@default?module=sprint')?>">Sprints</a><br>
	<a href="<?php echo url_for('@default?module=sprintproductbacklog')?>">Sprint Backlog</a><br>
	<a href="<?php echo url_for('@default?module=tarea')?>">Tareas</a><br>
	<a href="<?php echo url_for('@default?module=cambio')?>">Cambios</a><br>

</body>
</html>