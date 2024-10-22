 <!-- base:js -->
 <script src="{{asset('vendors/base/vendor.bundle.base.js')}}"></script>
 <!-- endinject -->
 <!-- Plugin js for this page-->
 <!-- End plugin js for this page-->
 <!-- inject:js -->
 <script src="{{asset('js/template.js')}}"></script>
 <!-- endinject -->
 <!-- plugin js for this page -->
 <!-- End plugin js for this page -->
 <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
 <script src="{{asset('vendors/progressbar.js/progressbar.min.js')}}"></script>
     <script src="{{asset('vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js')}}"></script>
     <script src="{{asset('vendors/justgage/raphael-2.1.4.min.js')}}"></script>
     <script src="{{asset('vendors/justgage/justgage.js')}}"></script>
 <script src="{{asset('js/jquery.cookie.js')}}" type="text/javascript"></script>
 <!-- Custom js for this page-->
 <script src="{{asset('js/dashboard.js')}}"></script>
 <script src="{{asset('/js/file-upload.js')}}"></script>
  <script src="{{asset('js/typeahead.js')}}"></script>
  <script src="{{asset('js/select2.js')}}"></script>
  <script src="{{asset('vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
  <script src="{{asset('vendors/select2/select2.min.js')}}"></script>

  <script src="{{asset('vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

<!-- Initialize DataTables -->
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    $(document).ready(function() {
        $('#example2').DataTable();
    });
</script>

  