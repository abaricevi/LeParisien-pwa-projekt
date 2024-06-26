<?php
include 'connect.php';
define('UPLPATH', 'img/');
$id = $_GET['id'];
$query = "SELECT * FROM vijesti WHERE id=".$id."";
$result = mysqli_query($dbc, $query);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>antonio-baricevic</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style_clanak.css">
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
        </nav>
    </header>

    <section role="main">
      <div class="row">
        <h1 class="title">
          <?php
            echo $row['naslov'];
          ?>
        </h1>
      </div>
      <section class="slika">
        <?php
          echo '<img src="' . UPLPATH . $row['slika'] . '">';
        ?>
      </section>

      <section class="sadrzaj">
        <p>
          <?php
            echo $row['tekst'];
          ?>
        </p>
      </section>
    </section>

    <footer class="glavni">
        <h1>LeParisien</h1>
    </footer>
  </body>
</html>