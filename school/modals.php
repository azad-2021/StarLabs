<div class="modal fade" id="StaffF" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-corner">
      <div class="modal-header rounded-corner">
        <h5 class="modal-title">Find Staff</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Enter Staff Name</label>
            <input type="text" class="form-control" id="FStaffName">
          </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
        <button type="button" class="btn btn-primary SearchStaff">Search</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="StaffDetails" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-corner">
      <div class="modal-header rounded-corner">
        <h5 class="modal-title">Find Staff</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="StaffData">

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="StudentF" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-corner">
      <div class="modal-header rounded-corner">
        <h5 class="modal-title">Find Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Enter Student Name</label>
            <input type="text" class="form-control" id="FStudentName">
          </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </form>
        <button type="button" class="btn btn-primary">Search</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="StudentDetails" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-corner">
      <div class="modal-header rounded-corner">
        <h5 class="modal-title">Find Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="StudentData">

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="Registration" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content rounded-corner">
      <div class="modal-header rounded-corner">
        <h5 class="modal-title">Enter Student Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form align="center" method="POST" action="" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-3">
              <label for="recipient-name" class="col-form-label">Student Name</label>
              <input type="text" class="form-control" name="StudentName">
            </div>
            <div class="col-lg-3">
              <label for="recipient-name" class="col-form-label">Class</label>
              <select class="form-control" name="StudentClass" required="">
                <option value="">Select</option>
                <?php 
                $query ="SELECT * FROM class";
                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result)>0){
                  while($row=mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row['ClassID'].'">'.$row['Class'].'</option>';
                  }}?>
                </select>
              </div>
              <div class="col-lg-3">
                <label for="recipient-name" class="col-form-label">Father's Name</label>
                <input type="text" class="form-control" name="Father" required="">
              </div>            

              <div class="col-lg-3">
                <label for="recipient-name" class="col-form-label">Mother's Name</label>
                <input type="text" class="form-control" name="Mother" required="">
              </div>
              <div class="col-lg-3">
                <label for="recipient-name" class="col-form-label">Gender:</label>
                <br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="Gender" id="Gender" value="Male" required="">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Male
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="Gender" id="Gender" value="Female">
                  <label class="form-check-label" for="flexRadioDefault2">
                    Female
                  </label>
                </div>
              </div>
              <div class="col-lg-3">
                <label for="recipient-name" class="col-form-label">AADHAR Card Number</label>
                <input type="number" class="form-control" name="Aadhar" min="0" required="">
              </div>
              <div class="col-lg-3">
                <label for="recipient-name" class="col-form-label">Mobile Number</label>
                <input type="number" class="form-control" name="Mobile" min="0" required="">
              </div>
              <div class="col-lg-3">
                <label for="recipient-name" class="col-form-label">Address</label>
                <input type="text" class="form-control" name="Address">
              </div>
              <center>
                <div class="col-lg-3">
                  <label for="recipient-name" class="col-form-label">Upload Image</label>
                  <input type="file" class="form-control" name = "image" / required="">
                  <br>
                </div>
              </center>

            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

              <button type="submit" class="btn btn-primary" name="SaveStudent">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="AddStaff" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content rounded-corner">
      <div class="modal-header rounded-corner">
        <h5 class="modal-title">Enter Staff Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form align="center" method="POST" action="" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-4">
              <label for="recipient-name" class="col-form-label">Name</label>
              <input type="text" class="form-control" name="StaffName" required>
            </div>
            <div class="col-lg-4">
              <label for="recipient-name" class="col-form-label">AADHAR Card Number</label>
              <input type="number" class="form-control" name="StaffAadhar" required min="0" maxlength="16">
            </div>
            <div class="col-lg-4">
              <label for="recipient-name" class="col-form-label">Gender:</label>
              <br>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Gender" value="Male" required>
                <label class="form-check-label" for="flexRadioDefault1">
                  Male
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="Gender" value="Female">
                <label class="form-check-label" for="flexRadioDefault2">
                  Female
                </label>
              </div>
            </div>
            <div class="col-lg-3">
              <label for="recipient-name" class="col-form-label">Mobile Number</label>
              <input type="text" class="form-control" name="StaffNumber" onkeydown="limit(this);" onkeyup="limit(this);" required>
            </div>
            <div class="col-lg-3">
              <label for="recipient-name" class="col-form-label">Email</label>
              <input type="email" class="form-control" name="StaffEmail" required>
            </div>
            <div class="col-lg-3">
              <label for="recipient-name" class="col-form-label">Address</label>
              <input type="text" class="form-control" name="StaffAddress" required>
            </div>
            <div class="col-lg-3">
              <label for="recipient-name" class="col-form-label">Upload Resume</label>
              <input type="file" class="form-control" name = "Resume" />
            </div>  
            <center>
              <div class="col-lg-6">
                <label for="recipient-name" class="col-form-label">Educational Details</label>
                <textarea class="form-control" name="StaffEducation" required></textarea>
                <br>
              </div>
            </center>    
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="SaveStaff">Save</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="AddSubject" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-corner">
      <div class="modal-header rounded-corner">
        <h5 class="modal-title">Enter Subject Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form align="center" id="Fsubject">
          <div class="row">
            <div class="col-lg-6">
              <label for="recipient-name" class="col-form-label">Subject Name</label>
              <input type="text" class="form-control" id="subject">
            </div>
            <div class="col-lg-6">
              <label for="recipient-name" class="col-form-label">Class</label>
              <select class="form-control" id="SubClass">
                <option value="">Select</option>
                <?php 
                $query ="SELECT * FROM class";
                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result)>0){
                  while($row=mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row['ClassID'].'">'.$row['Class'].'</option>';
                  }}?>
                </select>
              </div>   
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </form>
            <button type="button" class="btn btn-primary SaveSubject">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="AddSalary" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-corner">
      <div class="modal-header rounded-corner">
        <h5 class="modal-title">Release Salary</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form align="center">
          <div class="row">

            <div class="col-lg-4">
              <label for="recipient-name" class="col-form-label">Select Staff</label>
              <select class="form-control">
                <option value="">Select</option>
              </select>
            </div> 
            <div class="col-lg-4">
              <label for="recipient-name" class="col-form-label">Enter Amount</label>
              <input type="number" class="form-control" id="FReceiptNo" min="0">
            </div>  
            <div class="col-lg-4">
              <label for="recipient-name" class="col-form-label">Select Month</label>
              <input type="month" class="form-control" id="FReceiptNo" min="0">
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </form>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="SubjectList" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-corner">
      <div class="modal-header rounded-corner">
        <h5 class="modal-title">All Subjects</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center>
          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for subject.." class="form-control">
        </center>
        <br>
        <table class="table table-hover table-bordered border-primary" id="myTable">
          <thead>
            <th>Sr No.</th>
            <th>Subject Name</th>
            <th>Class</th>
            <th>Action</th>
            <tbody id="sublist">

            </tbody>
          </thead>
        </table>
      </div>   
    </div>
    <div class="modal-footer">
      <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>

