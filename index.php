<?php
	$params = parse_ini_file('dist/config.ini');
	if ($params === false) {
		$titulo = '';
	}
	$titulo = $params['title'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $titulo; ?></title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Icon Favicon -->
		<link rel="shortcut icon" href="dist/img/favicon.png">

		<!-- Font Awesome -->
		<link rel="stylesheet" href="dist/fontawesome/css/all.css">
		
		<!-- Theme style -->
		<link rel="stylesheet" href="dist/css/adminlte.css">

		<style>
			body {
				background: url(dist/img/fondo.jpg) no-repeat center center fixed; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
				color: white;
			}

			.thickOutlined {
				color: white;
				text-shadow: -2px -2px 0 #000,
							  0px -2px 0 #000,
							  2px -2px 0 #000,
							 -2px  2px 0 #000,
						 	  0px  2px 0 #000,
							  2px  2px 0 #000;
			}

			.especial {
				display: inline-block;
				-webkit-box-sizing: content-box;
				-moz-box-sizing: content-box;
				box-sizing: content-box;
				float: none;
				z-index: auto;
				width: 85%;
				height: auto;
				position: static;
				cursor: default;
				opacity: 1;
				margin: 0;
				margin-top: 5px;
				padding: 5px 10px;
				overflow: visible;
				border: 1px solid;
				-webkit-border-radius: 20px;
				border-radius: 20px;
				color: rgba(255,255,255,1);
				text-align: center;
				-o-text-overflow: clip;
				text-overflow: clip;
				background: rgba(0,0,0,0);
				-webkit-box-shadow: 0 0 9px 5px rgba(0,0,0,0.5) inset;
				box-shadow: 0 0 9px 5px rgba(0,0,0,0.5) inset;
				text-shadow: 2px 2px 2px rgba(0,0,0,1) ;
				-webkit-transition: none;
				-moz-transition: none;
				-o-transition: none;
				transition: none;
				-webkit-transform: none;
				transform: none;
				-webkit-transform-origin: 50% 50% 0;
				transform-origin: 50% 50% 0;
				outline:0px;
			}

			@media only screen and (max-device-width: 320px) {
				.imgmain  { width: 25%; }
				.titulo   { font-size: 115%; }
				#titulo1  { font-size: 120%; }
				#titulo2  { font-size: 110%; }
				#titulo3  { font-size: 100%; }
				#nombre   { font-size: 110%; line-height: 80%; font-weight: 900; }
				#precio   { font-size: 170%; line-height: 95%;  }
				#desgloce { font-size:  90%; letter-spacing: -0.8px}
				#pvpful   { font-size: 100%; line-height: 85%; }
				#ahorro   { font-size: 100%; line-height: 85%; font-weight: 900; }
				#dpto     { font-size: 100%; line-height: 85%; }
				#cbarra   { font-size: 100%; line-height: 85%; }
				#alerta   { font-size: 150%; line-height: 100%; }
			}			

			@media only screen and (min-device-width: 321px) and (max-device-width: 375px) {
				.imgmain  { width: 25%; }
				.titulo   { font-size: 115%; }
				#titulo1  { font-size: 120%; }
				#titulo2  { font-size: 110%; }
				#titulo3  { font-size: 100%; }
				#nombre   { font-size: 110%; line-height: 80%; font-weight: 900; }
				#precio   { font-size: 180%; line-height: 95%;  }
				#desgloce { font-size: 100%; letter-spacing: -0.8px}
				#pvpful   { font-size: 100%; line-height: 85%; }
				#ahorro   { font-size: 100%; line-height: 85%; font-weight: 900; }
				#dpto     { font-size: 100%; line-height: 85%; }
				#cbarra   { font-size: 100%; line-height: 85%; }
				#alerta   { font-size: 150%; line-height: 100%; }
			}

			@media only screen and (min-device-width: 376px) and (max-device-width: 425px) {
				.imgmain  { width: 25%; }
				.titulo   { font-size: 145%; }
				#titulo1  { font-size: 135%; }
				#titulo2  { font-size: 130%; }
				#titulo3  { font-size: 120%; }
				#nombre   { font-size: 110%; line-height: 80%; font-weight: 900; }
				#precio   { font-size: 210%; line-height: 95%;  }
				#desgloce { font-size: 120%; letter-spacing: -0.8px}
				#pvpful   { font-size: 120%; line-height: 85%; }
				#ahorro   { font-size: 120%; line-height: 85%; font-weight: 900; }
				#dpto     { font-size: 120%; line-height: 85%; }
				#cbarra   { font-size: 120%; line-height: 85%; }
				#alerta   { font-size: 170%; line-height: 100%; }
			}

			@media only screen and (min-device-width: 426px) and (max-device-width: 768px) {
				.imgmain  { width: 15%; }
				.titulo   { font-size: 185%; }
				#titulo1  { font-size: 185%; }
				#titulo2  { font-size: 180%; }
				#titulo3  { font-size: 170%; }
				#nombre   { font-size: 160%; line-height: 80%; font-weight: 900; }
				#precio   { font-size: 300%; line-height: 95%;  }
				#desgloce { font-size: 170%; letter-spacing: -0.8px}
				#pvpful   { font-size: 170%; line-height: 85%; }
				#ahorro   { font-size: 170%; line-height: 85%; font-weight: 900; }
				#dpto     { font-size: 170%; line-height: 85%; }
				#cbarra   { font-size: 170%; line-height: 85%; }
				#alerta   { font-size: 180%; line-height: 100%; }
			}

			@media only screen and (min-device-width: 769px) and (max-device-width: 1024px) {
				.imgmain  { width: 10%; }
				.titulo   { font-size: 205%; }
				#titulo1  { font-size: 205%; }
				#titulo2  { font-size: 200%; }
				#titulo3  { font-size: 190%; }
				#nombre   { font-size: 180%; line-height: 80%; font-weight: 900; }
				#precio   { font-size: 450%; line-height: 95%;  }
				#desgloce { font-size: 190%; letter-spacing: -0.8px}
				#pvpful   { font-size: 190%; line-height: 85%; }
				#ahorro   { font-size: 190%; line-height: 85%; font-weight: 900; }
				#dpto     { font-size: 190%; line-height: 85%; }
				#cbarra   { font-size: 190%; line-height: 85%; }
				#alerta   { font-size: 200%; line-height: 100%; }
			}

			@media only screen and (min-device-width: 1025px) {
				.imgmain  { width: 8%; }
				.titulo   { font-size: 215%; }
				#titulo1  { font-size: 215%; }
				#titulo2  { font-size: 210%; }
				#titulo3  { font-size: 200%; }
				#nombre   { font-size: 190%; line-height: 80%; font-weight: 900; }
				#precio   { font-size: 600%; line-height: 95%;  }
				#desgloce { font-size: 200%; letter-spacing: -0.8px}
				#pvpful   { font-size: 200%; line-height: 85%; }
				#ahorro   { font-size: 200%; line-height: 85%; font-weight: 900; }
				#dpto     { font-size: 200%; line-height: 85%; }
				#cbarra   { font-size: 200%; line-height: 85%; }
				#alerta   { font-size: 210%; line-height: 100%; }
			}
		</style>
	</head>
	<body onload="$('#barra').focus()">
		<input type="hidden" name="hora_act" id="hora_act" value="">
		<!-- Navbar -->
		<div class="navbar bg-dark">
			<img src="dist/img/logo-ppal.png" class="bg-transparent imgmain ml-auto">
			<div class="titulo mr-auto"><?php echo $titulo; ?></div>
		</div>
		<div class="text-center mt-2 p-1">
			<div id="titulo1" class="thickOutlined font-weight-bold">Consulte el Precio del Artículo Aquí</div>
			<div id="titulo2" class="thickOutlined mt-1 mb-1">Para ver el precio del artículo pase el Código de Barras por el escáner</div>
			<div id="titulo3" class="thickOutlined font-weight-bold">Código de Barras</div>
			<input type="text" id="barra" class="especial" onblur="this.focus()">
			<hr>
			<div class="bg-primary-gradient rounded border border-white p-2 m-2 elevationw-2">
				<div id="nombre"   class="w-100 elevation-2 bg-warning-gradient p-1 m-0 mt-2 mb-2 rounded border border-dark">&nbsp;</div>
				<div id="precio"   class="w-100 elevation-2 bg-success-gradient p-1 m-0 mt-2 mb-2 rounded border border-dark">&nbsp;</div>
				<div id="desgloce" class="w-100 elevation-2 bg-dark p-1 m-0 mt-2 mb-2 rounded border border-light">&nbsp;</div>
				<div id="pvpful"   class="w-100 elevation-2 bg-danger p-1 m-0 mt-2 mb-2 rounded border border-dark d-none">&nbsp;</div>
				<div id="ahorro"   class="w-100 elevation-2 bg-light p-1 m-0 mt-2 mb-2 rounded border border-dark d-none">&nbsp;</div>
				<div id="dpto"     class="w-100 elevation-2 bg-info-gradient p-1 m-0 mt-2 mb-2 rounded border border-dark">&nbsp;</div>
				<div id="cbarra"   class="w-100 elevation-2 bg-secondary-gradient p-1 m-0 mt-2 mb-2 rounded border border-dark">&nbsp;</div>
			</div>
			<div id="alerta" class="w-100 p-1 m-0 bg-danger-gradient rounded border border-dark d-none">Código de Barras no Existe</div>
		</div>

		<!-- jQuery -->
		<script src="dist/js/jquery.min.js"></script>
		<!-- jQuery UI 1.12.1 -->
		<script src="dist/js/jquery-ui.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="dist/js/bootstrap.bundle.min.js"></script>
		<!-- moment-with-locals.min.js -->
		<script src="dist/js/moment.min.js"></script>
		<!-- AdminLTE App -->
		<script src="dist/js/adminlte.min.js"></script>
		<!-- JS propias app -->
		<script src="dist/js/app.js"></script>

		<script>
			moment.locale('es')
			moment.updateLocale('es', {
				week: {
					dow: 0
				}
			});

			var tiempo = '';

			$("body").on("keydown", "input", function(e) {
				// si presiono el enter
				if (e.keyCode == 13) {
					if($('#barra').val()!='') {
						$('#alerta').addClass('d-none');
						clearTimeout(tiempo);
						$.ajax({
							data: {
								opcion: "consultarpvp",
								idpara: $('#barra').val()
							},
							type: "POST",
							dataType: "json",
							url: "DBProcs.php",
							success: function (data) {
								if(data[0]['nombre']!=null && data[0]['nombre']!='') {
									$('#barra').val('');
									$('#nombre').html(data[0]['nombre']);
									$('#dpto').html(data[0]['dpto']);
									$('#desgloce').html(data[0]['desglo']);
									if(data[0]['ofert']!=0) {
										$('#precio').html('<i class="fas fa-award text-danger"></i>' + ' ' + data[0]['oferta']);
										$('#pvpful').html('Precio Sin Oferta: ' + data[0]['precio']);
										$('#pvpful').removeClass('d-none');
										$('#ahorro').html('Ahorro: ' + data[0]['ahorro']);
										$('#ahorro').removeClass('d-none');
									} else {
										$('#precio').html(data[0]['precio']);
										$('#pvpful').html('');
										$('#pvpful').addClass('d-none');
										$('#ahorro').html('');
										$('#ahorro').addClass('d-none');
									}
									$('#cbarra').html(data[0]['barra']+' - '+data[0]['codigo']);
									tiempo = setTimeout("inicializar()", 15000);
								} else {
									$('#alerta').removeClass('d-none');
									inicializar();
									setTimeout("$('#alerta').addClass('d-none');", 2500);
								}
							}
						});
					}
					return false;
				}
			});

			function inicializar() {
				$('#barra').val('');
				$('#nombre').html('&nbsp;');
				$('#dpto').html('&nbsp;');
				$('#precio').html('&nbsp;');
				$('#desgloce').html('&nbsp;');
				$('#pvpful').html('&nbsp;');
				$('#ahorro').html('&nbsp;');
				$('#pvpful').addClass('d-none');
				$('#ahorro').addClass('d-none');
				$('#cbarra').html('&nbsp;');
			}
		</script>
	</body>
</html>