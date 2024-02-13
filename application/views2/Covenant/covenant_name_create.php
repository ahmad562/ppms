
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
                                            <h5>Covenant Records</h5>
                                            <span></span>

                                        </div>
                                        <div class="card-block">

    <h1>Covenant Name</h1>

    <a href="<?php echo base_url('Convenant/create_record'); ?>">
    <button class="btn btn-danger">
    Display Records
    </button>
</a>

<form method="post" action="<?php echo base_url('Covenant/create_record'); ?>">
        <label for="covenant_name">Covenant Name:</label>
        <input type="text" name="covenant_name" required class="form-control"><br>

        <input type="submit" class="btn btn-success" value="Create Covenant Name">
    </form>
        </div>
        </div>
        </div>
        </div>
        
