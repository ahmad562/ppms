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
                                    <h5>Consulting Firms(QCBS) </h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
    <h2 style="margin-top:0pt; margin-left:53.5pt; margin-bottom:12pt; text-align:left; font-size:11pt;"><a name="_Toc148522785"></a>
    <a name="_Hlk134652522">Appendix-3: Consulting Recruitment Activity Monitoring</a></h2>
    <table cellspacing="0" cellpadding="0" style="width:954pt; margin-right:9pt; margin-left:9pt; border-collapse:collapse; float:left;">
        <thead>
            <tr style="height:7.15pt;">
                <td colspan="17" style="width:943.2pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><strong>Appendix-3-Table A3.1: Consulting Firms &ndash; Quality and Cost-Based Selection (QCBS)</strong></p>
                </td>
            </tr>
            
            <tr style="height:7.15pt;">
                <td rowspan="2" style="width:43.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#f2f2f2;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>Package</strong></p>
                </td>
                <td rowspan="2" style="width:47.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#f2f2f2;">
                    <p style="margin-top:0pt; margin-left:7pt; margin-bottom:0pt; font-size:10pt;"><strong>Name of Contract Package</strong></p>
                </td>
                <td rowspan="2" style="width:39.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#f2f2f2;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>Est. Amt.&nbsp;</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>($ million)</strong></p>
                </td>
                <td style="width:52.95pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#f2f2f2;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>&nbsp;</strong></p>
                </td>
                <td colspan="13" style="width:716.4pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#f2f2f2;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>Milestone Dates</strong></p>
                </td>
            </tr>

            <tr style="height:7.15pt;">
                <td style="width:52.95pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#f2f2f2;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>Planned/ Approved</strong></p>
                </td>
                <?php
                $x=0; 
            $firmsadb=$this->db->query("select * from hr_qcbs where hr_cfid=1 and planned_approved='Planned'")->result();
            foreach($firmsadb as $firmsadb){
            ?>
                <td style="width:60.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#f2f2f2;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>Submission <?php echo $x;?> to ADB</strong></p>
                </td>
                <td style="width:45.9pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#f2f2f2;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>ADB approval&nbsp;</strong></p>
                </td>
                <td style="width:38.8pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#f2f2f2;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>EOI Advert</strong></p>
                </td>
              <?php 
            $x++;
            }?>
                


                <td style="width:42.85pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#f2f2f2;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>Contract Negotiation</strong></p>
                </td>
                <td style="width:38.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#f2f2f2;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>Contract Award</strong></p>
                </td>
                <td style="width:36.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#f2f2f2;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>Intended Completion</strong></p>
                </td>
                <td style="width:62.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; background-color:#f2f2f2;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong>Awarded Amount</strong></p>
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong>($ million)</strong></p>
                </td>
            </tr>
        </thead>
        <tbody>
            <?php 
            error_reporting(0);
            $firms=$this->db->query("select * from hr_consulting_firms")->row();
            ?>
            <tr style="height:114.85pt;">
                <td rowspan="2" style="width:43.2pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firms->package;?></p>
                </td>
                <td rowspan="2" style="width:47.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firms->contract_package;?></p>
                </td>
                <td rowspan="2" style="width:39.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><?php echo $firms->est_amount_dollar;?></p>
                </td>
                <td style="width:52.95pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">Planned</p>
                </td>
            <?php 
            $firmsS=$this->db->query("select * from hr_qcbs where hr_cfid=$firms->hr_cfid and planned_approved='Planned'")->result();
            foreach($firmsS as $firmsS){
            ?>
                <td style="width:60.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><?php echo $firmsS->sub_adb?></p>
                </td>
                <td style="width:60.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><?php echo $firmsS->adb_approval?></p>
                </td>
                <td style="width:60.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><?php echo $firmsS->eoi_advert?></p>
                </td>

                <td style="width:45.9pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><?php echo $firmsS->negotiated?></p>
                </td>


                <td style="width:42.85pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmsS->awarded?></p>
                </td>
                <td style="width:38.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmsS->completed?></p>
                </td>
             
                <td style="width:36.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><?php echo $firmsS->awarded_amount?></p>
                </td>
                <?php }?>
               
            </tr>
            <tr style="height:7.15pt;">
                <td style="width:52.95pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">Actual</p>
                </td>
                <?php 
            $firmsA=$this->db->query("select * from hr_qcbs where hr_cfid=$firms->hr_cfid and planned_approved='Actual'")->result();
            foreach($firmsA as $firmsA){
                //echo $this->db->last_query();
            ?>
                <td style="width:60.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><?php echo $firmsA->sub_adb?></p>
                </td>
                <td style="width:60.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><?php echo $firmsA->adb_approval?></p>
                </td>
                <td style="width:60.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><?php echo $firmsA->eoi_advert?></p>
                </td>

                <td style="width:45.9pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><?php echo $firmsA->negotiated?></p>
                </td>


                <td style="width:42.85pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmsA->awarded?></p>
                </td>
                <td style="width:38.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><?php echo $firmsA->completed?></p>
                </td>
                
                <td style="width:36.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><?php echo $firmsA->awarded_amount?></p>
                </td>
                <?php }?>
            <?php 
            //$qcb_award=$this->db->query("select * from hr_qcbs_awarded where hr_cfid=$firms->hr_cfid")->row();
            ?>
              
              
            </tr>
        </tbody>
    </table>
   