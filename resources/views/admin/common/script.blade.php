
<!-- Required Jquery -->
    
<script type="text/javascript" src="{{public_url("/d_files/bower_components/bootstrap/js/bootstrap.min.js") }}"></script>
<script type="text/javascript" src="{{public_url("/d_files/bower_components/popper.js/js/popper.min.js") }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{public_url("/d_files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js") }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{public_url("/d_files/bower_components/modernizr/js/modernizr.js") }}"></script>
<!-- Chart js -->
<script type="text/javascript" src="{{public_url("/d_files/bower_components/chart.js/js/Chart.js") }}"></script>
<!-- amchart js -->
<script src="{{public_url("/d_files/bower_components/datatables.net/js/jquery.dataTables.min.js") }}"></script>
<script src="{{public_url("/d_files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js") }}"></script>
<script src="{{public_url("/d_files/assets/pages/data-table/js/jszip.min.js") }}"></script>
<script src="{{public_url("/d_files/assets/pages/data-table/js/pdfmake.min.js") }}"></script>
<script src="{{public_url("/d_files/assets/pages/data-table/js/vfs_fonts.js") }}"></script>

<script type="text/javascript" src="{{public_url("/d_files/assets/pages/widget/amchart/amcharts.js") }}"></script>
<script type="text/javascript" src="{{public_url("/d_files/assets/pages/widget/amchart/serial.js") }}"></script>
<script type="text/javascript" src="{{public_url("/d_files/assets/pages/widget/amchart/light.js") }}"></script>
<script type="text/javascript" src="{{public_url("/d_files/assets/js/jquery.mCustomScrollbar.concat.min.js") }}"></script>
<script type="text/javascript" src="{{public_url("/d_files/assets/js/SmoothScroll.js") }}"></script>
<script type="text/javascript" src="{{public_url("/d_files/assets/js/pcoded.min.js") }}"></script>
<!-- lightbox js -->
<script type="text/javascript" src="{{public_url("/d_files/bower_components/ekko-lightbox/js/ekko-lightbox.js") }}"></script>
<script type="text/javascript" src="{{public_url("/d_files/bower_components/lightbox2/js/lightbox.js") }}"></script>
<script src="{{public_url("/d_files/bower_components/datatables.net-buttons/js/buttons.flash.min.js") }}"></script>
<script src="{{public_url("/d_files/bower_components/datatables.net-buttons/js/buttons.html5.min.js") }}"></script>
<script src="{{public_url("/d_files/bower_components/datatables.net-buttons/js/buttons.print.min.js") }}"></script>
<script type="text/javascript" src="{{public_url("/datatable_js/js/select2.min.js")}}"></script>
<!-- data-table js -->


<script src="{{public_url("/d_files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js") }}"></script>
<script src="{{public_url("/d_files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js") }}"></script>
<script src="{{public_url("/d_files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js") }}"></script>
<!-- custom js -->
<script type="text/javascript" src="{{public_url("/d_files/assets/js/vartical-layout.min.js") }}"></script>

<script type="text/javascript" src="{{public_url("/d_files/assets/pages/dashboard/custom-dashboard.js") }}"></script>
<script type="text/javascript" src="{{public_url("/d_files/assets/js/script.min.js") }}"></script>
<!--<script type="text/javascript" src="{{public_url("/js/buttons/dataTables.buttons.min.js") }}"></script>-->




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
