<html>
<head><title>Tabela zebrada com PHP</title>
<style type="text/css">
tr.par{background-color:#CCCCCC;}
tr.impar{background-color:#FAFAFA;}
table{border-collapse:collapse;}
</style>
</head>
<body>
<table>
<?php
//variável que servirá para criar as linhas
$linha = 1;
for($linha=1;$linha<20;$linha++){

if($linha%2==0){
$class="impar";
}

else{
$class="par";
}

echo "<tr class='$class'><td>Coluna1</td><td>Coluna2</td></tr>";
}
?>

</table></body></html>