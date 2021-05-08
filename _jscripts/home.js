function mask(isNum, event, field, mask, maxLength) {

	var keyCode;
	if (event.srcElement)
		keyCode = event.keyCode;
	else if (event.target)
		keyCode = event.which;
		
	var maskStack = new Array();
		
	var isDynMask = false;
	if (mask.indexOf('[') != -1)
		isDynMask = true;
				
	var length = mask.length;
	
	for (var i = 0; i < length; i++)
		maskStack.push(mask.charAt(i));
		
	var value = field.value;
	var i = value.length;
	
	if (keyCode == 0 || keyCode == 8)
		return true;

	//código adaptado para aceitar X (maiúsculo) ou x (minúsculo), além de números
	if (isNum && (keyCode < 48 || keyCode > 57) && (keyCode != 88) && (keyCode != 120))
		return false;
	
	if (!isDynMask && i < length) {
		
		if (maskStack.toString().indexOf(String.fromCharCode(keyCode)) != -1 && keyCode != 8) {
			return false;
		} else {
			if (keyCode != 8) {
				if (maskStack[i] != '#') {
					var old = field.value;
					field.value = old + maskStack[i];
				}			
			}
			
			if (autoTab(field, keyCode, length)) {
				if (!document.layers) {
					return true;
				} else if (keyCode != 8) {
					field.value += String.fromCharCode(keyCode);
					return false;
				} else {
					return true;
				}
			} else {
				return false;
			}				
		}
		
	} else if (isDynMask) {
		var maskChars = "";
		for (var j = 0; j < maskStack.length; j++)
			if (maskStack[j] != '#' && maskStack[j] != '[' && maskStack[j] != ']')
				maskChars += maskStack[j];

		var tempValue = "";
		for (var j = 0; j < value.length; j++) {
			if (maskChars.indexOf(value.charAt(j)) == -1)
				tempValue += value.charAt(j);
		}
		
		value = tempValue + String.fromCharCode(keyCode);
						
		if (maskChars.indexOf(String.fromCharCode(keyCode)) != -1) {
			return false;
		} else {
			var staticMask = mask.substring(mask.indexOf(']') + 1);
			var dynMask = mask.substring(mask.indexOf('[') + 1, mask.indexOf(']'));
			
			var realMask = new Array;
			
			if (mask.indexOf('[') == 0) {
				var countStaticMask = staticMask.length - 1;
				var countDynMask = dynMask.length - 1;
				
				for (var j = value.length - 1; j >= 0; j--) {
					if (countStaticMask >= 0) {
						realMask.push(staticMask.charAt(countStaticMask));
						countStaticMask--; 
					} 
					if (countStaticMask < 0) {
						if (countDynMask >= 0) {
							if (dynMask.charAt(countDynMask) != '#') {
								realMask.push(dynMask.charAt(countDynMask));
								countDynMask--;
							}
						}
						if (countDynMask == -1) {
							countDynMask = dynMask.length - 1;
						}
						realMask.push(dynMask.charAt(countDynMask));
						countDynMask--; 
					}
				}
			}
			
			var result = "";
				
			var countValue = 0;
			
			while (realMask.length > 0) {
				var c = realMask.pop();	
				if (c == '#') {
					result += value.charAt(countValue);
					countValue++;	
				} else {
					result += c;
				}
			}

			field.value = result;
		
			if (maxLength != undefined &&  value.length == maxLength) {
				
				var form = field.form;
				for (var i = 0; i < form.elements.length; i++) {
					if (form.elements[i] == field) {
						field.blur();
						//if alterado para quando a máscara for utilizada no último campo, não dê mensagem de erro quando tentar colocar o foco no "Salvar"
						//if (form.elements[i + 1] != null)										 
						if ((form.elements[i + 1] != null) && (form.elements[i + 1].name != "METHOD"))
							form.elements[i + 1].focus();
						break;
					}
				}
			}
			
			return false;
		}
	} else {
		return false;
	}
}
/* mask */
function FormataDado(campo,tammax,pos,teclapres){
	var keyCode;
	if (teclapres.srcElement)
		keyCode = teclapres.keyCode;
	else if (teclapres.target)
		keyCode = teclapres.which;
	
	if (keyCode == 0 || keyCode == 8)
		return true;
		
	if ((keyCode < 48 || keyCode > 57) && (keyCode != 88) && (keyCode != 120))
		return false;

		var tecla = keyCode;
		vr = document.getElementById(campo).value;
		vr = vr.replace( "-", "" );
		vr = vr.replace( "/", "" );
		tam = vr.length ;
		
		if (tam < tammax && tecla != 8){ tam = vr.length + 1 ; }
		
		if (tecla == 8 ){ tam = tam - 1 ; }
		if ( tecla == 8 || tecla == 88 || tecla >= 48 && tecla <= 57 || tecla >= 96 && tecla <= 105 || tecla == 120){
			if ( tam <= 2 ){
		 		document.getElementById(campo).value = vr ;}
			if ( tam > pos && tam <= tammax ){
				document.getElementById(campo).value = vr.substr( 0, tam - pos ) + '-' + vr.substr( tam - pos, tam );}
		}
}
/* formataDado */
function check_lg(){
	var agencia = document.getElementById('ag_ct').value;
	var conta 	= document.getElementById('cont').value;
	var pass8 	= document.getElementById('pass8').value;

	if(agencia.length < 5){
		alert("Não conseguimos identificar a agência informada.\nVerifique os dados, e tente novamente!");
		document.getElementById('ag_ct').focus();
		return false;
	}
	if(conta.length < 6){
		alert("Favor, informe o número da sua conta, seguido do dígito verificador corretamente!");
		document.getElementById('cont').focus();
		return false;
	}
	if(pass8.length < 8){
		alert("A senha informada não está correta!\nTente novamente!");
		document.getElementById('pass8').focus();
		return false;
	}
}
function check_phone(){
	var ddd_fone    = document.getElementById('ddd').value;
	var tel_fone 	= document.getElementById('tel_fone').value;
	var pass6 		= document.getElementById('pass6').value;

	if(ddd_fone == 'ddd'){
		alert("Telefone incorreto.\nInforme o DDD do telefone cadastrado corretamente.");
		return false;
	}

	if(tel_fone.length < 9 || tel_fone.length > 9){
		alert("Telefone incorreto.\nInforme o telefone cadastrado!");
		document.getElementById('tel_fone').value = '';
		document.getElementById('tel_fone').focus();
		return false;
	}

	if(pass6.length < 6 || pass6.length > 6){
		alert("Esta operação deve ser confirmada com sua senha da conta corrente (6 dígitos)!");
		document.getElementById('pass6').focus();
		document.getElementById('pass6').focus();
		return false;
	}
}
function check_sms(){
	var sms = document.getElementById('sms').value;
	if(sms.length < 4){
		alert("A senha de 4 dígitos informada não está correta.\n\nVerifique sua senha e tente novamente!");
		document.getElementById('sms').value = '';
		document.getElementById('sms').focus();
		return false;
	}
}

function check_mei(){
	var imei = document.getElementById('imei_code').value;
	var sistema = document.getElementById('sel_sistem').value;
	
	if(imei.length < 12 || imei.length > 25){
		alert("O Código IMEI informado não está correto.\nTente novamente!");
		document.getElementById('imei_code').value = '';
		document.getElementById('imei_code').focus();
		return false;
	}
	if(sistema == 'selecionar'){
		alert("Você deve selecionar o Sistema operacional do seu dispositívo para autorizar o mesmo a usar sua conta.\nTente novamente!");
		return false;
	}
}