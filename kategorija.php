<?php
include 'connect.php';
define('UPLPATH', 'img/');
$kategorija = $_GET['kategorija'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>antonio-baricevic</title>
    <link rel="stylesheet" type="text/css" href="style.css">

  </head>
  <body>
    <header class="glavni">
        <div id = "logoblock">
            <img id = "logo" src="Le_Parisien_logo.svg" alt="LeParisien logo" > 
        </div>
        <hr>
        <nav>
            <h5 class="menu-item">HOME</h5>
            <h5 class="menu-item">PARISIEN</h5>
            <h5 class="menu-item">VIVRE</h5>
            <h5 class="menu-item">ADMINISTRACIJA</h5>
            <h5 class="menu-item"><a href="unos.html">UNOS</a></h5>
        </nav>
    </header>
    
    <section class="tekst">
        <h2><?php$kategorija?></h2>
        <div class="artikli">
        <?php
        $query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='".$kategorija."'";
        $result = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)){
            echo '<article>';  
            echo '<img src="' . UPLPATH . $row['slika'] . '"';
            echo '<h3 class="title"><a href="clanak.php?id='.$row['id'].'">'.$row['naslov'].'</a></h3>';
            echo '<p>'.$row['sazetak'].'</p>';
            echo '</article>';
        }?>
        </div>
    </section>

    <footer class="glavni">
        <h1>LeParisien</h1>
    </footer>
  </body>
</html>