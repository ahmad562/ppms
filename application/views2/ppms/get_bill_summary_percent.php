<div class="col-sm-12">
    <!-- Zero config.table start -->
    <div class="card">
        <div class="card-header">
            <h5>Physical Progress</h5>
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

                  $subID=$sub_project_id;
                  $subsubID=$sub_sub_project_id;

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
                                                        WHERE pb.subproject_id=$subID
                                                        and ps.project_area_id=$subsubID
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
                                            <th style="width:20%">
                                                Bill Summary
                                                Description
                                            </th>
                                            <th style="width:5%">
                                                BOQ
                                            </th>

                                           
                                            
                                            <th style="width:65%">
                                                <table style="width:100%" border="1" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <?php 
         
        $tot_ipc="SELECT distinct(ipc_id) as ipc_ids FROM `ppms_ipc_billsummary` WHERE `subproject_id`=$subID AND `sub_subproject_id`=$subsubID";
        $tot_ipc=$this->db->query($tot_ipc)->result();
        $ipcxx=1;
        foreach($tot_ipc as $tot_ipc){?>
                                                        <td style="width:25%">IPC<?php echo $ipcxx;echo "<br>";
        echo "(".$tot_ipc->ipc_ids.")";?></td>
                                                        <?php 
                                                                            $ipcxx++;
                                                                            }?>
                                                </table>
                                            </th>
<th>Financial Progress<br>
%
</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        error_reporting(0);
                                        
                                        
                                        $result1 = $this->db->query("SELECT * FROM ppms_billsummary as a,ppms_billsummary_category as b
                                        where a.billsummary_category_id=b.billsummary_category_id
                                        and a.billsummary_category_id=$item->billsummary_category_id 
                                        and subproject_id=$subID and sub_sub_project_id=$subsubID
                                         order by sid asc
                                        ")->result();
                                        $j=1;
                                        $d1=0;
                                        foreach($result1 as $item){?>
                                        <tr>





                                            <td>
                                                <?php //echo $i;?><?php echo $item->billsummary_no;?>
                                            </td>
                                            <td style="width:20%" align="left">
                                                <?php  $text=$item->billsummary_desc;
                                                                                echo wordwrap($text, 50, "<br />\n");
                                                                                 //echo chunk_split ($str, 5, "\r\n");
                                                                                //echo preg_replace("/(.{10})/", "$1\n\r", $str);
                                                                                ?>
                                            </td>

                                      

                                                <?php /*?>     </b> <td><b><?php echo number_format($item->billsummary_amt,6);?> <input type="text" placeholder="Enter More Amount"
                                                    onBlur="add_amount(this.value,<?php echo $item->billsummary_id?>,<?php echo $sub_project_id;?>,<?php echo $main->sub_sub_project_id;?>)"
                                                    required id="bs_amount" class="form-control" name="bs_amount"
                                                    tabindex="1">
                                                <?php */?>

                                        
                                            
                                            <td style="width:5%">
                                            <?php 
                                                            
                    $maxii="SELECT amount FROM bill_summary_amount 
                    WHERE `subproject_id`=$subID AND `sub_sub_project_id`=$main->sub_sub_project_id  AND billsummary_id=$item->billsummary_id
                    AND grp_id=(
                    SELECT MAX(grp_id) FROM `bill_summary_amount`
                    WHERE `subproject_id`=$subID AND `sub_sub_project_id`=$main->sub_sub_project_id AND billsummary_id=$item->billsummary_id
                    )";
                                                            $maxiii=$this->db->query($maxii)->row();
                                                            $newVAL=$maxiii->amount;
                                                            if($newVAL >=1){
                                                            echo $newVAL=$maxiii->amount;
                                                                                                    
                                                            }else{
                                                             echo 0;   
                                                            }?>
                                                            </td>

                                            </td>

                                         
<td style="width:65%">
                                         <table style="width:100%" border="1" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <?php 
         
        $tot_ipc1="SELECT distinct(ipc_id) as ipc_ids  FROM ppms_ipc_billsummary WHERE `subproject_id`=$subID AND `sub_subproject_id`=$subsubID";
        $tot_ipc1=$this->db->query($tot_ipc1)->result();
        foreach($tot_ipc1 as $tot_ipc12){?>
                              <td style="width:25%">
                                                            <?php 
     $tot_ipc2 = $this->db->query("select * from 
                                            ppms_ipc_billsummary where billsummary_id=$item->billsummary_id 
                                            and ipc_id=$tot_ipc12->ipc_ids")->row();
                                           // echo $tot_ipc2->ipc_bs_amount;
                                            echo number_format($tot_ipc2->ipc_bs_amount,2);
                                            ?>
</td>
                                                        <?php }?>
                                                </table>
                                            </td>

                                            <td><?php 
     $tot_data = $this->db->query("select sum(ipc_bs_amount) as tot_ipc_amt from 
                                            ppms_ipc_billsummary where  billsummary_id=$item->billsummary_id
                                           ")->row();
                                           //echo $this->db->last_query();
                                            $totikifiii=(($tot_data->tot_ipc_amt/$newVAL)*100);
                                            echo number_format($totikifiii,2);
                                            ?></td>



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

                                    </table>

