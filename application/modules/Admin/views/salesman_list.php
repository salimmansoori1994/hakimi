<div class='col-sm-12'>
    <div class="row">
        <div class='col-sm-12'>
        <div id='massage'></div>

            <!-- table -->
            <div class="card">
                <div class="card-body">
                    <?php if($salesman_master){ ?>
                    <h4 class="card-title">All Salesman</h4>


                    <div class="table-responsive">
                        <table id="data-table" class="table">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Father Name</th>
                                   
                                    <th>Number </th>
                                    <th>Alt Number </th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
								$i=1;
									foreach($salesman_master as $row){
										echo '  <tr>
												<td>'.$row->id.'</td>
												<td>'.$row->name.'</td>
                                                <td>'.$row->father_name.'</td>
                                             
												<td>'.$row->number.'</td>
												<td>'.$row->alt_number.'</td>
                                                <td>'.$row->address.'</td>
                                                <td>'.$row->status.'</td>
                                                <td>
                                                
                                                ';
                                                ?>
                                                <a href='<?php echo base_url("Admin/Admin_dashboard/Add_Salesman?id=".$row->id.""); ?>'>  <button class='btn btn-sm btn-danger'
                                    
                                                align='center'>
                                                Edit
                                            </button> </a>

                                               <?php      if($row->status == 'active'){ ?>
                                                    <button class='btn btn-sm btn-primary' onclick='active_inactive_user(<?php echo $row->id ; ?>,"inactive","Are you sure inactive the salesman?","salesman","id","status","Salesman has been inactived.");' align='center'>
                                                    Inactive
                                                    </button>
                                                    <?php }else  if($row->status == 'inactive'){  ?>	
                                                        <button class='btn btn-sm btn-secondary' onclick='active_inactive_user(<?php echo $row->id ; ?>,"active","Are you sure active the salesman?","salesman","id","status","Salesman has been actived.");' align='center'>
                                                    Active
                                                    </button>
                                                        <?php } 
                                        
                                                echo ' 	</td></tr>';
                                                $i++;
									}
								?>

                            </tbody>
                        </table>
                    </div>
                    <?php }else{
						echo '<center><h3>  Villages Not Avialable.</h3></center>';
					} ?>
                </div>
            </div>
            <!-- end table -->


        </div>

    </div>

</div>