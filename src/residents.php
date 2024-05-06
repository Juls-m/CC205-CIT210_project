<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Residents</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
    <link rel="stylesheet" href="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- Navbar -->
    <?php 
      include("partials/_navbar.php")
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- Sidebar-->
      <?php 
        include("partials/_sidebar.php")
      ?>
      <!-- partial -->
      <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                <div class="col-md-12 grid-margin">
                     <div class="row">
                        <div class="col-12 col-xl-10 mb-4 mb-xl-0">
                         <h3 class="font-weight-bold">Residents List</h3>
                        </div>
                         <div class="col-12 col-xl-2 mb-4 mb-xl-0 text-right">
                             <button class="btn btn-primary" id="addResidentBtn">Add Resident</button>
                        </div>
                     </div>
                </div>
                <div class="card">
                  <?php require("forms/addresidents.php") ?>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Fullname</th>
                                    <th>Barangay ID</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Project</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Photoshop</td>
                                    <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                                    <td><label class="badge badge-danger">Pending</label></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Messsy</td>
                                    <td>Flash</td>
                                    <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>John</td>
                                    <td>Premier</td>
                                    <td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
                                    <td><label class="badge badge-info">Fixed</label></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Peter</td>
                                    <td>After effects</td>
                                    <td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
                                    <td><label class="badge badge-success">Completed</label></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Dave</td>
                                    <td>53275535</td>
                                    <td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
                                    <td><label class="badge badge-warning">In progress</label></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <?php include("partials/_footer.php") ?>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <script>
    $(document).ready(function() {
        $('#addResidentBtn').click(function() {
            $('#addResidentModal').modal('show');
        });
    });
</script>
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/chart.umd.js"></script>
  <script src="assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <!-- <script src="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> -->
  <script src="assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
  <script src="assets/js/dataTables.select.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="assets/js/dashboard.js"></script>
  <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
  <!-- End custom js for this page-->

</body></html>