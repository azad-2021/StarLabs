<?php 
include 'connection.php';
//include 'session.php';

//$userID=$_SESSION['userid'];

$UserName=!empty($_POST['UserName'])?$_POST['UserName']:'';

if (!empty($UserName)) {

  $UserEmail=!empty($_POST['UserEmail'])?$_POST['UserEmail']:'';
  $UserType=!empty($_POST['UserType'])?$_POST['UserType']:'';
  $UserPassword=!empty($_POST['UserPassword'])?$_POST['UserPassword']:'';  

  $sql = "INSERT INTO users (Name, Email, Password, Type)
  VALUES ('$UserName', '$UserEmail', '$UserType', '$UserPassword')";
  if ($con->query($sql) === TRUE) {

  }else {
    echo "Error: " . $sql . "<br>" . $con->error;
    $myfile = fopen("error.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $con->error);
    fclose($myfile);
  }
}

$NewStateName=!empty($_POST['StateName'])?$_POST['StateName']:'';

if (!empty($NewStateName)) {

  $NewStateCode=!empty($_POST['NewStateCode'])?$_POST['NewStateCode']:'';

  $sql = "INSERT INTO states (StateName, StateCode)
  VALUES ('$NewStateName', $NewStateCode)";
  if ($con->query($sql) === TRUE) {

  }else {
    echo "Error: " . $sql . "<br>" . $con->error;
    $myfile = fopen("error.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $con->error);
    fclose($myfile);
  }
}

$NewDistrictName=!empty($_POST['DistrictName'])?$_POST['DistrictName']:'';

if (!empty($NewDistrictName)) {

  $StateCode=!empty($_POST['StateCode'])?$_POST['StateCode']:'';
  $NewDistrictCode=!empty($_POST['NewDistrictCode'])?$_POST['NewDistrictCode']:'';

  $sql = "INSERT INTO district (District, StateCode, DistrictCode)
  VALUES ('$NewDistrictName', $StateCode, $NewDistrictCode)";
  if ($con->query($sql) === TRUE) {

  }else {
    echo "Error: " . $sql . "<br>" . $con->error;
    $myfile = fopen("error.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $con->error);
    fclose($myfile);
  }
}

?>