<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifólio</title>

    <style>

    :root{
        font-size: 16px;
    }

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /*body {
        background-image: url('imagens/logo.png');
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: 100%;
    }*/

    P{
        border-width: 5px;
        border-style: solid;
        border-color: purple;
        font-size: 3rem;
    }

    H1{
        background-color: purple;
        display: block;
    }

     H1:HOVER {
        background-color: blue;
     }

     .logo{
        position: absolute;
        top: 0;
        right:0;
     }

     #interface{

     }

    </style>
</head>

<body>

<div class="interface">

    <header class="cabecalho">

        <nav class="menu">

        <div class="logo">

            <img src="imagens/logo.png" alt="LOGO" width="150"/>

        </div>
        <ul>
                <li>Home</li>
                <li>Serviços</li>
                <li>Produtos</li>
                <li>Portifólio</li>
                <li>Sobre</li>
                <li>Contatos</li>
        </ul>
        <ol>
        </ol>
        </nav>
        <div class="titles">

            <h1 class="título">Entregando serviços de qualidade</h1>
            <h1 class="subtítulo">Soluções em TI</h1>

            <p class="paragrafo">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore doloribus ducimus quam vero provident a?</p>
        </div>
        <div class="socialIcons">

            <a href="#">Twitter</a>
            <a href="#">Facebook</a>
            <a href="#">Linkedin</a>
            <a href="#">Instagram</a>
    
        </div>
    </header>

</div>

</body>

</html>