<div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
    <i class="zmdi zmdi-menu"></i>
</div>

<div class="logo hidden-sm-down">
    <h1><a href="<?php echo base_url(); ?>"><?php echo PROJECTNAME ; ?></a></h1>
</div>

<!-- <form class="search">
    <div class="search__inner">
        <input type="text" class="search__text" placeholder="Search for people, files, documents...">
        <i class="zmdi zmdi-search search__helper" data-sa-action="search-close"></i>
    </div>
</form> -->

<ul class="top-nav">


    <li class="">
        <a href="#" class="" data-sa-action="fullscreen">
            <i class="zmdi zmdi-fullscreen"></i>
        </a>
    </li>
    <li class="">
        <a href="
        <?php if($this->session->userdata('user_type') == "admin"){ 
        echo base_url('Admin/Admin_dashboard/logout'); }
        else if($this->session->userdata('user_type') == "gram"){
        echo base_url('Gram/logout');
        } 
        ?>
        " class="">
            <i class="zmdi zmdi-power zmdi-hc-fw"></i>
        </a>
    </li>


</ul>


<div class="clock hidden-md-down">
    <div class="time">
        <span class="time__hours"></span>
        <span class="time__min"></span>
        <span class="time__sec"></span>
    </div>
</div>