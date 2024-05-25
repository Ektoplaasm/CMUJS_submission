



</form>


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
                        <h4 class="page-title">User Adding</h4>
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
                                <h5 class="card-title">Add User</h5>

                        <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <?php echo validation_errors(); ?>
                            <?php echo form_open('users/create')?>
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="mb-3">
                                        <label for="complete_name"
                                            class="form-label">Complete Name</label>
                                        <div class="">
                                            <input type="text" class="form-control" name="complete_name"
                                                placeholder="Enter Complete Name" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email_address" class="form-label">Email Address</label>
                                        <div class="">
                                            <input type="email" class="form-control" name="email_address"
                                                placeholder="Enter E-mail Address" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Password"
                                            class="form-label">Password</label>
                                        <div class="">
                                            <input type="password" class="form-control" name="pword"
                                                placeholder="Enter Password" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                    <label class="form-label">User Role</label>
                                    <select class="form-select" id="inlineFormCustomSelect" name="user_role">
                                    <option selected="">Choose...</option>
                                    <!-- Extract All Roles -->
                                    <?php foreach($roles as $role):?>
                                        <option value="<?php echo $role['role_id']?>"><?php echo $role['role_name']?></option>
                                    <?php endforeach; ?>
                                   
                                    </select>
                                    <div class="col-sm-4" style="display:flex;">
                                    <div class="form-check py-2">
                                        <input type="checkbox" class="form-check-input" id="customCheck1" name="user_status">
                                        <label class="form-check-label" for="customCheck1">Activate User</label>
                                    </div>
                                </div>
                            
                               
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Add User</button>
                                    </div>
                                </div>
                            </form>
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
   