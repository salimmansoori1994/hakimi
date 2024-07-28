<div class='col-sm-12'>
    <div class="row">
        <div class='col-sm-8'>


            <!-- table -->
            <div class="card">
                <div class="card-body">
                    <?php if($categories_master){ ?>
                    <!-- <h4 class="card-title">ग्राम पंचायत उपयोगकर्ता लॉगिन</h4> -->


                    <div class="table-responsive">
                        <table id="data-table" class="table">
                            <thead>
                                <tr>
                                    <th>Sn.</th>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
								$i=1;
									foreach($categories_master as $row){
                            
										echo '  <tr>
												<td>'.$i.'</td>
												<td>'.$row->category_code.'</td>
                                                <td>'.$row->category_name.'</td>
                                                <td>'.$row->category_status.'</td>'; 
                                                ?>
                                            <td>

                                            <a href='<?php echo base_url("Admin/Admin_dashboard/Category?id=".$row->id.""); ?>'>  <button class='btn btn-sm btn-info'
                                    
                                    align='center'>
                                    Edit
                                </button> </a>

                        <?php if($row->category_status == 'active'){ ?>
                            <button class='btn btn-sm btn-primary' onclick='active_inactive_user(<?php echo $row->id ; ?>,"inactive","Are you sure inactive the category?","categories","id","category_status","category has been inactived.");' align='center'>
                            Inactive
                            </button>
                            <?php }else  if($row->category_status == 'inactive'){  ?>	
                                <button class='btn btn-sm btn-secondary' onclick='active_inactive_user(<?php echo $row->id ; ?>,"active","Are you sure active the category?","categories","id","category_status","category has been actived.");' align='center'>
                            Active
                            </button>
                                <?php } ?>

                                <button class='btn btn-sm btn-danger' onclick='active_inactive_user(<?php echo $row->id ; ?>,"delete_permanet","Are you sure Deleted this?","categories","id","category_status","category has been Deleted.");' align='center'>
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
                    <h4 class="card-title">Add New Category</h4>

                    <div class="col-sm-12">

                        <form id='general_form_submit' action='Admin/Admin_dashboard/add_new_Category' method='post'>
                            <div class="row">
                                <!--  -->
                              
                                <!--  -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Code <span class='required'>*</span></label>
                                        <input type="text" class="form-control numeric" id="category_code" name="category_code"
                                            placeholder="Enter Category Code" required    value='<?php if(isset($category_info)){ echo $category_info[0]->category_code;  } ?>' style='text-transform: uppercase;' />
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Name <span
                                                class='required'>*</span></label>
                                        <input type="text" class="form-control" id="category_name" name="category_name"
                                            placeholder="Enter Category Name" required   value='<?php if(isset($category_info)){ echo $category_info[0]->category_name;  } ?>' style='text-transform: uppercase;'  />
                                    </div>
                                </div>
                             
                                <!--  -->
                                <div class="col-sm-12" align='center'>
                                    <div class="form-group">
                                    <?php if(isset($category_info)){ ?>
                                        <input type="hidden" value='<?php echo $category_info[0]->id;  ?>' name='id' />
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