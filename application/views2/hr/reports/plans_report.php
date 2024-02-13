<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
               
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Consolidated Staff Recruitment Plan</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                    <h3 align="center">Staff Recruitment Plan</h3>
                                        <table id="simpletable" class="table table-bordered nowrap">
                                            <tr>
                                                <th>Name of Staff Position</th>
                                                <th>Location<br>PMU/CIU</th>
                                                <th>Advertisement</th>
                                                <th>Interview <br>for<br> Interview</th>
                                                <th>Evaluation <br> and <br>Ranking </th>
                                                <th>Approval from<br>competent<br>Authority </th>
                                                <th>Appointment<br>Letter<br>Issuance </th>
                                                <th>Remarks</th>
                                               
                                            </tr>
                                            <?php foreach ($plans as $plan) { ?>
                                                <tr>
                                                    
                                                    <td><?php echo $plan->designation_name; ?></td>
                                                    <td><?php echo $plan->organization_name; ?></td>
                                                    <td><?php echo $plan->adv_date; ?></td>
                                                    <td><?php echo $plan->invi_inter_date; ?></td>
                                                    <td><?php echo $plan->ranking_date; ?></td>
                                                    <td><?php echo $plan->approval_date; ?></td>
                                                    <td><?php echo $plan->quarter_year; ?></td>
                                                    <td><?php echo $plan->remarks; ?></td>
                                                    
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
</div>
