# Urna-Eletronica
<!DOCTYPE html>
<?php 
$digito= filter_input(INPUT_GET,'digito');
    echo "Numero digitado ".$digito;

if (($digito == 13)or($digito == 24)or($digito == 45) ){
 $arquivo = "votoscontados.txt";
 $conteudo=",".$digito;
 $abertura=fopen("$arquivo","a+");
 $gravacao = fwrite($abertura, $conteudo);
 
 # Reposiciona o ponteiro no início do arquivo
 fseek($abertura, 0);
 $leitura = fread($abertura, filesize($arquivo));
 fclose ($abertura);
 
 
 
}elseif ($digito == ""){

 $arquivo = "votosbrancos.txt";
 $conteudo=",".$digito;
 $abertura=fopen("$arquivo","a+");
 $gravacao = fwrite($abertura, $conteudo);
 
 # Reposiciona o ponteiro no início do arquivo
 fseek($abertura, 0);
 $leitura = fread($abertura, filesize($arquivo));
 fclose ($abertura);
 

 
    }else{
 
 $arquivo = "votosinvalidos.txt";
 $conteudo=",".$digito;
 $abertura=fopen("$arquivo","a+");
 $gravacao = fwrite($abertura, $conteudo);
 
 # Reposiciona o ponteiro no início do arquivo
 fseek($abertura, 0);
 $leitura = fread($abertura, filesize($arquivo));
 fclose ($abertura);
 
 
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Urna Eletronica</title>
    </head>
    <body>
        
        	<form name="voto" action="index.php" method="get">
	
	<div>
	<table border='0' height="3" width="3">
	<tr>
		<input type="text" name="digito"/>
	</tr>
	
	<tr>
		<td><input type="button" value="1" onclick="voto.digito.value +='1'"/> </td>
		<td><input type="button" value="2" onclick="voto.digito.value +='2'"/></td>
		<td><input type="button" value="3" onclick="voto.digito.value +='3'"/></td>
	</tr>
	<tr>
		<td><input type="button"  value="4" onclick="voto.digito.value +='4'"/></td>
		<td><input type="button"  value="5" onclick="voto.digito.value +='5'"/></td>
		<td><input type="button"  value="6" onclick="voto.digito.value +='6'"/></td>
	</tr>
	<tr>
		<td><input type="button"  value="7" onclick="voto.digito.value +='7'" /></td>
		<td><input type="button"  value="8" onclick="voto.digito.value +='8'"/></td>
		<td><input type="button"  value="9" onclick="voto.digito.value +='9'"/></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="button"  value="0" onclick="voto.digito.value +='0'" /></td>
                <td></td>
	</tr>
	
	<tr>
		<td><input type="submit" value="branco" onclick="voto.digito.value +=''"/></td>
		<td><input type="reset" value="corrige" /></td>
		<td><input type="submit"  value="confirma" /></td>
	</tr>
	</table>
	</div>
	</form>
    </div>
	<div>
		<h2>Legenda</h2>
		<p>13-Dilma</p>
		<p>24-Leandro</p>
		<p>45-Aecio</p>
	</div>
</body>

    </body>
</html>
