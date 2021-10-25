<html>
<head>
<title> Site developed by: Maysa Falchou Falkou</title>
<style>
	.ejercicio3{
		color:<?php echo $_POST['color'];?>;
		font-family:<?php echo $_POST['fuentetexto'];?>;
		size:<?php echo $_POST['rango'];?>;
	}
</style>
</head>
<body>
<div style="text-align: center">
<p>Site developed by: Maysa Falchou Falkou</p>
<a href="https://mail.google.com/mail/u/0/#inbox">Click here for enter in my gmail</a>
<br/>
</div>
<?php
echo $_POST['nombre'];
echo $_POST['apellido'];
echo $_POST['edad'];
echo $_POST['color'];
echo $_POST['rango'];
echo $_POST['fuentetexto'];
echo "<p class='ejercicio3'>ejercicio 3 practica estructuras i bucles</p>"
?>
</body>
</html>

<?php
session_start();
echo "Yesterday it was ";
$yesterday = date("d-m-Y", mktime(0, 0, 0, date("m") , date("d")-1,date("Y")));
echo $yesterday;
echo '</br>';
echo "The previous month is ";
$previous_month = date('m', strtotime('+1 month'));
echo $previous_month;
echo '</br>';
function dias_hasta_fin_mes(){

	$total_mes = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y"));

	$transcurrido = date("d");

	return $total_mes - $transcurrido;

}
echo 'There are ' . dias_hasta_fin_mes() . ' days left in this month.' ;
echo "<br>";
echo "There are ";
$month = 12 - date("m");
echo $month;
echo " months in the current year.";

function mostrar_horario(){
	$mesActual=date('m');
	
	if($mesActual>='6' && $mesActual<='9'){
		return 'Good Summer!';
	}else{
		return 'Good Winter!';
	}
}

echo '<br>';
	setcookie("username","maysa", time() +3600);
	setcookie("surname","falchou", time() +3600);
	setcookie("age", 20, time() +3600);
	setcookie("color", "red", time() +3600);
	setcookie("fuentetexto","arial", time() +3600);

session_start();
if(!isset($_SESSION["count"])){
	$_SESSION["count"] = 0;
}else{
	$_SESSION["count"]++;
}
?>
<html>
<body>
<p>

<?php
print("Hola, has accedido a esta pagina ");
print($_SESSION["count"]);
print(" veces.");
?>

</p>
</body>
</html>