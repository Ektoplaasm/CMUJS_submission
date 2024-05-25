
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
                        <h4 class="page-title">VOLUMES</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url('home')?>">Home</a></li>
                                </ol>
                            </nav>
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
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="card">
                            <div class="card-body">
                            <div class="card card-body">
                <h4 class="card-title">Add Volume</h4>

                <?php echo validation_errors(); ?>
                <?php echo form_open('volumes/update')?>
                    <input type="hidden" name="id" value="<?php echo $volume['volumeid']?>">
                  <div class="mb-3">
                    <label class="form-label">Volume Name
                    </label>
                    <input type="text" class="form-control" placeholder="Volume Name" name="volume_name" value="<?php echo $volume['volume_name']?>">
                  </div>
                  <div class="mb-1">
                    <label class="form-label">Description
                    </label>
                    <input type="text" class="form-control" placeholder="Description" name="description" value="<?php echo $volume['description']?>">
                  </div>
    
                  
                  <div class="mb-3 row pt-3">
                    <div class="col-sm-4" style="display:flex;">
                    <div class="form-check py-2">
                                        <?php if($volume['published'] == 1){$check = 'checked';}else{$check = '#';}?>
                                        <input type="checkbox" class="form-check-input" id="customCheck1" name="publish" <?php echo $check?>>
                                        <label class="form-check-label" for="customCheck1">Publish</label>
                                    </div>
                      &nbsp;
                      <div class="form-check py-2">
                                        <?php if($volume['archived'] == 1){$check = 'checked';}else{$check = '#';}?>
                                        <input type="checkbox" class="form-check-input" id="customCheck1" name="archive" <?php echo $check?>>
                                        <label class="form-check-label" for="customCheck1">Archive</label>
                                    </div>
                    </div>
            
                  </div>
                  <button type="submit" class="btn btn-primary">Update Volume</button>
                </form>
              </div>

                            </div>
                        </div>
                    </div>
                </div>
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
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a
                    href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
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
    