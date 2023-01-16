<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iLovePizza - @yield('title')</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            overflow: hidden;
            background-color: #666;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: grey;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 80px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a style="background-color: #04AA6D">iLovePizza</a>
    <a href="home">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Tipi di Pizze
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="tutte">Tutte</a>
            <a href="napoletana">Napoletana</a>
            <a href="romana">Romana</a>
            <a href="resto">Resto d'Italia</a>
            <a href="internazionale">Internazionale</a>
        </div>
    </div>
    <a href="#Consigli">Consigli</a>
    <a href="#Associazioni">Associazioni</a>
</div>

<div id="content">
    @yield('content')
</div>

</body>
</html>
