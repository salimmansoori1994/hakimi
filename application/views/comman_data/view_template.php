<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2018 15:25:50 GMT -->
<head>
		
		<?php echo $this->load->view('comman_data/commanheader'); ?>

    </head>

    <body data-sa-theme="">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            <header class="header">
             <?php echo $this->load->view('comman_data/comman_head_bar'); ?>
            </header>

            <aside class="sidebar">
                <div class="scrollbar-inner">

                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="<?php echo base_url('assets/logo.jpeg'); ?>" alt="">
                            <div>
                                <div class="user__name">Admin</div>
                            <!--    <div class="user__email">malinda-h@gmail.com</div> -->
                            </div>
                        </div>
    <!--  
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">View Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </div> -->
                    </div>

                    <ul class="navigation">
                      <?php echo $this->load->view('comman_data/comman_side_bar',$view_data); ?> 
                    </ul>
                </div>
            </aside>



            <section class="content">
                <header class="content__title">
                    <h1><?php echo $view_data['bredcarm_head']; ?></h1>
                 

                </header>

				<?php  echo $this->load->view($view_page,$view_data); ?>

	

                <footer class="footer hidden-xs-down">
                  <?php echo $this->load->view('comman_data/comman_footer_text'); ?>
                </footer>
            </section>
        </main>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->

  <?php echo $this->load->view('comman_data/commanfooter'); ?>
  
  
    </body>

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2018 15:27:53 GMT -->
</html>