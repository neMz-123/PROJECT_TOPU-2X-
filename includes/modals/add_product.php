<!-- Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="image-container">
          <div id="imagePreview">Image Preview</div>
          <label for="image" class="form-label">Product Image</label>
          <input class="form-control" type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
        </div>
        <div class="form-container">
          <form id="addProductForm" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="product_name" class="form-label">Product Name</label>
              <input type="text" class="form-control" id="product_name" name="product_name">
            </div>
            <div class="mb-3">
              <label for="product_description" class="form-label">Description</label>
              <textarea class="form-control" id="product_description" name="product_description" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="number" class="form-control" id="price" name="price">
            </div>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-block" id="submitProduct">Add Product</button>
      </div>
    </div>
  </div>
</div>