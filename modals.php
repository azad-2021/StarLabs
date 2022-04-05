<?php 

function States(){


  $host = "localhost";  
  $user = "root";  
  $password = '';  
  $db_1 = "starlabs";

  $con = mysqli_connect($host, $user, $password, $db_1);  
  if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
  }

  $query="SELECT * FROM states order by StateName";
  $result=mysqli_query($con,$query);
  return $result;
}


?>


<div class="modal fade" id="AddUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-corner">
      <div class="modal-header">
        <h5 class="modal-title">Add New User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="FNewUser">
          <div class="row">
            <div class="col-lg-6">
              <label for="User-Name" class="col-form-label">Name</label>
              <input type="text" class="form-control rounded-corner" id="UserName">
            </div>
            <div class="col-lg-6">
              <label for="User-Email" class="col-form-label">Email</label>
              <input type="email" class="form-control rounded-corner" id="UserEmail">
            </div>
            <div class="col-lg-6">
              <label for="User-Type" class="col-form-label">User Type</label>
              <select class="form-control rounded-corner" id="UserType">
                <option value="">select</option>
                <option value="SuperUser">Super User</option>
              </select>
            </div>
            <div class="col-lg-6">
              <label for="User-Password" class="col-form-label">User Password</label>
              <input type="password" class="form-control rounded-corner" id="UserPassword">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary SaveUser">Save</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="AddState" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-corner">
      <div class="modal-header">
        <h5 class="modal-title">Add New State</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="FNewState">
          <div class="mb-3">
            <label for="State-Name" class="col-form-label">Enter State Name</label>
            <input type="text" class="form-control rounded-corner" id="StateName">
          </div>
          <div class="mb-3">
            <label for="State-Code" class="col-form-label">Enter State Code</label>
            <input type="number" class="form-control rounded-corner" id="NewStateCode">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary SaveState">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="AddDistrict" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-corner">
      <div class="modal-header">
        <h5 class="modal-title">Add New District</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="FNewDistrict">
          <div class="row">
            <div class="col-lg-4">
              <label for="Select-State" class="col-form-label">Select State</label>
              <select class="form-control rounded-corner" id="State">
                <option value="">select</option>
                <?php 
                $result=States();
                while($row = mysqli_fetch_array($result)){
                  echo '<option value="'.$row["StateCode"].'">'.$row["StateName"].'</option>';
                }
                ?>

              </select>
            </div>
            <div class="col-lg-4">
              <label for="District-Name" class="col-form-label">Enter District Name</label>
              <input type="text" class="form-control rounded-corner" id="DistrictName">
            </div>
            <div class="col-lg-4">
              <label for="District-Code" class="col-form-label">Enter District Code</label>
              <input type="number" class="form-control rounded-corner" id="NewDistrictCode">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary SaveDistrict">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="AddInstitute" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-corner">
      <div class="modal-header">
        <h5 class="modal-title">Add New Institude</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="FNewInstitute">
          <div class="row">
            <div class="col-lg-3">
              <label for="State-Name" class="col-form-label">Select State</label>
              <select class="form-control rounded-corner" id="StateCodeInstitute">
                <option value="">Select</option>
                <?php 
                $result=States();
                while($row = mysqli_fetch_array($result)){
                  echo '<option value="'.$row["StateCode"].'">'.$row["StateName"].'</option>';
                }
                ?>
              </select>
            </div>
            <div class="col-lg-3">
              <label for="District-Name" class="col-form-label">Select District</label>
              <select class="form-control rounded-corner" id="DistrictCodeInstitute">
                <option value="">Select</option>
              </select>
            </div>
            <div class="col-lg-6">
              <label for="Institute-Name" class="col-form-label">Institute Name</label>
              <input type="text" class="form-control rounded-corner" id="InstituteName">
            </div>
            <div class="col-lg-4">
              <label for="Institute-Code" class="col-form-label">Institute Code</label>
              <input type="text" class="form-control rounded-corner" id="InstituteCode">
            </div>
            <div class="col-lg-4">
              <label for="Institute-Email" class="col-form-label">Email</label>
              <input type="text" class="form-control rounded-corner" id="InstituteEmail">
            </div>
            <div class="col-lg-4">
              <label for="Institute-Mobile" class="col-form-label">Mobile No.</label>
              <input type="text" class="form-control rounded-corner" id="InstituteMobile">
            </div>
            <center>
              <div class="col-lg-4">
                <label for="Institute-Phone" class="col-form-label">Phone No.</label>
                <input type="text" class="form-control rounded-corner" id="InstitutePhone">
              </div>
            </center>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary SaveInstitute">Save</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="AddStudent" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-corner">
      <div class="modal-header">
        <h5 class="modal-title">Add New Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="FNewStudent">
          <div class="row">
            <div class="col-lg-4">
              <label for="Institute-Name" class="col-form-label">Select Institute</label>
              <select class="form-control rounded-corner" id="InstituteCodeStudent">
                <option value="">Select</option>
                <?php 
                $query="SELECT * FROM institutes order by InstituteName";
                $result=mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)){
                  echo '<option value="'.$row["InstituteCode"].'">'.$row["InstituteName"].'</option>';
                }
                ?>
              </select>
            </div>
            <div class="col-lg-4">
              <label for="Student-Name" class="col-form-label">Student Name</label>
              <input type="text" class="form-control rounded-corner" id="StudentName">
            </div>
            <div class="col-lg-4">
              <label for="Student-Email" class="col-form-label">Email</label>
              <input type="email" class="form-control rounded-corner" id="StudentEmail">
            </div>

            <div class="col-lg-6">
              <label for="Student-Mobile" class="col-form-label">Mobile No.</label>
              <input type="number" class="form-control rounded-corner" id="StudentMobile">
            </div>
            <div class="col-lg-6">
              <label for="Student-Password" class="col-form-label">Password</label>
              <input type="password" class="form-control rounded-corner" id="StudentPassword">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary SaveStudent">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="AddPayment" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-corner">
      <div class="modal-header">
        <h5 class="modal-title">Add New Payment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="FNewPayment">
          <div class="row">
            <div class="col-lg-4">
              <label for="Institute-Name" class="col-form-label">Select Institute</label>
              <select class="form-control rounded-corner" id="InstituteCodePayment">
                <option value="">Select</option>
              </select>
            </div>
            <div class="col-lg-4">
              <label for="Student-Name" class="col-form-label">Student Name</label>
              <select class="form-control rounded-corner" id="StudentCodePayment">
                <option value="">Select</option>
              </select>
            </div>
            <div class="col-lg-4">
              <label for="PaymentDate" class="col-form-label">Payment Received Date</label>
              <input type="date" class="form-control rounded-corner" id="PaymentDate">
            </div>
            <center>
              <div class="col-lg-6">
                <label for="Amount" class="col-form-label">Amount</label>
                <input type="number" class="form-control rounded-corner" id="PaymentAmount">
              </div>
            </center>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary SaveStudent">Save</button>
      </div>
    </div>
  </div>
</div>