<nav class="navbar navbar-expand-lg navbar-light bg-light" style='    height: 30px;'>
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

    <li class="nav-item  <?php if($page =='Billing' ){echo 'active' ; } ?>">
        <a class="nav-link" href="<?php echo base_url(); ?>">Creat New  Bill<span class="sr-only">(current)</span></a>
      </li>
    

    <li class="nav-item <?php if($page =='Recipts' ){echo 'active' ; } ?>">
        <a class="nav-link" href="<?php echo base_url('Reporting/SalesmenReport'); ?>"> Recipts <span class="sr-only">(current)</span></a>
      </li>
    
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style='    height: 30px;
'>
      <button class="btn btn-sm" type="submit">Search</button>
    </form> -->
  </div>
</nav>