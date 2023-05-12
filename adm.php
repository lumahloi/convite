<!DOCTYPE html>
<html>
<head>
	<title>Visualizar arquivo CSV</title>
</head>
<body>
	<h1>Visualizar arquivo CSV</h1>

	<?php
		// abre o arquivo CSV
		if (($csv_file = fopen("confirmados.csv", 'r')) !== FALSE) {

		
			// cria a tabela
			echo '<table border="1">';
			echo '<tr><th>Nome</th><th>Email</th><th>Acompanhantes</th></tr>';

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
</body>
</html>
