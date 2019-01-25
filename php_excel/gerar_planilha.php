<!--**
 * @author Cesar Szpak - Celke -   cesar@celke.com.br
 * @pagina desenvolvida usando framework bootstrap,
 * o código é aberto e o uso é free,
 * porém lembre -se de conceder os créditos ao desenvolvedor.
 *-->
 <?php
	session_start();
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	<body>
		<?php
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'Tabela de Apontamentos.xls';
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '
		<table class="tg" border="1">
		  <tr align="center">
			<th class="tg-vpkt" colspan="11">Tabela de Apontamentos</th>
		  </tr>
		  <tr align="center">
			<td class="tg-2oxp">Período</td>
			<td class="tg-2oxp" colspan="3">Status Período</td>
			<td class="tg-2oxp" colspan="2">Sócio</td>
			<td class="tg-2oxp" colspan="2">Equipe</td>
			<td class="tg-2oxp">Gerente</td>
			<td class="tg-2oxp">Superisor</td>
			<td class="tg-2oxp">Usuário</td>
		  </tr>
		  <tr>
			<td class="tg-attk"></td>
			<td class="tg-attk" colspan="3"></td>
			<td class="tg-7nul" colspan="2"></td>
			<td class="tg-attk" colspan="2"></td>
			<td class="tg-attk"></td>
			<td class="tg-attk"></td>
			<td class="tg-attk"></td>
		  </tr>
		  <tr>
			<td class="tg-8wy3" colspan="11"></td>
		  </tr>
		  <tr>
			<td class="tg-attk">Horas Estimadas</td>
			<td class="tg-attk">Horas Lançadas</td>
			<td class="tg-7nul">Data</td>
			<td class="tg-7nul">Tipo Projeto</td>
			<td class="tg-7nul">Projeto</td>
			<td class="tg-7nul">Serviço</td>
			<td class="tg-attk">Atividade</td>
			<td class="tg-attk">Tipo Lançamento</td>
			<td class="tg-attk">Horas Decimal</td>
			<td class="tg-attk">Descrição</td>
			<td class="tg-attk">Status Apontamente</td>
		  </tr>
		  <tr>
			<td class="tg-yam2">c1</td>
			<td class="tg-yam2">c2</td>
			<td class="tg-yam2">c3</td>
			<td class="tg-yam2">c4</td>
			<td class="tg-yam2">c5</td>
			<td class="tg-yam2">c6</td>
			<td class="tg-yam2">c7</td>
			<td class="tg-yam2">c8</td>
			<td class="tg-yam2">c9</td>
			<td class="tg-yam2">c10</td>
			<td class="tg-yam2">c11</td>
		  </tr>
		</table>';

		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );

		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>