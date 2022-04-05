<?php 
include 'connection.php';
//include 'session.php';
$StateCodeInstitute=!empty($_POST['StateCodeInstitute'])?$_POST['StateCodeInstitute']:'';
if (!empty($StateCodeInstitute))
{
  $query="SELECT * from district WHERE StateCode=$StateCodeInstitute order by District";
  $result = mysqli_query($con,$query);
  if(mysqli_num_rows($result)>0)
  {
    echo "<option value=''>Select District</option>";
    while ($arr=mysqli_fetch_assoc($result))
    {
      echo "<option value='".$arr['DistrictCode']."'>".$arr['District']."</option><br>";
    }
  }

}

?>