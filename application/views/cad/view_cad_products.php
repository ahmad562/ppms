<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Cad_Product/add_cad') ?>">
                            <button class="btn btn-danger">Add Item</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>View Items</h5>
                                </div>
                                <div class="card-block">
                                
   
    <table border="1" class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Item Name</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($products as $product) { ?>
            <tr>
                <td><?php echo $product->cad_product_id; ?></td>
                <td><?php echo $product->cad_product_name; ?></td>
                <td>
                    <a href="<?php echo base_url('Cad_Product/edit/' . $product->cad_product_id); ?>">Edit</a>
                    <a href="<?php echo base_url('Cad_Product/delete/' . $product->cad_product_id); ?>"
                        onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
