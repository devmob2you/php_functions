<?php 
//Set your timezone
date_default_timezone_set('America/Sao_Paulo');

//CODEIGNITER HELPER
function date_to_mysql($date) {
    $data_array = explode('/', $date);
    $ano = $data_array[2];
    $mes = $data_array[1];
    $dia = $data_array[0];
    return $ano . '-' . $mes . '-' . $dia;
}

function mysql_to_date($date) {

    $data_array = explode('-', $date);
    $ano = $data_array[0];
    $mes = $data_array[1];
    $dia = $data_array[2];

    $data_formatada = $dia . '/' . $mes . '/' . $ano;


    return $data_formatada;
}
//END: CODEIGNITER HELPER


//date('d/m/Y', strtotime($data)  ==> Converte data de YYYY-mm-dd para dd/mm/YYYY

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
