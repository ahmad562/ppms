<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                    
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>ICRM Report</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
    <h2 style="margin-top:0pt; margin-left:53.5pt; margin-bottom:12pt; text-align:left; font-size:11pt;"><a name="_Toc148522785"></a><a name="_Hlk134652522">Appendix-3: Consulting Recruitment Activity Monitoring</a></h2>
    <table cellspacing="0" cellpadding="0" style="width:954pt; margin-right:9pt; margin-left:9pt; border-collapse:collapse; float:left;">
        <thead>
            <tr>
                <td colspan="14" style="width:852.85pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><strong>Appendix-3-Table A3.2: Individual Consultants Recruitment Monitoring</strong></p>
                </td>
            </tr>
            <tr>
                <td rowspan="2" style="width:46.65pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong>Package #</strong></p>
                </td>
                <td rowspan="2" style="width:87.15pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong>Name of Contract Package</strong></p>
                </td>
                <td rowspan="2" style="width:36.15pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong>Est. Amt.&nbsp;</strong></p>
                </td>
                <td style="width:46.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong>&nbsp;</strong></p>
                </td>
                <td colspan="9" style="width:532.15pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong>Milestone Dates</strong></p>
                </td>
                <td style="width:50.05pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong>&nbsp;</strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:46.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong>Planned/ Approved</strong></p>
                </td>
               
            <?php
               // $x=0; 
            //$firmsadb=$this->db->query("select * from hr_icrm where hr_in_package_id=1 and planned_approved='Planned'")->result();
            //foreach($firmsadb as $firmsadb){
            ?>
            <th style="width:44.25pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">Budget ADB</th>
            <th style="width:44.25pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">ADB Clear</th> 
            <th style="width:44.25pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">EOI Advert</th>

            <th style="width:44.25pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">Sub ADB (01)</th>
            <th style="width:44.25pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">ADB Approval (01)</th>
           
      
            
            <th style="width:44.25pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">Sub ADB (02)</th>
            <th style="width:44.25pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">ADB Approval (02)</th>
            <th style="width:44.25pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">Contract Sign</th>
            <th style="width:44.25pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">Intended Completion</th>
            <th style="width:44.25pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">Awarded Amount</th>
              <?php 
           // $x++;
            //}?>
         </tr>   
        </thead>
        <tbody>
<?php 
error_reporting(0);
            $firms=$this->db->query("select * from hr_individual_package")->result();
            foreach($firms as $firms){

    //$amttt=$this->db->query("select * from hr_icrm_awarded where hr_cfid=$firms->hr_in_package_id")->row();
          
            ?>
            <tr>
                <td rowspan="2" style="width:46.65pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firms->package;?></p>
                </td>
                <td rowspan="2" style="width:87.15pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firms->package_contract;?></p>
                </td>
                <td rowspan="2" style="width:36.15pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firms->package_amount;?></p>
                </td>
                <td style="width:46.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">Planned</p>
                </td>
                <?php 
            $firmss=$this->db->query("select * from hr_icrm where hr_in_package_id=$firms->hr_in_package_id and planned_approved='Planned'")->result();
            foreach($firmss as $firmss){
            ?>
               <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmss->budget_adb; ?></td>
                    <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmss->adb_clear; ?></td> 

               <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmss->eoi_advert; ?></td>

                <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmss->sub_adb_01; ?></td>
                    <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmss->adb_approval_01; ?></td>
                    
                   
                   
                    <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmss->sub_adb_02; ?></td>
                    <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmss->adb_approval_02; ?></td>
                    <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmss->contract_sign; ?></td>
                    <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmss->intended_completion; ?></td>
                    <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">

                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmss->awarded_amount; ?></td>
               
          
                </td>
              <?php }?>
              

            </tr>
          
            <tr>
                <td style="width:46.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">Actual</p>
                </td>
                <?php 
            $firmss=$this->db->query("select * from hr_icrm where hr_in_package_id=$firms->hr_in_package_id and planned_approved='Actual'")->result();
            foreach($firmss as $firmsss){
            ?>
                 <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmsss->budget_adb; ?></td>
                    <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmsss->adb_clear; ?></td> 

               <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmsss->eoi_advert; ?></td>

                <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmsss->sub_adb_01; ?></td>
                    <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmsss->adb_approval_01; ?></td>
                    
                   
                   
                    <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmsss->sub_adb_02; ?></td>
                    <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmsss->adb_approval_02; ?></td>
                    <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmsss->contract_sign; ?></td>
                    <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmsss->intended_completion; ?></td>
                    <td style="width:56.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">

                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmsss->awarded_amount; ?></td>
               
              <?php }?>
            </tr>
          
            <?php }?>
            
            
            
        </tbody>
    </table>
   