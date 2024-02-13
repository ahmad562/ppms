<?php if($status_id!=1){ ?>
    
        <div class="col-6" >
            <div class="form-group">
               <label>CNIC:</label>
<input type="text" name="cnic" id="cnic<?php echo $dp_id ?>" class="form-control">
<input type="hidden" id="attern" class="form-control" value="<?php echo $dp_id ?>"></div>
            </div>
        <div class="col-6">
            <div class="form-group">
            <div style="margin-top: 25px;margin-left: -20px;">
                <button class="btn btn-primary"  onclick="attorney(<?php echo $dp_id ?>)" class="form-control">Filter</button>
            </div>
        </div>
        </div>

        <?php } ?>