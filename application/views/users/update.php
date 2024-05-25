
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
                        <h4 class="page-title">User Update</h4>
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
                                <h5 class="card-title">Edit Users</h5>
 
                                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                                <?php echo validation_errors(); ?>
                        <?php echo form_open('users/update')?>
                        <input type="hidden" name="id" value="<?php echo $user['user_id']?>">
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="mb-3">
                                        <label for="complete_name"
                                            class="form-label">Complete Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="complete_name"
                                                placeholder="Complete Name" value="<?php echo $user['complete_name']?>">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email_address" class="form-label">Email Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="email_address"
                                                placeholder="E-mail Address" value="<?php echo $user['email']?>">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Password"
                                            class=" form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="pword"
                                                placeholder="Password Here" value="<?php echo $user['pword']?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-4" style="display:flex;">
                                    <div class="form-check py-2">
                                        <?php if($user['status'] == 1){$check = 'checked';}else{$check = '#';}?>
                                        <input type="checkbox" class="form-check-input" id="customCheck1" name="user_status" <?php echo $check?>>
                                        <label class="form-check-label" for="customCheck1">Activate User</label>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Update User</button>
                                    </div>
                                </div>
                            </form>
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
   