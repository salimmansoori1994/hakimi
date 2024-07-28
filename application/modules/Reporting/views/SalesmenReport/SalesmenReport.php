<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from byrushan.com/projects/super-admin/app/2.1.2/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2018 15:35:41 GMT -->

<head>
    <?php echo $this->load->view('comman_data/commanheader.php'); ?>
</head>

<body data-sa-theme="2">
    <section class="">
        <div class="error__inner">
            <h1> <?php echo PROJECTNAME ; ?> </h1>

            <div class='col-sm-3' id='front_nav_box'>
                <?php echo $this->load->view('comman_data/comman_front_nav.php',$view_data); ?>
            </div>
            <div class='col-sm-9' id='front_nav_box_search'>
                <form action="" method='post'>
                <div class='col-sm-3 set_col'>
                    <span style='float:left'> From :- &nbsp;&nbsp; </span> 
                    <br><input type="date"
                        class='form-control se_control' name="from_date" value='<?php echo $from_date; ?>' id="">
                </div>
                <div class='col-sm-3 set_col'>
                    <span style='float:left'> To :- &nbsp;&nbsp;</span> <br> <input type="date" name="to_date"
                        class='form-control se_control' value='<?php echo $to_date; ?>' id="">
                </div>
                <div class='col-sm-3 set_col  '>
                    <span style='float:left'> Receipt :- &nbsp;</span> <br> <input type="text" name="billing_id"
                        class='form-control se_control numeric' id="" value='<?php echo $billing_id; ?>' placeholder='Enter Number' style="width:100%;">
                </div>
                <div class='col-sm-2 set_col '>
                <span style='float:left'> Salesman :- &nbsp;</span> <br> 
                    <div class="">
                        <select class="select2" name='salesmen_id' data-placeholder='SalesMen'>
                            <option value=""></option>
                            <?php 
if($salesman_master){ 
    
    foreach ($salesman_master as $key => $value) {
        if($salesmen_id == $value->id){
            echo "<option value='".$value->id."' Selected>".sprintf("%03d",$value->id).'-'.$value->name."</option>";
        }else{
            echo "<option value='".$value->id."'>".sprintf("%03d",$value->id).'-'.$value->name."</option>";
        }
      
    }
}
?>
                        </select>
                    </div>
                </div>
                <div class='col-sm-1 set_col'>
                    <button class='btn btn-sm btn-success'> Search </button>
                </div>
                </form>
            </div>

            <!-- <h2>The page you were looking for doesn't exist!</h2>
                <p>Donec in ex eget orci facilisis gravida vitae ut tortor. In tempus lacus ac dui iaculis, placerat tempus diam vehiculaed suscipit tortor id lorem mollis</p> -->

            <div class='col-sm-12 row'>
            <!-- table -->
            <div class="" style='width:100%'>
                <div class="card-body">
                    <?php if($billing_data){ ?>
                    <!-- <h4 class="card-title">All Salesman</h4> -->


                    <div class="table-responsive">
                        <table id="data-table" class="table">
                            <thead>
                                <tr>
                                    <th>Billing ID</th>
                                    <th>Shop</th>
                                    <th> Salesman</th>
                                   
                                    <th>Customer Number </th>
                                    <th>Total Quntity</th>
                                    <th>Cash </th>
                                    <th>Online</th>
                                   
                                    <th>Total Amount</th>
                                    <th>GR</th>
                                    <th>Total Item</th>
                                    <th>Billing Date</th>
                                    <th>Billing Time</th>
                                
                                    <th>Receipt</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
								$i=1;
                                $total_quntity = $cash = $online = $amount = $item = $discount =  0;
									foreach($billing_data as $row){

                                        $row->total_quntity ?   $total_quntity += $row->total_quntity : '0';
                                        $row->pay_by_cash ?  $cash += $row->pay_by_cash : '0';
                                        $row->pay_by_online ?  $online += $row->pay_by_online : '0';
                                        $row->total_amount ? $amount += $row->total_amount : '0';
                                        $row->total_item ? $item += $row->total_item : '0';
                                        $row->discount ? $discount += $row->discount : '0';

										echo '  <tr>
												<td>'.sprintf("%04d",$row->id).'</td>
												<td>'.$row->shop_name.'</td>
                                                <td> '.sprintf("%03d",$row->salesmanid).' -  '.$row->name.'</td>
                                             
												<td>'.$row->customer_number.'</td>
                                                <td>'.$row->total_quntity.'</td>
												<td>'.$row->pay_by_cash.' Rs</td>
                                                <td>'.$row->pay_by_online.' Rs</td>
                                                
                                                <td>'.$row->total_amount.' Rs</td>
                                                <td>'.$row->discount.' Rs</td>
                                                <td>'.$row->total_item.'</td>
                                                <td>'.$row->create_date.'</td>
                                                <td>'.$row->create_time.'</td>
                                                <td> <a target="_blank"  href="'.base_url('Billing/print_billing/'.base64_encode($row->id).'').'"> <i class="actions__item zmdi zmdi-print"></i> </a></td>
                                                </tr>';
                                                $i++;
									}
								?>

                            </tbody>
                            <tfoot>
                                    <tr>
                                    <th></th>
                                    <th></th>
                                    <th> </th>
                                   
                                    <th>Total  </th>
                                    <th><?php echo $total_quntity ?> </th>
                                    <th><?php echo $cash ?> Rs </th>
                                    <th><?php echo $online ?> Rs</th>
                                   
                                    <th> <?php echo $amount ?> Rs</th>
                                    <th> <?php echo $discount ?> Rs</th>
                                    <th> <?php echo $item ?> </th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    </tr>
                            </tfoot>
                        </table>
                    </div>
                    <?php }else{
						echo '<center><h3> Bill  Not Avialable.</h3></center>';
					} ?>
                </div>
            </div>
            <!-- end table -->

            </div>

            <div style='    clear: both;  width: 100%;'>
<?php echo $this->load->view('comman_data/commanfooter.php'); ?>
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
.se_control {
    height: 28px;
    float: left;
    width: 100%;
}

.set_col {
    border-left: 1px solid;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 1.25;
    /* padding: 0.6rem 1px; */
    /* color: #FF5722; */
    height: 23px;
    padding: 0px;
}
tbody{
    background: #404040b3;

}
.error__inner{
    height: auto;
    position: absolute;
    min-height: 800px;

}
tfoot th{
    background: #ff5722;
    text-align:center;
}
</style>