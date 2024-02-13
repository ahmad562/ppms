<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Cad_Product') ?>">
                            <button class="btn btn-danger">View Items</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add New Record</h5>
                                </div>
                                <div class="card-block">
                                
   
                                
  
    <form action="<?php echo base_url('Cad_Product/add'); ?>" method="post">
        <label for="cad_product_name">Item Name:</label>
        <input type="text" id="cad_product_name" class="form-control" name="cad_product_name" required>
        <button type="submit" class="btn btn-danger">Add Item</button>
    </form>
</body>
</html>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
