




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
                        <h4 class="page-title">Article Adding</h4>
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
            <div class="card card-body">
                <h4 class="card-title">Add Article</h4>

                <?php echo validation_errors(); ?>
                <?php echo form_open_multipart('articles/update')?>
                <input type="hidden" name="id" value="<?php echo $article['article_id']?>">
                <input type="hidden" name="default" value="<?php echo $article['file_name']?>">
                <!-- Article Title -->
                  <div class="mb-3">
                    <label class="form-label" for="title">Article Title
                    </label>
                    <input type="text" class="form-control" name="title" placeholder="Enter Article Title" value="<?php echo $article['title'];?>">
                  </div>
                  <!-- DOI and Keywords -->
                  <div style="display:flex;width:100%">
                  <div class="mb-3" style="width:90%">
                    <label class="form-label" for="doi">DOI
                    </label>
                    <input type="text" name="doi" class="form-control" placeholder="Enter Article DOI" value="<?php echo $article['doi'];?>">
                  </div>
                  &nbsp;
                  <div class="mb-3" style="width:100%">
                    <label class="form-label" for="keywords">Keywords
                    </label>
                    <input type="text" name="keywords" class="form-control" placeholder="Enter Keywords (e.g. Mathematics, Engineering)" value="<?php echo $article['keywords'];?>">
                  </div>
                  </div>
                  <!-- CKEDITOR ABSTRACT -->
                  <label for="abstract" >Abstract</label>
                  <textarea id="editor" name="abstract" class="mb-3"><?php echo $article['abstract'];?></textarea>
                  
                    <!-- Journal Volume -->
                  <div class="mb-3">
                    <label class="form-label">Journal Volume</label>
                    <select class="form-select" id="inlineFormCustomSelect" name="volume">
                      <?php foreach($volumes as $volume):?>
                        <?php if($article['volume_id'] == $volume['volumeid']){
                          echo "<option value='". $volume['volumeid']."' selected='selected'>" . $volume['volume_name'] ."</option>";
                        } else { 
                          echo "<option value='" . $volume["volumeid"] . "'>" . $volume["volume_name"] . "</option>";
                        } ?>
                      <?php endforeach; ?>
                    </select>
                  </div>
                        <!-- Select Authors -->
                        
                                  <div class="authors mb-3">
                                        <label class="form-label">Authors</label>
                                        <?php foreach ($article_authors as $article_author): ?>
                                        <div class="author-input row">
                                            <select class="choose form-select" name="author[]">
                                            
                                                <?php foreach ($authors as $author): ?> 
                                                    <option value="<?php echo $author["user_id"] ?>" <?php echo $article_author['user_id'] == $author['user_id'] ? 'selected' : '' ?>> <?php echo $author["complete_name"]?> 
                                                    </option>
                                               
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                    
                                    <div class="d-md-flex align-items-center">
                                        <div class="mt-3 mt-md-0 ms-auto">
                                            <button type="button" class="btn btn-primary" id="addButton">
                                                <i class="ti ti-send me-2 fs-4"></i>
                                                Add Author
                                            </button>
                                        </div>
                                    </div>
                                    
                    <!-- Upload PDF FILE -->
                  <div class="mb-3">
                    <label class="form-label">Upload PDF File</label>
                    <input type="file" class="form-control" accept=".pdf" name="article_pdf">
                  </div>
                  <div class="mb-3 row pt-3">
                    <div class="col-sm-4" style="display:flex;">
                    <div class="form-check py-2">
                          <?php if($article['published'] == 1){$check = 'checked';}else{$check = '';}?>
                          <input type="checkbox" class="form-check-input" id="customCheck1" name="publish" <?php echo $check?>>
                          <label class="form-check-label" for="customCheck1">Publish</label>
                      </div>            
                      </div>
                    </div>
            
                  
                  <button type="submit" class="btn btn-primary" id="myForm">Update Article</button>
                                                  
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

    <script>
var authorElementId = 2;

document.getElementById('addButton').addEventListener('click', function () {
        // Clone the author-input.row element
        var newInput = document.querySelector('.author-input.row').cloneNode(true);
        // Remove the 'id' attribute to avoid duplicate IDs
        newInput.id = 'author' + (document.querySelectorAll('.author-input.row').length + 1);
        // Clear the value of the new input field
        newInput.querySelector('.choose').value = 'Choose...'; // Assuming you want to clear the select value
        // Append the cloned input to the container
        document.querySelector('.authors').appendChild(newInput);

        // Optionally, clear the original input field
        document.querySelector('.author-input.col input').value = '';

        // Check if the new input is the first child of its parent
        if (newInput === document.querySelector('.authors').firstElementChild) {
            // Remove the delete button from the first input
            var deleteButton = newInput.querySelector('.deleteAuthor');
            if (deleteButton) {
                deleteButton.remove();
            }
        }

        // Initialize the dropdown for the new input
        var dropdowns = newInput.querySelectorAll('.dropdown-toggle');
        dropdowns.forEach(function (dropdown) {
            var dropdownElement = new bootstrap.Dropdown(dropdown);
        });

        // Optionally, show the input field if it's hidden
        var inputField = newInput.querySelector('.text.form-control.mt-3');
        if (inputField) {
            inputField.style.display = "block";
        }
    });

    $(document).ready(function () {
        $(document).on('click', '.deleteAuthor', function (event) {
            var depth = 3;
            var currentElement = this;
            var elementsToRemove = [];

            for (var i = 0; i < depth; i++) {
                if (currentElement.parentElement) {
                    elementsToRemove.push(currentElement.parentElement);
                    currentElement = currentElement.parentElement;
                } else {
                    break;
                }
            }

            elementsToRemove.forEach(function (element) {
                element.remove();
            });
        });
    });

</script>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
   