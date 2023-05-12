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
			
			if (in_array($email, $confirmados)) {
				echo "Convidado já foi confirmado!";
				header("Refresh: 2;url=index.html");
				exit();
			}
        }
        fclose($handle);
    }

    $fp = fopen('confirmados.csv', 'a');
    fputcsv($fp, array($nome, $email, $telefone, $acomp1, $acomp2, $acomp3));
    fclose($fp);

    header("Location: index.html?msg=Confirmação de presença realizada com sucesso.");

    echo "Presença confirmada!";
    exit();
?>
