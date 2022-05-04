<?php 
include"connection.php";
include"session.php";
$query="SELECT count(StudentID) from students";
$result = mysqli_query($con,$query);
$arr=mysqli_fetch_assoc($result);
$StudentCount=$arr['count(StudentID)'];
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

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="assets/js/sweetalert.min.js"></script>
<style type="text/css">

</style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">STAR Labs</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->
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
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card sales-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Total <span>| Students </span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-person-badge"></i>
                </div>
                <div class="ps-3">
                  <h6><?php echo $StudentCount; ?></h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card revenue-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Total <span>| Received Amount</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bx bx-rupee"></i>
                </div>
                <div class="ps-3">
                  <h6>0</h6>
                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-4">

          <div class="card info-card customers-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Total <span>| Expence</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>0</h6>
                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->

            <!-- Reports 
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>
                -->

                <!-- Line Chart -->

                  <!--<div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
  

                </div>

              </div>
            </div>
          -->
          <!-- End Reports -->

          <!-- Recent Sales -->
          <div class="col-12">
            <div class="card recent-sales overflow-auto">

              <div class="card-body">
                <h5 class="card-title">Recent  <span>| Students</span></h5>

                <table class="table table-bordered border-primary" id="example">
                  <thead>
                    <tr>
                      <th scope="col" style="min-width: 200px;">Student Name</th>
                      <th scope="col">Mobile</th>
                      <th scope="col">Email</th>
                      <th scope="col"style="min-width: 120px;">Registration Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $query="SELECT * FROM b4_31490889_starlabs.students WHERE StudentID not in (3,4,5) order by StudentName";
                    $result = mysqli_query($con,$query);
                    $Sr=1;
                    while($arr=mysqli_fetch_assoc($result)){
                      ?>
                      <tr>
                        <td><?php echo $arr['StudentName']; ?></td>
                        <td><?php echo $arr['MobileNo']; ?></td>
                        <td><?php echo $arr['Email']; ?></td>
                        <td><?php echo $arr['RegistrationDate']; ?></td>
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

          <!-- Top Selling 
          <div class="col-12">
            <div class="card top-selling overflow-auto">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body pb-0">
                <h5 class="card-title">Recent <span>| Received Payment</span></h5>

                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">Preview</th>
                      <th scope="col">Product</th>
                      <th scope="col">Price</th>
                      <th scope="col">Sold</th>
                      <th scope="col">Revenue</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                      <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                      <td>$64</td>
                      <td class="fw-bold">124</td>
                      <td>$5,828</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                      <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                      <td>$46</td>
                      <td class="fw-bold">98</td>
                      <td>$4,508</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                      <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                      <td>$59</td>
                      <td class="fw-bold">74</td>
                      <td>$4,366</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                      <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                      <td>$32</td>
                      <td class="fw-bold">63</td>
                      <td>$2,016</td>
                    </tr>
                    <tr>
                      <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                      <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                      <td>$79</td>
                      <td class="fw-bold">41</td>
                      <td>$3,239</td>
                    </tr>
                  </tbody>
                </table>

              </div>

            </div>
          </div> End Top Selling -->

      </div>


      <!-- Right side columns
      <div class="col-lg-4">

        <div class="card">
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Reminders <span>| Today</span> 
              <button data-bs-toggle="modal" data-bs-target="#AddUserReminder" class="btn btn-sm btn-primary" style="float:right; margin-right: 25px;">
                Add
              </button>
            </h5>

            <div class="activity">
  
              <div class="activity-item d-flex">
                <div class="activite-label">32 min</div>
                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                <div class="activity-content">
                  Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                </div>
              </div>

              <div class="activity-item d-flex">
                <div class="activite-label">56 min</div>
                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                <div class="activity-content">
                  Voluptatem blanditiis blanditiis eveniet
                </div>
              </div>

              <div class="activity-item d-flex">
                <div class="activite-label">2 hrs</div>
                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                <div class="activity-content">
                  Voluptates corrupti molestias voluptatem
                </div>
              </div>

              <div class="activity-item d-flex">
                <div class="activite-label">1 day</div>
                <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                <div class="activity-content">
                  Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                </div>
              </div>

              <div class="activity-item d-flex">
                <div class="activite-label">2 days</div>
                <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                <div class="activity-content">
                  Est sit eum reiciendis exercitationem
                </div>
              </div>

              <div class="activity-item d-flex">
                <div class="activite-label">4 weeks</div>
                <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                <div class="activity-content">
                  Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                </div>
              </div>
              End activity item-->

            </div>

          </div>
        </div><!-- End Recent Activity -->

      </div><!-- End Right side columns -->

    </div>
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

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script type="text/javascript">

  $(document).ready(function() {
    $('#example').DataTable( {
      dom: 'Bfrtip',
      buttons: [
      'copyHtml5',
      'excelHtml5',
      'csvHtml5',
      'pdfHtml5'
      ]
    } );
  } );


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