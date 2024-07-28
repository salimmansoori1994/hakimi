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
                        <form id='add_billing_data' action='Billing/add_billing_data' method='post'>
                            <!--  -->
                            <div class='col-sm-8 box_Set'>
                                <div class='col-sm-6'>
                                    <small>Date / Time :- <?php echo date('d-m-Y h:i:a'); ?></small>
                                </div>
                                <div class='col-sm-6'>
                                    <!-- No. - 00022 -->
                                </div>
                                <div class='col-sm-12 no_padding'>
                                    <div class='col-sm-6'>


                                        <div class="form-group">


                                            <select class="select2" name='shop_name' id='shop_name' required>
                                                <?php 
                                            if($Shops_master){
                                                foreach ($Shops_master as $key => $value) {
                                                    echo "<option value='".$value->id."'>".$value->shop_name."</option>";
                                                }
                                            }
                                            ?>
                                            </select>
                                        </div>

                                    </div>
                                    <div class='col-sm-6'>
                                        <input type="text" class='form-control numeric'
                                            placeholder='Please Enter Customer Number' name='customer_number' />
                                    </div>

                                    <div class='col-sm-12 no_padding'
                                        style='    margin-top: 5px;overflow-y: scroll;  height: 675px;'>
                                        <table class='table' style='    '>
                                            <thead>
                                                <tr>
                                                    <th style='width: 400px;'>Name</th>
                                                    <th style='width: 200px;'>Price</th>
                                                    <th style='width: 200px;'>Qty</th>
                                                    <th style='width: 200px;'>Amount (Rs) </th>
                                                    <th>
                                                        <button type='button' class='btn btn-sm btn-success'
                                                            onclick='add_new_row();' style='    cursor: pointer;'> Add+
                                                        </button>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id='table_body'>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>


                            <!--  -->

                            <div class='col-sm-4 box_Set'>
                                <!--  -->
                                <h2 style='margin-top:10px;color:black;' align='center'>
                                    <u><?php echo sprintf("%03d",$sallers_info[0]->id); ?> -
                                        <?php echo $sallers_info[0]->name; ?></u> </h2>

                                <div class='col-sm-12 no_padding' style='margin-top:10px;'>

                                    <div class='col-sm-7 no_padding' align='left'>
                                        <b> Total Amount</b>
                                    </div>
                                    <div class='col-sm-5 no_padding' id=''> <span id='total_amount'> 0 </span> Rs </div>


                                </div>
                                <!--  -->
                                <div class='col-sm-12 no_padding' style='margin-top:10px;'>

                                    <div class='col-sm-7 no_padding' align='left'>
                                        <b> Total Quantity</b>
                                    </div>
                                    <div class='col-sm-5 no_padding' id=''> <span id='total_quantity'> 0 </span> </div>


                                </div>
                                <!--  -->
                                <!--  -->
                                <div class='col-sm-12 no_padding' style='margin-top:10px;'>

                                    <div class='col-sm-7 no_padding' align='left'>
                                        <b> Total Item</b>
                                    </div>
                                    <div class='col-sm-5 no_padding' id=''> <span id='total_item'> 0 </span> </div>


                                </div>
                                <!--  -->
                                <div class='col-sm-12 no_padding' style='margin-top:10px;'>

                                    <div class='col-sm-7 no_padding' align='left'>
                                        <b> Pay By Cash</b>
                                    </div>
                                    <div class='col-sm-5 no_padding' id=''> <input type="number" name='pay_by_cash'
                                            id='pay_by_cash'  placeholder='0'  style='width:60%;   float: left;' class='form-control'
                                            onkeyup='check_total_out_pay();' /> Rs </div>


                                </div>
                                <!--  -->
                                <div class='col-sm-12 no_padding' style='margin-top:10px;'>

                                    <div class='col-sm-7 no_padding' align='left'>
                                        <b> Pay By Online</b>
                                    </div>
                                    <div class='col-sm-5 no_padding' id=''> <input type="number"
                                            style='width:60%;    float: left;' class='form-control' name='pay_by_online'
                                            id='pay_by_online' placeholder='0'  onkeyup='check_total_out_pay();' /> Rs
                                    </div>


                                </div>

                                <!--  -->
                                <div class='col-sm-12 no_padding' style='margin-top:10px;'>

                                    <div class='col-sm-7 no_padding' align='left'>
                                        <b> GR</b>
                                    </div>
                                    <div class='col-sm-5 no_padding' id=''> <input type="number"
                                            style='width:60%;    float: left;' class='form-control' name='discount'
                                            id='discount' placeholder='0'  onkeyup='check_total_out_pay();' /> Rs
                                    </div>


                                </div>

                                <div class='col-sm-12 no_padding' style='margin-top:10px;'>
                                    <input type="hidden" name="total_quntity" id="total_quntity_set">
                                    <input type="hidden" name="total_amount" id="total_amount_set">
                                    <input type="hidden" name="total_item" id="total_item_set">
                                    <input type="hidden" name="salesmen_id" id="salesmen_id"
                                        value="<?php echo $this->uri->segment(3); ?>">


                                    <button type='submit' id='submit' class='btn btn-sm btn-success'
                                        style='    cursor: pointer;display:none;'> Pay & Confirm </button>
                                </div>


                                <div>
                                    <div id='massage'>

                                    </div>
                                </div>

                            </div>

                        </form>
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

