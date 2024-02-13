<?php
                
                $doc=$this->db->query("select ss_doc_detail_id from ppms_ss_land_detail where ss_land_detail_id=$description_id")->row();

                $desc=$doc->ss_doc_detail_id;
                 
                $bor_A = $this->db->query("SELECT * FROM ppms_ss_land_record where ss_dp_id=$ss_dp_id AND ss_doc_detail_id=$desc")->row();

                $ivs_A = $this->db->query("SELECT * FROM ppms_ss_nonland_record where ss_dp_id=$ss_dp_id AND ss_nonlandtype_id=2")->row();

                $ivs_fruit = $this->db->query("SELECT * FROM ppms_ss_nonland_record where ss_dp_id=$ss_dp_id AND ss_nonlandtype_id=1")->row();  

                ?>

                <div class="col-12">

                  <h3>Land</h3>
                </div>
                <div class="col-12">
                   <center><h5>BOR Amount = <?php echo $bor_A->ss_lrecord_bor_totalamount;?> RS</h5></center>
                </div>
                 <div class="col-12">
                    <center><h5>IVS Amount = <?php echo $bor_A->ss_lrecord_ivs_totalamount;?> RS</h5></center>
                </div>
                <?php if($ivs_A){?>
               
                <div class="col-12">
                  <h3>Non Land Crops</h3>
                </div>
                <div class="col-12">
                   <center><h5>BOR Amount = <?php echo $ivs_A->ss_nlrecord_bortotalamount;?> RS</h5></center>
                </div>
                 <div class="col-12">
                    <center><h5>IVS Amount = <?php echo $ivs_A->ss_nlrecord_ivstotalamount;?> RS</h5></center>
                </div>
                <?php  } ?>

                <?php if($ivs_fruit){?>
               
                <div class="col-12">
                  <h3>Non Land Fruit Trees</h3>
                </div>
                <div class="col-12">
                   <center><h5>BOR Amount = <?php echo $ivs_fruit->ss_nlrecord_bortotalamount;?> RS</h5></center>
                </div>
                 <div class="col-12">
                    <center><h5>IVS Amount = <?php echo $ivs_fruit->ss_nlrecord_ivstotalamount;?> RS</h5></center>
                </div>
                <?php  } ?>