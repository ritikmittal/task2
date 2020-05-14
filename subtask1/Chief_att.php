<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
    echo "<h1> Attendance Report </h1><br><hr><hr>";
    if ($fh = fopen('attendance_report.txt', 'r')) {
      while (!feof($fh)) {
          $line = fgets($fh);
          echo $line . "<br>";
      }
      fclose($fh);
    }
	  else echo "ist error"
    ?>
  </body>
</html>

