<div class="pcoded-content" >
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <!-- <h4>Display status</h4> -->


                    </div>
                    <div class="page-header-breadcrumb">
<a href="<?php echo base_url('Hr_staff_position')?>"><button class="btn btn-danger">
View Position List Detail</button></a>
                    </div>
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">

                                                    <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                <h1>Add New Position</h1>


                                </div>
                                <div class="card-block">


                                <div class="dt-responsive table-responsive">
<body>
   
    <form method="post" action="<?php echo base_url('hr_staff_position/add'); ?>">
        <label for="organization_id">Organization ID:</label>
        <select id="organization_id" name="organization_id" class="form-control" required>
        <?php 
    $organizations=$this->db->query("select * from organization")->result();
   
    
    ?>
                    <option value="">Select Organization ID</option>
                    <?php foreach ($organizations as $org) { ?>
                        <option value="<?php echo $org->organization_id; ?>"><?php echo $org->organization_name; ?></option>
                    <?php } ?>
                </select>
        <br><br>

  
            <div class="form-group">
                <label for="total_position">Total Positions:</label>
                <input type="text" id="total_position" name="total_position" class="form-control" required>
                <div class="invalid-feedback">Please enter total positions.</div>
            </div>

            <div class="form-group">
                <label for="filled_total">Filled Positions:</label>
                <input type="text" id="filled_total" name="filled_total" class="form-control" required>
                <div class="invalid-feedback">Please enter filled positions.</div>
            </div>

            <div class="form-group">
                <label for="male">Male Positions:</label>
                <input type="text" id="male" name="male" class="form-control" required>
                <div class="invalid-feedback">Please enter male positions.</div>
            </div>

            <div class="form-group">
                <label for="female">Female Positions:</label>
                <input type="text" id="female" name="female" class="form-control" required>
                <div class="invalid-feedback">Please enter female positions.</div>
            </div>

            <div class="form-group">
                <label for="remaining">Remaining Positions:</label>
                <input type="text" id="remaining" name="remaining" class="form-control" required>
                <div class="invalid-feedback">Please enter remaining positions.</div>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Add Position</button>

   
    <script>
        // Enable form validation from Bootstrap
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>
</html>

    </form>
</div>
</div>
</div>

