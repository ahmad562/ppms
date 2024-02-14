<style>
table {
    width: 100%;
    border-collapse: collapse;
}

th,
td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
    /* Center horizontally */
    vertical-align: middle;
    /* Center vertically */
}
</style>

<?php 
                         $result2 = $this->db->query("SELECT * FROM 
                    ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp
                    where ppi.subproject_id=ppsp.subproject_id
                    and ppsp.project_id=ppp.project_id and ipac_id=$id
                    ")->row();
                   
                   ?>

<h5><?php echo $result2->project_name."-".$result2->subproject_name;?> Payment
    Certificate # <?php echo $result2->ipc_no; ?> Covering IPC# <?php echo $result2->ipc_no;?></h5>





<table border="1" width="100%" Cellspacing="0" cellpadding="0">
    <tr>

        <th>Description</th>
        <th>Tax(%)</th>
        <th>PKR</th>
        <th>Remarks</th>
    </tr>
    <tr>

        <td>Amount Claimed by Contractor of Escation Payment Certificate NO.
            <?php echo $id; ?>
        </td>
        <td align="center">-</td>
        <td><?php echo number_format($result2->ipa_amount,2); ?></td>
        <td align="center">
            <?php /*?><textarea name="remarks" class="form-control">

                                                    </textarea>
            <?php */?>
        </td>
    </tr>

    <tr>
        <td>Amount of IPC#. <?php echo $id; ?> By the Engineer</td>
        <td align="center">-</td>
        <td><?php echo number_format($result2->ipac_amount,2); ?></td>
        <td align="center">

            <?php /*?><textarea name="remarks" class="form-control">

                                                    </textarea><?php */?></td>
    </tr>
    <tr>
        <td><b>Add</b> </td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <?php 
$doneee=$this->db->query("select * from ppms_gross_payment as pgp,certificate_tax as ct
 where verified=1 and pgp.add_less=1 and pgp.ctp_id=ct.ctp_id and pgp.ipc_id=$id")->result();
$x=1;
$kifi1=0;
foreach($doneee as $row){
?>
    <tr>
        <td> (<?php echo $x; ?>)
            <?php echo $row->ctp_option; ?></td>
        <td>

            <?php echo $row->ctp_attribute?>
        </td>
        <td>
            <?php $kifi11=$row->gross_payment;
                                                         echo number_format($row->gross_payment,2);?>
        </td>
        <td align="center">
            <?php 
                                                        echo $row->remarks;
                                                        
                                                        
                                                        ?>
        </td>
    </tr>
    <?php 
                                                $kifi1=$kifi1+$kifi11;
$x++;
}?>
    <tr>
        <td colspan="2"><strong>Gross Amount Payable of this IPC
                No.<?php echo $id;?></strong></td>
        <td> <b><?php echo number_format($kifi1,2);?></b></td>
    </tr>
    <tr>
        <td><b>Less</b> </td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <?php 
$doneeeL=$this->db->query("select * from ppms_gross_payment as pgp,certificate_tax as ct
 where verified=1 and pgp.add_less=0 and pgp.ctp_id=ct.ctp_id")->result();
$l=1;
$b=0;
foreach($doneeeL as $rowL){
?>
    <tr>
        <td> (<?php echo $l; ?>)
            <?php echo $rowL->ctp_option; ?></td>
        <td>

            <?php echo $rowL->ctp_attribute?>
        </td>
        <td>

            <?php 
                                                        $b1=$rowL->gross_payment;
                                                        echo number_format($rowL->gross_payment,2);?>
        </td>
        <td align="center">
            <?php 
                                                        echo $rowL->remarks;
                                                        
                                                        
                                                        ?>
        </td>
    </tr>
    <?php 
                                                $b=$b+$b1;
$l++;
}?>

    <tr>
        <td colspan="2"><strong>Total Deductions
            </strong></td>
        <td> <b><?php echo number_format($b,2);?></b></td>
    </tr>
    <tr>
        <td colspan="2"><strong>Net Payable Amount
            </strong></td>
        <td> <b><?php echo number_format(($kifi1-$b),2);?></b></td>
    </tr>
    <?php 
if($orgName->organization_id==3){
//echo $orgName->organization_id;
?>
    <tr>
        <td><b>Amount verified by PMU this IPC No.<?php echo $id;?></b></td>
        <td>-</td>
        <td>
            <b> <?php echo number_format($kifi1,2);?></b>
        </td>

    </tr>
    <tr>
        <td><b>Add</b> </td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <?php 
$doneee=$this->db->query("select * from ppms_gross_payment as pgp,certificate_tax as ct
 where verified=2 and pgp.add_less=1 and pgp.ctp_id=ct.ctp_id")->result();
$x=1;
$c=0;
foreach($doneee as $row){
?>
    <tr>
        <td> (<?php echo $x; ?>)
            <?php echo $row->ctp_option; ?></td>
        <td>

            <?php echo $row->ctp_attribute?>
        </td>
        <td>

            <?php 
                                                        $c1=$row->gross_payment;
                                                        echo number_format($row->gross_payment,2);?>
        </td>
        <td align="center">
            <?php 
                                                        echo $row->remarks;
                                                        ?>
        </td>
    </tr>
    <?php 
                                                $c=$c+$c1;

$x++;
}?>
    <tr>
        <td>Gross Amount Payable</td>
        <td>-</td>
        <td><b><?php echo $c;?></b></td>
    </tr>
    <tr>
        <td><b>Less</b> </td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
    </tr>
    <?php 
$doneeeL=$this->db->query("select * from ppms_gross_payment as pgp,certificate_tax as ct
 where verified=2 and pgp.add_less=0 and pgp.ctp_id=ct.ctp_id")->result();
 $d=0;
$l=1;
foreach($doneeeL as $rowL){
?>
    <tr>
        <td> (<?php echo $l; ?>)
            <?php echo $rowL->ctp_option; ?></td>
        <td>

            <?php echo $rowL->ctp_attribute?>
        </td>
        <td>

            <?php 
                                                        $d1=$rowL->gross_payment;
                                                        echo number_format($rowL->gross_payment,2);?>
        </td>
        <td align="center">
            <?php 
                                                        echo $rowL->remarks;
                                                        
                                                        
                                                        ?>
        </td>
    </tr>
    <?php 
                                                $d=$d+$d1;
$l++;
}?>

    <?php }?>
    <tr>
        <td><b>Total Deductions</b></td>
        <td>-</td>
        <td><b><?php echo $d1;?></b></td>
    </tr>
    <tr>
        <td><b>Net Payable</b></td>
        <td>-</td>
        <td><b><?php echo $c-$d;?></b></td>
    </tr>
</table>

<script type="text/javascript">
window.print();
</script>