<?php
//inform day and birthday month
$my_day = '22'; 
$my_month = '09';

$day_on_seconds = strtotime(date('Y-m-d')); //return 1332212400 (seconds today)
$my_birthday = strtotime(date("Y-{$my_month}-{$my_day}")); //return 1442872800 (seconds of my birthday) 
$remainder = $my_birthday - $day_on_seconds; //return
$time_one_day = 24*60*60; //return time of the One Day (24 hours * 60 minutes * 60 seconds)
$lack_days = $remainder / $time_one_day;

if($lack_days == 0){
	echo "Seu aniversário é hoje!";
}elseif($lack_days == 1){
	echo "Seu aniversário é amanha!";
}elseif($lack_days > 1){
	echo "Faltam {$lack_days} dias para seu aniversário!";
}else{
	echo "Este ano seu aniversário já passou :-(";
}