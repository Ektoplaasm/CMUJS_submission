
<script src="<?php echo base_url('assets/libs/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/extra-libs/sparkline/sparkline.js') ?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('dist/js/waves.js') ?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('dist/js/sidebarmenu.js') ?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('dist/js/custom.min.js') ?>"></script>
    <!--This page JavaScript -->
    <!-- <script src="<?php echo base_url('dist/js/pages/dashboards/dashboard1.js') ?>"></script> -->
    <!-- Charts js Files -->
    <script src="<?php echo base_url('assets/libs/flot/excanvas.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/flot/jquery.flot.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/flot/jquery.flot.pie.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/flot/jquery.flot.time.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/flot/jquery.flot.stack.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/flot/jquery.flot.crosshair.js') ?>"></script>
    <script src="<?php echo base_url('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') ?>"></script>
    <script src="<?php echo base_url('dist/js/pages/chart/chart-page-init.js') ?>"></script>
    <script src="<?php echo base_url('assets/extra-libs/DataTables/datatables.min.js')?>"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

        document.getElementById('myForm').addEventListener('submit', function (event) {
        // Prevent the default form submission
        event.preventDefault();

        // Get the CKEditor instance
        var editor = CKEDITOR.instances.editor;

        // Get the CKEditor content
        var content = editor.getData();

        // Add the CKEditor content to the form data
        this.elements.namedItem('abstract').value = content;

        // Manually submit the form
        this.submit();
    });
</script>
</body>

</html>