<?php require('../Connections/conecta.php');?>
<?php
	header("Access-Control-Allow-Origin: *");
/*	header('Content-Type: text/html; charset=utf-8');
*/		
	$consulta = "SELECT i.cod_igreja, UPPER(i.nome_igreja)AS nome_igreja FROM igreja i WHERE i.cod_campo = 2
				 ORDER BY i.nome_igreja ASC";
	
	$resultado = mysql_query($consulta,$conecta) or die('Consulta com problemas');
	$row_resultado = mysql_fetch_assoc($resultado);
	$total_resultado = mysql_num_rows($resultado);
	
	do{
		echo'<option value="'.$row_resultado['cod_igreja'].'">'.$row_resultado['nome_igreja'].'</option>';
		
	}while($row_resultado = mysql_fetch_assoc($resultado));
?>