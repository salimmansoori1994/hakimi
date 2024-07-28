<?php
if($this->session->userdata('user_type') == "admin"){ ?>

<li class="<?php if($page =='Dashboard' ){echo 'navigation__active' ; } ?>"><a
        href="<?php echo base_url('Admin/Admin_dashboard'); ?>"><i class="zmdi zmdi-home"></i> Home</a></li>


<li class="<?php if($page =='add_Salesman' ){echo 'navigation__active' ; } ?>"><a
href="<?php echo base_url('Admin/Admin_dashboard/Add_Salesman'); ?>"><i class="zmdi zmdi-assignment-account zmdi-hc-fw"></i> Add Salesman </a></li>


<li class="<?php if($page =='salesman_list' ){echo 'navigation__active' ; } ?>"><a
href="<?php echo base_url('Admin/Admin_dashboard/salesman_list'); ?>"><i class="zmdi zmdi-assignment zmdi-hc-fw"></i> Salesman List </a></li>


<li class="<?php if($page =='category' ){echo 'navigation__active' ; } ?>"><a
href="<?php echo base_url('Admin/Admin_dashboard/Category'); ?>"><i class="zmdi zmdi-cast zmdi-hc-fw"></i> Category </a></li>

<li class="<?php if($page =='shops' ){echo 'navigation__active' ; } ?>"><a
href="<?php echo base_url('Admin/Admin_dashboard/Shops'); ?>"><i class="zmdi zmdi-accounts-list zmdi-hc-fw"></i> Shops </a></li>

<li class="<?php if($page =='report' ){echo 'navigation__active' ; } ?>"><a
href="<?php echo base_url('Reporting/Adminreport'); ?>"><i class="zmdi zmdi-open-in-browser zmdi-hc-fw"></i> Report </a></li>

<li class="<?php if($page =='change_password' ){echo 'navigation__active' ; } ?>"><a
href="<?php echo base_url('Admin/Change_password'); ?>"><i class="zmdi zmdi-open-in-browser zmdi-hc-fw"></i> Change Password </a></li>

<?php
} ?>