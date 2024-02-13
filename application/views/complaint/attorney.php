
<?php $result2 = $this->db->query("SELECT * FROM ppms_ss_db AS psd,ppms_dp_city AS pdc WHERE pdc.city_id=psd.city_id AND psd.ss_dp_cnic=$cnic")->row();
 if($result2){?>
      <table class="table table-bordered">
			
			<tr>
				<th>Full Name </th><td><?php echo $result2->ss_dp_fullname;?></td>
                <th>Full Name(urdu):</th><td><?php echo $result2->ss_dp_fh;?></td>
            </tr>

            <tr>
                <th>Address</th><td><?php echo $result2->ss_dp_address;?></td>
                <th>Cnic</th><td><?php echo $result2->ss_dp_cnic;?></td>
                </tr>
                 <tr>
                <th>City</th><td><?php echo $result2->city_name;?></td>
                <th>Parent</th><td><?php echo $result2->ss_dp_parent_id;?></td>
            </tr>
		</table>
		
			<input type="hidden" name="attern" id="attern<?php echo $attern; ?>"  value="<?php echo $attern; ?>">
			 <input type="hidden" name="parent" id="parentt<?php echo $attern; ?>" value="<?php echo $result2->ss_dp_id;?>">
			
		
<?php }else{
	echo "No found";
} ?>

	