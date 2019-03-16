<html>
 <head>
   <title>Reverse String</title>
 </head>
 <body>
   <form>
    Enter the string:<br>
    <input type = "text" name ="sometext"><br>
   </form>
   <?php
    $text = $_GET["sometext"];
     echo strrev($text);
   ?>
 </body>
</html>
