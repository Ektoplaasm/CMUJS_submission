
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">User Profile</h4>
                        <div class="ms-auto text-end">
                          
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?php echo base_url('users/create')?>" class="btn btn-primary" style="position:absolute;right:40px;top:40px">Add A User</a>
                                <?php echo form_open('users/filter')?>
                                <div class="mb-3" style="width:200px;position:absolute;right:840px;top:18px">
                                    <label class="form-label" style="margin:0;">Filter</label>
                                    <div style="display:flex;">
                                    <div>
                                    <select class="form-select" id="inlineFormCustomSelect" name="role">
                                    <option selected="" value="default">Choose...</option>
                                    <?php foreach($roles as $role):?>
                                    <option value="<?php echo $role['role_id']?>"><?php echo $role['role_name']?></option>
                                    <?php endforeach; ?>
                                    </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                    </div>
                                </div>
                                </form>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Complete Name</th>
                                                <th>Date Created</th>
                                                <th>Email Address</th>
                                                <th style="width:17.5em;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($users as $user): ?>
                                            <tr>
                                                <td><?php echo $user['complete_name']?></td>
                                                <td><?php echo $user['date_created']?></td>
                                                <td><?php echo $user['email']?></td>
                                                <td style="display:flex;"><a href= "<?php echo site_url('/users/'.$user['user_id']);?>" class="btn btn-primary">Edit User</a> &nbsp;
                                                <?php echo form_open('users/delete/'.$user['user_id']);?>
                                                <button type="submit" class="btn btn-danger text-white">Delete User</button>
                                                </form>
                                              </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                
                <!-- Button trigger modal -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
   