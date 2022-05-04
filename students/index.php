<?php 
include"connection.php";
include"session.php";

$ID=$_SESSION['ID'];

$query="SELECT count(CourseID) from enrollments WHERE StudentID=$ID";
$result = mysqli_query($con,$query);
$arr=mysqli_fetch_assoc($result);
$CourseCount=$arr['count(CourseID)'];

$query="SELECT count(CourseID) from enrollments WHERE StudentID=$ID and Completed=0";
$result = mysqli_query($con,$query);
$arr=mysqli_fetch_assoc($result);
$CompletedCount=$arr['count(CourseID)'];

$query="SELECT count(CourseID) from certificates WHERE StudentID=$ID";
$result = mysqli_query($con,$query);
$arr=mysqli_fetch_assoc($result);
$CertCunt=$arr['count(CourseID)'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>STAR Laboratories</title>
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

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">STAR Labs</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <?php 
    include "nav.php";
    //include "modals.php";
    ?>

  </header><!-- End Header -->
  <?php 
  include "sidebar.php";
  include "modals.php";
  ?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Enrolled <span>| Courses </span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bx bxs-book-content"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?php echo $CourseCount; ?></h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card customers-card">

              <div class="card-body">
                <h5 class="card-title">Incomplete <span>| Courses</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bx bxs-book-content"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?php echo $CompletedCount; ?></h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-4">

            <div class="card info-card revenue-card">

              <div class="card-body">
                <h5 class="card-title">Completed <span>| Courses</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bx bxs-book-content"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?php echo $CertCunt; ?></h6>
                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

              <div class="card-body">
                <h5 class="card-title">Recent  <span>| Enrolled Courses</span></h5>

                <table class="table table-bordered border-primary table-hover datatable">
                  <thead>
                    <tr>
                      <th scope="col">Sr. No</th>
                      <th scope="col">Name</th>
                      <th scope="col">Enrollment Date</th>
                      <th scope="col">Price</th>
                      <th scope="col">Payment Status</th>
                      <th scope="col">Download Certificate</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $Sr=1;
                    $query="SELECT * FROM starlabs.enrollments
                    join courses on enrollments.CourseID=courses.CourseID WHERE StudentID=$ID";
                    $result = mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($result)){

                      if ($row['Completed']==1) {
                        $Completed='Yes';
                      }else{
                        $Completed='No';
                      }
                      if ($row['PaymentReceived']==1) {
                        $Payment='Yes';
                      }else{
                        $Payment='No';
                      }

                      ?>
                      <tr>
                        <th scope="row"><?php echo $Sr ?></th>
                        <td><?php echo $row['CourseName']; ?></td>
                        <td><?php echo $row['EnrollmentDate']; ?></td>
                        <td><?php echo $row['Price']; ?></td>
                        <td><?php echo $Payment ?></td>
                        <td>NA</td>
                      </tr>
                      <?php 
                      $Sr++;
                    }
                    ?>
                  </tbody>
                </table>

              </div>

            </div>
          </div><!-- End Recent Sales -->

        </div>
      </div><!-- End Left side columns -->
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright 2022 <strong><span>STAR Laboratories</span></strong>. All Rights Reserved
    </div>
  </footer>
  <!-- End Footer -->

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
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery-3.6.0.min.js"></script>

  <script type="text/javascript">

    $(document).on('click', '.SaveUser', function(){

      var username = document.getElementById("UserName").value;
      var useremail = document.getElementById("UserEmail").value;
      var usertype = document.getElementById("UserType").value;
      var userpassword = document.getElementById("UserPassword").value;

      if (username!='' && useremail!='' && usertype!='' && userpassword!='') {

        $.ajax({
         url:"SaveData.php",
         method:"POST",
         data:{'UserName':username, 'UserEmail':useremail, 'UserType':usertype, 'UserPassword':userpassword},
         success:function(data){
          $('#FNewUser').trigger("reset");
          $('#AddUser').modal('hide');
          swal("success","User created successfully","success");
        }
      });

      }else{
        swal("error","Please enter all fields","error");
      }
    });

    $(document).on('click', '.SaveState', function(){

      var StateName = document.getElementById("StateName").value;
      var StateCode = document.getElementById("NewStateCode").value;

      if (StateName!='' && StateCode!='') {

        $.ajax({
         url:"SaveData.php",
         method:"POST",
         data:{'StateName':StateName, 'NewStateCode':StateCode},
         success:function(data){
          $('#FNewState').trigger("reset");
          $('#AddState').modal('hide');
          swal("success","New State added successfully","success");
        }
      });

      }else{
        swal("error","Please enter all fields","error");
      }
    });


    $(document).on('click', '.SaveDistrict', function(){

      var StateCode = document.getElementById("State").value;
      var DistrictName = document.getElementById("DistrictName").value;
      var DistrictCode = document.getElementById("NewDistrictCode").value;

      if (DistrictName!='' && StateCode!='' && DistrictCode!='') {

        $.ajax({
         url:"SaveData.php",
         method:"POST",
         data:{'DistrictName':DistrictName, 'StateCode':StateCode, 'NewDistrictCode':DistrictCode},
         success:function(data){
          $('#FNewDistrict').trigger("reset");
          $('#AddDistrict').modal('hide');
          swal("success","New District added successfully","success");
        }
      });

      }else{
        swal("error","Please enter all fields","error");
      }
    });


    $(document).on('change','#StateCodeInstitute', function(){
      var StateCode = $(this).val();
      if(StateCode){
        $.ajax({
          type:'POST',
          url:'SelectData.php',
          data:{'StateCodeInstitute':StateCode},
          success:function(result){
            $('#DistrictCodeInstitute').html(result);

          }
        }); 
      }else{
        $('#DistrictCodeInstitute').html('<option value="">District</option>');
      }
    });


    $(document).on('click', '.SaveInstitute', function(){

      var  DistrictCode = document.getElementById("DistrictCodeInstitute").value;
      var  InstituteName = document.getElementById("InstituteName").value;
      var  InstituteCode = document.getElementById("InstituteCode").value;
      var  InstituteEmail = document.getElementById("InstituteEmail").value;
      var  InstituteMobile = document.getElementById("InstituteMobile").value;
      var  InstitutePhone = document.getElementById("InstitutePhone").value;

      if (InstituteName!='' && InstituteCode!='' && DistrictCode!='' && InstitutePhone!='' && InstituteMobile && InstituteEmail) {

        $.ajax({
         url:"SaveData.php",
         method:"POST",
         data:{'InstituteName':InstituteName, 'InstituteCode':InstituteCode, 'DistrictCode':DistrictCode, 'InstituteEmail':InstituteEmail, 'InstituteMobile':InstituteMobile, 'InstitutePhone':InstitutePhone},
         success:function(data){
          $('#FNewInstitute').trigger("reset");
          $('#AddInstitute').modal('hide');
          swal("success","New Institute added successfully","success");
        }
      });

      }else{
        swal("error","Please enter all fields","error");
      }
    });

    $(document).on('click', '.SaveStudent', function(){

      var  StudentName = document.getElementById("StudentName").value;
      var  InstituteCode = document.getElementById("InstituteCodeStudent").value;
      var  StudentEmail = document.getElementById("StudentEmail").value;
      var  StudentMobile = document.getElementById("StudentMobile").value;
      var  StudentPassword = document.getElementById("StudentPassword").value;

      if (StudentName!='' && InstituteCode!=''  && StudentMobile!='' && StudentEmail!='' && StudentPassword != '') {

        $.ajax({
         url:"SaveData.php",
         method:"POST",
         data:{'StudentName':StudentName, 'InstituteCode':InstituteCode,  'StudentEmail':StudentEmail, 'StudentMobile':StudentMobile, 'StudentPassword':StudentPassword},
         success:function(data){
          $('#FNewStudent').trigger("reset");
          $('#AddStudent').modal('hide');
          swal("success","New Student added successfully","success");
        }
      });

      }else{
        swal("error","Please enter all fields","error");
      }
    });


    $(document).on('click', '.SaveUserReminder', function(){

      var Reminder = document.getElementById("UserReminder").value;
      if (Reminder) {

        $.ajax({
         url:"SaveData.php",
         method:"POST",
         data:{'Reminder':Reminder},
         success:function(data){
          console.log((data));
          $('#FNewUserReminder').trigger("reset");
          $('#AddUserReminder').modal('hide');
          swal("success","Reminder created successfully","success");
        }
      });

      }else{
        swal("error","Please enter reminder","error");
      }
    });


    $(document).on('click', '.SaveCourse', function(){

      var Course = document.getElementById("CourseName").value;
      var Price = document.getElementById("CoursePrice").value;
      if (Course!='' && Price!='') {

        $.ajax({
         url:"SaveData.php",
         method:"POST",
         data:{'Course':Course, 'Price':Price},
         success:function(data){
          console.log((data));
          $('#FNewCourse').trigger("reset");
          $('#AddCourse').modal('hide');
          swal("success","Course added successfully","success");
        }
      });

      }else{
        swal("error","Please enter all fields","error");
      }
    });
  </script>
</body>

</html>