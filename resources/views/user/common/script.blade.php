  <!--  jQuery 1.7+  {{ public_url('/js/plugins/chart.js') }}-->
  <!--Select 2-->
  <script type="text/javascript" src="{{ public_url('/assets/js/select2.min.js') }}"></script>
  <!-- Html Editor -->
  <script src="{{ public_url('/assets/tinymce/tinymce.min.js') }}"></script>
  <!--  parallax.js-1.4.2  -->
  <script type="text/javascript" src="{{ public_url('/assets/parallax.js-1.4.2/parallax.js') }}"></script>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ public_url('/assets/js/bootstrap.min.js') }}"></script>
  <!-- Include js plugin -->
  <script type="text/javascript" src="{{ public_url('/assets/owlslider/owl-carousel/owl.carousel.js') }}"></script>
  <script type="text/javascript" src="{{ public_url('/assets/js/waypoints.min.js') }}"></script>
  <script type="text/javascript" src="{{ public_url('/assets/counter/jquery.counterup.min.js') }}"></script>
  <!--Site JS-->
  <script src="{{ public_url('/assets/js/webjs.js') }}"></script>
  <script type="text/javascript" src="{{ public_url('/datatable_js/js/select2.min.js') }}"></script>
  <script type="text/javascript" src="{{ public_url('/datatable_js/js/bootstrap-notify.min.js') }}"></script>

  <script>
  $(window).load(function() {

    $("#loadessr").fadeOut();
    $('.select2').select2();
    // notify("Message Show", "success", "bottom", "right")
    //  notify(message,type,from,align)
  })

  function notify(message, type, from, align) {
    // notify(success,'success','bottom','right');
    $.notify({
    // options
      message: message
      }, {
      // settings
      type: type,
      placement: {
      from: from,
      align: align
      }
    });

  }

  </script>
@section('script')
@if (Session::has('message'))
    <script type="text/javascript">
        $(function() {
            notify("{{ Session::get('message') }}", "info", "bottom", "right")
        });

    </script>
@endif
@if ($alert = Session::get('error'))
    <script type="text/javascript">
        $(function() {
            notify("{{ Session::get('error') }}", "danger", "bottom", "right")
        });

    </script>

@endif

@endsection