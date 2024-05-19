<!DOCTYPE html>
<html lang="en">


<?php
include 'includes/head.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <?php
  include 'includes/header.php';
  include 'includes/sidebar.php';
  ?>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>POS - PRODUCTS</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->



    <div class="button-row" style="display: flex; justify-content: flex-end;">
      <button class="btn btn-primary" id="add_employee_button" name="add_employee_button">Add Employee</button>

    </div>


    <br>

    <section class="section dashboard">

      <!-- Top Selling -->
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
            <h5 class="card-title">PRODUCTS<span>| List of Products</span></h5>

            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">Preview</th>
                  <th scope="col">Product</th>
                  <th scope="col">Product ID</th>
                  <th scope="col">Product Description</th>
                  <th scope="col">Price</th>
                  <th scope="col">Actions</th>

                </tr>
              </thead>

              <div class="search-container" style="display: flex; justify-content: flex-end;">

                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </div>
              <br>

              <tbody>
                <tr>
                  <th scope="row"><a href="#"><img src="assets/img/milo.jpg" alt=""></a></th>
                  <td><a href="#" class="text-primary fw-bold">MILO</a></td>
                  <td> ₱ 150.00</td>
                  <td class="fw-bold">qwwereytruytiuuyiouoiuoi</td>
                  <td>₱ 30.00</td>
                  <td>
                    <img src="assets/img/edit.png" alt="Edit" title="Edit" style="height:25px; width:25px;">
                    <img src="assets/img/delete.png" alt="Delete" title="Delete" style="height:25px; width:25px;">
                  </td>

                </tr>
                <tr>
                  <th scope="row"><a href="#"><img src="assets/img/bearbrand.jpg" alt=""></a></th>
                  <td><a href="#" class="text-primary fw-bold">BEAR BRAND SWAK</a></td>
                  <td> ₱ 20.00</td>
                  <td class="fw-bold">98</td>
                  <td>₱ 5.00</td>
                  <td>
                    <img src="assets/img/edit.png" alt="Edit" title="Edit" style="height:25px; width:25px;">
                    <img src="assets/img/delete.png" alt="Delete" title="Delete" style="height:25px; width:25px;">
                  </td>


                </tr>
                <tr>
                  <th scope="row"><a href="#"><img src="assets/img/yakult.png" alt=""></a></th>
                  <td><a href="#" class="text-primary fw-bold">YAKULT</a></td>
                  <td>₱ 16.00</td>
                  <td class="fw-bold">74</td>
                  <td>₱ 5.00</td>
                  <td>
                    <img src="assets/img/edit.png" alt="Edit" title="Edit" style="height:25px; width:25px;">
                    <img src="assets/img/delete.png" alt="Delete" title="Delete" style="height:25px; width:25px;">
                  </td>
                </tr>
                <tr>
                  <th scope="row"><a href="#"><img src="assets/img/nestea.png" alt=""></a></th>
                  <td><a href="#" class="text-primary fw-bold">NESTEA</a></td>
                  <td>₱ 45.00</td>
                  <td class="fw-bold">63</td>
                  <td>₱ 5.00</td>
                  <td>
                    <img src="assets/img/edit.png" alt="Edit" title="Edit" style="height:25px; width:25px;">
                    <img src="assets/img/delete.png" alt="Delete" title="Delete" style="height:25px; width:25px;">
                  </td>
                </tr>
                <tr>
                  <th scope="row"><a href="#"><img src="assets/img/waffel.png" alt=""></a></th>
                  <td><a href="#" class="text-primary fw-bold">WAFFEL HAUS</a></td>
                  <td>₱ 55.00</td>
                  <td class="fw-bold">41</td>
                  <td>₱ 5.00</td>
                  <td>
                    <img src="assets/img/edit.png" alt="Edit" title="Edit" style="height:25px; width:25px;">
                    <img src="assets/img/delete.png" alt="Delete" title="Delete" style="height:25px; width:25px;">
                  </td>
                </tr>
              </tbody>
            </table>

          </div>


        </div>
      </div>
      <!-- End Top Selling -->

      <div class="card">
        <br>
        <div class="card-body" style="display: flex; justify-content: flex-end;">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- End Pagination with icons -->

        </div>
      </div>
    </section>

    <!-- Add Employee Modal -->
    <div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="addEmployeeModalLabel" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addEmployeeModalLabel">Add Employee</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="addEmployeeForm" class="row" enctype="multipart/form-data" method="POST">
              <!-- Image Section -->
              <div class="col-md-3">
                <div class="form-group">
                  <label for="image">Image / ID</label>
                  <div class="image-container">
                    <img src="" class="img-fluid" alt="" id="previewImage">
                  </div>
                  <!-- File Input for Image -->
                  <input class="form-control" type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value="" />
                </div>
              </div>

              <!-- Personal Information -->

              <div class="col-md-9">
                <div class="row">
                  <div class="col-md-12">
                    <h4 class="text-primary">Personal Information</h4>
                  </div>
                </div>




                <div class="col-md-4">
                  <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="text" class="form-control" id="salary" name="salary" required>
                  </div>
                </div>
              </div>
              <br>
              <!-- Contact Information -->
              <div class="row">
                <div class="col-md-12">
                  <h4 class="text-primary">Contact Information</h4>
                </div>
              </div>
              <!-- Second Row -->
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="contact">Contact</label>
                    <input type="tel" class="form-control" id="contact" name="contact" required>
                  </div>
                </div>

              </div>
              <br>
              <!-- Buttons -->
              <div class="row justify-content-center">
                <div class="col-md-3 mb-2 mb-md-0 mr-md-2">
                  <button type="submit" class="btn btn-primary btn-block">Add</button>
                </div>
                <div class="col-md-3 mb-2 mb-md-0 mr-md-2">
                  <button type="button" class="btn btn-secondary btn-block" id="clearForm">Clear</button>
                </div>
                <div class="col-md-3">
                  <button type="button" class="btn btn-danger btn-block" id="cancelBtn">Cancel</button>
                </div>
              </div>
          </div>


          </form>
        </div>
      </div>
    </div>
    </div>

  </main><!-- End #main -->

  <?php
  include 'includes/footer.php';
  // include 'includes/modals/add_employee.php'
  ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $(document).ready(function() {
      console.log("jQuery version: " + $.fn.jquery);
      $('#add_employee_button').click(function() {
        $('#addEmployeeModal').modal('show');

        console.log("Button is clicked");
      });
    });
  </script>

</body>

</html>