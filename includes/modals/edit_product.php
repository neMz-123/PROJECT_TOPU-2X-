<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="image-container">
                    <div id="editImagePreview">Image Preview</div>
                    <label for="edit_image" class="form-label">Product Image</label>
                    <input class="form-control" type="file" name="image" id="edit_image" accept=".jpg, .jpeg, .png">
                </div>
                <div class="form-container">
                    <form id="editProductForm" enctype="multipart/form-data">
                        <input type="hidden" id="edit_product_id" name="id">
                        <div class="mb-3">
                            <label for="edit_product_name" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="edit_product_name" name="product_name">
                        </div>
                        <div class="mb-3">
                            <label for="edit_product_description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="edit_product_description" name="product_description">
                        </div>
                        <div class="mb-3">
                            <label for="edit_price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="edit_price" name="price">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitEditProduct">Save Changes</button>
            </div>
        </div>
    </div>
</div>