<?php
$data = date("Y-m-d H:i:s");
echo "<p>Data completa: ".$data."</p>";

$diamesano = date("d/m/Y");
echo "<p>Dia/Mês/Ano: ".$diamesano."</p>";

$hora = date("H:i:s");
echo "<p>Hora completa: ".$hora."</p>";

// Modifica a zona de tempo a ser utilizada. Disponível desde o PHP 5.1
date_default_timezone_set('UTC');

// Exibe alguma coisa como: Monday
echo "<p>".date("l")."<p>";

// Exibe alguma coisa como: Monday 8th of August 2005 03:12:46 PM
echo "<p>".date('l jS \of F Y h:i:s A')."<p>";

// Exibe: July 1, 2000 is on a Saturday
echo "<p>July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000))."<p>";

/* utiliza as constantes do parâmetro de formato */
// Exibe alguma coisa como: Mon, 15 Aug 2005 15:12:46 UTC
echo date(DATE_RFC822);

// Exibe alguma coisa como: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));

//Usando zonas de tempo diferente
date_default_timezone_set('America/Anchorage');
echo '<p>Agora no Alasca é: <strong>'. date('d/m/Y H:i:s').'</strong></p>';

date_default_timezone_set('America/Los_Angeles');
echo '<p>Agora em Los Angeles é: <strong>'. date('d/m/Y H:i:s').'</strong></p>';

date_default_timezone_set('America/Santiago');
echo '<p>Agora em Santiago é: <strong>'. date('d/m/Y H:i:s').'</strong></p>';

date_default_timezone_set('America/Manaus');
echo '<p>Agora em Manaus é: <strong>'. date('d/m/Y H:i:s').'</strong></p>';
 
date_default_timezone_set('America/Sao_Paulo');
echo '<p>Agora em São Paulo é: <strong>'.date('d/m/Y H:i:s').'</strong></p>';

date_default_timezone_set('America/Brasilia');
echo '<p>Agora em Brasilia é: <strong>'.date('d/m/Y H:i:s').'</strong></p>';

date_default_timezone_set('America/Noronha');
echo '<p>Agora em Fernando de Noronha é: <strong>'.date('d/m/Y H:i:s').'</strong></p>';