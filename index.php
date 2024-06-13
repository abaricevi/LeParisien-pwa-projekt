<?php
include 'connect.php';
define('UPLPATH', 'img/');
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
            <h5 class="menu-item"><a href="index.php">Home</a></h5>
            <h5 class="menu-item"><a href="kategorija.php?kategorija=politique">Politique</a></h5>
            <h5 class="menu-item"><a href="kategorija.php?kategorija=mode">Mode</a></h5>
            <h5 class="menu-item"><a href="administracija.php">Administracija</a></h5>
            <h5 class="menu-item"><a href="unos.html">Unos</a></h5>
            <h5 class="menu-item"><a href="registracija.html">Registracija</a></h5>
            <h5 class="menu-item"><a href="login.html">Login</a></h5>
        </nav>
    </header>
    
    <section class="tekst">
        <h2><a href="kategorija.php?kategorija=politique">Politique</a></h2>
        <div class="artikli">
        <?php
        $query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='politique' LIMIT 4";
        $result = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)){
            echo '<article>';  
            echo '<img src="' . UPLPATH . $row['slika'] . '"';
            echo '<h3 class="title"><a href="clanak.php?id='.$row['id'].'">'.$row['naslov'].'</a></h3>';
            echo '<p>'.$row['sazetak'].'</p>';
            //echo '<a href="clanak.php?id='.$row['id'].'">';
            //echo $row['naslov'];
            // echo '</a></h4>';
            echo '</article>';
        }?>
        </div>
    </section>
    
    <section class="tekst">
        <h2><a href="kategorija.php?kategorija=mode">Mode</a></h2>
        <div class="artikli">
        <?php
        $query = "SELECT * FROM vijesti WHERE arhiva=0 AND kategorija='mode' LIMIT 4";
        $result = mysqli_query($dbc, $query);
        while($row = mysqli_fetch_array($result)){
            echo '<article>';  
            echo '<img src="' . UPLPATH . $row['slika'] . '"';
            echo '<h3 class="title"><a href="clanak.php?id='.$row['id'].'">'.$row['naslov'].'</a></h3>';
            echo '<p>'.$row['sazetak'].'</p>';
           // echo '<a href="clanak.php?id='.$row['id'].'">';
            //echo $row['naslov'];
            // echo '</a></h4>';
            echo '</article>';
        }?>
        </div>
    </section>

    <footer class="glavni">
        <h1>LeParisien</h1>
    </footer>
  </body>
</html>