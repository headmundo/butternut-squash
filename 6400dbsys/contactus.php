<!DOCTYPE html>
<html>
    <head><title>Contact Us</title>
        <link rel="stylesheet" href="css/site.css"/>

    </head>
    <!--This is a place for nice comments - I did this class July 21, 2018 -->
    <body>
      <?php
      $customeremail = $_POST["customeremail"];
      $message = $_POST["message"];
      $replywanted = false;

      if(isset($_post["replywanted"])) $replywanted = true;

      $t = "You have received a message from " . $customeremail . " :\n";
      $t = $t . $message . "\n";
      if ($replywanted)
        $t = $t . "A reply was requested";
      else
        $t = $t . "No reply was requested";

      mail("hernanmujica@gmail.com", "customer message", $t);

      echo "thank you your message has been sent";

      ?>

    </body>
</html>
