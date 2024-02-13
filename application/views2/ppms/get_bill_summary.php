<div class="col-sm-12">
    <!-- Zero config.table start -->
    <div class="card">
        <div class="card-header">
            <h5>Bill Summary Records</h5>
            <span></span>

        </div>
        <?php
			   error_reporting(0);
			   
            
                  $item = $this->db->query("
                  SELECT * 
                  FROM 
                
                  ppms_subproject AS a,
                  ppms_subproject_area AS b,
                  ppms_project AS c,
                  ppms_sector AS d,
                  ppms_output_list AS e
                   WHERE a.`subproject_id`=b.`subproject_id` AND
                  a.`project_id`=c.`project_id` AND 
                  c.`sector_id`=d.`sector_id` AND 
                  d.`output_id`=e.`output_id`
                  and a.subproject_id=$sub_project_id
                  and b.project_area_id=$sub_sub_project_id
                  ")->row();
                 ?>

        <div class="card-block">
            <div class="dt-responsive table-responsive">
                <table class="table table-bordered">
                    <thead>

                        <tr>
                            <td><b>Project Name </b></td>
                            <td><b><?php echo $item->output_name;?>/

                                    <?php echo $item->sector_name;?>/

                                    <?php echo $item->project_name;?>/




                                    <?php echo $item->subproject_name;?>/

                                    <?php echo $item->project_area_name;?></b></td>
                        </tr>
                    </thead>
                </table>


                <?php 
                                                        
                                                        $main = $this->db->query("SELECT pb.sub_sub_project_id,project_area_name
                                                        FROM `ppms_billsummary` as pb,ppms_subproject_area as ps
                                                        WHERE pb.subproject_id=$sub_project_id
                                                        and ps.project_area_id=$sub_sub_project_id
                                                        and pb.sub_sub_project_id=ps.project_area_id
                                                        group by pb.sub_sub_project_id")->result();
                                        foreach($main as $main){
                                        ?>
                <h2><?php echo $main->project_area_name;?> </h2>
                <table width="100%" border="5" cellspacing="0" cellpadding="0">



                    <tbody>


                        <?php
                                        error_reporting(E_ALL);
                                        
                                        $i=1; 
                                        $result1 = $this->db->query("SELECT * FROM ppms_billsummary_category")->result();
                                        foreach($result1 as $item){?>
                        <tr style="background-color:#000; color:#fff">
                            <td colspan="3">
                                <h4>
                                    <font color="white">(<?php echo $i;?>)
                                        <?php echo $item->billsummary_category_name;?>
                                    </font>
                                </h4>
                            </td>



                        </tr>
                        <tr>
                            <td>
                                <table style="width:100%" cellpadding="0" cellspacing="0" border="5">
                                    <thead>
                                        <tr style="background-color:#218559; color:#fff">
                                            <th style="width:10%">
                                                Bill# </th>
                                            <th style="width:30%">
                                                Bill Summary
                                                Description
                                            </th>
                                            <th style="width:10%">
                                                BOQ
                                            </th>

                                            <th>
                                                <table class="table">
                                                    <tr>
                                                        <?php 
         
        $maxii="SELECT distinct(grp_id) as grppp  FROM `bill_summary_amount` WHERE `subproject_id`=$sub_project_id AND `sub_sub_project_id`=$sub_sub_project_id";
        $maxiii=$this->db->query($maxii)->result();
        foreach($maxiii as $maxiii){?>
                                                        <td width="10%">VO <?php echo $maxiii->grppp;?></td>
                                                        <?php }?>
                                                </table>
                                            </th>
                                            <?php /*?>
                                            <th>
                                                <table class="table">
                                                    <tr>
                                                        <?php 
         
        $tot_ipc="SELECT distinct(ipc_id) as ipc_ids FROM `ppms_ipc_billsummary` WHERE `subproject_id`=$sub_project_id AND `sub_subproject_id`=$sub_sub_project_id";
        $tot_ipc=$this->db->query($tot_ipc)->result();
        $ipcxx=1;
        foreach($tot_ipc as $tot_ipc){?>
                                                        <td width="10%">IPC<?php echo $ipcxx;echo "<br>";
        echo "(".$tot_ipc->ipc_ids.")";?></td>
                                                        <?php 
                                                                            $ipcxx++;
                                                                            }?>
                                                </table>
                                            </th>
                                            <?php */?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        error_reporting(0);
                                        
                                        
                                        $result1 = $this->db->query("SELECT * FROM ppms_billsummary as a,ppms_billsummary_category as b
                                        where a.billsummary_category_id=b.billsummary_category_id
                                        and a.billsummary_category_id=$item->billsummary_category_id 
                                        and subproject_id=$sub_project_id and sub_sub_project_id=$main->sub_sub_project_id
                                         order by sid asc
                                        ")->result();
                                        $j=1;
                                        $d1=0;
                                        foreach($result1 as $item){?>
                                        <tr>





                                            <td>
                                                <?php //echo $i;?><?php echo $item->billsummary_no;?>
                                            </td>
                                            <td style="width:30%">
                                                <?php  $text=$item->billsummary_desc;
                                                                                echo wordwrap($text, 50, "<br />\n");
                                                                                 //echo chunk_split ($str, 5, "\r\n");
                                                                                //echo preg_replace("/(.{10})/", "$1\n\r", $str);
                                                                                ?>
                                            </td>

                                            <td><b><?php echo number_format($item->billsummary_amt,6);?></b>

                                                <?php /*?> <input type="text" placeholder="Enter More Amount"
                                                    onBlur="add_amount(this.value,<?php echo $item->billsummary_id?>,<?php echo $sub_project_id;?>,<?php echo $main->sub_sub_project_id;?>)"
                                                    required id="bs_amount" class="form-control" name="bs_amount"
                                                    tabindex="1">
                                                <?php */?>

                                            </td>
                                            <td>
                                                <table class="table">
                                                    <tr>

                                                        <?php $resultGRP = $this->db->query("SELECT distinct(grp_id) as grpID_name
                                        FROM bill_summary_amount 
                                        where subproject_id=$sub_project_id and sub_sub_project_id=$main->sub_sub_project_id
                                         
                                        ")->result();
                                       
                                        foreach($resultGRP as $resultGRP){?>
                                                        <td width="6%">
                                                            <?php 
                                            $dipee = $this->db->query("select * from 
                                            bill_summary_amount where billsummary_id=$item->billsummary_id and grp_id=$resultGRP->grpID_name")->row();
                                            echo number_format($dipee->amount,2);
                                            ?>

                                                        </td>

                                                        <?php }?>
                                                    </tr>
                                                </table>
                                            </td>
<?php /*?>
                                            <th>
                                                <table class="table">
                                                    <tr>
                                                        <?php 
         
        $tot_ipc1="SELECT distinct(ipc_id) as ipc_ids  FROM ppms_ipc_billsummary WHERE `subproject_id`=$sub_project_id AND `sub_subproject_id`=$sub_sub_project_id";
        $tot_ipc1=$this->db->query($tot_ipc1)->result();
        foreach($tot_ipc1 as $tot_ipc12){?>
                                                        <td width="10%">
                                                            <?php 
     $tot_ipc2 = $this->db->query("select * from 
                                            ppms_ipc_billsummary where billsummary_id=$item->billsummary_id 
                                            and ipc_id=$tot_ipc12->ipc_ids")->row();
                                            echo number_format($tot_ipc2->ipc_bs_amount,2);
                                            ?>

                                                        </td>
                                                        <?php }?>
                                                </table>
                                            </th>
<?php */?>

                                            <?php 
$x++;
}?>
                                        </tr>

                                </table>
                            </td>

                        </tr>
                        <?php
                                                            
                                                         
                                        $j++;
                                        $d1=$d1+$d; 
                                        
                                        } 
                                         $totttt=$d1;
                                       
                                        ?>


                    </tbody>
                    <tfoot>
                </table>
                </td>

                </tr>

                <?php
                                        $i++;
                                        } 
                                        
                                        
                                        
                                        ?>





                </tr>



                <?php /*?>




                <table id="simpletable" class="table table-bordered ">
                    <thead>
                        <tr>

                            <th>No</th>
                            <th> Category</th>

                            <th> Description</th>
                            <th>Civil <br> Work</th>

                            <th>Amount</th>
                            <th>Add More <br>Amount</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("
                  SELECT 
                  * 
                  FROM 
                  ppms_billsummary AS a,
                  ppms_billsummary_category AS b,
                  ppms_subproject AS c,
                  ppms_subproject_area AS psa,
                  ppms_project AS pp,
                  ppms_sector AS ps,
                  ppms_output_list AS pol
                  

                  WHERE a.billsummary_category_id=b.billsummary_category_id
                  AND a.subproject_id=c.subproject_id
                  AND a.sub_sub_project_id=psa.project_area_id
                  AND c.`project_id`=pp.project_id
                  AND pp.sector_id=ps.sector_id
                  AND ps.`output_id`=pol.`output_id`
                  and a.subproject_id=$sub_project_id
                  and a.sub_sub_project_id=$sub_sub_project_id
                  order by a.sid asc
                  ")->result();
                  foreach($result1 as $item){?>
                        <tr class="gradeX">


                            <td><?php echo $item->billsummary_no;?></td>
                            <td><?php echo wordwrap($item->billsummary_category_name,10, "<br />\n");?>
                            </td>


                            <td><?php echo wordwrap($item->billsummary_desc,10, "<br />\n");
                                                    ?></td>

                            <td>Amount</td>
                            <td><?php echo $item->billsummary_amt;?></td>


                            <td colspan="3"><input type="text" placeholder="Enter More Amount"
                                    onBlur="add_amount(this.value,<?php echo $item->billsummary_id?>)" required
                                    id="bs_amount" class="form-control" name="bs_amount" tabindex="1">

                                <table class="table table-bordered">
                                    <tr>
                                        <td>SerialNo</td>
                                        <td>Amount</td>
                                        <td>Remove</td>
                                    </tr>
                                    <?php  $dipee = $this->db->query("select * from bill_summary_amount where billsummary_id=$item->billsummary_id")->result();
                           $x=1;
                           foreach($dipee as $dipee){
                            ?>

                                    <tr>
                                        <td><?php echo $x?></td>
                                        <td><?php echo $dipee->amount;?></td>
                                        <td><a href="javascript:" onClick="delete_bill(<?php echo $dipee->bs_id;?>)">
                                                <img src="<?php echo base_url('img/delete.png')?>" width="30px"
                                                    height="30px">
                                            </a>
                                        </td>
                                    </tr>
                                    <?php 
$x++;
}?>
                                </table>


                            </td>

                        </tr>
                        <?php
 $i++;
 } ?>
                    </tbody>
                    <tfoot>
                </table>
                <?php */?>
            </div>
        </div>
    </div>
    <!-- Zero config.table end -->





</div>