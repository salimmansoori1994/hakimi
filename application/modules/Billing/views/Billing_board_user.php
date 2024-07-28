<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2018 15:35:41 GMT -->

<head>
    <?php echo $this->load->view('comman_data/commanheader.php'); ?>
</head>

<body data-sa-theme="1">
    <section class="">
        <div class="">

            <div align='center'>
                <img src="<?php echo base_url('assets/logo.jpeg'); ?>" style='height: 400px;
                      margin-top: 20px;
                            border-radius: 120px;' alt="">
            </div>

            <br>
         
            <h1 align='center' style="color:black;"> <?php echo PROJECTNAME ; ?> </h1>

            <div class='col-sm-3' id='front_nav_box'>
                <?php echo $this->load->view('comman_data/comman_front_nav.php',$view_data); ?>
            </div>

            <!-- <h2>The page you were looking for doesn't exist!</h2>
                <p>Donec in ex eget orci facilisis gravida vitae ut tortor. In tempus lacus ac dui iaculis, placerat tempus diam vehiculaed suscipit tortor id lorem mollis</p> -->

            <div class='white_box col-sm-12' align='center'>

                <div class='col-sm-4'></div>
                <div class='col-sm-4'>

                    <select class="select2" name='saller_name' id='saller_name' data-placeholder= "Select" required>
                        <option value=""></option>

                        <?php
            if($sallers){
                foreach ($sallers as $key => $value) {
                    echo "<option value='".$value->id."'>".sprintf("%03d",$value->id)."-".$value->name."</option>";

                }
            }
            ?>
                    </select>
<br><br>
                    <button class='btn btn-lg btn-info' id='create_bill_btn'>
                        Create Bill
                    </button>

                    </div>


                    <div style='    clear: both;  width: 100%;margin-top:200px;'>
                        <?php echo $this->load->view('comman_data/commanfooter.php'); ?>
                    </div>
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

<script>
    $(document).ready(function(){
    $('#saller_name').select2('open');

    $("#create_bill_btn").click(function(event){
        let saller_name = $("#saller_name").val();

    if(saller_name){
        var surl = base_url+'Billing/new_billing/'+saller_name; 
		window.location = surl;
    }else{
        $('#saller_name').select2('open');
    }
        
    });

});
</script>