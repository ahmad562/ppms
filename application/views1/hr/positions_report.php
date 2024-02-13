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
                           
                        </div>
                        <!-- Page-header end -->
                        <!-- Page-body start -->
                        <div class="page-body">
                            <div class="row">

                                                            <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Incremental Staff Position Report</h5>


                                        </div>
                                        <div class="card-block">
      
        
                                        <div class="dt-responsive table-responsive">



<table id="simpletable" class="table  table-bordered  nowrap">
    <tr><td colspan="5" align="center"><b>Summary Staff Position<br>
Incremental Staff
</b>

</td></tr>
    <tr>
    <th>S#</th>
        <th>Name Of Entity</th>
        <th>Total Positions<br>
    per PAM</th>
        <th>
            <table width="100%">
                <tr><td colspan="3" align="center">Filled Positions</td></tr>
                <tr><td>Total</td><td>Male</td><td>Female</td></tr>
            </table>
    
    </th>
   
        <th>Remaining Positions</th>
       
    </tr>
    <?php 
    $x=1;
    $a1=0;
    $b1=0;
    $c1= 0;
    $d1=0;
    $e1=0;
    foreach ($positions as $position) { ?>
        <tr>
        <td><?php echo $x; ?></td>
            <td><?php echo $position->organization_name; ?></td>
            <td>
              
            <?php echo $a=$position->total_position; ?></td>
            <td valign="top">
            <table  width="100%">
                
                <tr><td><?php echo $b=$position->filled_total; ?></td>
                <td><?php echo $c=$position->male; ?></td>
                <td><?php echo $d=$position->female; ?></td>
            </tr>
            </table>    
            
            </td>
           
            <td><?php echo $e=$position->remaining; ?></td>
           
        </tr>
       
    <?php 
    $a1=$a1+$a;
    $b1=$b1+$b;
    $c1=$c1+$c;
    $d1=$d1+$d;
    $e1=$e1+$e;
$x++;
} ?>
 <tr><th></th>
 <th>Total</th>
 <th><?php echo $a1;?></th>
 
 <th valign="top"><table  width="100%">
                
                <tr><td><?php echo $b1; ?></td>
                <td><?php echo $c1; ?></td>
                <td><?php echo $d1; ?></td>
            </tr>
            </table></th><th><?php echo $e1;?></th>
</table>

</div>
</div>
</div>

