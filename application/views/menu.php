<body>
    <!-- Pre-loader start -->
    <?php /*?><div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <?php */?>

    <?php 
    $empID=$this->session->userdata('empid');
    $unameee=$this->db->query("SELECT e.emp_id,e.emp_name,d.designation_name,e.emp_pic,e.organization_id
    FROM
    emp AS e,designation AS d
    WHERE e.designation_id=d.designation_id and e.emp_id=$empID")->row();
   ///echo $this->db->last_query();
    
    
    ?>
    <!-- Pre-loader end -->
    <!-- Menu header start -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header" header-theme="theme4">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="<?php echo base_url()?>">
                            <img class="img-fluid" src="<?php echo base_url()?>img/logo.png" alt="Theme-Logo" width="20%"/>
                             <span style="color:white;">KPCIP</span>
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <div>
                            <ul class="nav-left">
                                <li>
                                    <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                                </li>
                                <?php /*?>
                                <li>
                                    <a class="main-search morphsearch-search" href="#">
                                        <!-- themify icon -->
                                        <i class="ti-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                                </li>
                                <?php */?>

                                <li class="mega-menu-top">
                                  
                                    <ul class="show-notification row">
                                        <li class="col-sm-3">
                                            <h6 class="mega-menu-title">Popular Links</h6>
                                            <ul class="mega-menu-links">
                                                <li><a href="form-elements-component.html">Form Elements</a></li>
                                                <li><a href="button.html">Buttons</a></li>
                                                <li><a href="map-google.html">Maps</a></li>
                                                <li><a href="user-card.html">Contact Cards</a></li>
                                                <li><a href="user-profile.html">User Information</a></li>
                                                <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <h6 class="mega-menu-title">Mailbox</h6>
                                            <ul class="mega-mailbox">
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left">
                                                            <i class="ti-folder"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Data Backup</h5>
                                                            <small class="text-muted">Store your data</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left">
                                                            <i class="ti-headphone-alt"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Support</h5>
                                                            <small class="text-muted">24-hour support</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left">
                                                            <i class="ti-dropbox"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Drop-box</h5>
                                                            <small class="text-muted">Store large amount of data in one-box only
                                                            </small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left">
                                                            <i class="ti-location-pin"></i>
                                                        </div>
                                                        <div class="media-body">
                                                            <h5>Location</h5>
                                                            <small class="text-muted">Find Your Location with ease of use</small>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="col-sm-3">
                                            <h6 class="mega-menu-title">Gallery</h6>
                                            <div class="row m-b-20">
                                                <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/01.jpg" alt="Gallery-1">
                                                </div>
                                                <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/02.jpg" alt="Gallery-2">
                                                </div>
                                                <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/03.jpg" alt="Gallery-3">
                                                </div>
                                            </div>
                                            <div class="row m-b-20">
                                                <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/04.jpg" alt="Gallery-4">
                                                </div>
                                                <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/05.jpg" alt="Gallery-5">
                                                </div>
                                                <div class="col-sm-4"><img class="img-fluid img-thumbnail" src="assets/images/mega-menu/06.jpg" alt="Gallery-6">
                                                </div>
                                            </div>
                                            <button class="btn btn-primary btn-sm btn-block">Browse Gallery</button>
                                        </li>
                                        <li class="col-sm-3">
                                            <h6 class="mega-menu-title">Contact Us</h6>
                                            <div class="mega-menu-contact">
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-3 col-form-label">Name</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-search-input" class="col-3 col-form-label">Email</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="email" placeholder="Enter your E-mail Id" id="example-search-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-search-input" class="col-3 col-form-label">Contact</label>
                                                    <div class="col-9">
                                                        <input class="form-control" type="number" placeholder="+91-9898989898" id="example-search-input">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="exampleTextarea" class="col-3 col-form-label">Message</label>
                                                    <div class="col-9">
                                                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav-right">
<?php $totkifipaki=$this->db->query("select count(*) as tot_ipc from ppms_ipac_forward where organization_id=$unameee->organization_id and flag_id=1 and (status_id=0 or status_id=2)")->row();?>
                                <li class="header-notification">
                                    <a href="#!">
                                        <i class="ti-bell"> New IPC's</i>
                                        <span class="badge blinking-text"><?php echo $totkifipaki->tot_ipc;?></span>
                                    </a>
                                    
<ul class="show-notification">
<?php $totkifipaki2=$this->db->query("select * from ppms_ipac as pi,ppms_ipac_forward as pif
 where pi.ipac_id=pif.ipac_id and pif.organization_id=$unameee->organization_id and pif.flag_id=1 and (pif.status_id=0 or pif.status_id=2)")->result();
 foreach($totkifipaki2 as $totkifipaki2){
 ?>
  
                                        <li>
                    <table class="table">
       
                                        <tr>
                                            <?php /*?><td>        
                    <a href="<?php echo base_url('Welcome/new_ipc_detail_popup/').$totkifipaki2->ipac_id?>">
                    <?php echo $totkifipaki2->ipac_id;?></a></td>
                    <?php */?>
                    <td>
                        
                    <a href="<?php echo base_url('Welcome/new_ipc_detail_popup/').$totkifipaki2->ipac_id?>">
                    <?php echo $totkifipaki2->ipc_no;?></a></td>
                    <td>

                                                <div class="media-body">
            <h5 class="notification-user"> <a href="<?php echo base_url('Welcome/new_ipc_detail_popup/').$totkifipaki2->ipac_id?>">
             <?php echo number_format($totkifipaki2->ipac_amount,2);?></a></h5></td>
            <td>
           
            <span class="notification-time"> <a href="<?php echo base_url('Welcome/new_ipc_detail_popup/').$totkifipaki2->ipac_id?>">
            <?php echo $totkifipaki2->ipac_forward_date;?></a></span></td>
                                        </tr>
                        </a>
                                            </table>
                                                
                                        </li>
                                        
                                      <?php }?> 

                                    </ul>




                                </li>
                                
                                <li class="user-profile header-notification">
                                    <a href="#!">
                                        
                                        <span>
                                        <?php 
                if($this->session->userdata('username')){
                  //echo $this->session->userdata('username');
                  echo $unameee->emp_name;

                }else{
                 echo "Nill";
                }

?>    
</span>
 <i class="ti-angle-down"></i>
                                    </a>
                                    <ul class="show-notification profile-notification">
                                        
                                        <li>
                                            <a href="<?php echo base_url('Welcome/password_changed')?>">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                        </li>
                                       
                                        <li>
                                            <a href="<?php echo base_url('index.php/Users/logout')?>">
                                                <i class="ti-layout-sidebar-left"></i> Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>



                            
                            <!-- search -->
                            <div id="morphsearch" class="morphsearch">
                                <form class="morphsearch-form">
                                    <input class="morphsearch-input" type="search" placeholder="Search..." />
                                    <button class="morphsearch-submit" type="submit">Search</button>
                                </form>
                                <div class="morphsearch-content">
                                    <div class="dummy-column">
                                        <h2>People</h2>
                                        <a class="dummy-media-object" href="#!">
                                            <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan" />
                                            <h3>Sara Soueidan</h3>
                                        </a>
                                        <a class="dummy-media-object" href="#!">
                                            <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona" />
                                            <h3>Shaun Dona</h3>
                                        </a>
                                    </div>
                                    <div class="dummy-column">
                                        <h2>Popular</h2>
                                        <a class="dummy-media-object" href="#!">
                                            <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect" />
                                            <h3>Page Preloading Effect</h3>
                                        </a>
                                        <a class="dummy-media-object" href="#!">
                                            <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow" />
                                            <h3>Draggable Dual-View Slideshow</h3>
                                        </a>
                                    </div>
                                    <div class="dummy-column">
                                        <h2>Recent</h2>
                                        <a class="dummy-media-object" href="#!">
                                            <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration" />
                                            <h3>Tooltip Styles Inspiration</h3>
                                        </a>
                                        <a class="dummy-media-object" href="#!">
                                            <img src="assets/images/avatar-1.png" alt="NotificationStyles" />
                                            <h3>Notification Styles Inspiration</h3>
                                        </a>
                                    </div>
                                </div>
                                <!-- /morphsearch-content -->
                                <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                            </div>
                            <!-- search end -->
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="card-block">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="6" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Michael Scofield</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="7" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Irina Shayk</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="8" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Sara Tancredi</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="9" data-status="online" data-username="Samon" data-toggle="tooltip" data-placement="left" title="Samon">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Samon</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="10" data-status="online" data-username="Daizy Mendize" data-toggle="tooltip" data-placement="left" title="Daizy Mendize">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Daizy Mendize</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="11" data-status="offline" data-username="Loren Scofield" data-toggle="tooltip" data-placement="left" title="Loren Scofield">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Loren Scofield</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="12" data-status="online" data-username="Shayk" data-toggle="tooltip" data-placement="left" title="Shayk">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Shayk</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="13" data-status="offline" data-username="Sara" data-toggle="tooltip" data-placement="left" title="Sara">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-danger"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Sara</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="14" data-status="online" data-username="Doe" data-toggle="tooltip" data-placement="left" title="Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="15" data-status="online" data-username="Lary" data-toggle="tooltip" data-placement="left" title="Lary">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-circle" src="assets/images/task/task-u1.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="icofont icofont-rounded-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="icofont icofont-paper-plane"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar" pcoded-header-position="relative">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                   
                                    <div class="user-details">
                                        <span>
                                        <img class="img-40 mCS_img_loaded" src="<?php echo base_url()?>assets/images/user.png" alt="User-Profile-Image"> 
                                        
                                        <?php 
                if($this->session->userdata('username')){
                  //echo $this->session->userdata('username');
                  echo $unameee->emp_name;
                  
                }else{
                 echo "Nill";
                }

?>



                                        </span>
                                        <span id="more-details"><?php echo $unameee->designation_name;?><i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="<?php echo base_url('index.php/Users/logout')?>"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <?php /*?><ul class="pcoded-item pcoded-left-item">

                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="<?php echo base_url()?>">
                                        <span class="pcoded-micon"><i class="ti-home"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                 </ul>
                                 <?php */?>
                                 <?php  $grpID=$this->session->userdata('groupid');
                                 ///exit;
                                 
                                 ?>
                            <?php $moduule=$this->db->query("SELECT DISTINCT m.module_id,module_name 
FROM module AS m, menu_admin AS md, permission AS p 
WHERE m.module_id=md.module_id 
AND md.`menu_id`=p.`menu_id`
and p.group_id=$grpID and p.flag_id=1 order by sort_by asc")->result();
//echo $this->db->last_query();

                            foreach($moduule as $moduule){
                                //class="pcoded-navigatio-lavel"
                                ?>
<div  data-i18n="nav.category.ui-element" menu-title-theme="theme5" class="raised-menu" style="margin-top:5px !important;">
    <img src="<?php echo base_url('img/hand.png')?>" width="30px" height="30px" >
    <font color="#fff"  style="font-size:15px;"><b><?php echo $moduule->module_name;?></b></font>
</div>

<ul class="pcoded-item pcoded-left-item" >
<?php $parent=$this->db->query("select distinct ma.menu_id,menu_name,menu_url from menu_admin as ma,permission as pa 
where ma.module_id=$moduule->module_id and ma.parent_id=0 
AND ma.`menu_id`=pa.`menu_id`
and pa.group_id=$grpID and pa.flag_id=1")->result();
///echo $this->db->last_query();
                            foreach($parent as $parent){?>
                                <li class="pcoded-hasmenu" style="margin-bottom: 10px;">
                                    <a href="<?php 
                                    
                                    if($parent->menu_url=='#'){
                                        echo 'javascript:';
                                    }else{
                                    echo base_url().$parent->menu_url;
                                    }?>">
                                        <span class="pcoded-micon"><i class="ti-layers"></i></span>
                                        <span class="pcoded-mtext hover-effect" data-i18n="nav.form-components.main">
                                            <?php echo $parent->menu_name;?></span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
									  <ul class="pcoded-submenu">

    <?php $child=$this->db->query("select distinct
    mdc.menu_id,menu_name,menu_url 
    from menu_admin as mdc,permission as pc
    where parent_id=$parent->menu_id 
    and mdc.module_id=$moduule->module_id
    and pc.group_id=$grpID 
    and mdc.menu_id=pc.menu_id and pc.flag_id=1
    order by sort_order asc")->result();
                           ///echo $this->db->last_query();
                           foreach($child as $child){?>
                                           
											<li >
											 <a href="<?php echo base_url()?><?php echo $child->menu_url;?>">
											<span class="pcoded-micon"><i class="ti-layers"></i></span>
				<span class="pcoded-mtext " data-i18n="nav.form-components.main"><?php echo $child->menu_name;?></span>
											<span class="pcoded-mcaret"></span>
										    </a>
										</li>
												
										<?php }?>
								
                              
									</ul>
									<?php }?>   
									
                                </li>
								
                               
                            </ul>

<?php }?>
    
                           
                           
                            
                           
                            
                            
                            
                        </div>
                    </nav>

                   <style>
/* General styles for the navigation container */
nav {
    font-family: 'Segoe UI', Arial, sans-serif; /* Ensures the font is consistent */
    background-color: #f4f4f8; /* Light gray background for the entire nav area */
}

/* Styling for the main menu container */
.raised-menu {
    background: linear-gradient(145deg, #1ABC9C, #e9ecef);
    padding: 10px 20px;
    border-radius: 8px;
    margin: 10px 5px;
    display: flex;
    align-items: center;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    color: #ffffff;
}

.raised-menu img {
    margin-right: 10px;
}

.raised-menu b {
    font-size: 18px;
}

/* Styling for the top-level menu items */
.pcoded-item {
    list-style: none;
    padding-left: 0;
}

.pcoded-item li {
    margin-bottom: 5px;
    transition: all 0.3s ease;
}

.pcoded-item a {
    display: block;
    background: #495057;
    color: #ffffff; /* Improved contrast for text */
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.pcoded-item a:hover {
    background-color: #4a69bd;
    color: #fff;
    transform: translateX(5px);
}

/* Submenu styling */
.pcoded-submenu {
    display: none; /* Hidden by default */
    list-style: none;
    padding-left: 20px;
    background: #495057; /* Uniform with the main item */
    box-shadow: 0 4px 8px rgba(0,0,0,0.30), inset 0 0 8px #fff; /* Beveled look */
    border-radius: 10px;
}

.pcoded-hasmenu:hover .pcoded-submenu {
    display: block; /* Show submenu on hover */
}

.pcoded-submenu li a {
    background-color: #4a69bd; /* Consistent submenu color */
    color: #fff;
    box-shadow: inset 0 0 8px rgba(255, 255, 255, 0.5); /* Inset shadow for beveled effect */
    border-radius: 8px;
}

.pcoded-submenu li a:hover {
    background: linear-gradient(145deg, #4a69bd, #1ABC9C); /* Smooth gradient on hover */
    color: #fff;
    transform: translateY(-3px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.30), inset 0 0 10px rgba(255, 255, 255, 0.7);
}

/* Caret icon adjustments */
.pcoded-mcaret {
    float: right;
    margin-left: 10px;
}

/* Media query for responsive adjustments */
@media (max-width: 768px) {
    .raised-menu {
        flex-direction: column;
        align-items: start;
    }

    .raised-menu img {
        margin-bottom: 10px;
    }

    .pcoded-submenu {
        position: static; /* Adjust for mobile to dropdown */
    }
}



</style>