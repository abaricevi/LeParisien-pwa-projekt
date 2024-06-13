<?php
$naslov;
$sazetak;
$tekst;
$kategorija;
$img;
$arhiva;


if(isset($_POST['naslov'])){
    $naslov = $_POST['naslov'];
}
if(isset($_POST['sazetak'])){
    $sazetak = $_POST['sazetak'];
}
if(isset($_POST['tekst'])){
    $tekst = $_POST['tekst'];
}
if(isset($_POST['kategorija'])){
    $kategorija = $_POST['kategorija'];
}
if(isset($_POST['img'])){
    $img = $_POST['img'];
}
if(isset($_POST['da'])){
    $arhiva = 0;
}else{
    $arhiva = 1;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Text</title>
</head>
<body>
    <section role="main">
        <div class="row">
            <p class="category"><?php echo $kategorija; ?></p>
            <h1 class="title"><?php echo $naslov; ?></h1>
            <p>AUTOR:</p>
            <p>OBJAVLJENO:<?php echo date("Y-m-d"); ?></p>
        </div>
        <section class="slika"><img src="img/<?php echo $img; ?>"</section>
        <section class="about">
            <p><?php echo $sazetak;?></p>
        </section>
        <section class="sadrzaj">
            <p><?php echo $tekst;?></p>
        </section>
    </section>
</body>
</html>