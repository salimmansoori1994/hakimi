<div class='col-sm-12'>



    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">

                    <form action="" method='post'>
                        <div class='col-sm-2 set_col no_padding'>
                            <label for="">From</label>
                            <input type="date" class='form-control se_control' name="from_date"
                                value='<?php echo $from_date; ?>' id="">
                        </div>
                        <div class='col-sm-2 set_col no_padding'>
                            <label for="">To</label>
                            <input type="date" name="to_date" class='form-control se_control'
                                value='<?php echo $to_date; ?>' id="">
                        </div>
                        <div class='col-sm-2 set_col '>
                            <label for="">Recipt Number</label>
                            <input type="text" name="billing_id" class='form-control se_control numeric' id=""
                                value='<?php echo $billing_id; ?>' placeholder='Enter Number'>
                        </div>
                        <div class='col-sm-3 set_col '>
                            <label for="">SalesMen</label>
                            <div class="">
                                <select class="select2" name='salesmen_id' data-placeholder='SalesMen Select'>
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
                        <div class='col-sm-3 set_col '>
                            <label for="">Shops</label>
                            <div class="">
                                <select class="select2" name='shop_id' data-placeholder='Shop Select'>
                                    <option value=""></option>
                                    <?php 
                                if($Shops_master){ 

                                foreach ($Shops_master as $key => $value) {
                                    if($shop_id == $value->id){
                                        echo "<option value='".$value->id."' Selected>".$value->shop_name."</option>";
                                    }else{
                                        echo "<option value='".$value->id."'>".$value->shop_name."</option>";
                                    }
                                    
                                }
                                }
                                ?>
                                </select>
                            </div>
                        </div>


                </div>
                <!--  -->
                <div class="col-sm-12" align="center">
                    <div class="form-group">
                        <button class="btn btn-sm btn-success" type="submit">Search Reports</button>
                    </div>
                </div>

                </form>
            </div>


        </div>
    </div>

    <div class='card'>




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

                        </tr>
                    </thead>
                    <tbody>
                        <?php 
								$i=1;
                                $total_quntity = $cash = $online = $amount = $item = $discount= 0;
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

                            <th>Total </th>
                            <th><?php echo $total_quntity ?> </th>
                            <th><?php echo $cash ?> Rs </th>
                            <th><?php echo $online ?> Rs</th>

                            <th> <?php echo $amount ?> Rs</th>
                            <th> <?php echo $discount ?> Rs</th>
                            <th> <?php echo $item ?> </th>
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


    <style>
    td {
        font-size: 14px;
    }

    tfoot th {
        background: #ff5722;
        text-align: center;
    }
    </style>