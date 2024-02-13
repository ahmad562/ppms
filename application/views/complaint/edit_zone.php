<div class="pcoded-content">
    <div class="pcoded-inner-content">
<?php $result = $this->db->query("SELECT * FROM grc_zone_tbl AS gzt,ppms_sector AS ps,organization AS o,ppms_project AS pp,ppms_subproject AS psp Where gzt.sector_id=ps.sector_id AND gzt.organization_id=o.organization_id AND gzt.project_id=pp.project_id AND gzt.subproject_id=psp.subproject_id AND zone_id=$aid")->row(); ?>
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display zone</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                    </div>
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5> zone Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                         class="dt-responsive table-responsive">
                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>SerialNo </th>
                                                            <th>Zone Name</th>
                                                            <th>Organization Name</th>
                                                            <th>Sector</th>
                                                            <th>Project</th>
                                                            <th>Subproject</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
         error_reporting(0);
         
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM grc_zone_tbl AS gzt,ppms_sector AS ps,ppms_project AS pp,ppms_subproject AS psp Where gzt.sector_id=ps.sector_id AND gzt.project_id=pp.project_id AND gzt.subproject_id=psp.subproject_id")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
                        <td><?php echo $i;?></td>
                        <td><?php echo $item->zone_name;?></td>
                        <td><?php echo $item->organization_name;?></td>
                        <td><?php echo $item->sector_name;?></td>
                        <td><?php echo $item->project_name;?></td>
                        <td><?php echo $item->subproject_name;?></td>
                        
        <td><a href="<?php echo base_url()?>complaint/edit_zone/<?php echo $item->zone_id;?>">
       <img src="<?php echo base_url()?>img/edit.PNG"
             width="30px" height="30px" /> </a>
                                                            </td>
                                                        </tr>
                                                        <?php
 $i++;
 } ?>
                                                    </tbody>
                                                    <tfoot>
                                                </table>
          </div>
                            </div>
                        </div>
                        <!-- Zero config.table end -->
                      
                    
                        
                       
                      
                    </div>

          <div class="col-sm-6">
                        <!-- Zero config.table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit zone</h5>
                               
                                
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                            <form role="form" method="post" id="create_item" enctype="multipart/form-data" action=""
                                    autocomplete="off"
                                    onsubmit="return confirm('Are you sure you want to submit this form?');">
                                  
<input type="hidden" placeholder="Enter zone name" required
                                        id="zone_id" class="form-control" name="zone_id"
                                        value="<?php echo $result->zone_id;?>">
        <table class="table gridexample">
                                                                    <tr>
                                                                    <td>Sector</td>
                                                             <td>
                                                                 <select name="sector_id" class="form-control">
                                                                  <option value="<?php echo $result->sector_id ?>"><?php echo $result->sector_name ?></option>
                                              <option>Select Sector</option>
                                                                <?php $sector=$this->db->query("select * from ppms_sector")->result();
                                               foreach($sector as $sector){
                                                                ?>
                                                                <option
                                                                    value="<?php echo $sector->sector_id;?>">
                                                                    <?php echo $sector->sector_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                             </td>
                                                         </tr>
                                                         <tr>
                                                                    <td>Project</td>
                                                             <td>
                                                                 <select name="project_id" class="form-control">
                                                                  <option value="<?php echo $result->project_id ?>"><?php echo $result->project_name ?></option>
                                              <option>Select Project</option>
                                                                <?php $project=$this->db->query("select * from ppms_project")->result();
                                               foreach($project as $project){
                                                                ?>
                                                                <option
                                                                    value="<?php echo $project->project_id;?>">
                                                                    <?php echo $project->project_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                             </td>
                                                         </tr>
                                                         <tr>
                                                                    <td>Subproject</td>
                                                             <td>
                                                                 <select name="subproject_id" class="form-control">
                                                                  <option value="<?php echo $result->subproject_id ?>"><?php echo $result->subproject_name ?></option>
                                              <option>Select Subproject</option>
                                                                <?php $subproject=$this->db->query("select * from ppms_subproject")->result();
                                               foreach($subproject as $subproject){
                                                                ?>
                                                                <option
                                                                    value="<?php echo $subproject->subproject_id;?>">
                                                                    <?php echo $subproject->subproject_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                             </td>
                                                         </tr>
                                                         <tr>
                                                            <td>Organization</td>
                                                           <td>
                <select name="organization_id" class="form-control">
                    <option value="<?php echo $result->organization_id;?>"><?php echo $result->organization_name;?></option>
                <option value="">Select Service Type</option>
        <?php $organization=$this->db->query("select * from organization")->result();
            foreach($organization as $organization){
            ?>
                                                                <option
                                                                    value="<?php echo $organization->organization_id;?>">
                                                                    <?php echo $organization->organization_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                           </td>
                                                        </tr>
                                                         <tr>
                                                            <td>Zone Name</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Enter zone name" required
                                                                    id="zone name" class="form-control"
                                                                    name="zone_name" value="<?php echo $result->zone_name;?>" tabindex="1"></td>
                                                                </tr>
                                                        <tr>
                                                            <td><button type="submit"
                                                                    class="btn btn-block btn-outline btn-primary"
                                                                    id="add" name="add" tabindex="2">Save
                                                                    Record</button></td>
                                                        </tr>
                                                    </table>
                                                  </form>
      </div>
    </div>
    
    <?php 
    if(isset($_POST['add'])){
        extract($_POST);
    
$done=$this->db->query("update grc_zone_tbl set zone_name='$zone_name',sector_id=$sector_id,project_id=$project_id,subproject_id=$subproject_id,organization_id=$organization_id 
where zone_id=$zone_id");    
    
       
    if($done){
    redirect(base_url('complaint/zone'));
        }
    
    
    }
    
    
    
    ?>
      </div>
    </div>
    
    
                            </div>
                            <!--/row-->

                        </div>
                    </div>

                </div>


              