<!doctype html>
<html>

<?php
  $server_address = "localhost";
  $username = "root";
  $password = "";
  $db_name = "gamerdb";

  $db = new mysqli($server_address, $username, $password, $db_name);

?>

	<head>
		<meta charset="utf-8" />
		<title>GameGEN</title>
		<link rel="stylesheet" href="main.css"/>
	</head>
	<body>
		<div id="big_wrap">
        <header id="top_header">
                <nav id="top_menu">
                <ul>
                    <li>&nbsp;&nbsp;</li>
                    <li><h1 style="color: white">GameGEN</h1></li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </li>
                    <li><a href="index.php">Home<a/></li>
                    <li><a href="pc.php">PC</a></li>
                    <li><a href="ps4.php">PS4</a></li>
                    <li><a href="xbox.php">Xbox One</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Publisher</a>
                        <div class="dropdown-content">
                        <a href="list.php">Rockstar</a>
                        <a href="list.php">Blizzard</a>
                        <a href="list.php">Naughty Dog</a>
                    </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Developer</a>
                        <div class="dropdown-content">
                        <a href="list.php">Naughty Dog</a>
                        <a href="list.php">343</a>
                        <a href="list.php">Bioware</a>
                    </div>
                    <li><a href="list.php">Reviews</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Genre</a>
                        <div class="dropdown-content">
                        <a href="list.php">Action</a>
                        <a href="list.php">Adventure</a>
                        <a href="list.php">Driving</a>
                        <a href="list.php">Shooter</a>
                        <a href="list.php">MMO/a>
                        <a href="list.php">Sports</a>
                        <a href="list.php">FPS</a>
                    </div>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Theme</a>
                        <div class="dropdown-content">
                        <a href="list.php">Crime</a>
                        <a href="list.php">Sci-fi</a>
                        <a href="list.php">Space</a>
                        <a href="list.php">Horro</a>
                        <a href="list.php">Military</a>
                    </div>
                </ul>
            </nav>
            </header>