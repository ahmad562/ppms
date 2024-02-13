<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <!-- <h4>Display status</h4> -->
                    </div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_staff_plan') ?>">
                            <button class="btn btn-danger">View Plan List Detail</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h1>Add New Plan</h1>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <body>
                                            <form method="post" action="<?php echo base_url('hr_staff_plan/add'); ?>" class="needs-validation" novalidate>

                                                <label for="organization_id">Organization ID:</label>
                                                <select id="organization_id" name="organization_id" class="form-control" required>
                                                    <option value="">Select Organization ID</option>
                                                    <?php
                                                    $organizations = $this->db->query("SELECT * FROM organization")->result();
                                                    foreach ($organizations as $org) { ?>
                                                        <option value="<?php echo $org->organization_id; ?>"><?php echo $org->organization_name; ?></option>
                                                    <?php } ?>
                                                </select>
                                                <br><br>

                                                <div class="form-group">
                                                    <label for="adv_date">Advertisement Date:</label>
                                                    <input type="date" id="adv_date" name="adv_date" class="form-control" required>
                                                    <div class="invalid-feedback">Please enter the advertisement date.</div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="invi_inter_date">Interview Date:</label>
                                                    <input type="date" id="invi_inter_date" name="invi_inter_date" class="form-control" required>
                                                    <div class="invalid-feedback">Please enter the interview date.</div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="ranking_date">Ranking Date:</label>
                                                    <input type="date" id="ranking_date" name="ranking_date" class="form-control" required>
                                                    <div class="invalid-feedback">Please enter the ranking date.</div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="approval_date">Approval Date:</label>
                                                    <input type="date" id="approval_date" name="approval_date" class="form-control" required>
                                                    <div class="invalid-feedback">Please enter the approval date.</div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="appoint_letter">Appointment Letter:</label>
                                                    <input type="text" id="appoint_letter" name="appoint_letter" class="form-control" required>
                                                    <div class="invalid-feedback">Please enter the appointment letter.</div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="remarks">Remarks:</label>
                                                    <input type="text" id="remarks" name="remarks" class="form-control" required>
                                                    <div class="invalid-feedback">Please enter the remarks.</div>
                                                </div>

                                                <button type="submit" name="submit" class="btn btn-primary">Add Plan</button>
                                            </form>

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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
