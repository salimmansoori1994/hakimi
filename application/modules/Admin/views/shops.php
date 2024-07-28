<div class='col-sm-12'>
    <div class="row">
        <div class='col-sm-8'>


            <!-- table -->
            <div class="card">
                <div class="card-body">
                    <?php if($Shops_master){ ?>
                    <!-- <h4 class="card-title">ग्राम पंचायत उपयोगकर्ता लॉगिन</h4> -->


                    <div class="table-responsive">
                        <table id="data-table" class="table">
                            <thead>
                                <tr>
                                    <th>Sn.</th>
                                    <th>Name</th>
                                    <th>GST</th>
                                    <th>Number</th>
                                    <th>Alt number</th>
                                    <th>Address</th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
								$i=1;
									foreach($Shops_master as $row){
                            
										echo '  <tr>
												<td>'.$i.'</td>
												<td>'.$row->shop_name.'</td>
                                                <td>'.$row->shop_gst.'</td>
                                                <td>'.$row->shop_number.'</td>
                                                <td>'.$row->shop_alt_number.'</td>
                                                <td>'.$row->shop_address.'</td>
                                                
                                                '; 
                                                ?>
                                <td>
                                  <a href='<?php echo base_url("Admin/Admin_dashboard/Shops?id=".$row->id.""); ?>'>  <button class='btn btn-sm btn-danger'
                                    
                                        align='center'>
                                        Edit
                                    </button> </a>

                                    <?php if($row->shop_status == 'active'){ ?>
                                    <button class='btn btn-sm btn-primary'
                                        onclick='active_inactive_user(<?php echo $row->id ; ?>,"inactive","Are you sure inactive the shops?","shops","id","shop_status","Shops has been inactived.");'
                                        align='center'>
                                        Inactive
                                    </button>
                                    <?php }else  if($row->shop_status == 'inactive'){  ?>
                                    <button class='btn btn-sm btn-secondary'
                                        onclick='active_inactive_user(<?php echo $row->id ; ?>,"active","Are you sure active the shops?","shops","id","shop_status","Shops has been actived.");'
                                        align='center'>
                                        Active
                                    </button>
                                    <?php } ?>

                                    <button class='btn btn-sm btn-danger'
                                        onclick='active_inactive_user(<?php echo $row->id ; ?>,"delete_permanet","Are you sure Deleted this?","shops","id","shop_status","Shops has been Deleted.");'
                                        align='center'>
                                        Delete
                                    </button>




                                    <?php
                                                 echo '         </td>
												</tr>';
                                                $i++;
									}
								?>

                            </tbody>
                        </table>
                    </div>
                    <?php }else{
						echo '<center><h3> Not Avialable.</h3></center>';
					} ?>
                </div>
            </div>
            <!-- end table -->


        </div>

        <div class='col-sm-4'>

            <div id='massage'></div>
            <div class='card'>
                <div class='card-body'>
                    <h4 class="card-title">Add New Shop</h4>

                    <div class="col-sm-12">

                        <form id='general_form_submit' action='Admin/Admin_dashboard/add_new_Shops' method='post'>
                            <div class="row">
                                <!--  -->

                                <!--  -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Shop Name <span
                                                class='required'>*</span></label>
                                        <input type="text" class="form-control" id="shop_name" name="shop_name"
                                            placeholder="Enter Shop Name" required style='text-transform: uppercase;'
                                            value='<?php if(isset($Shops_master_info)){ echo $Shops_master_info[0]->shop_name;  } ?>'
                                            />
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Shop GST <span class='required'>*</span></label>
                                        <input type="text" class="form-control" id="shop_gst" name="shop_gst"
                                            placeholder="Enter GST " required style='text-transform: uppercase;'
                                            value='<?php if(isset($Shops_master_info)){ echo $Shops_master_info[0]->shop_gst;  } ?>'
                                            />
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Shop Number <span
                                                class='required'>*</span></label>
                                        <input type="text" class="form-control numeric" id="shop_number"
                                            name="shop_number" placeholder="Enter Shop Number" required 
                                            value='<?php if(isset($Shops_master_info)){ echo $Shops_master_info[0]->shop_number;  } ?>'
                                            />
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Shop Alternate Number <span
                                                class='required'>*</span></label>
                                        <input type="text" class="form-control numeric" id="shop_alt_number"
                                            name="shop_alt_number" placeholder="Enter Shop Alternate Number" required
                                            value='<?php if(isset($Shops_master_info)){ echo $Shops_master_info[0]->shop_alt_number;  } ?>'
                                            />
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Shop Address <span
                                                class='required'>*</span></label>
                                        <input type="text" class="form-control" id="shop_address" name="shop_address"
                                            placeholder="Enter Shop Address" required 
                                            value='<?php if(isset($Shops_master_info)){ echo $Shops_master_info[0]->shop_address;  } ?>'
                                            />
                                    </div>
                                </div>


                                <!--  -->
                                <div class="col-sm-12" align='center'>
                                    <div class="form-group">
                                    <?php if(isset($Shops_master_info)){ ?>
                                        <input type="hidden" value='<?php echo $Shops_master_info[0]->id;  ?>' name='id' />
                                        <button class="btn btn-success" type="submit"> Update</button>
                                        <?php }else{ ?>
                                            <button class="btn btn-success" type="submit">Submit</button>
                                            <?php    } ?>
                                    </div>
                                </div>

                            </div>
                    </div>
                    </form>
                </div>

            </div>


        </div>

    </div>