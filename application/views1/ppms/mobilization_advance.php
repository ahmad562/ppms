<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Mobilization Advance</h4>

                    </div>
                    <div class="page-header-breadcrumb">

                    </div>
                </div>
                <!-- Page-header end -->
                <?php
			       $rowss = $this->db->query("SELECT * FROM ppms_ipac where ipac_id=$id")->row();

                   $rowss = $this->db->query("SELECT * FROM ppms_project as pp,ppms_subproject as pps
                   where pp.project_id=pps.project_id
                   and subproject_id=$rowss->subproject_id")->row();

                  
                 ?>
                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-block">
                                
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table  table-bordered nowrap">
                                            <thead>
                                                <tr>
                                        <th colspan="3">Project Name: <?php echo  $rowss->project_name."-".$rowss->subproject_name?></th>
                                                    
                                                   
                                                </tr>
                    <?php $MobilizationAdvance=$this->db->query("SELECT sum(ipac_amount) as total_mob 
                    FROM ppms_ipac where subproject_id=$rowss->subproject_id and certificate_type='Mobilization'")->row();
                    
                    //$MobilizationAdvance = $this->db->query("SELECT mobilization_advance_amount FROM ppms_subproject 
                    //where $rowss->subproject_id")->row();

                   ?>
                                        <tr>
                                        <th colspan="3">Mobilization Advance : <?php  $totiii=$MobilizationAdvance->total_mob;
                                        echo number_format($totiii,2);
                                        ?></th>
                                                    
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                 <?php 
                 $i=1;
                 $taxiii1=0;
                 $subProject=$this->db->query("SELECT * FROM ppms_ipac where subproject_id=$rowss->subproject_id and certificate_type='IPA/IPC'")->result();
                   foreach($subProject as $subProject){?>
                                                <tr class="gradeX">
                                    <td><?php echo $i;?></td>
                                    <td><?php echo $subProject->ipc_no?></td>
                                    <td><?php echo number_format($subProject->ipac_amount,2)?></td>

                                    <td><?php 
                                    $done230=$this->db->query("select * from ppms_gross_payment 
                                    where ipc_id=$subProject->ipac_id
                                    and verified=2 and add_less=0")->row();
	                               if(!$done230){
                                    echo $taxiii=0;
                                   }else{
                                     $taxiii=$done230->gross_payment;
                                    echo number_format(  $taxiii,2);
                                   }?></td>


                                                </tr>
                                                <?php 
                                            $i++;
                                            $taxiii1=$taxiii1+$taxiii;
                                            }?>
                                                  
<tr><td colspan="3"><b>Total</b></td>
<td>
<b>
<?php 
echo number_format($totiii - $taxiii1,2);
?></b>

</td></tr>