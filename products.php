<!DOCTYPE html>
<html lang="en">


<?php
include 'includes/head.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<body>

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
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->
   
    

    <div class="button-row" style="display: flex; justify-content: flex-end;">
        <button type="button" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add Products
        </button> 
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
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/milo.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">MILO</a></td>
                        <td> ₱ 150.00</td>
                        <td class="fw-bold">qwwereytruytiuuyiouoiuoi</td>
                        <td>₱ 30.00</td>
                        <td>
                            <img src="assets/img/edit.png" alt="Edit" title="Edit" style="height:25px; width:25px;">
                            <img src="assets/img/delete.png" alt="Delete" title="Delete"style="height:25px; width:25px;">
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
                            <img src="assets/img/delete.png" alt="Delete" title="Delete"style="height:25px; width:25px;">
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
                            <img src="assets/img/delete.png" alt="Delete" title="Delete"style="height:25px; width:25px;">
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
                            <img src="assets/img/delete.png" alt="Delete" title="Delete"style="height:25px; width:25px;">
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
                            <img src="assets/img/delete.png" alt="Delete" title="Delete"style="height:25px; width:25px;">
                        </td>
                      </tr>
                    </tbody>
                  </table>

                </div>
               

              </div>
            </div>
            <!-- End Top Selling -->
    </section>

  </main><!-- End #main -->

  <?php
  include 'includes/footer.php';
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

</body>

</html>