<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iLovePizza - @yield('title')</title>

    <style>

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            border: 1px solid #e7e7e7;
            background-color: #f3f3f3;
        }

        li {
            float: left;
            font-size: 4vh;
        }

        li a {
            display: block;
            color: #666;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #ddd;
        }

        li a.active {
            color: white;
            background-color: #04AA6D;
        }

    </style>

</head>

<body>
<ul>
    <li><a class="active" href="#home">iLovePizza</a></li>
    <li><a href="#Tipidipizze">Home</a></li>
    <li><a href="#Tipidipizze">Tipi di pizze</a></li>
    <li><a href="#Consigli">Consigli</a></li>
    <li><a href="#Associazioni">Associazioni</a></li>
</ul>

<div id="content">
    @yield('content')
</div>

</body>
</html>
