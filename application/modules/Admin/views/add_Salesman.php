<div class='col-sm-12'>
    <div class="row">

        <div class='col-sm-12'>
            <div id='massage'></div>
            <div class='card'>
                <div class='card-body'>
                    <!-- <h4 class="card-title">Add New Villages</h4> -->

                    <div class="col-sm-12">

                        <form id='general_form_submit' action='Admin/Admin_dashboard/add_new_Salesman' method='post'>
                            <div class="row">
                              
                        
                                <!--  -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Name <span
                                                class='required'>*</span></label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter Salesman Name" required
                                            value='<?php if(isset($salesman_master_info)){ echo $salesman_master_info[0]->name;  } ?>'
                                            />
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Father Name </label>
                                        <input type="text" class="form-control" id="father_name" name="father_name"
                                            placeholder="Enter Father Name" 
                                            value='<?php if(isset($salesman_master_info)){ echo $salesman_master_info[0]->father_name;  } ?>'
                                            />
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Address <span
                                                class='required'>*</span></label>
                                        <input type="text" class="form-control" id="address" name="address"
                                            placeholder="Enter address" required 
                                            value='<?php if(isset($salesman_master_info)){ echo $salesman_master_info[0]->address;  } ?>'
                                            />
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Number <span
                                                class='required'>*</span></label>
                                        <input type="text" class="form-control numeric" id="number" name="number"
                                            placeholder="Enter number" required
                                            value='<?php if(isset($salesman_master_info)){ echo $salesman_master_info[0]->number;  } ?>'
                                            />
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alternat Number</label>
                                        <input type="text" class="form-control numeric" id="alt_number" name="alt_number"
                                            placeholder="Enter Alternat Number" 
                                            value='<?php if(isset($salesman_master_info)){ echo $salesman_master_info[0]->alt_number;  } ?>'
                                            />
                                    </div>
                                </div>

                                <!--  -->
                                <div class="col-sm-12" align='center'>
                                    <div class="form-group">
                                    <?php if(isset($salesman_master_info)){ ?>
                                        <input type="hidden" value='<?php echo $salesman_master_info[0]->id;  ?>' name='id' />
                                        <button class="btn btn-success" type="submit"> Update</button>
                                        <?php }else{ ?>
                                            <button class="btn btn-success" type="submit">Submit</button>
                                            <?php    } ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
