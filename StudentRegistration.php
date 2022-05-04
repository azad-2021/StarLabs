<?php 

include"connection.php";

date_default_timezone_set('Asia/Kolkata');
$timestamp =date('y-m-d H:i:s');
$Date = date('Y-m-d',strtotime($timestamp));

$query="SELECT * FROM courses order by CourseName";
$result=mysqli_query($con,$query);

$query2="SELECT * FROM institutes order by InstituteName";
$result2=mysqli_query($con,$query2);


if (isset($_POST['submit'])) {

  $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $InstituteCode=$_POST['InstituteCode'];
  $CourseID=$_POST['CourseID'];
  $MobileNo=$_POST['MobileNo'];
  $Password=$_POST['Password'];

  $Query3="SELECT Email FROM students WHERE Email='$Email'";
  $result3 = mysqli_query($con,$Query3);

  $Query4="SELECT MobileNo FROM students WHERE MobileNo=$MobileNo";
  $result4 = mysqli_query($con,$Query4);

  if(mysqli_num_rows($result3)>0){ 
    echo '<script>alert("Email already exist")</script>';
  }elseif(mysqli_num_rows($result4)>0){
    echo '<script>alert("Mobile number already exist")</script>';
  }elseif((strlen($MobileNo) > 10) or (strlen($MobileNo) < 10)){
    echo '<script>alert("Mobile number must be 10 digits long")</script>';
  }else{


    $sql = "INSERT INTO students (StudentName, InstituteCode, Email, MobileNo, Password)
    VALUES ('$Name', $InstituteCode, '$Email', $MobileNo, '$Password')";

    if ($con->query($sql) === TRUE) {

      $StudentID=$con->insert_id;

      $sql = "INSERT INTO enrollments (StudentID, CourseID)
      VALUES ($StudentID, $CourseID)";

      if ($con->query($sql) === TRUE) {

        $con->close();
        header("Location:students/index.php");
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
      }

    }else{
      echo "Error: " . $sql . "<br>" . $con->error;
    }

  }

}



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Student Registration</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="assets/js/sweetalert.min.js"></script>
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-6 d-flex flex-column align-items-center justify-content-center ">

              <div class="d-flex justify-content-center py-4">
                <a href="" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-lg-block">Welcome to STAR Labs</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3 rounded-corner">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter Details</p>
                  </div>

                  <form method="POST" action="">
                    <div class="row">
                      <div class="col-lg-6">
                        <label for="yourName" class="form-label">Your Name</label>
                        <input type="text" name="Name" class="form-control rounded-corner" id="Name" required>
                      </div>

                      <div class="col-lg-6">
                        <label for="yourUsername" class="form-label">Email</label>
                        <div class="input-group has-validation">
                          <input type="email" name="Email" class="form-control rounded-corner" id="Email" required>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <label for="yourPassword" class="form-label">Mobile Number</label>
                        <input type="number" name="MobileNo" class="form-control rounded-corner" maxlength="10" required>
                      </div>

                      <div class="col-lg-6">
                        <label for="yourPassword" class="form-label">Select Institute</label>
                        <select class="form-select form-control rounded-corner" id="InstituteCode" name="InstituteCode" required>
                          <option value="">Select</option>
                          <?php 
                          while($row = mysqli_fetch_array($result2)){
                            echo '<option value="'.$row["InstituteCode"].'">'.$row['InstituteName'].'</option>';
                          }
                          ?>
                        </select>

                      </div>

                      <div class="col-lg-6">
                        <label for="yourPassword" class="form-label">Select Course</label>
                        <select class="form-select form-control rounded-corner" name="CourseID" required>
                          <option value="">Select</option>
                          <?php 
                          while($row = mysqli_fetch_array($result)){
                            echo '<option value="'.$row["CourseID"].'">'.$row["CourseName"].'</option>';
                          }
                          ?>
                        </select>

                      </div>

                      <div class="col-lg-6">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="Password" class="form-control rounded-corner" id="Password" required>
                      </div>

                      <center>
                        <div class="col-lg-6">
                          <button type="submit" name="submit" class="btn btn-primary w-100 rounded-corner Register" style="margin-top: 10px;">Create Account</button>
                        </div>
                      </center>
                    </form>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="StudentLogin.php">Log in</a></p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <center>
              <div class="credits">
                &copy; Copyright 2022 <strong><span>STAR Laboratories</span>. All Rights Reserved
                </div>
              </center>
            </div>
          </div>

        </section>

      </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.min.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>

  </html>