<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
            font-family: 'Segoe UI light', Tahoma, Geneva, Verdana, sans-serif;
        }
        header,footer{
            width: 100%;
            height: 10vh;
            background-color: #34495e;
            color:white;
            font-size: 15px;
            text-transform: uppercase;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        footer{
            position: fixed;
            bottom: 0;
        }
        a{
            color:white;
        }
        td>a{
            color:black;
        }
        td>a:hover{
            color:blue;
        }
        .section{
            width: 100%;
            height: 60vh;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            
        }
        .crear{
            width: 100px;
            height: 50px;
            color:white;
            background-color: #34495e;
            display: flex;
            justify-content: center;
            align-items: center;
            margin:10px; 
        }
        .crear:hover{
            background-color: #567798;
        }
        table,th,tr,td{
            border:1px solid black;
            border-collapse: collapse;
            padding: 7px;
        }
        form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            
        }
        form input{
            padding: 5px 3px;
            margin: 5px;
        }
        
    </style>
</head>
<body>
    <header>
        @yield('header')
 
        <h1><a href="/">Inicio</a></h1>
        <h4>Desarrollado por Manuel</h4>
    </header>
    <div class="section">
        @yield('section')
    </div>
    <footer>
        @yield('footer')
        <p>Crud realizado con el fin de aprender laravel</p>
    </footer>
</body>
</html>