<script src="{{public_url("/assets/js/jquery-3.0.0.min.js")}}"></script>
<script src="{{public_url("/assets/js/bootstrap.min.js")}}"></script>
<script src="{{public_url("/js/plugins/pace.min.js")}}"></script>
<script src="{{public_url("/js/main.js")}}"></script>
<script type="text/javascript" src="{{public_url("/js/plugins/jquery.dataTables.min.js")}}"></script>
<script type="text/javascript" src="{{public_url("/js/plugins/dataTables.bootstrap.min.js")}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );
</script>
