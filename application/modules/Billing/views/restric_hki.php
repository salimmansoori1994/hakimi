<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2018 15:35:41 GMT -->

<head>
    <?php echo $this->load->view('comman_data/commanheader.php'); ?>
</head>

<body data-sa-theme="1">
    <section class="">
        <div class="">
            <h1> <?php //echo PROJECTNAME ; ?> </h1>

            <div class='col-sm-3' id='front_nav_box'>
                <?php echo $this->load->view('comman_data/comman_front_nav.php',$view_data); ?>
            </div>

            <!-- <h2>The page you were looking for doesn't exist!</h2>
                <p>Donec in ex eget orci facilisis gravida vitae ut tortor. In tempus lacus ac dui iaculis, placerat tempus diam vehiculaed suscipit tortor id lorem mollis</p> -->
            <div class="container-fluid" style='clear: both;'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <form id='general_form_submit' action='Billing/restric_hki' method='post'>

                        <div class='col-sm-12' align='center'>
                            <br>
                            <br>
                            <h1 align='center' style='margin-top:30px;color:black;'> The Billing is Restrict

                                <br>
                                <br>
                                Contact to services Provider.
                                <br>


                            </h1>
                            <br>

                            <input type="text" class='form-control' style='width:300px' name='res_code' placeholder='Eneter the Reactivetion code' required />
                            <br>
                           
                            <input type="submit" class='btn btn-xs btn-success' id='submit' />
                            </div>

                        </form>

                        <div id='massage'>
                    </div>
                 

                    </div>
                </div>

                <div align='center' style='    clear: both;  width: 100%;color:black;'>
                    <?php echo $this->load->view('comman_data/commanfooter.php'); ?>
                </div>

            </div>
        </div>
    </section>

    <!-- Older IE warning message -->


    <!-- Javascript -->
    <!-- Vendors -->

</body>

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2018 15:35:41 GMT -->

</html>