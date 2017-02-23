<?php require('../Connections/conecta.php');?>
<?php
	header("Access-Control-Allow-Origin: *");

	$consulta = "SELECT d.cod_depto, UPPER(d.desc_depto)AS desc_depto FROM deptos d WHERE d.especial = 'N' ORDER BY d.desc_depto ASC";
	
	$resultado = mysql_query($consulta,$conecta) or die('Consulta com problemas');
	$row_resultado = mysql_fetch_assoc($resultado);
	$total_resultado = mysql_num_rows($resultado);
	
	do{
		echo '<input name="'.$row_resultado['cod_depto'].'" id="test5" type="checkbox" value="" />';
		echo '<label for="test5">'.$row_resultado['desc_depto'].'</label>';
		echo '<br>';

		
	}while($row_resultado = mysql_fetch_assoc($resultado));
?>