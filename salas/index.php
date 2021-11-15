<?php 

include("conexao.php");

$consulta = "";
$con = "";

header("Refresh:600");
echo "Última Atualização:  ";
echo date('H:i:s d-m-Y');
$atualiza = date('H:i:s');
//$in_matutino = "'07:00:00'";
//$fin_matutino = "'12:00:00'";

if ($atualiza >= "00:00:00" and $atualiza < "12:00:00"){
	$consulta = "select * from tb_salas WHERE DATE_FORMAT(STR_TO_DATE(data, '%d/%m/%Y'), '%Y-%m-%d') = curdate() AND inicio >= '07:00:00' and inicio <= '12:00:00' ORDER BY inicio;";
	$con = $mysqli->query($consulta) or die($mysqli->error);
}		elseif ($atualiza >= "12:00:00" and $atualiza < "18:00:00"){
		$consulta = "select * from tb_salas WHERE DATE_FORMAT(STR_TO_DATE(data, '%d/%m/%Y'), '%Y-%m-%d') = curdate() AND inicio >= '13:00:00' and inicio <= '17:30:00' ORDER BY inicio;";
		$con = $mysqli->query($consulta) or die($mysqli->error);
}			elseif ($atualiza >= "18:00:00" and $atualiza < "23:59:59") {
				$consulta = "select * from tb_salas WHERE DATE_FORMAT(STR_TO_DATE(data, '%d/%m/%Y'), '%Y-%m-%d') = curdate() AND inicio >= '18:00:00' and inicio <= '22:30:00' ORDER BY inicio;";
				$con = $mysqli->query($consulta) or die($mysqli->error);
}
//echo $consulta
?>
<html>
	<head>
		<meta charset="utf8"> 
		<title>Agenda de Salas - IST</title>
		<link rel="stylesheet" href="style.css">
	<head>
	<body>
		<table width="2000" border="1px">
			<tr>
				<td>Data</td>
				<td>Dia</td>
				<td>Inicio</td>
				<td>Fim</td>
				<td>Turma</td>
				<td>Instrutor</td>
				<td>Unidade Curricular</td>
				<td>Ambiente</td>
				<td>Tipo</td>
			</tr>
			<?php while($dado = $con->fetch_array()){ ?>
			<tr>	
				<td><?php echo $dado["data"]; ?></td>
				<td><?php echo $dado["dia"]; ?></td>
				<td><?php echo $dado["inicio"]; ?></td>
				<td><?php echo $dado["fim"]; ?></td>
				<td><?php echo $dado["turma"]; ?></td>
				<td><?php echo $dado["instrutor"]; ?></td>
				<td><?php echo $dado["unidade"]; ?></td>
				<td><?php echo $dado["ambiente"]; ?></td>
				<td><?php echo $dado["tipo"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		
	<body>
</html>