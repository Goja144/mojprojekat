<?php
$idkupca="-1";
if(isset($_GET['idkupca'])){
    $idkupca=$_GET['idkupca'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/regcss.css">
    <link rel="stylesheet" href="resources/css/styleGalerija.css">
    <link href="https://fonts.googleapis.com/css?family=Aref+Ruqaa" rel="stylesheet">
    <link rel="stylesheet" href="resources/webcss/tabela.css">
    <link rel="stylesheet" href="resources/webcss/grid.css">
    <link rel="stylesheet" href="resources/webcss/ionicons.min.css">
    <link rel="stylesheet" href="resources/webcss/forma.css">
    <link rel="icon" type="image/png" href="resources/img/icon.png"/>
    <script src="resources/js/functions.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>

    <title>Dentologie</title>
</head>
<body>
<!-- Go to www.addthis.com/dashboard to customize your tools-->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a6da8bcf57103ad"></script>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
   <header>
      <div class="topnav" id="myTopnav">
          <a href="">Home</a>
          <a href="#" onclick="uslugeAjax(<?php echo $idkupca;?>)">Usluge</a>
          <a href="#" onclick="dodajAjaxx()">Dodaj uslugu</a>
          <a href="#" onclick="izmeniAjax()">Izmeni uslugu</a>
          <a href="#" onclick="galerijaAjax()">Galerija</a>
            <div class="dropdown">
              <button class="dropbtn">Kontakt
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <p>066/395525</p>
              </div>
            </div>
          <a href="#" onclick="lokacijaAjax()">Lokacija</a>
                <?php if($idkupca!=-1) { ?> <a href="index.php">Log out
                </a><?php } else{ ?>
                <a href="<?php if($idkupca==-1){echo "admin/index.php?pocetna=1";}else{echo "#";} ?>">Log in
                </a><?php }
                ?>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#333;</a>
    </div>

               <center style="padding-top:250px;"><h1>Imate 32 razloga da nas posetite<br> Dentologie brine o zdravlju i lepoti vaših zuba!</h1>
               </center>

   </header>
     <hr class="style13">
     <section class="sec">
     <div id="result">
     <h3>Dentologie je stomatološka ordinacija koja pruža sve vrste stomatoloških usluga za Vaš lep osmeh i zdrave zube.</h3>
     <p class="long-copy">
  <b>Upotrebom najsavremenije opreme i materijala, kao i stručnosti našeg tima stomatologa, garantujemo vrhunsku uslugu i uspešno rešavanje svih problema koji se tiču zdravlja vaših zuba. </b>
</p>
   <div class="row">
       <div class="col span-1-of-3" id="prvi">
          <div id="pi">
           <img src="resources/img/oralnahirurgija.jpeg" alt="">
           <p id="caption"><a href="#" onclick="ucitajKategorijuAjax('-Oralna hirurgija-',<?php echo $idkupca; ?>)">Oralna hirurgija</a></p>
           </div>
           <div id="pi">
           <img src="resources/img/paradontologija.jpeg" alt="">
           <p id="caption2"><a href="#" onclick="ucitajKategorijuAjax('-Paradontologija-',<?php echo $idkupca; ?>)">Paradontologija</a></p>
           </div>
       </div>

       <div class="col span-1-of-3" id="drugi">
           <div id="pi">
           <img src="resources/img/resekcija.png" alt="">
           <p id="caption3"><a href="#" onclick="ucitajKategorijuAjax('-Bolesti zuba-',<?php echo $idkupca; ?>)">Bolesti zuba</a></p>
           </div>
       </div>
       <div class="col span-1-of-3" id="treci">
          <div id="pi">
           <img src="resources/img/protetika.jpg" alt="">
            <p id="caption4"><a href="#" onclick="ucitajKategorijuAjax('-Protetika-',<?php echo $idkupca; ?>)">Protetika</a></p>
            </div>
            <div id="pi">
           <img src="resources/img/estetska.jpeg" alt="">
           <p id="caption5"><a href="#" onclick="ucitajKategorijuAjax('-Estetska stomatologija-',<?php echo $idkupca; ?>)">Estetska stomatologija</a></p>
           </div>
           <p>&nbsp;</p>

       </div>

   </div>

      </div>
       </section>
      <hr class="style13">
         <footer style="color:#aeb1b7;">
         <div class="row">
             <div class="col span-1-of-3">
                <p id="info"><b>Dentologie</b> <br>
            <i class="ion-map"></i> Jove Ilića 154, Voždovac <br>
             <i class="ion-home"></i> Broj telefona: 011/3535-000<br>
              <i class="ion-iphone"></i> Mob: 066/395525 <br>
                Prijavite i budite u toku sa akcijama i popustima</p>

             </div>
             <div class="col span-1-of-3">
                 <br>

                </p>
             </div>
             <div class="col span-1-of-3">
                <p id="autortxt">
<br><br>
                Copyright &copy; 2021 by MIK
                </p>
             </div>
          </div>
   </footer>
</body>


</html>
