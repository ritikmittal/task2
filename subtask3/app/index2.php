<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $host = "db";
    $dbuser = "root";
    $dbpass = "ChiefCommander";
    $dbdata = "COMPLAINTS";
    $tim = date("Y-m-d h:i:s");
    $data =new mysqli($host,$dbuser,$dbpass,$dbdata);
    if($data->connect_errno){
            echo "Connection failed";
            exit;
    }
    $user = mysqli_real_escape_string($data, $_REQUEST['user']);
    $complaint = mysqli_real_escape_string($data, $_REQUEST['complaint']);
    $query ="INSERT INTO COMPLAINTS (username, complaint, time) VALUES ('$user', '$complaint','$tim')";
    if ($data->query($query) === TRUE) {
       echo "New record created successfully";
    } else {
       echo "Error: " . $query . "<br>" . $dat->error;
    }
    $data->close();
    ?>
	<h2>this is php</h2>
  </body>
</html>
