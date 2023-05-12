<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10011 da Lumah</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lily+Script+One&family=Sniglet&display=swap');

        * {
            box-sizing: border-box;
            margin: 0;
        }

        div#baloes {
            position: fixed;
            z-index: -1;
            width: 35vw;
            height: 80vh;
            top: 50;
            background-repeat: no-repeat;
            background-position: left;
            background-size: contain;
            background-image: url(balloons-c9p.png);
        }

        nav {
            background-color: rgb(91, 18, 109);
        }

        a {
            text-decoration: none;
            color: black;
            font-size: 1em;
            font-family: 'Verdana';
        }

        a:hover{
            color: white;
        }

        ul {
            display: flex;
            list-style-type: none;
            justify-content: center;
        }

        li {
            margin: 20px;
        }

        body {
            background-image: linear-gradient(black, purple);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        h1 {
            font-family: 'Lily Script One', cursive;
            color: white;
            font-size: 4em;
            margin: 80px auto;
            text-align: center;
            text-shadow: 10px 10px 70px rgb(107, 47, 116);
        }

        h2 {
            font-family: 'Sniglet', cursive;
            color: rgb(255, 153, 246);
            font-size: 3em;
            text-align: center;
            margin-top: 0px;
        }

        h2#h2_presentes{
            margin-top: 100px;
        }

        h3 {
            font-family: 'Sniglet', cursive;
            color: rgb(107, 21, 187);
            font-size: 1.8em;
        }

        section.sec2 {
            background-color: white;
            max-width: 700px;
            margin: 50px auto 100px;
            border-radius: 25px;
            padding: 30px;
            box-shadow: 10px 10px 80px rgba(0, 0, 0, 0.452);
        }

        section#info{
            display: flex;
            flex-direction: row;
            justify-content: center;
            column-gap: 80px;
            margin: 150px auto;
        }

        .item {
            width: 250px;
            height: 100px;

            align-self: center;
        }

        p.p_info{
            font-size: 1.5em;
            color: white;
            font-family: 'Verdana';
        }

        p {
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin-bottom: 100px;
            color: white;
            font-size: 1.5em;
        }

        input {
            display: block;
            padding: 10px;
            width: 100%;
            margin: 10px 0px 25px;
            border: 1.5px solid gray;
        }

        .acomp {
            margin: 10px 0px 10px;
        }

        button {
            background-color: blueviolet;
            border: none;
            width: 200px;
            height: 50px;
            border-radius: 25px;
            display: block;
            margin: auto;
            color: white;
            font-family: 'Verdana';
            font-size: 0.9em;
        }

        button:hover{
            background-color: rgb(87, 19, 151);
        }
    
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#info">Data</a></li>
            <li><a href="#info">Horário</a></li>
            <li><a href="#info">Local</a></li>
            <li><a href="#convite">Confirmar presença</a></li>
        </ul>
    </nav>

    <div id="baloes"></div>

    <header>
        <h1>10011 da Lumah</h1>
    </header>

    <section a="#info" id="info">
        <div class="item">
            <h2>Data</h2>
            <p class="p_info">26/03/2023</p>
        </div>
        <div class="item">
            <h2>Horário</h2>
            <p class="p_info">20:00h</p>
        </div>
        <div class="item">
            <h2>Local</h2>
            <p class="p_info">Estrada Intendente Magalhães 1156</p>
        </div>
    </section>

    <p>Uma grande festa não é nada sem grandes convidados.<br> Venha comemorar meu aniversário!</p>

    <section id="convite" class="sec2">
        <form method="post" action="confirma.php">
            <label for="nome"><h3>Nome:</h3></label>
            <input type="text" name="nome" id="nome" placeholder="Nome" required>

            <label for="email"><h3>Email:</h3></label>
            <input type="text" name="email" id="email" placeholder="Email" required>

            <label for="telefone"><h3>Telefone:</h3></label>
            <input type="number" name="telefone" id="telefone" placeholder="Telefone" maxlength="11" required>

            <label for="acompanhantes"><h3>Acompanhantes:</h3></label>
            <input type="text" name="acomp1" id="acomp1" placeholder="Nome" class="acomp">
            <input type="text" name="acomp2" id="acomp2" placeholder="Nome" class="acomp">
            <input type="text" name="acomp3" id="acomp3" placeholder="Nome" class="acomp"><br>

            <button type="submit">Confirmar presença</button>
        </form>
    </section>

    <p><a href="adm.php">Página do administrador</a></p>

</body>
</html>