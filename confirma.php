<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $acomp1 = $_POST['acomp1'];
    $acomp2 = $_POST['acomp2'];
    $acomp3 = $_POST['acomp3'];

    $confirmados = array();

    if (($handle = fopen("confirmados.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $confirmados[] = $data[1];
            // ele pega o item[1] da variável $data- que é o email-, e acrescenta ao array confirmados
			
			if (in_array($email, $confirmados)) {
				echo "Convidado já foi confirmado!";
				header("Refresh: 2;url=index.html");
				exit();
			}
        }
        fclose($handle);
    }

    $fp = fopen('confirmados.csv', 'a'); //"a": write only
    fputcsv($fp, array($nome, $email, $telefone, $acomp1, $acomp2, $acomp3));
    fclose($fp);

    header("Location: index.html?msg=Confirmação de presença realizada com sucesso.");

    echo "Presença confirmada!";
    exit();

/* 
    fopen(): opens a file or URL. 
        syntax: fopen(filename, mode, include_path, context)
        example: fopen("confirmados.csv", "r");

    fgetcsv():  parses a line from an open file, checking for CSV fields.
        syntax: fgetcsv(file, length, separator, enclosure)
        example: fgetcsv($handle, 1000, ",");

    in_array(); searches an array for a specific value.
        syntax: in_array(search, array, type)
        example: in_array($email, $confirmados);

    header(): sends a raw HTTP header to a client.
        syntax: header(header, replace, http_response_code)
        example: header("Refresh: 2;url=index.html");

    fclose(): closes an open file pointer.
        syntax: fclose(filepointer)
        example: fclose($handle)

    fputcsv(): formats a line as CSV and writes it to an open file.
        syntax: fputcsv(file, fields, separator, enclosure, escape)
        example: fputcsv($fp, array($nome, $email, $telefone, $acomp1, $acomp2, $acomp3));
*/
?>
