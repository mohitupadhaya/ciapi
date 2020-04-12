 <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <!-- <div class="sidenav-header-inner text-center"><img src="<?php echo base_url(); ?>assets/img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle"> -->
            <h2 class="h5">Admin</h2>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>E</strong><strong class="text-primary">L</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Admin</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="<?php echo base_url(); ?>dashboard"> <i class="fa fa-tachometer"></i>Dashboard</a></li>

           <!--  <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-th-large"></i>Category</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url(); ?>add-category">Add Category</a></li>
                <li><a href="<?php echo base_url(); ?>view-category">View Category</a></li>
              </ul>
            </li>
            <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>My Training Sessions </a>
              <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url(); ?>add-training-sessions">Add Training Sessions</a></li>
                <li><a href="<?php echo base_url(); ?>view-training-sessions">View Training Sessions</a></li>
              </ul>
            </li>
            
            <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-th-large"></i>Assessment</a>
              <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url(); ?>add-question">Add Assessment </a></li>
                <li><a href="<?php echo base_url(); ?>view-question">View  Assessment</a></li>
              </ul>
            </li>

             <li><a href="#exampledropdownDropdown3" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-question-circle-o"></i>Question Bank</a>
              <ul id="exampledropdownDropdown3" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url(); ?>add-assessment">Add question</a></li>
                <li><a href="<?php echo base_url(); ?>view-assessment">View Question</a></li>
              </ul>
            </li>
          <li><a href="#exampledropdownDropdown4" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-question-circle-o"></i>UserQuery</a>
              <ul id="exampledropdownDropdown4" class="collapse list-unstyled ">
                <!-- <li><a href="<?php echo base_url(); ?>add-query">Add UserQuery</a></li> -->
              <!--   <li><a href="<?php echo base_url(); ?>view-query">View UserQuery</a></li>
              </ul>
            </li>
            <?php  if($this->session->userdata('role') !=3 ){ ?>
            <li><a href="#exampledropdownDropdown5" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user-circle"></i>Sub-Admin</a>
              <ul id="exampledropdownDropdown5" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url(); ?>add-sub-admin">Add Sub-Admin</a></li>
                <li><a href="<?php echo base_url(); ?>view-sub-admin">View Sub-Admin</a></li>
              </ul>
            </li>
          <?php } ?>
             
            <li><a href="#exampledropdownDropdown6" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user-circle"></i>Users Register</a>
              <ul id="exampledropdownDropdown6" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url(); ?>add-users">Add Users</a></li>
                <li><a href="<?php echo base_url(); ?>view-users">View Users</a></li>
              </ul>
            </li>
          </ul> --> 
        </div>
       <!--  <div class="admin-menu">
          <h5 class="sidenav-heading">Second menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>
            <li> <a href="#"> <i class="icon-flask"> </i>Demo
                <div class="badge badge-info">Special</div></a></li>
            <li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>
            <li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>
          </ul>
        </div> -->
      </div>
    </nav>