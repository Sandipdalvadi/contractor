
<script src="{{public_url("/datatable_js/js/bootstrap.min.js")}}"></script>
<script src="{{public_url("/js/plugins/pace.min.js")}}"></script>
<script src="{{public_url("/js/main.js")}}"></script>
<script type="text/javascript" src="{{public_url("/datatable_js/js/jquery.dataTables.min.js")}}"></script>
<script type="text/javascript" src="{{public_url("/datatable_js/js/dataTables.buttons.min.js")}}"></script>
<script type="text/javascript" src="{{public_url("/datatable_js/js/jszip.min.js")}}"></script>
<script type="text/javascript" src="{{public_url("/datatable_js/js/pdfmake.min.js")}}"></script>
<script type="text/javascript" src="{{public_url("/datatable_js/js/vfs_fonts.js")}}"></script>
<script type="text/javascript" src="{{public_url("/datatable_js/js/buttons.flash.min.js")}}"></script>
<script type="text/javascript" src="{{public_url("/datatable_js/js/buttons.html5.min.js")}}"></script>
<script type="text/javascript" src="{{public_url("/datatable_js/js/select2.min.js")}}"></script>
<script type="text/javascript" src="{{public_url("/datatable_js/js/buttons.print.min.js")}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#example").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'csv'
            ]
            });
            $('.select2').select2();
    } );
</script>
