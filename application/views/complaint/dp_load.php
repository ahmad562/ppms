<div class="card">
                                        <div class="card-block">
<div class="row">
                   <div class="col-sm-3">
                      <label>Project</label>
                                              <select name="project_id" id="project_id" class="form-control" onChange="get_subproject(this.value)">
                                                        <option>Select Project</option>
                                                            <?php $project=$this->db->query("select * from ppms_project")->result();
            foreach($project as $project){
            ?>
                                                            <option value="<?php echo $project->project_id;?>">
                                                                <?php echo $project->project_name;?></option>
                                                            <?php }?>
                                                        </select>
                </div>
                <div class="col-sm-3">
               <label>Subproject</label>
                <select name="subproject_id" id="subproject_id" onChange="get_site(this.value)" class="form-control">
                    <option>Select Subproject</option>
                                                       
                                                        </select>
           </div>
                <div class="col-sm-3">
               <label>Site</label>
                <select name="site_id" id="site_id" onChange="get_description(this.value)" class="form-control" onClick="dp_list()">
                                                        <option>Select Site</option>
                                                            
                                                        </select>
               </div>
                <div class="col-sm-3">
               <label>Description</label>
                <select name="description_id" id="description_id" onChange="get_descr(this.value)" class="form-control">
                                        <option>Select Description</option>
                                                        </select>
                   </div>
               </div>
           </div>
       </div>

       