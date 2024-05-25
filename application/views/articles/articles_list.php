
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
                        <h4 class="page-title">ARTICLES PUBLISHED</h4>
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
                            <a class="btn btn-primary" href="<?php echo base_url('articles/create')?>" style="position:absolute;right:40px;top:40px">Add Articles</a>
                            <?php echo form_open('articles/filter')?>
                                <div class="mb-3" style="width:200px;position:absolute;right:840px;top:18px">
                                    <label class="form-label" style="margin:0;">Filter by Volume</label>
                                    <div style="display:flex;">
                                    <div>
                                    <select class="form-select" id="inlineFormCustomSelect" name="volume">
                                    <option selected="" value="default">Choose...</option>
                                    <?php foreach($volumes as $volume):?>
                                    <option value="<?php echo $volume['volumeid']?>"><?php echo $volume['volume_name']?></option>
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
                                                <th>Title</th>
                                                <th>Keywords</th>
                                                <th>Published Status</th>
                                                <th>File Name</th>
                                                <th>Date Published</th>
                                                <th>DOI</th>
                                                <th style="width:17.5em;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($articles as $article): ?>
                                            <tr>
                                                <td><?php echo $article['title']?></td>
                                                <td><?php echo $article['keywords']?></td>
                                                <td><?php if($article['published'] == 1){echo 'Published';} else {echo 'Awaiting Evaluation';} ?></td>
                                                <td><?php echo $article['file_name']?></td>
                                                <td><?php echo $article['date_published']?></td>
                                                <td><?php echo $article['doi']?></td>
                                                <td>
                                                <div style="display:flex; background-image: linear-gradient(var(--bs-table-accent-bg), var(--bs-table-accent-bg));">
                                                <a href= "<?php echo site_url('/articles/'.$article['article_id']);?>" class="btn btn-primary">Edit Article</a> &nbsp;
                                                <?php echo form_open('articles/delete/'.$article['article_id']);?>
                                                <button type="submit" class="btn btn-danger text-white">Delete Article</button>
                                                </form> &nbsp;
                                                <a href="<?php echo base_url('assets/cmujs_pdf/'.$article['file_name'])?>" class="btn btn-danger text-white">PDF</a>
                                                </div>
                                                
                                                </td>

                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
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
    