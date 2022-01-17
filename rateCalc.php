<?php 
session_start();
require_once 'functions.php';
function dateDifference($start_date, $end_date)
{
      $diff = strtotime($start_date) - strtotime($end_date);
      return ceil(abs($diff / 86400));
}
                       $start_date = $_POST['checkIn'];
                         $end_date = $_POST['checkOut'];
                         $dateDiff = dateDifference($start_date, $end_date);


      if($_SESSION['islandList'] == 'North Island') {
                            $rateA = 1200;
                            $rateB = 1600;
                            $rateC = 1300;
                            $rateD = 1700;
    
     }else if($_SESSION['islandList'] == 'South Island') {
                            $rateA = 1450;
                            $rateB = 1670;
                            $rateC = 2000;
                            $rateD = 1780;
    
     }else if($_SESSION['islandList'] == 'East Island') {
                            $rateA = 900;
                            $rateB = 3000;
                            $rateC = 2100;
                            $rateD = 1765;
    
     }else if($_SESSION['islandList'] == 'West Island') {
                            $rateA = 1985;
                            $rateB = 1478;
                            $rateC = 1478;
                            $rateD = 2150;
 }
 
                        $durationA = $rateA * $dateDiff;
                        $durationB = $rateB * $dateDiff;
                        $durationC = $rateC * $dateDiff;
                        $durationD = $rateD * $dateDiff;
?>
<?php 

      if($_SESSION["islandList"] == "North Island") {
                           $HotelA = "Sunny Hotel";
                           $HotelB = "Sandy Villas";
                           $HotelC = "Pearl Harbour";
                           $HotelD = "Coral Grove";
      
      }else if($_SESSION["islandList"] == "South Island") {
                           $HotelA = "Pirate Bungalows";
                           $HotelB = "Kelp-vin Grove";
                           $HotelC = "Treasure Lagoon";
                           $HotelD = "Cloudy hammock";
      }
      else if($_SESSION["islandList"] == "East Island") {
                           $HotelA = "Dolphins Pass";
                           $HotelB = "Black Beards Cabin";
                           $HotelC = "Neptunes Isle";
                           $HotelD = "Sea Scape Villas";
      }
      else if($_SESSION["islandList"] == "West Island") {

                           $HotelA = "The wild West";
                           $HotelB = "Lonely Island";
                           $HotelC = "Atlantis on Water";
                           $HotelD = "The Beach Casino";
      };

?>

<?php
?>