<?php
//select.php    page 2
session_start();
require_once 'functions.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/style.css" type="text/CSS">
    <title>HoliDaze</title>
  </head>
<body>
    <h1><?php echo "HI ".$_SESSION['name'].". 
    \n\nPlease Select an Island and date and we will send an email to:" .$_SESSION['email'];?></h1>
        <table id="info">
                <thead>
                <form action="options.php" method="POST">
                <tr>
                    <td>
                        <label class="labelID" for="islandList">Which Island Do You Want To Visit?</label>
                    </td>
                    <td>
                    <select id="islandList" name="islandList" class="isleDrop" required>
                        <option id="northIsland" value="">Please select one</option>  
                        <option id="northIsland" value="North Island">North Island</option>  
                        <option id="southIsland" value="South Island">South Island</option>  
                        <option id="eastIsland" value="East Island">East Island</option>  
                        <option id="westIsland" value="West Island">West Island</option>                                    
                    </select>                    
                    </td>
                </tr>
                    <td>
                        <label class="labelID" for="checkIn">Check-In Date:</label>
                    </td>
                    <td>
                        <input class="calander" type="date" id="checkIn" name="checkIn" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="labelID" for="checkOut">Check-Out Date:</label>
                    </td>
      
                    <td>
                        <input class="calander" type="date" id="checkOut" name="checkOut" required>
                    </td>
                </tr>          
                    <tr>
                        <td>
                            <input type="submit" id="submit" name="submit" value="View Available Options">
                            <br>
                            <br>
                            <br>
                            <a href="index.php" class="blank" for="logout">
                            <button type="button" id="logout">LOG OUT</button>                
                        </td>
                    </tr>
                </form>
                </thead>
            </table>
        </body>
    </html>

    
