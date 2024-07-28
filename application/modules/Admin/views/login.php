<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<?php echo $this->load->view('comman_data/commanheader'); ?>
<head>

    </head>

    <body data-sa-theme="1" style='overflow: hidden;'>
        <div class="login">

            <!-- Login -->
            <div class="login__block active" id="l-login">
            
			<div id='massage'> </div>
                <div class="login__block__header">
                 
                    <!-- <i class="zmdi zmdi-account-circle"></i> -->
                    <img src="<?php echo base_url('assets/logo.jpeg') ?>" alt="" />

                 <h3> <?php echo  PROJECTNAME ; ?></h3>

                   <!-- <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-register" href="#">Create an account</a>
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-forget-password" href="#">Forgot password?</a>
                            </div>
                        </div>
                    </div> -->  
                </div>

                <div class="login__block__body">
				<form  method='post'>
                    <div class="form-group">
                        <input type="text" class="form-control text-center" name='username' id='Username' placeholder="Username" required >
                    </div>

                    <div class="form-group">
                       <input type="password" class="form-control text-center" placeholder="Password" id='Password' name='password' required>
                    </div>


                    <a   id='submit_login' class="btn btn--icon login__block__btn"> Login <i class="zmdi zmdi-long-arrow-right"></i></a>
				</form>	
                </div>
            </div>

            <!-- Register -->
            <div class="login__block" id="l-register">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Create an account

                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-login" href="#">Already have an account?</a>
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-forget-password" href="#">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login__block__body">
                    <div class="form-group">
                        <input type="text" class="form-control text-center" placeholder="Name">
                    </div>

                    <div class="form-group form-group--centered">
                        <input type="text" class="form-control text-center" placeholder="Email Address">
                    </div>

                    <div class="form-group form-group--centered">
                        <input type="password" class="form-control text-center" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Accept the license agreement</span>
                        </label>
                    </div>

                    <a href="<?php echo base_url(); ?>" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-plus"></i></a>
                </div>
            </div>

            <!-- Forgot Password -->
            <div class="login__block" id="l-forget-password">
                <div class="login__block__header">
                    <i class="zmdi zmdi-account-circle"></i>
                    Forgot Password?

                    <div class="actions actions--inverse login__block__actions">
                        <div class="dropdown">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-login" href="#">Already have an account?</a>
                                <a class="dropdown-item" data-sa-action="login-switch" data-sa-target="#l-register" href="#">Create an account</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login__block__body">
                    <p class="mb-5">Lorem ipsum dolor fringilla enim feugiat commodo sed ac lacus.</p>

                    <div class="form-group">
                        <input type="text" class="form-control text-center" placeholder="Email Address">
                    </div>

                    <a href="<?php echo base_url(); ?>" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-check"></i></a>
                </div>
            </div>
        </div>

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

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2018 15:35:41 GMT -->
</html>


<style>
    .login__block__header>img {
        width: 150px;
    height: 150px;
    }
    .login__block{
    background-color:#242424e0;
    }
    .login__block{
        max-width: 430px;
    }
    .login__block__header{
        /* background-color: #3389cc; */
    }
    .btn--icon{
        width: 17rem;
    height: 4rem;
    line-height: 3.7rem;
    font-size: 2.2rem;
    text-align: center;
    }
</style>
