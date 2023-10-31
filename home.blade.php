<!DOCTYPE html>
<html lang="en">
<head>
    
    <title> Home </title>
    <style>
        body{
            background-color: black;
            color: white;
        }
        
        .quadrado {
            width: 400px;
            height: 300px;
            background-color: black;
            text-align: center;
            float: left;
        }
        .quadrado img{
            max-width: 100%;
            max-height: 100%;
        }
        .descricao{
            margin-top: 10px;
            font-weight: bold;
        }
        
        .menu {
            background-color: #333;
            overflow: hidden;
        }

        .menu ul {
            list-style-type: none;
            padding: 0;
        }

        .menu li {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
        }

        .menu li:hover {
            background-color: #ddd;
            color: black;
        }

        .menu .last {
            float: right;
        }
    </style>
</head>

<body>
    
    <div class="menu">
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="santos">Santos FC</a></li>
            <li><a href="sp">São Paulo FC</a></li>
            <li><a href="palmeiras">Palmeiras</a></li>
            <li><a href="idolos"> Ídolos </a></li>
            <li class="last"><a href="sitecompras">SITE DE COMPRAS</a></li>
        </ul>
    </div>

    <center> <h1> Histórias e Títulos dos Clubes </h1> </center>

    <div class="quadrado">
        <a href="santos">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Santos_Logo.png/768px-Santos_Logo.png" alt= "História do Santos FC">
            <h2 class="descricao"> História do Santos FC. </h2>
        </a>
    </div>

    <div class="quadrado">
        <a href="sp">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Brasao_do_Sao_Paulo_Futebol_Clube.svg/langpt-640px-Brasao_do_Sao_Paulo_Futebol_Clube.svg.png" alt= "História do São Paulo">
            <h2 class="descricao"> História do São Paulo. </h2>
        </a>
    </div>

    <div class="quadrado"> 
        <a href="palmeiras">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Palmeiras_logo.svg/2048px-Palmeiras_logo.svg.png" alt = "História do Palmeiras">
            <h2 class="descricao"> História do Palmeiras. </h2>
        </a>
    </div>
</body>
</html>