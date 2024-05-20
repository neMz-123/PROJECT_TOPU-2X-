<!DOCTYPE html>
<html lang="en">


<?php
include 'includes/head.php';
include 'php/db_init.php';

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
      <button class="btn btn-primary" id="add_employee_button" name="add_employee_button"><i class="fa fa-plus"></i> Add Product</button>

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
                  <th scope="col">Supplier</th>
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

    <?php
    include 'includes/footer.php';
    include 'includes/modals/add_product.php';
    include 'includes/modals/edit_product.php';
    ?>




    </div>

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
  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>




  <!-- ADD ---------------------------------------------------------------------------------------------->
  <script>
    $(document).ready(function() {
      function fetchProductList() {
        $.ajax({
          url: "php/fetch_products.php",
          type: "GET",
          success: function(response) {
            $('tbody').empty();
            $('tbody').append(response);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.error("AJAX Error:", textStatus, errorThrown);
            console.log("Response Text:", jqXHR.responseText);
          },
        });
      }

      fetchProductList();

      $('#add_employee_button').click(function() {
        $('#addProductModal').modal('show');
      });

      $('#image').change(function(event) {
        var reader = new FileReader();
        reader.onload = function() {
          $('#imagePreview').css('background-image', 'url(' + reader.result + ')');
          $('#imagePreview').text('');
        };
        if (event.target.files.length) {
          reader.readAsDataURL(event.target.files[0]);
        } else {
          $('#imagePreview').css('background-image', '');
          $('#imagePreview').text('Image Preview');
        }
      });

      $('#submitProduct').click(function() {
        var productName = $('#product_name').val().trim();
        var productDescription = $('#product_description').val().trim();
        var price = $('#price').val().trim();
        var image = $('#image')[0].files[0];

        if (!productName || !productDescription || !price || !image) {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: "Please fill in all fields.",
            showConfirmButton: true,
          });
          return;
        }
        var formData = new FormData();
        formData.append('product_name', $('#product_name').val());
        formData.append('product_description', $('#product_description').val());
        formData.append('price', $('#price').val());
        formData.append('uploaded_at', new Date().toISOString());
        formData.append('image', $('#image')[0].files[0]);

        console.log(formData);
        $.ajax({
          url: "php/add_product.php",
          type: "POST",
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
            if (response.success) {
              // Fetch the updated product list
              fetchProductList();

              $("#addProductModal").modal("hide");
              $("#success-notification").html(response.message);
              $("#success-notification").show().delay(10000).fadeOut();

              Swal.fire({
                icon: "success",
                title: "Product Added Successfully!",
                text: response.message,
                timer: 5000,
                showConfirmButton: true,
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Error",
                text: "Error: " + response.message,
                showConfirmButton: true,
              });
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            var errorMessage = jqXHR.responseText;
            Swal.fire({
              icon: "error",
              title: "Error",
              text: "Error: " + errorMessage,
              showConfirmButton: true,
            });
          },
        });
      });
      $('#imagePreview').css('background-image', '');
      $('#addProductModal').modal('hide');


    });
  </script>
  <!-- END ADD ---------------------------------------------------------------------------------------------->




  <!--  UPDATE ----------------------------------------------------------------------------------------------->->
  <script>
    $(document).on('click', '.edit-product-btn', function() {
      console.log("Edit button clicked");
      $('#editProductModal').modal('show');
      var productId = $(this).data('id');

      $.ajax({
        url: 'php/get_product_details.php',
        type: 'POST',
        data: {
          id: productId
        },
        dataType: 'json',
        success: function(response) {
          $('#edit_product_id').val(response.id);
          $('#edit_product_name').val(response.product_name);
          $('#edit_product_description').val(response.product_description);
          $('#edit_price').val(response.price);
          $('#editImagePreview').css('background-image', 'url("php/product_images/' + response.image_url + '")');
        },
        error: function(xhr, status, error) {
          alert('Error fetching product data: ' + error);
        }
      });

      $('#edit_image').change(function(event) {
        var reader = new FileReader();
        reader.onload = function() {
          $('#editImagePreview').css('background-image', 'url(' + reader.result + ')');
          $('#editImagePreview').text('');
        };
        if (event.target.files.length) {
          reader.readAsDataURL(event.target.files[0]);
        } else {
          $('#editImagePreview').css('background-image', '');
          $('#editImagePreview').text('Image Preview');
        }
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      function fetchProductList() {
        $.ajax({
          url: "php/fetch_products.php",
          type: "GET",
          success: function(response) {
            $('tbody').empty();
            $('tbody').append(response);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.error("AJAX Error:", textStatus, errorThrown);
            console.log("Response Text:", jqXHR.responseText);
          },
        });
      }

      fetchProductList();

      $('#submitEditProduct').click(function() {
        var formData = new FormData($('#editProductForm')[0]);

        $.ajax({
          url: "php/update_product.php",
          type: "POST",
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
            response = JSON.parse(response);

            if (response.success) {
              fetchProductList();

              $("#editProductModal").modal("hide");
              $("#success-notification").html(response.message);
              $("#success-notification").show().delay(10000).fadeOut();

              Swal.fire({
                icon: "success",
                title: "Product Updated Successfully!",
                text: response.message,
                timer: 5000,
                showConfirmButton: true,
              });
            } else {
              Swal.fire({
                icon: "error",
                title: "Error",
                text: response.message,
                showConfirmButton: true,
              });
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            var errorMessage = jqXHR.responseText;
            Swal.fire({
              icon: "error",
              title: "Error",
              text: "Error: " + errorMessage,
              showConfirmButton: true,
            });
          },
        });
      });
    });
  </script>
  <!-- Update END ---------------------------------------------------------------------------------------------->

  <!-- Delete -->
  <script>
    $(document).on('click', '.delete-product-btn', function() {
      function fetchProductList() {
        $.ajax({
          url: "php/fetch_products.php",
          type: "GET",
          success: function(response) {
            $('tbody').empty();
            $('tbody').append(response);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.error("AJAX Error:", textStatus, errorThrown);
            console.log("Response Text:", jqXHR.responseText);
          },
        });
      }

      var productId = $(this).data('id');

      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: 'php/delete_product.php',
            type: 'POST',
            data: {
              id: productId
            },
            success: function(response) {
              response = JSON.parse(response);

              if (response.success) {
                fetchProductList();
                Swal.fire(
                  'Deleted!',
                  response.message,
                  'success'
                );
              } else {
                Swal.fire(
                  'Error!',
                  response.message,
                  'error'
                );
              }
            },
            error: function(jqXHR, textStatus, errorThrown) {
              var errorMessage = jqXHR.responseText;
              Swal.fire(
                'Error!',
                'Error: ' + errorMessage,
                'error'
              );
            }
          });
        }
      });
    });
  </script>



  <!-- RESET FORMS---------------------------------------------------------------------------------------------->
  <script>
    $(document).ready(function() {
      $('#addProductModal').on('show.bs.modal', function(e) {
        $('#addProductForm')[0].reset();
        $('#editProductForm')[0].reset();
        $('#imagePreview').css('background-image', '');
        $('#imagePreview').text('Image Preview');
        $('#image').val('');

      });
    });
  </script>








</body>

</html>