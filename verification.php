<?php 
include 'connection.php';
//include 'session.php';
$Type=!empty($_POST['Type'])?$_POST['Type']:'';
if (!empty($Type))
{ 
  $UserName=!empty($_POST['UserName'])?$_POST['UserName']:'';
  $Password=!empty($_POST['Password'])?$_POST['Password']:'';

  if ($Type=='Student') {

    $query="SELECT * from students WHERE BINARY Email='$UserName' and BINARY Password='$Password'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0)
    {
      session_start();

      $arr=mysqli_fetch_assoc($result);
      $_SESSION['UserName']=$arr['StudentName'];
      $_SESSION['ID']=$arr['StudentID'];

    }else{
      echo 1;
    }

  }elseif ($Type=='Admin') {
    $query="SELECT * from users WHERE BINARY Email='$UserName' and BINARY Password='$Password'";
   $result = mysqli_query($con,$query);
   if(mysqli_num_rows($result)>0)
   {
    session_start();

    $arr=mysqli_fetch_assoc($result);
    $_SESSION['UserName']=$arr['StudentName'];
    $_SESSION['UserID']=$arr['ID'];
    $_SESSION['UserType']=$arr['Type'];

  }else{
    echo 1;
  }
}
}

?>