<style>
body {
    font-family: system-ui !important;
    font-size: 25px !important;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 1 !important;
}
</style>

<script>
$(document).ready(function() {

    add_new_row();
    $('#select_category_id1').select2('open');


    $("#pay_by_cash").click(function(event) {
        $("#pay_by_cash").val(total_amount);
        // $("#pay_by_online").val(0);
        check_total_out_pay();
    });

    $("#pay_by_online").click(function(event) {
        $("#pay_by_online").val(total_amount);
        // $("#pay_by_cash").val(0);
        check_total_out_pay();
    });


});

let row_number = 1;
let total_quntity = 0;
let total_amount = 0;
let total_item = 0;
let submit_go = false;

function add_new_row() {
    $("#table_body").prepend('<tr id="row_' + row_number +
        '">  <td>  <div class="form-group"> <select class="select2" data-placeholder= "Select" id="select_category_id' +
        row_number +
        '" name="category_id[]" required> <option value="">  </option> <?php if($categories_master){ foreach ($categories_master as $key => $value) { echo '<option value="'.$value->id.'">'.$value->category_code.'-'.$value->category_name.'</option>'; } } ?>   </select> </td> <td> <input type="number" name="price[]" placeholder="Price" id="price_set' +
        row_number + '" min="0" onkeyup="qunt_rate_cal(this,' + row_number +
        ')"  value="" class="form-control" required /> </td>  <td> <input type="number" min="0" class="form-control quantity_set_total" name="quantity[]"  placeholder="Quantity" id="quantity_set' +
        row_number + '"  onblur="next_row()" onkeyup="qunt_rate_cal(this,' + row_number +
        ')" required   /> </td> <td> <input type="number" class="form-control amount_set_total" min="0"  placeholder="Amount" id="amount_set' +
        row_number +
        '" name="amount[]"   readonly  /></td>> <td>  <button class="btn btn-sm btn-success" onclick="remove_row('+row_number+');"  type="button" style="    cursor: pointer;"> X </button> </td>  </div> </tr>'
    );
    row_number++;
    $('.select2').select2();
}
  
function remove_row(row_number_val) {
    $("#row_"+row_number_val+"").remove();
    total_amount_fn();
    total_quantity_fn();
}

function qunt_rate_cal(this_val, row_n) {
    let temp_quantity = $("#quantity_set" + row_n + "").val();
    let price_quantity = $("#price_set" + row_n + "").val();

    // console.log(temp_quantity);
    // console.log(price_quantity);
    if (temp_quantity && price_quantity) {
        $("#amount_set" + row_n + "").val(temp_quantity * price_quantity);
        total_amount_fn();
        total_quantity_fn();

    }

}

function next_row(params) {
    add_new_row();
    $('#table_body tr td .select2').select2('open');
}

function total_amount_fn() {
    total_item = 0;
    let total_am = 0;
    $.each($(".amount_set_total"), function() {
        if ($(this).val()) {
            total_am = parseFloat(total_am) + parseFloat($(this).val());
            total_item++;
        }
    });

    $("#total_amount").html(total_am);
    $("#total_item").html(total_item);
    $("#total_amount_set").val(total_am);
    $("#total_item_set").val(total_item);
    total_amount = total_am;
}

function total_quantity_fn() {
    let total_qu = 0;
    $.each($(".quantity_set_total"), function() {
        if ($(this).val()) {
            total_qu = parseFloat(total_qu) + parseFloat($(this).val());
        }
    });

    $("#total_quantity").html(total_qu);
    $("#total_quntity_set").val(total_qu);
    total_quntity = total_qu;
}

function check_total_out_pay() {
    let pay_by_cash = $("#pay_by_cash").val() ? $("#pay_by_cash").val() : 0;
    let pay_by_online = $("#pay_by_online").val() ? $("#pay_by_online").val() : 0;
    let discount = $("#discount").val() ? $("#discount").val() : 0;
    let temp_to = parseFloat(pay_by_online) + parseFloat(pay_by_cash);
    let temp_total = parseFloat(total_amount) - parseFloat(discount);
    total_amount_fn();
    total_quantity_fn(); 
    if (temp_to == temp_total) {
        submit_go =true;
    } else {
        submit_go =false;
    }

    if(submit_go){
        total_amount_fn();
        total_quantity_fn();
        $('#submit').show();
        // alert('s');
    }else{
        // $("#total_quntity_set").val('');
        // $("#total_amount_set").val('');
        // $("#total_item_set").val('');
        $('#submit').hide();
    }

    

}

</script>