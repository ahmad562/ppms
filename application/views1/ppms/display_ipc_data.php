<table width="100%" border="5" cellspacing="0" cellpadding="0">

    <tbody>

        <?php
error_reporting(0);

$i=1; 
   $result1 = $this->db->query("SELECT * FROM ppms_billsummary_category")->result();
   foreach($result1 as $item){?>
        <tr style="background-color:#1ABC9C">
            <td colspan="3">
                <h4>
                    <font color="white">(<?php echo $i;?>)
                        <?php echo $item->billsummary_category_name;?></font>
                </h4>
            </td>



        </tr>
        <tr>
            <td width="100%">
                <table width="100%" cellpadding="0" cellspacing="0" border="5">
                    <thead>
                        <tr>
                            <th width="10%">Bill# </th>
                            <th width="70%">Bill Summary Description</th>
                            <th width="20%">Bill Summary Amount</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
error_reporting(0);


   $result1 = $this->db->query("SELECT * FROM ppms_billsummary as a,ppms_billsummary_category as b
   where a.billsummary_category_id=b.billsummary_category_id
   and a.billsummary_category_id=$item->billsummary_category_id and subproject_id=$id and sub_sub_project_id=$ssid order by sid asc
   ")->result();
   ///echo $this->db->last_query();
   $j=1;
   foreach($result1 as $item){?>
                        <tr class="gradeX">





                            <td>
                                <?php //echo $i;?><?php echo $item->billsummary_no;?>
                            </td>
                            <td>
                                <?php $text=$item->billsummary_desc;
                                
                                echo wordwrap($text, 50, "<br />\n");
                                ?>
                            </td>
                            <td>
                                <input type="hidden" placeholder="Enter IPAC Amount" required id="billsummary_id"
                                    class="form-control" name="billsummary_id[]"
                                    value="<?php echo $item->billsummary_id;?>">

                                <input type="text" placeholder="Enter IPAC Amount" required
                                    id="billsummary_amount<?php echo $item->sid;?>" class="form-control"
                                    name="billsummary_amount[]" value="0" onKeyup="calculate_grand_total()"
                                    onBlur="calculate_grand_total()">

                            </td>



                        </tr>
                        <?php
                        
                        
$j++;
} 

?>

                    </tbody>
                    <tfoot>
                </table>
            </td>

        </tr>
        <?php
 
$i++;
} 

$totiiii = $this->db->query("SELECT count(*) as tot_rec FROM ppms_billsummary
   where subproject_id=$id and sub_sub_project_id=$ssid ")->row();
   ///echo $this->db->last_query();

?>
        <input type="hidden" required id="sid_tot" class="form-control" name="sid_tot"
            value="<?php echo $totiiii->tot_rec;?>">


        <tr>
            <td><b>
                    <font color="red">Amount (in PKR) Million</font>
                </b>
                <input type="text" name="ipac_amount420" placeholder="Enter IPAC Amount" required id="ipac_amount"
                    class="form-control" style="width:200px;float:right;margin-top:0px">
            </td>
        </tr>

    </tbody>
</table>