<div class="modal fade" id="AddFees" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content rounded-corner">
      <div class="modal-header rounded-corner">
        <h5 class="modal-title">Enter Fees Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form align="center" id="FeesForm">
          <div class="row">
            <div class="col-lg-3">
              <label for="recipient-name" class="col-form-label">Class</label>
              <select class="form-control" id="FeesClass">
                <option value="">Select</option>
                <?php 
                $query ="SELECT * FROM class";
                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result)>0){
                  while($row=mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row['ClassID'].'">'.$row['Class'].'</option>';
                  }}?>
                </select>
              </div>
              <div class="col-lg-3">
                <label for="recipient-name" class="col-form-label">Select Student</label>
                <select class="form-control" id="FeesStudent">  
                  <option>Select</option>
                </select>
              </div>
              <div class="col-lg-3">
                <label for="recipient-name" class="col-form-label">Select Month</label>
                <input type="month" name="" id="FeesMonth">
              </div>
              <div class="col-lg-3">
                <label for="recipient-name" class="col-form-label">Total Amount</label>
                <input type="text" class="form-control" id="Fees" min="0" disabled>
              </div>
              <center>
                <div class="col-lg-3">
                  <label for="recipient-name" class="col-form-label">Paid Amount</label>
                  <input type="number" class="form-control" id="FeesAmount" min="0">
                </div>
              </div>
            </center>
            <div class="modal-footer">
              <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </form>
            <button type="button" class="btn btn-primary SaveFees">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>