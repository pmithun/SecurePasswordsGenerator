<?php
$count=$_GET['count'];
$passLength=$_GET['len'];
if($_GET['case']==1){$lower=TRUE;}else{$lower=FALSE;}
if($_GET['case']==2){$upper=TRUE;}else{$upper=FALSE;}
if($_GET['case']==3){$lower=TRUE;$upper=TRUE;}
if($_GET['num']==1){$number=TRUE;}else{$number=FALSE;}
if($_GET['sym']==1){$symbol=TRUE;}else{$symbol=FALSE;}
$lowerCase="";
$upperCase="";
$numberChars="";
$symbolChars="";


if($count==0||null){
$password="";
if($lower){
	$lowerCase='abcdefghijklmnopqrstuvwxyz';
	$password.=$lowerCase[rand(0,strlen($lowerCase)-1)];
}
if($upper){
	$upperCase='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$password.=$upperCase[rand(0,strlen($upperCase)-1)];
}
if($number){
	$numberChars='0123456789';
	$password.=$numberChars[rand(0,strlen($numberChars)-1)];
}
if($symbol){
	$symbolChars='~!@#$%^&*()_+[]\;\',./~{}|:\"<>?';
	$password.=$symbolChars[rand(0,strlen($symbolChars)-1)];
}
$chars=$lowerCase.$upperCase.$numberChars.$symbolChars;
for($i=strlen($password)+1;$i<=$passLength;$i++){
	$password.=$chars[rand(0,strlen($chars)-1)];
}
echo str_shuffle($password);
sleep(1);
}
else{
	sleep(1);
	if($count>1000){
		echo 'You are only limited to 1000 passwords for performance reasons. Contact administrator for more information.'.PHP_EOL;
		exit;
	}
	if($lower){
	$lowerCase='abcdefghijklmnopqrstuvwxyz';
	}
	if($upper){
	$upperCase='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	}
	if($number){
	$numberChars='0123456789';
	}
	if($symbol){
	$symbolChars='~!@#$%^&*()_+[]\;\',./~{}|:\"<>?';
	}
	$chars=$lowerCase.$upperCase.$numberChars.$symbolChars;
for($x=0;$x<$count;++$x){
	$password="";
if($lower){
	
	$password.=$lowerCase[rand(0,strlen($lowerCase)-1)];
}
if($upper){
	$password.=$upperCase[rand(0,strlen($upperCase)-1)];
}
if($number){
	$password.=$numberChars[rand(0,strlen($numberChars)-1)];
}
if($symbol){
	$password.=$symbolChars[rand(0,strlen($symbolChars)-1)];
}
for($i=strlen($password);$i<$passLength;++$i){
	$password.=$chars[rand(0,strlen($chars)-1)];
}
printf("%s".PHP_EOL,$password);
}
}
?>