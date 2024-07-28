<div class='col-sm-12'>
    <div class="row">


        <div class="col-sm-6 card">
            <div class="card-body">
                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    <!-- <h5><span id='Status_head'>Change</span> password</h5> -->
                </div>
                <div class="widget-content ">
                <form id='general_form_submit' action='Admin/Change_password/change_password_set' method='post'>

                        <div class="control-group">
                            <label class="control-label">Enter old Password</label>
                            <br>
                            <div class="controls">
                                <input type="password" class="form-control" placeholder="Enter old Password"
                                    name='old_password' id='old_password' style='width:90%;' required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">New Password</label>
                            <div class="controls">
                                <input type="password" class="form-control" placeholder="Enter New Password"
                                    name='new_password' id='new_password' style='width:90%;' required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Confirm Password </label>
                            <div class="controls">
                                <input type="password" class="form-control" placeholder="Enter Confirm Password "
                                    name='confirm_password' id='confirm_password' style='width:90%;' required />
                            </div>
                        </div>


                </div>
                <br>
                <div class="form-actions">
                    <input type="submit" id='submit' class="btn btn-success" name='Save' value='Submit'>
                </div>
                </form>
            
            </div>

        </div>    <div id='massage'></div>
    </div>
</div>
</div>