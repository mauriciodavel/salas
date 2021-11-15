<?php
//Criando tabela e cabeçalho de dados:
echo "<table border=1>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nome</th>";
echo "<th>E-mail</th>";
echo "<th>Tel</th>";
echo "</tr>";
//Conectando ao banco de dados
$strcon = mysqli_connect('localhost','salas','salas','salas') or die('Erro ao conectar banco de dados');
$sql = "SELECT * FROM tb_pessoas";
$resultado = mysqli_query($strcon,$sql) or die("Erro ao cadastrar registro");

//obtendo os dados por meio de um loop while
while ($registro = mysqli_fetch_array($resultado));
{
	$id = $registro['id_pessoa'];
	$nome = $registro['nome_pessoa'];
	$mail = $registro['mail_pessoa'];
	$tel = $registro['tel_pessoa'];
	echo "<tr>";
	echo "<td>".$id."</td>";
	echo "<td>".$nome."</td>";
	echo "<td>".$mail."</td>";
	echo "<td>".$tel."</td>";
	echo "</tr>";
}
mysqli_close($strcon);
echo "</table>";
?>