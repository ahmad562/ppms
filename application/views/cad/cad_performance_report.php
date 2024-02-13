<div class="pcoded-content">
    <?php error_reporting(0);?>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Cad_performance/add_form') ?>">
                            <button class="btn btn-danger">Add Cad Performance</button>
                        </a>
                        <a href="<?php echo base_url('Cad_performance/report') ?>">
                            <button class="btn btn-success">Report</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>View Report</h5>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                       
                                        <table border="1" class="table table-bordered">
                                            <tr><td colspan="20" align="center"> Appendix-9 Quarter Contract Awards and Disbursment(CAD)Performances<br>
                                        Table A9.1 : CAD Performance in the Calendar - by product<br>
                                    ($ million)</td></tr>
                                            <tr>

                                                <th rowspan="3">Item</th>
                                                <?php 
                                        $yearss=$this->db->query("select DISTINCT YEAR  from cad_performance order by year asc limit 2")->result();
                                        foreach ($yearss as $yearss) { ?>
                                                <th colspan="6">Quarter of Calendar Year <?php echo $yearss->YEAR;?>
                                                </th>


                                                <?php }?>

                                            </tr>
                                            <tr>
                                                <?php 
     $current_years=date("Y");
     $prevYear=$current_years-1;
     
    $yearQuarter = $this->db->query("SELECT DISTINCT quarter_id  FROM cad_performance  where year=$prevYear")->result();
    
    foreach ($yearQuarter as $yearQuarter) { ?>
                                                <th colspan="2"> <?php 
     if($yearQuarter->quarter_id==1) {
        echo 'Q1';
                                                        } else if($yearQuarter->quarter_id== 2) {
                                                            echo 'Q2';
                                                        } else if($yearQuarter->quarter_id== 3) {
                                                            echo 'Q3';
                                                        } else if($yearQuarter->quarter_id== 4) {
                                                            echo 'Q4';                                                                 
                                                        } 
    
    ?></th>


                                                <?php }?>
                                                <th colspan="2">Year Total</th>

                                                <?php 
    
     

    $yearQuarter1 = $this->db->query("SELECT DISTINCT quarter_id  FROM cad_performance  where year=$current_years")->result();
    
    foreach ($yearQuarter1 as $yearQuarter1) { ?>
                                                <th colspan="2"> <?php 
     if($yearQuarter1->quarter_id==1) {
        echo 'Q1';
                                                        } else if($yearQuarter1->quarter_id== 2) {
                                                            echo 'Q2';
                                                        } else if($yearQuarter1->quarter_id== 3) {
                                                            echo 'Q3';
                                                        } else if($yearQuarter1->quarter_id== 4) {
                                                            echo 'Q4';                                                                 
                                                        } 
    
    ?></th>


                                                <?php }?>
                                                <th colspan="2">Year Total</th>



                                            </tr>

                                            <?php /*?> <th colspan="2">Q1</th>
                                            <th colspan="2">Q2</th>
                                            <th colspan="2">Q3</th>
                                            <th colspan="2">Q4</th>
                                            <th colspan="2">Year Total</th>
                                            <?php */?>


                                            <tr>
                                                <?php                                  
                                             
    $yearQuarter = $this->db->query("SELECT DISTINCT quarter_id  FROM cad_performance  where year=$prevYear")->result();
    
    foreach ($yearQuarter as $yearQuarter) { ?>
                                                <th>Projected</th>
                                                <th>Actual</th>
                                                <?php }?>
                                                <th>Projected</th>
                                                <th>Actual</th>
                                                <?php 
    
     $yearQuarter3 = $this->db->query("SELECT DISTINCT quarter_id  FROM cad_performance  where year=$current_years")->result();
     //echo $this->db->last_query();
    foreach ($yearQuarter3 as $yearQuarter3) { 
        
        ?>

                                                <th>
                                                    <?php //echo $yearQuarter3->quarter_id;?>
                                                    Projected</th>
                                                <th>Actual</th>

                                                <?php }?>

                                                <th>Projected</th>
                                                <th>Actual</th>

                                            </tr>
                                            <tr>
                                                <th>Contracts</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>-</th>
                                                <th>-</th>

                                            </tr>
                                            <?php 
                                        $proo=$this->db->query("select * from cad_product")->result();
                                        $a=0;
                                        foreach ($proo as $proo) { ?>
                                            <tr>
                                                <td><?php echo $proo->cad_product_name;?></td>
                                                <?php 
    
     
    $yearQuarter = $this->db->query("SELECT DISTINCT quarter_id  FROM cad_performance  where year=$prevYear and contract_disbursment=1")->result();
    $y1=0;
    $z1=0; 
    foreach ($yearQuarter as $yearQuarter) { ?>
                                                <td>
                                                    <?php 
    $figure_projected = $this->db->query("SELECT projected FROM cad_performance where year=$prevYear and quarter_id=$yearQuarter->quarter_id and cad_product_id=$proo->cad_product_id and contract_disbursment=1")->row();
    echo $y=$figure_projected->projected;
    ?>
                                                </td>
                                                <td>
                                                    <?php 
    $figure_actual = $this->db->query("SELECT actual FROM cad_performance where year=$prevYear and quarter_id=$yearQuarter->quarter_id and cad_product_id=$proo->cad_product_id and contract_disbursment=1")->row();
    echo $z=$figure_actual->actual;?>
                                                </td>

                                                <?php 
$y1+=$y;
$z1+=$z;
}?>

                                                <td>
                                                    <?php 
    echo $y1;
    ?>
                                                </td>
                                                <td>
                                                    <?php 
    echo $z1;?>
                                                </td>


                                                <?php 
    
     
    $yearQuarterc = $this->db->query("SELECT DISTINCT quarter_id  FROM cad_performance  where year=$current_years and contract_disbursment=1")->result();
    //echo $this->db->last_query();
    
   // foreach ($yearQuarterc as $yearQuarterc) { ?>

                                                <?php 
    
     
   
    $y11=0;
    $z11=0; 
    foreach ($yearQuarterc as $yearQuarterc) { ?>
                                                <td>
                                                    <?php 
    $figure_projected = $this->db->query("SELECT projected FROM cad_performance where year=$current_years and quarter_id=$yearQuarterc->quarter_id and cad_product_id=$proo->cad_product_id and contract_disbursment=1")->row();
    echo $y0=$figure_projected->projected;
    ?>
                                                </td>
                                                <td>
                                                    <?php 
    $figure_actual = $this->db->query("SELECT actual FROM cad_performance where year=$current_years and quarter_id=$yearQuarterc->quarter_id and cad_product_id=$proo->cad_product_id and contract_disbursment=1")->row();
    echo $z0=$figure_actual->actual;?>
                                                </td>

                                                <?php 
$y11+=$y0;
$z11+=$z0;
}?>

                                                <td>
                                                    <?php 
    echo $y11;
    ?>
                                                </td>
                                                <td>
                                                    <?php 
    echo $z11;?>
                                                </td>







                                                <?php }?>


                                            </tr>
                                            <tr>
                                                <th>Total Contracts <br>Awards</th>
                                                <?php 
    
     
    $yearQuarterSub = $this->db->query("SELECT DISTINCT quarter_id  FROM cad_performance  where year=$prevYear")->result();
    //echo $this->db->last_query();
    
    foreach ($yearQuarterSub as $yearQuarterSub) { ?>
                                                <th>
                                                    <?php 
    $figure_projected1 = $this->db->query("SELECT sum(projected) as projecteded FROM cad_performance
     where year=$prevYear and quarter_id=$yearQuarterSub->quarter_id and contract_disbursment=1 ")->row();

    echo number_format($figure_projected1->projecteded,2);
    //echo $this->db->last_query();
    ?>
                                                </th>
                                                <th>
                                                    <?php 
    $figure_actual1 = $this->db->query("SELECT sum(actual) as Actuals FROM cad_performance
     where year=$prevYear and quarter_id=$yearQuarterSub->quarter_id and contract_disbursment=1")->row();
    echo number_format($figure_actual1->Actuals,2);?>
                                                </th>

                                                <?php 

}?>

                                                <th>
                                                    <?php 
    $figure_projected2 = $this->db->query("SELECT sum(projected) as projecteded FROM cad_performance
     where year=$prevYear and contract_disbursment=1")->row();

    echo number_format($figure_projected2->projecteded,2);
    //echo $this->db->last_query();
    ?>
                                                </th>
                                                <th>
                                                    <?php 
    $figure_actual2 = $this->db->query("SELECT sum(actual) as Actuals FROM cad_performance
     where year=$prevYear  and contract_disbursment=1")->row();
    echo number_format($figure_actual2->Actuals,2);?>
                                                </th>
                                                <!-----------------------------------current year sum---------------------------------------->


                                                <?php 
    
     
    $yearQuarterSub = $this->db->query("SELECT DISTINCT quarter_id  FROM cad_performance  where year=$current_years")->result();
    //echo $this->db->last_query();
    
    foreach ($yearQuarterSub as $yearQuarterSub) { ?>
                                                <th>
                                                    <?php 
    $figure_projected1 = $this->db->query("SELECT sum(projected) as projecteded FROM cad_performance
     where year=$current_years and quarter_id=$yearQuarterSub->quarter_id and contract_disbursment=1 ")->row();

    echo  number_format($figure_projected1->projecteded,2);
    //echo $this->db->last_query();
    ?>
                                                </th>
                                                <th>
                                                    <?php 
    $figure_actual1 = $this->db->query("SELECT sum(actual) as Actuals FROM cad_performance
     where year=$current_years and quarter_id=$yearQuarterSub->quarter_id and contract_disbursment=1")->row();
    echo  number_format($figure_actual1->Actuals,2);?>
                                                </th>

                                                <?php 

}?>

                                                <th>
                                                    <?php 
    $figure_projected2 = $this->db->query("SELECT sum(projected) as projecteded FROM cad_performance
     where year=$current_years and contract_disbursment=1")->row();

    echo  number_format($figure_projected2->projecteded,2);
    //echo $this->db->last_query();
    ?>
                                                </th>
                                                <th>
                                                    <?php 
    $figure_actual2 = $this->db->query("SELECT sum(actual) as Actuals FROM cad_performance
     where year=$current_years  and contract_disbursment=1")->row();
    echo  number_format($figure_actual2->Actuals,2);?>
                                                </th>


                                            </tr>


<!---------------------------------------------------------contratc_disbursement===2------------------------------------->
<?php 
                                        $proo=$this->db->query("select * from cad_product")->result();
                                        $a=0;
                                        foreach ($proo as $proo) { ?>
                                            <tr>
                                                <td><?php echo $proo->cad_product_name;?></td>
                                                <?php 
    
     
    $yearQuarter = $this->db->query("SELECT DISTINCT quarter_id  FROM cad_performance  where year=$prevYear and contract_disbursment=2")->result();
    $y1=0;
    $z1=0; 
    foreach ($yearQuarter as $yearQuarter) { ?>
                                                <td>
                                                    <?php 
    $figure_projected = $this->db->query("SELECT projected FROM cad_performance where year=$prevYear and quarter_id=$yearQuarter->quarter_id and cad_product_id=$proo->cad_product_id and contract_disbursment=2")->row();
    echo $y=$figure_projected->projected;
    ?>
                                                </td>
                                                <td>
                                                    <?php 
    $figure_actual = $this->db->query("SELECT actual FROM cad_performance where year=$prevYear and quarter_id=$yearQuarter->quarter_id and cad_product_id=$proo->cad_product_id and contract_disbursment=2")->row();
    echo $z=$figure_actual->actual;?>
                                                </td>

                                                <?php 
$y1+=$y;
$z1+=$z;
}?>

                                                <td>
                                                    <?php 
    echo $y1;
    ?>
                                                </td>
                                                <td>
                                                    <?php 
    echo $z1;?>
                                                </td>


                                                <?php 
    
     
    $yearQuarterc = $this->db->query("SELECT DISTINCT quarter_id  FROM cad_performance  where year=$current_years and contract_disbursment=2")->result();
    //echo $this->db->last_query();
    
   // foreach ($yearQuarterc as $yearQuarterc) { ?>

                                                <?php 
    
     
   
    $y11=0;
    $z11=0; 
    foreach ($yearQuarterc as $yearQuarterc) { ?>
                                                <td>
                                                    <?php 
    $figure_projected = $this->db->query("SELECT projected FROM cad_performance where year=$current_years and quarter_id=$yearQuarterc->quarter_id and cad_product_id=$proo->cad_product_id and contract_disbursment=2")->row();
    echo $y0=$figure_projected->projected;
    ?>
                                                </td>
                                                <td>
                                                    <?php 
    $figure_actual = $this->db->query("SELECT actual FROM cad_performance where year=$current_years and quarter_id=$yearQuarterc->quarter_id and cad_product_id=$proo->cad_product_id and contract_disbursment=2")->row();
    echo $z0=$figure_actual->actual;?>
                                                </td>

                                                <?php 
$y11+=$y0;
$z11+=$z0;
}?>

                                                <td>
                                                    <?php 
    echo $y11;
    ?>
                                                </td>
                                                <td>
                                                    <?php 
    echo $z11;?>
                                                </td>







                                                <?php }?>


                                            </tr>
                                            <tr>
                                                <th>Total Disbursment</th>
                                                <?php 
    
     
    $yearQuarterSub = $this->db->query("SELECT DISTINCT quarter_id  FROM cad_performance  where year=$prevYear")->result();
    //echo $this->db->last_query();
    
    foreach ($yearQuarterSub as $yearQuarterSub) { ?>
                                                <th>
                                                    <?php 
    $figure_projected1 = $this->db->query("SELECT sum(projected) as projecteded FROM cad_performance
     where year=$prevYear and quarter_id=$yearQuarterSub->quarter_id and contract_disbursment=2 ")->row();

    echo  number_format($figure_projected1->projecteded,2);
    //echo $this->db->last_query();
    ?>
                                                </th>
                                                <th>
                                                    <?php 
    $figure_actual1 = $this->db->query("SELECT sum(actual) as Actuals FROM cad_performance
     where year=$prevYear and quarter_id=$yearQuarterSub->quarter_id and contract_disbursment=2")->row();
    echo  number_format($figure_actual1->Actuals,2);?>
                                                </th>

                                                <?php 

}?>

                                                <th>
                                                    <?php 
    $figure_projected2 = $this->db->query("SELECT sum(projected) as projecteded FROM cad_performance
     where year=$prevYear and contract_disbursment=2")->row();

    echo number_format($figure_projected2->projecteded,2);
    //echo $this->db->last_query();
    ?>
                                                </th>
                                                <th>
                                                    <?php 
    $figure_actual2 = $this->db->query("SELECT sum(actual) as Actuals FROM cad_performance
     where year=$prevYear  and contract_disbursment=2")->row();
    echo number_format($figure_actual2->Actuals,2);?>
                                                </th>
    <!-----------------------------------current year sum---------------------------------------->


                                                <?php 
    
     
    $yearQuarterSub = $this->db->query("SELECT DISTINCT quarter_id  FROM cad_performance  where year=$current_years")->result();
    //echo $this->db->last_query();
    
    foreach ($yearQuarterSub as $yearQuarterSub) { ?>
                                                <th>
                                                    <?php 
    $figure_projected1 = $this->db->query("SELECT sum(projected) as projecteded FROM cad_performance
     where year=$current_years and quarter_id=$yearQuarterSub->quarter_id and contract_disbursment=2 ")->row();

    echo number_format($figure_projected1->projecteded,2);
    //echo $this->db->last_query();
    ?>
                                                </th>
                                                <th>
                                                    <?php 
    $figure_actual1 = $this->db->query("SELECT sum(actual) as Actuals FROM cad_performance
     where year=$current_years and quarter_id=$yearQuarterSub->quarter_id and contract_disbursment=2")->row();
    echo  number_format($figure_actual1->Actuals,2);?>
                                                </th>

                                                <?php 

}?>

                                                <th>
                                                    <?php 
    $figure_projected2 = $this->db->query("SELECT sum(projected) as projecteded FROM cad_performance
     where year=$current_years and contract_disbursment=2")->row();

    echo  number_format($figure_projected2->projecteded,2);
    //echo $this->db->last_query();
    ?>
                                                </th>
                                                <th>
                                                    <?php 
    $figure_actual2 = $this->db->query("SELECT sum(actual) as Actuals FROM cad_performance
     where year=$current_years  and contract_disbursment=2")->row();
    echo  number_format($figure_actual2->Actuals,2);?>
                                                </th>


                                            </tr>






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