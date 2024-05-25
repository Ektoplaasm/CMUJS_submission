

<style>
  select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 99%;
    /* Remove default arrow */
    background-image: url(...);
    /* Add custom arrow */
}
</style>


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
                <?php echo form_open_multipart('articles/create')?>
                <!-- Article Title -->
                  <div class="mb-3">
                    <label class="form-label" for="title">Article Title
                    </label>
                    <input type="text" class="form-control" name="title" placeholder="Enter Article Title">
                  </div>
                  <!-- DOI and Keywords -->
                  <div style="display:flex;width:100%">
                  <div class="mb-3" style="width:90%">
                    <label class="form-label" for="doi">DOI
                    </label>
                    <input type="text" name="doi" class="form-control" placeholder="Enter Article DOI">
                  </div>
                  &nbsp;
                  <div class="mb-3" style="width:100%">
                    <label class="form-label" for="keywords">Keywords
                    </label>
                    <input type="text" name="keywords" class="form-control" placeholder="Enter Keywords (e.g. Mathematics, Engineering)">
                  </div>
                  </div>
                  <!-- CKEDITOR ABSTRACT -->
                  <label for="abstract" >Abstract</label>
                  <textarea id="editor" name="abstract" class="mb-3"></textarea>
                  
                    <!-- Journal Volume -->
                  <div class="mb-3" >
                    <label class="form-label">Journal Volume</label>
                    <select class="form-select" id="inlineFormCustomSelect" name="volume">
                      <option selected="">Choose...</option>
                      <?php foreach($volumes as $volume):?>
                      <option value="<?php echo $volume['volumeid']?>"><?php echo $volume['volume_name']?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                        <!-- Select Authors -->
                  
                        <div class="authors mb-3">
                                        <label class="form-label">Authors</label>
                                        <div class="author-input row">
                                            <select class="choose form-select" name="author[]">
                                            <option selected="">Choose...</option>
                                                <?php foreach ($authors as $author) {
                                                    echo "<option value=" . $author["user_id"] . ">" . $author["complete_name"] . "</option>";
                                                } ?>
                                            </select>
                                        </div>
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
                        <input type="checkbox" class="form-check-input" id="customCheck1" name="publish">
                        <label class="form-check-label" for="customCheck1">Publish</label>
                      </div>
                    </div>

                  </div>
                <button type="submit" class="btn btn-primary" id="myForm">Submit Article</button>
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
      $(".chosen-select").chosen({
        no_results_text: "No results match"
      })
    </script>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    

<script>
var authorElementId = 2;

document.getElementById('addButton').addEventListener('click', function () {
        // Clone the author-input.row element
        var newInput = document.querySelector('.author-input.row').cloneNode(true);
        // Remove the 'id' attribute to avoid duplicate IDs
        newInput.id = 'a' + (document.querySelectorAll('.author-input.row').length + 1);
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
   