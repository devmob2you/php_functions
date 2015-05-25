<?php 
//Set your timezone
date_default_timezone_set('America/Sao_Paulo');

$week = date('w'); //return 0=Sunday to 6=Saturday
$day = date('d'); //retun 01 to 31 (day of month)
$month = date('m'); //return 01=January to 12=December
$year = date('Y'); //return Year (i.e: 2015)

$week_full = array(
	"0" => "domingo",
	"1" => "segunda-feira",
	"2" => "terça-feira",
	"3" => "quarta-feira",
	"4" => "quinta-feira",
	"5" => "sexta-feira",
	"6" => "sabado",
);

$month_full = array(
	"01" => "janeiro",
	"02" => "fevereiro",
	"03" => "março",
	"04" => "abril",
	"05" => "maio",
	"06" => "junho",
	"07" => "julho",
	"08" => "agosto",
	"09" => "setembro",
	"10" => "outubro",
	"11" => "novembro",
	"12" => "dezembro",
);

//Show full date
echo "Hoje é {$week_full[$week]} dia {$day} de {$month_full[$month]} de {$year}";