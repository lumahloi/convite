<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar lista de convidados</title>
</head>
<body>
    <h1>Visualizar lista de convidados</h1>
</body>
</html>

<?php
	
	if (($csv_file = fopen("confirmados.csv", 'r')) !== FALSE) {
		
	// cria a tabela
		echo '<table border="1">';
		echo '<tr><th>Nome</th><th>Email</th><th>Telefone</th><th colspan="3">Acompanhantes</th></tr>';

		// lê as linhas do arquivo CSV e exibe os dados na tabela
		while (($data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
			echo '<tr>';
			foreach ($data as $cell) {
				echo '<td>' . htmlspecialchars($cell) . '</td>';
			}
			echo '</tr>';
		}

		// fecha a tabela e o arquivo CSV
		echo '</table>';
		fclose($csv_file);
	}
?>