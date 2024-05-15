<?php $groupID=$this->session->userdata('groupid');?>
<table width="30%" cellspacing="0" cellpadding="0">
    <tr style="background-color:#218559; color:#fff">
        <td colspan="4" align="left">
            <strong>Documents Uploaded:
            </strong>
        </td>
    </tr>

    <?php 
        $filee="SELECT ipac_file_id,ipac_file_name,ipac_file_url,file_name  FROM 
        ppms_ipac_file where ipac_id=$ipc_iddd and ipac_remarks_id=$rid";
 $filess = $this->db->query($filee)->result();?>
    <tr>
        <?php $f=1;
 foreach($filess as $filess){
 ?>
        <td><?php echo $f;?></td>
        <td><?php echo $filess->file_name;?>
        </td>
        <td><?php echo $filess->ipac_file_name;?>
        </td>
        <td align="center">

            <a href="<?php echo base_url('img/upload_files/')?><?php echo $filess->ipac_file_url;?>">
                <img src="<?php echo base_url('img/download.jpg')?>" width="20px" height="20px">
            </a>
            <?php 
                                            
            ///if($groupID == 5 or $groupID == 6 or $groupID == 1 or $groupID == 2){?>

            <a href="javascript:" onClick="delete_files_backward(<?php echo $filess->ipac_file_id;?>,<?php echo $ipc_iddd;?>,<?php echo $rid;?>)">
                <img src="<?php echo base_url('img/delete.jpg')?>" width="30px" height="30px">
            </a>
            <?php ///}?>
        </td>


    </tr>
    <?php 
                                                                        $f++;
                                                                        }?>


    </form>

</table>