<html>
<head>
	<meta charset="utf8" />
<style type="text/css">
.dif { background: #ccc; }
</style>
</head>
<body>
<?php

	$data = Array(
			0 => Array( 'name'=> 'William Moraes', 'idade'=> '23 anos', 'alias'=> 'wbruno' ),
			1 => Array( 'name'=> 'Marco Silva', 'idade'=> '24 anos', 'alias'=> 'jorge alex' ),
			2 => Array( 'name'=> 'Marcio Hanashiro', 'idade'=> '25 anos', 'alias'=> 'japa' ),
			3 => Array( 'name'=> 'Dany Garrido', 'idade'=> 'não sei', 'alias'=> 'delicinha' ),
			4 => Array( 'name'=> 'Heric Tilly', 'idade'=> '32 anos', 'alias'=> 'tilly' ),
			5 => Array( 'name'=> 'Felipe Marx', 'idade'=> 'não sei', 'alias'=> 'marx' ),
			6 => Array( 'name'=> 'Camila Kamimura', 'idade'=> 'não sei', 'alias'=> 'japinha' ),
			7 => Array( 'name'=> 'Raquel Dalastti', 'idade'=> 'não sei', 'alias'=> 'dalastti' ),
			8 => Array( 'name'=> 'Bianca Lu', 'idade'=> 'não sei', 'alias'=> 'luttenchuijlkwypl' ),
			9 => Array( 'name'=> 'Jacqueline Pereira', 'idade'=> 'não sei', 'alias'=> 'jacque' )
		);

	echo '<table id="tabela-zebrada">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Idade</th>
				<th>Alias</th>
			</tr>
		</thead>';

	echo '<tbody>';

	$i = 0;
	foreach( $data AS $item ){
		$class = $i%2==0 ? ' class="dif"' : '';
		echo '<tr'.$class.'>
			<td>'.$item['name'].'</td>
			<td>'.$item['idade'].'</td>
			<td>'.$item['alias'].'</td>
		</tr>';

		$i++;
	}
	echo '</tbody>
	</table>';
?>

</body>
</html>