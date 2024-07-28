<!DOCTYPE html>
<html lang="en">

<script src="<?php echo base_url('assets/vendors/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
<div class="ticket">
    <div align='center'>
    <img src="<?php echo base_url('assets/logo.jpeg'); ?>" alt="Logo">
    </div>
   
    <p class="centered heder_Set">
        <u><b class='heder_Set'><?php echo $billing_data[0]->shop_name; ?></b></u>
        <br> <?php echo $billing_data[0]->shop_address ; ?>
        <br> <b>Mo.</b> <?php echo $billing_data[0]->shop_number ; ?> ,
        <?php echo $billing_data[0]->shop_alt_number ; ?>
        <br> <b>GSTIN:</b> <?php echo $billing_data[0]->shop_gst ; ?>
    </p>




    <?php 
    if($billing_data[0]->priting_type == 'Copy'){
        echo "<div class='copy_r'>Copy</div>";
    }
    ?>

    <div class='left float-left'>
           <b>Date:</b> <?php echo date('d-m-Y',strtotime($billing_data[0]->create_date)) ; ?>
           </div>
    <div class='right'>
        <b>  Time :</b> <?php echo $billing_data[0]->create_time ; ?>
    </div>


   
    <div class='left float-left'>
        <b> Billing Number : </b> <?php echo sprintf("%04d",$billing_data[0]->billing_id) ; ?>
        </div>
    <div class='right'>
        <b>  Sell by :</b> <?php echo sprintf("%02d",$billing_data[0]->salesmen_id) ; ?>
    </div>
    </p>

    <table>
        <thead>
            <tr>
                <th class="">Name</th>
                <th class="">Price</th>
                <th class="">Qty</th>
                <th class="">Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    if($billing_details){
                        foreach ($billing_details as $key => $value) {
                           echo "
                           <tr>
                           <td class='' >".$value->category_name."</td>
                           <td class='' > ".number_format($value->price,2)."</td>
                           <td class='' >".$value->quantity."</td>
                           <td class='' >".number_format($value->amount,2)."</td>
                          
                       </tr>
                           ";
                        }
                    }
                    ?>
            </tr>

        </tbody>
    </table>

    <p class="right">
        Total : <b><span style='font-size:18px;'> <?php echo number_format($billing_data[0]->total_amount,2) ; ?>
                Rs</span></b> <br>
      
        Cash : <?php echo $billing_data[0]->pay_by_cash ?  number_format($billing_data[0]->pay_by_cash,2)  :  '0.00'; ?> Rs <br>
        Online : <?php echo $billing_data[0]->pay_by_online ?  number_format($billing_data[0]->pay_by_online,2)  :  '0.00'; ?> Rs <br>
        GR : <?php echo $billing_data[0]->discount ?  number_format($billing_data[0]->discount,2)  :  '0.00'; ?> Rs <br>
    </p>

    <p class="centered">Thanks for your purchase!
        <br>After Wash No Guarantee <br>
        No Claim / Return Only 3 Days
    </p>
    
</div>
<button id="btnPrint" class="hidden-print">Print</button>


</div>
</div>
</body>

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2018 15:35:41 GMT -->

</html>


<script>
const $btnPrint = document.querySelector("#btnPrint");
$btnPrint.addEventListener("click", () => {
    $('#report-summary').show();
    window.print();
     window.close();
});


$(document).ready(function() {
     setTimeout(function(){  $("#btnPrint").trigger("click");  },1000);
});
</script>

<style>
* {
    font-size: 16px;
    font-family: 'Times New Roman';
}

td,
th,
tr,
table {
    /* border-top: 1px solid black; */
    border: 1px solid #000000e3;
    border-collapse: collapse;
    padding: 1px 5px;
}

td.description,
th.description {
    width: 75px;
    max-width: 75px;
}

td.quantity,
th.quantity {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}

td.price,
th.price {
    width: 40px;
    max-width: 40px;
    word-break: break-all;
}


.centered {
    text-align: center;
    align-content: center;
    margin-top: 2px;
    margin-bottom: 2px;
}

.right {
    text-align: right;
    margin-top: 2px;
    margin-bottom: 2px;
 
}

.copy_r{
    text-align: center;
    font-size: 15px;
    font-weight: 700;
}

.ticket {
    width: 300px;
    max-width: 300px;
    /* border: 1px solid #888888; */
    padding: 5px 5px;
    margin-top: 0px;
}

img {
    height: 85px;
    width: 100px;
    border-radius: 55px;
    /* margin-left: 85px; */
}

table {
    width: 100%;
}

th {
    text-align: left;
}
.float-left{
    float:left;
}
.heder_Set{

    font-size: 18px;

}
@media print {

    .hidden-print,
    .hidden-print * {
        display: none !important;
    }
}
</style>