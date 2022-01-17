<?php 
    session_start();
    require_once 'functions.php';
?>
 <?php 
    if(!isset($_POST['name'], $_POST['surname'], $_POST['email'])){?>
    <html lang    = "en">
  <head>
    <meta charset = "utf-8">
    <meta name    = "viewport" content="width=device-width, initial-scale=1">
    <title>HoliDaze</title> 
    <link rel     = "stylesheet" href="CSS/style.css" type="text/CSS">
  </head>
  <h1>Welcome to Holidaze</h1>
    <body>
    <table id     = "info">
          <thead>
    <form action  = "select.php" method="POST">
                  <tr>
                      <td>
    <label class  = "labelID" for="name">Name:</label>
                      </td>
                      <td>                            
    <input class  = "inputID" type="text" id="name" name="name" required>
                      </td>
                  </tr>
                  <tr>
                      <td> 
    <label class  = "labelID" for="surname">Surname:</label>
                      </td>
                      <td>
    <input class  = "inputID" type="text" id="surname" name="surname" required>
                      </td>
                  </tr>
                  <tr>
                      <td>
    <label class  = "labelID" for="email">Your Email:</label>
                      </td>
                      <td>
    <input class  = "inputID" type="email" id="email" name="email" required>
                      </td>
                  </tr> 
                  <tr>
                      <td>
    <input type   = "submit" id="login" value="login" name="login">
                      </td>
                  </tr>             
              </form>
          </thead>
      </table>      
    </body>
</html>
<?php } ?>