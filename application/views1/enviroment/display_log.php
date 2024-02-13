<?php 
error_reporting(0);
                                                                         $logee="SELECT *
                                                                            FROM 
                                                                            ppms_es_forward as pif,organization as o,emp as e,designation as d,department as de
                                                                            where pif.organization_id=o.organization_id
                                                                            and pif.es_userid=e.emp_id
                                                                            and e.designation_id=d.designation_id
                                                                            and e.department_id=de.department_id
                                                                            and pif.id=$id
                                                                            and pif.es_module_id=$mid
                                                                            order by pif.es_forward_id asc";
 $logeee = $this->db->query($logee)->result();
 //echo $this->db->last_query();
 $f=1;
 foreach($logeee as $logeee){
 ?>

<div class="cd-timeline-block">
    <div class="cd-timeline-icon bg-primary">
        <i class="icofont icofont-ui-file"></i>
    </div>
    <!-- cd-timeline-img -->
    <div class="cd-timeline-content card_main">
        <div class="card-block">
            <span
                style="color:red;"><?php if($f==1){
                                                                                echo $logeee->emp_name;
                                                                                                        }else if($f > 1){
                                                                                                            echo $logeee->organization_name;
                                                                                                        }?></span><br />
            <span><?php echo $logeee->ipac_forward_date;?></span>
            <div class="timeline-details">

                <a href="#">

                    <?php if($logeee->status_id==0){
                                                                                                          echo "<label class='label label-warning'>Recieved</label>";
                                                                                                        }else if($logeee->status_id==1){
                                                                                                            echo "<label class='label label-warning'>Forwarded</label>";
                                                                                                        }else if($logeee->status_id==2){
                                                                                                            echo "<label class='label label-warning'>Recieved</label>";
                                                                                                        }else if($logeee->status_id==3){
                                                                                                            echo "<label class='label label-danger'>Cancel</label>";
                                                                                                        }else if($logeee->status_id==4){
                                                                                                            echo "<label class='label label-success'>Approved</label>";
                                                                                                        }else if($logeee->status_id==5){
                                                                                                            echo "<label class='label label-danger'>Returned</label>";
                                                                                                        }?>


                    <br>
                    <span style="font-size:10px;">
                        <?php echo $logeee->emp_name;?>,
                        <br><?php echo $logeee->designation_name;?>
                        <br>
                        <i><?php echo $logeee->department_name;?></i></span>
                </a>
                <p class="m-t-20">
                </p>
            </div>
        </div>
        <span class="cd-date"></span>
    </div>
    <!-- cd-timeline-content -->
</div>

<?php 
                                                                                    $f++;}?>










</div>
<!-- cd-timeline -->