<?php 
// options.php  page 3
  session_start();
  require 'rateCalc.php';
  require 'functions.php';
  require_once 'objects.php';

?>
<?php 

?>
<html>
<head>
  <meta charset = "utf-8">
  <meta name    = "viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel     = "stylesheet" href="CSS/style.css" type="text/CSS"> -->
  <link rel     = "stylesheet" href="CSS/optionsstyle.css" type="text/css">
    <title>HoliDaze</title>
</head>
<body>

</script>
  <div class    = "Grid-Container">
  <div class    = "Item1">
        <?php          
          echo "<h2>You are now looking at avaliable hotels on ".$_SESSION['islandList']."</h2>";      
        ?>
      </div>
  <div class    = "Item2">
            <h3><?php echo $HotelA;?></h3>
      </div>
  <div class    = "Item3"><img id="hotelAPic" src="image/HotelA.jpg"></div>
  <div class    = "Item4">
  <p id         = "line1"> <?php echo "Booking overview for ".$dateDiff." days at ".$HotelA;?></p>
  <p id         = "line2"> <?php  echo "Arrival: ".$_POST['checkIn'];?></p>
  <p id         = "line3"> <?php  echo "Departure: ".$_POST['checkOut'];?></p>
  <p id         = "line4"> <?php  echo "Cost per night R".$rateA;?></p>
  <p id         = "line5"> <?php  echo "Cost of stay for these Dates R ".$durationA;?></p>
  <br>
  <p>
        <strong>Facilities and activities</strong>
        <br>
         <ul>
         <li>WIFI</li>  
         
                <?php 
                  $a  = new Activities();
                  for ($i       = 0; $i < 7; $i++) {
                      ?><li><?php $a->randomActivity();?></li><?php
                      echo '<br />';
                      } 
                    // for($index=0;$index<=5;$index++){
                    //   echo ($activity[$index]);
                    //   echo '<br />';
                    //   }
                ?>
           </ul>
           </p>
      </div>
  <div class    = "Item5"></div>         
  <div class    = "Item6">
    <form method="get" action='end.html'>
  <button id    = "bookButton" type='submit'>Proceed to Booking</button></form>
      </div>
  <div class    = "Item7">
            <h3><?php echo $HotelB;?></h3>
      </div>
  <div class    = "Item8"><img id="hotelAPic" src="image/HotelB.jpg"></div>
  <div class    = "Item9">
  <p id         = "line1"> <?php echo "Booking overview for ".$dateDiff." days at ".$HotelB;?></p>
  <p id         = "line2"> <?php  echo "Arrival: ".$_POST['checkIn'];?></p>
  <p id         = "line3"> <?php  echo "Departure: ".$_POST['checkOut'];?></p>
  <p id         = "line4"> <?php  echo "Cost per night R".$rateB;?></p>
  <p id         = "line5"> <?php  echo "Cost of stay for these Dates R ".$durationB;?></p>
  <br>
        <p>
        <strong>Facilities and activities</strong>
        <ul>
        <?php 
                  $a  = new Activities();
                  for ($i       = 0; $i < 8; $i++) {
                      ?><li><?php $a->randomActivity();?></li><?php
                      echo '<br />';
                      } 
                    // for($index=0;$index<=5;$index++){
                    //   echo ($activity[$index]);
                    //   echo '<br />';
                    //   }
                ?>
          </ul>
        </p>
      </div>
  <div class    = "Item10"></div>         
  <div class    = "Item11">
  <form method="get" action='end.html'>
  <button id    = "bookButton" type='submit'>Proceed to Booking</button></form>
      </div>
  <div class    = "Item12">
            <h3><?php echo $HotelC;?></h3>
      </div>
  <div class    = "Item13"><img id="hotelAPic" src="image/HotelC.jpg"></div>
  <div class    = "Item14">
    
  <p id         = "line1"> <?php echo "Booking overview for ".$dateDiff." days at ".$HotelC;?></p>
  <p id         = "line2"> <?php  echo "Arrival: ".$_POST['checkIn'];?></p>
  <p id         = "line3"> <?php  echo "Departure: ".$_POST['checkOut'];?></p>
  <p id         = "line4"> <?php  echo "Cost per night R".$rateC;?></p>
  <p id         = "line5"> <?php  echo "Cost of stay for these Dates R ".$durationC;?></p>
          
        <p>
        <strong>Facilities and activities</strong>
        <ul>
        <?php 
                  $a  = new Activities();
                  for ($i       = 0; $i < 6; $i++) {
                      ?><li><?php $a->randomActivity();?></li><?php
                      echo '<br />';
                      } 
                    // for($index=0;$index<=5;$index++){
                    //   echo ($activity[$index]);
                    //   echo '<br />';
                    //   }
                ?>
          </ul>
        </p>
      </div>
  <div class    = "Item15"></div>         
  <div class    = "Item16">
  <form method="get" action='end.html'>
  <button id    = "bookButton" type='submit'>Proceed to Booking</button></form>
      </div>
  <div class    = "Item17">
            <h3><?php echo $HotelD;?></h3>
      </div>
  <div class    = "Item18"><img id="hotelAPic" src="image/HotelD.jpg"></div>
  <div class    = "Item19">
    
  <p id         = "line1"> <?php echo "Booking overview for ".$dateDiff." days at ".$HotelD;?></p>
  <p id         = "line2"> <?php  echo "Arrival: ".$_POST['checkIn'];?></p>
  <p id         = "line3"> <?php  echo "Departure: ".$_POST['checkOut'];?></p>
  <p id         = "line4"> <?php  echo "Cost per night R".$rateD;?></p>
  <p id         = "line5"> <?php  echo "Cost of stay for these Dates R ".$durationD;?></p>
          
        <p>
        <strong>Facilities and activities</strong>
        <ul>
        <?php 
                  $a  = new Activities();
                  for ($i       = 0; $i < 5; $i++) {
                      ?><li><?php $a->randomActivity();?></li><?php
                      echo '<br />';
                      } 
                    // for($index=0;$index<=5;$index++){
                    //   echo ($activity[$index]);
                    //   echo '<br />';
                    //   }
                ?>
          </ul>
        </p>
      </div>
  <div class    = "Item20"></div>         
  <div class    = "Item21">
  <form method="get" action='end.html'>
  <button id    = "bookButton" type='submit'>Proceed to Booking</button></form>
      </div>
  <div class    = "Item22"><form method="get" action='index.php'>
  <button id    = "bookButton" type='submit'>Log Out</button></form>
  
      </div>
  <div class    = "Item23"><form method="get" action='select.php'>
  <button id    = "bookButton" type='submit'>View a Different Island</button></form>
  
      </div>
    </div> 
    </body>
</html>
<?php ?>
