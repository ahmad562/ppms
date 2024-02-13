 <table>
 
 <tbody id="group_sms" style="display:none">
            <tr>
                <td><label for="phone_no">SMS Group Name:</label></td>
                <td><input type="text" id="sms_group_name" name="sms_group_name" required class="form-control"></td>
            </tr>
            <tr>
                <td><label for="org_id">Organization:</label></td>
                <td><select id="org_id" name="org_id" required class="form-control">
                        <option value="">Select Organization</option>
                        <?php 
                        //onBlur="add_more_sms_record(this.value)"
                        $organizations=$this->db->query("select * from organization")->result();
                        foreach ($organizations as $organization): ?>
                            <option value="<?php echo $employee->organization_id; ?>"><?php echo $organization->organization_name; ?></option>
                        <?php endforeach; ?>
                    </select></td>
            </tr>
            </tbody>
 </table>