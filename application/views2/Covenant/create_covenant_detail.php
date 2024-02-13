<div class="pcoded-content" >
            <div class="pcoded-inner-content">

                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-header-title">
                                <!-- <h4>Display status</h4> -->


                            </div>
                            <div class="page-header-breadcrumb">

                            </div>
                        </div>
                        <!-- Page-header end -->
                        <!-- Page-body start -->
                        <div class="page-body">
                            <div class="row">

                                                            <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add Covenant Detail</h5>


                                        </div>
                                        <div class="card-block">
<body>
<form method="post" action="<?php echo base_url('Covenant/create_record_detail');?>">
    <div class="container">
        <div class="row">
        <div class="col-6">
            <label for="covenant_detail">SerialNo:</label>
            <input type="text" class="form-control" name="serialNo">
            </div>
            <div class="col-6">
      
      
        
            <div class="form-group ">
                <label for="covenant_id">Covenant in Agreement :</label>
                <select class="form-control" name="covenant_name">
                    <?php $donek=$this->db->query("select * from covenant_name")->result();
                    foreach($donek as $row){?>
<option value="<?php echo $row->covenant_name_id?>">
<?php echo $row->covenant_name?>
</option>
<?php }?>


                </select>
            </div>
                    </div>
            <div class="col-6">
            <div class="form-group">
                <label for="category_name">Category Name:</label>
                <select class="form-control" name="category_name">
                <option value="General">
General
</option>
<option value="Enviroment">
Enviroment
</option>
<option value="Procurement">
Procurement
</option>
<option value="Implementation Arrangements">
Implementation Arrangements  
</option>

<option value="Indigenous People">
Indigenous People
</option>

<option value="Human and Financial Resources Requirments to Implement">
Human and Financial Resources Requirments to Implement
</option>

<option value="Safeguard Related provision in Bidding documents and Works Contracts">
Safeguard Related provision in Bidding documents and Works Contracts
</option>
<option value="Safeguards Monitoring & Reporting">
Safeguards Monitoring & Reporting
</option>

<option value="Prohibited List of investments">
Prohibited List of investments
</option>

<option value="Grievance Redress Mechanism">
Grievance Redress Mechanism
</option>

<option value="Labour Standards Health and Saftey">
Labour Standards Health and Saftey
</option>

<option value="Gender & Development">
Gender & Development
</option>

<option value="Counterpart Support">
Counterpart Support
</option>


<option value="Financial Covenance">
Financial Covenant
</option>

<option value="Operational Sector Performance Covenants">
Operational Sector Performance Covenants
</option>
<option value="Change of Ownership">
Change of Ownership
</option>
<option value="Governance and Anticorruption">
Governance and Anticorruption
</option>


                </select>
            </div>
            </div>
            <div class="col-6">
            <div class="form-group">
                <label for="reference">Reference:</label>
                <input type="text" class="form-control" name="reference">
            </div>
            </div>
            <div class="col-6">
            <div class="form-group">
                <label for="status_id">Status:</label>
                <select class="form-control" name="status_id">
                <option value="Complied">
Complied
</option>
<option value="Non Complied">
Non Complied
</option>
<option value="Ongoing">
Ongoing
</option>
<option value="Partialy Complied">
Partialy Complied
</option>
<option value="Not due yet">
Not due yet
</option>

                </select>




            </div>
            </div>
            <div class="col-12">
            <div class="form-group">
                <label for="covenant_detail">Covenant Detail:</label>
                <textarea class="form-control" name="covenant_detail"></textarea>
            </div>
            </div>
            <div class="col-12">
            <div class="form-group">
                <label for="covenant_detail">Remarks:</label>
                <textarea class="form-control" name="remarks"></textarea>
            </div>
            </div>
           
            <div class="col-6">
            <button type="submit" class="btn btn-primary">Create Covenant Detail</button>
            </div>
        </form>
      
   
    </div>
</body>
</html>
