<?php 
include 'connection.php';
include 'session.php';

//$userID=$_SESSION['userid'];

date_default_timezone_set('Asia/Kolkata');
$timestamp =date('y-m-d H:i:s');
$Date =date('Y-m-d',strtotime($timestamp));


$UserName=!empty($_POST['UserName'])?$_POST['UserName']:'';

if (!empty($UserName)) {

  $UserEmail=!empty($_POST['UserEmail'])?$_POST['UserEmail']:'';
  $UserType=!empty($_POST['UserType'])?$_POST['UserType']:'';
  $UserPassword=!empty($_POST['UserPassword'])?$_POST['UserPassword']:'';  

  $sql = "INSERT INTO users (Name, Email, Password, Type)
  VALUES ('$UserName', '$UserEmail', '$UserPassword', '$UserType')";
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


$NewInstituteName=!empty($_POST['InstituteName'])?$_POST['InstituteName']:'';

if (!empty($NewInstituteName)) {

  $DistrictCode=!empty($_POST['DistrictCode'])?$_POST['DistrictCode']:'';
  $InstituteCode=!empty($_POST['InstituteCode'])?$_POST['InstituteCode']:'';
  $InstitutePhone=!empty($_POST['InstitutePhone'])?$_POST['InstitutePhone']:'';
  $InstituteEmail=!empty($_POST['InstituteEmail'])?$_POST['InstituteEmail']:'';
  $InstituteMobile=!empty($_POST['InstituteMobile'])?$_POST['InstituteMobile']:'';

  $sql = "INSERT INTO institutes (InstituteName, OfficialCode, DistrictCode, Email, MobileNo, PhoneNo)
  VALUES ('$NewInstituteName', $InstituteCode, $DistrictCode, '$InstituteEmail', '$InstituteMobile', '$InstitutePhone')";
  if ($con->query($sql) === TRUE) {

  }else {
    echo "Error: " . $sql . "<br>" . $con->error;
    $myfile = fopen("error.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $con->error);
    fclose($myfile);
  }
}

$NewStudentName=!empty($_POST['StudentName'])?$_POST['StudentName']:'';

if (!empty($NewStudentName)) {


  $InstituteCode=!empty($_POST['InstituteCode'])?$_POST['InstituteCode']:'';
  $StudentPassword=!empty($_POST['StudentPassword'])?$_POST['StudentPassword']:'';
  $StudentEmail=!empty($_POST['StudentEmail'])?$_POST['StudentEmail']:'';
  $StudentMobile=!empty($_POST['StudentMobile'])?$_POST['StudentMobile']:'';

  $sql = "INSERT INTO students (StudentName, InstituteCode, Email, MobileNo, Password)
  VALUES ('$NewStudentName', $InstituteCode, '$StudentEmail', '$StudentMobile', '$StudentPassword')";
  if ($con->query($sql) === TRUE) {

  }else {
    echo "Error: " . $sql . "<br>" . $con->error;
    $myfile = fopen("error.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $con->error);
    fclose($myfile);
  }
}


$UserReminder=!empty($_POST['Reminder'])?$_POST['Reminder']:'';

if (!empty($UserReminder)) {
  $UserID=$_SESSION['UserID'];
  $sql = "INSERT INTO `user reminders` (UserID, Reminder)
  VALUES ($UserID, '$UserReminder')";
  if ($con->query($sql) === TRUE) {

  }else {
    echo "Error: " . $sql . "<br>" . $con->error;
    $myfile = fopen("error.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $con->error);
    fclose($myfile);
  }
}


$NewCourse=!empty($_POST['Course'])?$_POST['Course']:'';

if (!empty($NewCourse)) {
  $Price=!empty($_POST['Price'])?$_POST['Price']:'';
  $sql = "INSERT INTO `courses` (CourseName, Price, UpdatedOn)
  VALUES ('$NewCourse', $Price, '$Date')";
  if ($con->query($sql) === TRUE) {

  }else {
    echo "Error: " . $sql . "<br>" . $con->error;
    $myfile = fopen("error.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $con->error);
    fclose($myfile);
  }
}
?>